<?php

return [
    'production' => false,
    'baseUrl' => 'http://localhost:8000/',
    'collections' => [],
    'site' => 'Teste com Jigsaw',
    'title' => 'Jandelson Oliveira',
    'selected' => function ($page, $section) {
        return str_contains($page->getPath(), $section) ? 'selected' : '';
    },
    'posts' => [
        'extends' => '_layouts.post',
            'section' => 'post',
            'author' => 'A Comunidade',
            'path' => function ($page) {
                return 'artigos/' . str_slug($page->getFilename());
            }
    ]
];
