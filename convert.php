<?php
$files = glob('*.html');

foreach ($files as $file) {
    $content = file_get_contents($file);
    
    // Extract title
    preg_match('/<title>(.*?)<\/title>/is', $content, $titleMatches);
    $title = isset($titleMatches[1]) ? $titleMatches[1] : '';
    
    // Extract description
    preg_match('/<meta name="description" content="(.*?)">/is', $content, $descMatches);
    $desc = isset($descMatches[1]) ? $descMatches[1] : '';
    
    // Extract extra css
    preg_match('/<style>(.*?)<\/style>/is', $content, $cssMatches);
    $extraCss = isset($cssMatches[0]) ? $cssMatches[0] : '';
    
    // Extract body content between </header> and <footer
    $bodyStartPos = strpos($content, '</header>');
    $bodyEndPos = strpos($content, '<footer class="site-footer">');
    
    if ($bodyStartPos !== false && $bodyEndPos !== false) {
        $bodyContent = substr($content, $bodyStartPos + 9, $bodyEndPos - ($bodyStartPos + 9));
        
        // Remove trailing or leading CTA comments if any, just to be clean, but not strictly necessary.
        
        // Replace links inside body content
        $bodyContent = str_replace('.html', '.php', $bodyContent);
        
        // Build new PHP file
        $phpContent = "<?php\n";
        $phpContent .= "\$pageTitle = \"" . addslashes($title) . "\";\n";
        $phpContent .= "\$pageDesc = \"" . addslashes($desc) . "\";\n";
        if ($extraCss) {
            $phpContent .= "\$extraCss = '" . str_replace("'", "\\'", $extraCss) . "';\n";
        }
        $phpContent .= "include 'includes/header.php';\n";
        $phpContent .= "?>\n";
        $phpContent .= $bodyContent;
        $phpContent .= "<?php include 'includes/footer.php'; ?>\n";
        
        $newFilename = str_replace('.html', '.php', $file);
        file_put_contents($newFilename, $phpContent);
        unlink($file);
        echo "Converted $file to $newFilename\n";
    } else {
        echo "Failed to extract body for $file\n";
    }
}
?>
