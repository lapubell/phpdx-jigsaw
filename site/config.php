<?php

return [
    'baseUrl' => 'http://localhost:3000',
    'production' => false,
    'collections' => [
        'posts' => [
            'path' => 'blog/{date|Y-m-d}/{filename}',
            'sort' => '-date',
            'excerpt' => function ($page, $characters = 50) {
                return substr(strip_tags($page->getContent()), 0, $characters);
            },
        ],
        'clients' => [
            'extends' => '_layouts.client',
            'items' => function () {
                $clients = json_decode(file_get_contents('https://www.openfunctioncomputers.com/public/clients'));

                return collect($clients->agencies)->map(function ($client) {
                    return [
                        'name' => $client->name,
                        'filename' => str_replace(" ", "-", strtolower($client->name)),
                        'description' => $client->description,
                        'logo' => $client->image
                    ];
                });
            },
            'sort' => 'name'
        ]
    ],
    'selected' => function ($page, $section) {
        return str_contains($page->getPath(), $section) ? 'selected' : '';
    }
];
