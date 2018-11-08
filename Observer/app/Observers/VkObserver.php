<?php

namespace App\Observers;

use App\Interfaces\Oserver;

class VkObserver implements Oserver
{

    protected $config;

    public function __construct($config)
    {
        $this->config = $config['vk'];
    }

    public function notify()
    {
        // TODO: Implement notify() method.
    }

    public function getPosts($count = 5)
    {
        $posts = [];
        $recent = json_decode(file_get_contents('https://api.vk.com/method/wall.get?offset=1&filter=owner&count=' . $count . '&access_token=' . $this->config['token'] . '&v=5.87'), true);
        foreach ($recent["response"]["items"] as $item) {
            $photo = array_pop($item['attachments'][0]['photo']['sizes'])['url'];
            $posts[] = [
                'type' => 'ВКонтакте',
                'id' => $item['id'],
                'text' => $item['text'],
                'photo' => $photo,
                'timestamp' => $item['date']
            ];
        }
        return $posts;
    }
}