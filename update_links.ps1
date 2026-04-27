$files = Get-ChildItem -Filter *.html
foreach ($f in $files) {
    $content = Get-Content $f.FullName -Raw
    $content = $content.Replace('href="personal-insurance.html#motor"', 'href="motor-insurance.html"')
    $content = $content.Replace('href="personal-insurance.html#gap"', 'href="gap-insurance.html"')
    $content = $content.Replace('href="personal-insurance.html#protect-plus"', 'href="protect-plus-insurance.html"')
    $content = $content.Replace('href="personal-insurance.html#travel"', 'href="travel-insurance.html"')
    $content = $content.Replace('href="personal-insurance.html#home"', 'href="home-insurance.html"')
    $content = $content.Replace('href="personal-insurance.html#malpractice"', 'href="medical-malpractice.html"')
    $content = $content.Replace('href="personal-insurance.html#liability"', 'href="third-party-liability.html"')
    Set-Content -Path $f.FullName -Value $content -NoNewline
}
Write-Host "Done replacing links."
