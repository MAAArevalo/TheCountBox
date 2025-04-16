<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/dashboard' => 'controllers/dashboard.php',
    '/profile' => 'controllers/profile.php',
    '/sale' => 'controllers/sale.php',
    '/cashiers' => 'controllers/sale.php',
    '/products' => 'controllers/product.php',
];

function routeController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }
}

routeController($uri, $routes);