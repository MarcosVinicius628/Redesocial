<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram</title>
    <link rel="stylesheet" href="/Assets/sass/vender/bootstrap.css">
    <link rel="stylesheet" href="/Assets/sass/vender/bootstrap.min.css">
    <link rel="stylesheet" href="/Assets/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="/Assets/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css">
    <link rel="stylesheet" href="/Assets/sass/main.css">
</head>
<body>

    <div class="post_page">
        <!--***** nav menu start ****** -->
        <div class="nav_menu">
            <div class="fix_top">
                <!-- nav for big->medium screen -->
                <div class="nav">
                    <div class="logo">
                        <a href="./home">
                            <img class="d-block d-lg-none small-logo" src="/Assets/imagem/instagram.png" alt="logo">
                            <img class="d-none d-lg-block" src="/Assets/imagem/logo_menu.png" alt="logo">
                        </a>
                    </div>
                    <div class="menu"> 
                        <ul>
                            <li>
                                <a class="active" href="home">
                                    <img src="/Assets/imagem/accueil.png">
                                    <span class="d-none d-lg-block ">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="./reels">
                                    <img src="/Assets/imagem/video.png">
                                    <span class="d-none d-lg-block ">Reels</span>
                                </a>
                            </li>
                            <li>
                                <a href="./messages">
                                    <img src="/Assets/imagem/send.png">
                                    <span class="d-none d-lg-block ">Messages</span>
                                </a>
                            </li>
                            <li class="notification_icon">
                                <a href="#">
                                    <img src="/Assets/imagem/love.png">
                                    <span class="d-none d-lg-block ">Notifications</span>
                                </a>
                            </li>
                            <li>
                                <a href="./profile">
                                    <img class="circle story" src="/Assets/imagem/profile_img.jpg">
                                    <span class="d-none d-lg-block ">Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="more">
                        <div class="btn-group dropup">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="/Assets/imagem/menu.png">
                                <span class="d-none d-lg-block ">More</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">
                                        <span>Settings</span>
                                        <img src="/Assets/imagem/reglage.png">
                                    </a></li>
                                <li><a class="dropdown-item" href="#">
                                        <span>Your activity</span>
                                        <img src="/Assets/imagem/history.png">
                                    </a></li>
                                <li><a class="dropdown-item" href="#">
                                        <span>Saved</span>
                                        <img src="/Assets/imagem/logo_menu.jpg">
                                    </a></li>
                                <li><a class="dropdown-item" href="#">
                                        <span>Switch apperance</span>
                                        <img src="/Assets/imagem/moon.png">
                                    </a></li>
                                <li><a class="dropdown-item" href="#">
                                        <span>Report a problem</span>
                                        <img src="/Assets/imagem/problem.png">
                                    </a></li>
                                <li><a class="dropdown-item bold_border" href="#">
                                        <span>Switch accounts</span>
                                    </a></li>
                                <li><a class="dropdown-item" href="./login">
                                        <span>Log out</span>
                                    </a></li>
                            </ul>
                        </div>
                        <!--  -->

                    </div>
                </div>
                <!-- nav for small screen  -->
                <div class="nav_sm">
                    <div class="content">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img class="logo" src="/Assets/imagem/logo_menu.png">
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">
                                        <span>Following</span>
                                        <img src="/Assets/imagem/add-friend.png">
                                    </a>
                                </li>
                                <li><a class="dropdown-item" href="#">
                                        <span>Favorites</span>
                                        <img src="/Assets/imagem/star.png">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="left">
                            <div class="notifications notification_icon">
                                <a href="./notification">
                                    <img src="/Assets/imagem/love.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- nav for ex-small screen  -->
                <div class="nav_xm">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="logo" src="/Assets/imagem/logo_menu.png">
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">
                                    <span>Following</span>
                                    <img src="/Assets/imagem/add-friend.png">
                                </a></li>
                            <li><a class="dropdown-item" href="#">
                                    <span>Favorites</span>
                                    <img src="/Assets/imagem/star.png">
                                </a></li>
                        </ul>
                    </div>
                    <div class="left">

                        <img src="/Assets/imagem/send.png">
                        <a href="./notification">
                            <img class="notification_icon" src="/Assets/imagem/love.png">
                        </a>

                    </div>
                </div>
            </div>
            <!-- menu in the botton for smal screen  -->
            <div class="nav_bottom">
                <a href="./home"><img src="/Assets/imagem/accueil.png"></a>
                <a href="./explore"><img src="/Assets/imagem/compass.png"></a>
                <a href="./reels"><img src="/Assets/imagem/video.png"></a>
                <a href="profile"><img class="circle story" src="/Assets/imagem/profile_img.jpg"></a>
            </div>
        </div>
        <!-- search  -->
        <div id="search" class="search_section">
            <h2>Search</h2>
            <form method="post">
                <input type="text" placeholder="Search">
            </form>
            <div class="find">
                <div class="desc">
                    <h4>Recent</h4>
                    <p><a href="#">Clear all</a></p>
                </div>
                <div class="account">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="/Assets/imagem/profile_img.jpg" alt="">
                            </div>
                            <div class="info">
                                <p class="name">Zineb_essoussi</p>
                                <p class="second_name">Zim Ess</p>
                            </div>
                        </div>
                        <div class="clear">
                            <a href="#">X</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search  -->
        <!-- notification -->
        <div id="notification" class="notification_section">
            <h2>Notifications</h2>
            <div class="notifications">
                <div class="notif follow_notif">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="/Assets/imagem/profile_img.jpg" alt="">
                            </div>
                            <div class="info">
                                <p class="name">
                                    Zineb_essoussi
                                    <span class="desc">started following you.</span>
                                    <span class="time">2h</span>
                                </p>

                            </div>
                        </div>
                        <div class="follow_you">
                            <button class="follow_text">Follow</button>
                        </div>
                    </div>
                </div>
                <div class="notif follow_notif">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="/Assets/imagem/profile_img.jpg" alt="">
                            </div>
                            <div class="info">
                                <p class="name">
                                    Zineb_essoussi
                                    <span class="desc">started following you.</span>
                                    <span class="time">2h</span>
                                </p>

                            </div>
                        </div>
                        <div class="follow_you">
                            <button class="follow_text">Follow</button>
                        </div>
                    </div>
                </div>
                <div class="notif story_notif">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="/Assets/imagem/profile_img.jpg" alt="">
                            </div>
                            <div class="info">
                                <div class="info">
                                    <p class="name">
                                        Zineb_essoussi
                                        <span class="desc">liked your story.</span>
                                        <span class="time">2d</span>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="story_like">
                            <img src="/Assets/imagem/orquestra.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="notif follow_notif">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="/Assets/imagem/profile_img.jpg" alt="">
                            </div>
                            <div class="info">
                                <p class="name">
                                    Zineb_essoussi
                                    <span class="desc">started following you.</span>
                                    <span class="time">2h</span>
                                </p>

                            </div>
                        </div>
                        <div class="follow_you">
                            <button class="follow_text">Follow</button>
                        </div>
                    </div>
                </div>
                <div class="notif story_notif">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="/Assets/imagem/profile_img.jpg" alt="">
                            </div>
                            <div class="info">
                                <div class="info">
                                    <p class="name">
                                        Zineb_essoussi
                                        <span class="desc">liked your story.</span>
                                        <span class="time">2d</span>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="story_like">
                            <img src="/Assets/imagem/orquestra.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="notif follow_notif">
                    <div class="cart">
                        <div>
                            <div class="img">
                                <img src="/Assets/imagem/profile_img.jpg" alt="">
                            </div>
                            <div class="info">
                                <p class="name">
                                    Zineb_essoussi
                                    <span class="desc">started following you.</span>
                                    <span class="time">2h</span>
                                </p>

                            </div>
                        </div>
                        <div class="follow_you">
                            <button class="follow_text">Follow</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--***** nav menu end ****** -->
        <div class="music-feed">
            <div class="music-feed__top">
                <div class="music-feed__title">
                    <h2>Feed Musical</h2>
                    <p>Sua rede para descobrir seus novos gostos!</p>
                </div>
                <div class="stories music-stories">
                    <div class="items">
                        <div class="item_s">
                            <img src="/Assets/imagem/bob.png" alt="beatlover">
                            <p>@Bob_Marley</p>
                        </div>
                        <div class="item_s">
                            <img src="/Assets/imagem/beatles.png" alt="djbeats">
                            <p>@beatles</p>
                        </div>
                        <div class="item_s">
                            <img src="/Assets/imagem/mamonas.png" alt="lyricqueen">
                            <p>@Mamonas_Assasinas</p>
                        </div>
                        <div class="item_s">
                            <img src="/Assets/imagem/travis.png" alt="soundwave">
                            <p>@Travis_Scoot</p>
                        </div>
                        <div class="item_s">
                            <img src="/Assets/imagem/legiao.png" alt="vinylvibes">
                            <p>@Legião_Urbana</p>
                        </div>
                        <div class="item_s">
                            <img src="/Assets/imagem/tiao.png" alt="acoustic_ana">
                            <p>@Tiao_Carreira</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="music-feed__posts">
                <article class="feed-post">
                    <div class="post-top">
                        <div class="person">
                            <img src="/Assets/imagem/azul.png" alt="djbeats">
                            <div>
                                <a href="#">@canto_E_danço</a>
                                <span>Compartilhou há 30m</span>
                            </div>
                        </div>
                        <div class="more">
                            <img src="/Assets/imagem/menu.png" alt="Mais">
                        </div>
                    </div>
                    <div class="post-image">
                        <img src="/Assets/imagem/bar.png" alt="@canto_E_danço cantando">
                    </div>
                    <div class="post-actions">
                        <div class="left">
                            <img class="like-btn" src="/Assets/imagem/love.png" alt="Curtir" data-liked="false">
                            <img class="comment-btn" src="/Assets/imagem/bubble-chat.png" alt="Comentário">
                            <img src="/Assets/imagem/send.png" alt="Compartilhar">
                        </div>
                        <img src="/Assets/imagem/save-instagram.png" alt="Salvar">
                    </div>
                    <div class="post-stats">
                        <p class="likes-count"><strong>12.345 curtidas</strong></p>
                        <p><strong>@canto_E_danço</strong> Cantando pela Savassi! 🎤</p>
                        <a class="show-comments" href="#">Ver todos os 48 comentários</a>
                    </div>
                    <div class="post-comments" style="display: none;">
                        <div class="comments-list">
                            <div class="comment">
                                <img src="/Assets/imagem/profile_img.jpg" alt="usuário">
                                <div>
                                    <a href="#">@beatles</a>
                                    <p>Que show incrível! 🎵</p>
                                </div>
                            </div>
                            <div class="comment">
                                <img src="/Assets/imagem/profile_img.jpg" alt="usuário">
                                <div>
                                    <a href="#">@legiao_urbana</a>
                                    <p>Você cantou demais! Adorei cada momento! ❤️</p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-input">
                            <img src="/Assets/imagem/profile_img.jpg" alt="você">
                            <input type="text" placeholder="Adicione um comentário..." class="new-comment-input">
                            <button class="post-comment-btn">Postar</button>
                        </div>
                    </div>
                </article>
                <article class="feed-post feed-post--small">
                    <div class="post-top">
                        <div class="person">
                            <img src="/Assets/imagem/profile_img.jpg" alt="beatlover">
                            <div>
                                <a href="#">@beatlover</a>
                                <span>Compartilhou há 1h</span>
                            </div>
                        </div>
                        <div class="more">
                            <img src="/Assets/imagem/menu.png" alt="Mais">
                        </div>
                    </div>
                    <div class="post-image">
                        <img src="/Assets/imagem/orquestra.jpg" alt="Feed secundário">
                    </div>
                    <div class="post-actions">
                        <div class="left">
                            <img src="/Assets/imagem/love.png" alt="Curtir">
                            <img src="/Assets/imagem/bubble-chat.png" alt="Comentário">
                            <img src="/Assets/imagem/send.png" alt="Compartilhar">
                        </div>
                        <img src="/Assets/imagem/save-instagram.png" alt="Salvar">
                    </div>
                    <div class="post-stats">
                        <p><strong>8.912 curtidas</strong></p>
                        <p><strong>@beatlover</strong> Gravando um novo cover acústico no estúdio.</p>
                        <a href="#">Ver todos os 32 comentários</a>
                    </div>
                </article>
            </div>
        </div>

    <!-- <script src="./sass/vender/bootstrap.bundle.js"></script>
    <script src="./sass/vender/bootstrap.bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="./owlcarousel/jquery.min.js"></script>
    <script src="./owlcarousel/owl.carousel.min.js"></script>
    <script src="./js/carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>
    <script src="./js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Funcionalidade de curtir
            const likeBtns = document.querySelectorAll('.like-btn');
            likeBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const post = this.closest('.feed-post');
                    const likesCount = post.querySelector('.likes-count');
                    const isLiked = this.getAttribute('data-liked') === 'true';
                    
                    if (!isLiked) {
                        this.src = '/Assets/imagem/heart.png';
                        this.classList.add('liked');
                        this.setAttribute('data-liked', 'true');
                        let count = parseInt(likesCount.textContent.match(/\d+\.?\d*/)[0].replace('.', ''));
                        count++;
                        likesCount.innerHTML = `<strong>${count.toLocaleString()} curtidas</strong>`;
                    } else {
                        this.src = '/Assets/imagem/love.png';
                        this.classList.remove('liked');
                        this.setAttribute('data-liked', 'false');
                        let count = parseInt(likesCount.textContent.match(/\d+\.?\d*/)[0].replace('.', ''));
                        count = Math.max(0, count - 1);
                        likesCount.innerHTML = `<strong>${count.toLocaleString()} curtidas</strong>`;
                    }
                });
            });

            // Funcionalidade de mostrar/ocultar comentários
            const showCommentBtns = document.querySelectorAll('.show-comments');
            showCommentBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const post = this.closest('.feed-post');
                    const commentsSection = post.querySelector('.post-comments');
                    
                    if (commentsSection.style.display === 'none') {
                        commentsSection.style.display = 'block';
                        this.textContent = 'Ocultar comentários';
                    } else {
                        commentsSection.style.display = 'none';
                        this.textContent = 'Ver todos os 48 comentários';
                    }
                });
            });

            // Funcionalidade de botão de comentário
            const commentBtns = document.querySelectorAll('.comment-btn');
            commentBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const post = this.closest('.feed-post');
                    const commentsSection = post.querySelector('.post-comments');
                    const input = post.querySelector('.new-comment-input');
                    
                    commentsSection.style.display = 'block';
                    input.focus();
                });
            });

            // Funcionalidade de postar comentário
            const postCommentBtns = document.querySelectorAll('.post-comment-btn');
            postCommentBtns.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    e.preventDefault();
                    const post = this.closest('.feed-post');
                    const input = post.querySelector('.new-comment-input');
                    const commentsList = post.querySelector('.comments-list');
                    const text = input.value.trim();
                    
                    if (text.length > 0) {
                        const newComment = document.createElement('div');
                        newComment.className = 'comment';
                        newComment.innerHTML = `
                            <img src="/Assets/imagem/profile_img.jpg" alt="você">
                            <div>
                                <a href="#">@seu_usuario</a>
                                <p>${text}</p>
                            </div>
                        `;
                        commentsList.appendChild(newComment);
                        input.value = '';
                    }
                });
            });

            // Permitir enter para postar comentário
            const commentInputs = document.querySelectorAll('.new-comment-input');
            commentInputs.forEach(input => {
                input.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        this.closest('.comment-input').querySelector('.post-comment-btn').click();
                    }
                });
            });
        });
    </script>
</body>
@yield ('content')
</html>
