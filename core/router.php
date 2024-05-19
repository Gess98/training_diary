<?php

require_once CONFIG . "/routes.php"; // подключение маршрутов

$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/'); // при помощи parse_url избавляемся от get параметров

if (array_key_exists($uri, $routes)) {
    if (file_exists(CONTROLLERS . "/{$routes[$uri]}")) {
        require_once CONTROLLERS . "/{$routes[$uri]}";
    } else {
        abort();
    }   
} else {
    abort();
}