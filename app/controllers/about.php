<?php

$title = "My Blog::About";

$post = "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Molestiae earum fuga nisi culpa nostrum voluptate ad, voluptas deserunt ipsa, quas corrupti 
excepturi nihil quo aspernatur sapiente, animi corporis sed aliquid.</p>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
Vitae veritatis facilis dolorem autem! Blanditiis, nobis impedit eligendi 
facere obcaecati repellendus! Quia id dolor deleniti tempore maxime voluptas itaque similique tenetur.</p>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
Earum ipsa ipsam veritatis repudiandae corporis similique saepe quas, 
consectetur officiis laborum repellendus ipsum, tempore assumenda? Nemo quae adipisci blanditiis vitae animi!</p>";

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

require_once VIEWS . '/about.tpl.php';