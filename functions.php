<?php
function urlIs($url){
    $currentUrl = strtok($_SERVER["REQUEST_URI"], "?");

    return $currentUrl === $url;
}

?>

