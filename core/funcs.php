<?php

// Распечатка каких-либо данных в отформатированном виде
function dump($data) 
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

// Распечатка каких-либо данных в отформатированном виде и заверение программы
function dd($data)
{
    dump($data);
    die;
}

function abort($code = '404') 
{
    http_response_code(404); // отдача кода в консоль браузера
    require_once VIEWS . "/errors/{$code}.tpl.php";
    die;
}