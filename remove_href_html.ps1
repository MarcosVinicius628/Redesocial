Get-ChildItem -Path .\resources\views -Filter *.blade.php -Recurse | ForEach-Object {
    $path = $_.FullName
    $text = Get-Content -Raw -Path $path
    $new = $text -replace 'href\s*=\s*(["\'])([^"\']+?)\.html\1', 'href=$1$2$1'
    if ($new -ne $text) {
        Set-Content -Path $path -Value $new
        Write-Host "Updated $path"
    }
}
