<?php 

define('ROOT', dirname(__DIR__)); // Корневая папка "C:\xampp\htdocs\training_diary"
define('PUBLIK', ROOT . "/public");
define('CORE', ROOT . "/core");
define('APP', ROOT . "/app");
define('CONTROLLERS', APP . "/controllers");
define('VIEWS', APP . "/views");
define('PATH', "http://localhost/training_diary");

require_once CORE . "/funcs.php";

$uri = trim(parse_url($_SERVER['REQUEST_URI'])['path'], '/'); // при помощи parse_url избавляемся от get параметров

if ($uri === 'training_diary') {
    require_once CONTROLLERS . "/index.php";
} elseif ($uri === 'training_diary/about') {
    require_once CONTROLLERS . "/about.php";
} elseif ($uri === 'training_diary/contact') {
    require_once CONTROLLERS . "/contact.php";
} elseif ($uri === 'training_diary/post') {
    dd('SHOW POST');
} else {
    abort();
}
