<?php

// Распечатка каких-либо данных в отформатированном виде
function dump($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

// Распечатка каких-либо данных в отформатированном виде и заверение программы
function dd($data){
    dump($data);
    die;
}