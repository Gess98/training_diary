<?php 

define('ROOT', dirname(__DIR__)); // Корневая папка "C:\xampp\htdocs\training_diary"
define('PUBLIK', ROOT . "/public");
define('CORE', ROOT . "/core");
define('APP', ROOT . "/app");
define('CONTROLLERS', APP . "/controllers");
define('VIEWS', APP . "/views");
define('PATH', "http://localhost/training_diary/");

require_once CORE . "/funcs.php";

require_once CONTROLLERS . "/index.php";