<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'siteName' => 'Crisciany Souza',
    'title' => 'Crisciany Souza - Blog de Tecnologia',
    'description' => 'Anotações do meu dia a dia com tecnologia: desenvolvimento, Docker, Linux, PHP e o que mais eu estiver aprendendo.',
    'collections' => [
        'posts' => [
            'path' => 'blog/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
        ],
    ],

    // Helpers
    'formattedDate' => function ($page) {
        $meses = ['jan', 'fev', 'mar', 'abr', 'mai', 'jun', 'jul', 'ago', 'set', 'out', 'nov', 'dez'];
        $data = (int) $page->date;

        return date('d', $data) . ' ' . $meses[date('n', $data) - 1] . ' ' . date('Y', $data);
    },
    'excerpt' => function ($page, $length = 160) {
        if ($page->description) {
            return $page->description;
        }

        return Str::limit(trim(strip_tags($page->getContent())), $length);
    },
    'readingTime' => function ($page) {
        $palavras = str_word_count(strip_tags($page->getContent()));

        return max(1, (int) ceil($palavras / 200)) . ' min de leitura';
    },
    'categorySlug' => function ($page, $category = null) {
        return Str::slug($category ?? $page->category);
    },
];
