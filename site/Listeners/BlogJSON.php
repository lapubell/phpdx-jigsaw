<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class BlogJSON
{
    public function handle(Jigsaw $jigsaw)
    {
        $baseUrl = $jigsaw->getConfig('baseUrl');
        $output = [];

        $data = $jigsaw->getCollection('posts');
        foreach ($data as $post) {
            $output[] = [
                'title' => $post->title,
                'author' => $post->author,
                'date' => date("Y-m-d h:i:s", $post->date),
                'content' => (string) $post
            ];
        }

        file_put_contents($jigsaw->getDestinationPath() . '/blog.json', json_encode($output));
    }
}
