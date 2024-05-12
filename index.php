<?php

require_once 'funcs.php';

$title = "My Blog::Home";

$posts = [
    1 => [
        'title' => 'First title in my blog',
        'desc' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
        'slug' => 'title-1',
    ],
    2 => [
        'title' => 'Second title in my blog',
        'desc' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
        'slug' => 'title-2',
    ],
    3 => [
        'title' => 'Third title in my blog',
        'desc' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
        'slug' => 'title-3',
    ],
    4 => [
        'title' => 'Forth title in my blog',
        'desc' => "Some quick example text to build on the card title and make up the bulk of the card's content.",
        'slug' => 'title-4',
    ]
    ];

$recent_posts = [
    1 => [
        'title' => 'An item',
        'slug' => lcfirst(str_replace(' ', '-', 'An item')),
    ],
    2 => [
        'title' => 'A second item',
        'slug' => lcfirst(str_replace(' ', '-', 'A second item')),
    ],
    3 => [
        'title' => 'A third item',
        'slug' => lcfirst(str_replace(' ', '-', 'A third item')),
    ],
    4 => [
        'title' => 'A fourth item',
        'slug' => lcfirst(str_replace(' ', '-', 'A fourth item')),
    ],
    5 => [
        'title' => 'And a fifth one',
        'slug' => lcfirst(str_replace(' ', '-', 'And a fifth one')),
    ],
];

require_once 'app/views/index.tpl.php';