<?php

//get Home URL

// function get_home_url(){
//     $uri_main = parse_url($_SERVER['REQUEST_URI']);
//     echo '<pre>';
//     echo $_SERVER['HTTP_REFERER'];
//     echo'</pre>';
// }

//check if uri is same as string

function check_current_uri($uri){
    $currUri = parse_url($_SERVER['REQUEST_URI'])['path'];
    $value = $uri === $currUri ? "active" : "";
    return $value;
}