<?php

$routes = [
    '/' => 'controller/index.php',
    '/service' => 'controller/service.php',
    '/about' => 'controller/about.php',
    '/contact' => 'controller/contact.php',
    '/blog' => 'controller/blog.php'

];

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


function abort($code = 404)
{
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    abort();
}
