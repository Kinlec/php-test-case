<?php

$url = $_GET['url'];

if (filter_var($url, FILTER_VALIDATE_URL)) {
    $html = file_get_contents($url);
    $tags = [];

    preg_match_all('/<([a-z]+)[^>]*>/i', $html, $matches);

    foreach ($matches[1] as $tag) {
        if (isset($tags[$tag])) {
            $tags[$tag]++;
        } else {
            $tags[$tag] = 1;
        }
    }

    echo "The number and name of all html tags used on the page $url:<br>";
    foreach ($tags as $tag => $count) {
        echo "$tag - $count<br>";
    }
} else {
    echo 'Invalid URL';
}