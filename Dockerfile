# 1. Define a imagem base do PHP 8.3 com Apache
FROM php:8.3-apache

# 2. Executa como root para instalar as dependências do sistema
USER root

# 3. Atualiza o apt e instala as bibliotecas necessárias para o Laravel/PHP
RUN apt-get clean && apt-get update --fix-missing && apt-get install -y --no-install-recommends \
    git \
    curl \
    zip \
    unzip \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql zip \
    && rm -rf /var/lib/apt/lists/*

# 4. Copia o Composer da imagem oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 5. Define a pasta principal da aplicação
WORKDIR /var/www/html

# [MELHORIA] 6. Copia APENAS os arquivos do Composer primeiro
# Isso faz o Docker salvar o cache das dependências do fornecedor (vendor)
COPY composer.json composer.lock ./

# [MELHORIA] 7. Instala as dependências (sem os arquivos de código ainda)
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist

# 8. Agora sim, copia o restante dos arquivos do projeto
COPY . .

# [MELHORIA] 9. Gera o autoloader final otimizado com o código copiado
RUN composer dump-autoload --no-dev --optimize

# 10. Prepara o ambiente básico (Se não houver .env, usa o do exemplo)
# NOTA: Removido o key:generate daqui. Defina a APP_KEY no painel da sua hospedagem!
RUN cp -n .env.example .env || true

# 11. Define permissões necessárias para o Laravel funcionar
RUN chown -R www-data:www-data /var/www/html/storage \
    && chown -R www-data:www-data /var/www/html/bootstrap/cache

# 12. Ativa o módulo rewrite do Apache
RUN a2enmod rewrite

# 13. Copia a configuração personalizada do Apache
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# 14. Libera a porta 80
EXPOSE 80