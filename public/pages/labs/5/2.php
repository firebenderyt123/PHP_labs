<?php

function parse_tags($html): array
{
    preg_match_all('/<\s*([a-z0-9]+)\s*[^>]*>/i', $html, $matches);
    return $matches[1];
}

$html = '<div><p>This is a <b>bold</b> paragraph</p><a href="#">Link</a></div>';
?>

<pre><?php print_r(parse_tags($html)); ?></pre>