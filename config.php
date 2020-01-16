<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:8000/',
    'site' => 'Teste com Jigsaw',
    'title' => 'Jandelson Oliveira',
    'selected' => function ($page, $section) {
        return str_contains($page->getPath(), $section) ? 'selected' : '';
    },
    'collections' => [
        'posts' => [
            'path' => 'blog/{date|Y-m-d}/{filename}',
            'author' => 'Jandelson',
        ],
    ]
];
