<?php

namespace App\Api;
use App\Services\SuperService;
use App\Observers\InstagramObserver;
use App\Observers\VkObserver;

class SuperApi extends AbstractApi{

    public $config;

    public function __construct($request, $config) {
        header('Access-Control-Allow-Origin: *');
        parent::__construct($request);
        $this->config = $config;

        // Abstracted out for example
//        $APIKey = new Models\APIKey();
//        $User = new Models\User();

//        if (!array_key_exists('apiKey', $this->request)) {
//            throw new Exception('No API Key provided');
//        } else if (!$APIKey->verifyKey($this->request['apiKey'], $origin)) {
//            throw new Exception('Invalid API Key');
//        } else if (array_key_exists('token', $this->request) &&
//            !$User->get('token', $this->request['token'])) {
//
//            throw new Exception('Invalid User Token');
//        }

//        $this->User = $User;

    }

    /**
     * //TODO: М подумаю как все таки контретные методы реализовать
     */
    protected function posts() {
        $service = SuperService::getInstance();
        $service->registerObserver(new InstagramObserver( $this->config));
        $service->registerObserver(new VkObserver( $this->config));
        $posts = $service->getPostsObservers();

        return $posts;
    }

    protected function example() {
        if ($this->method == 'GET') {
            return "Your name is " . $this->User->name;
        } else {
            return "Only accepts GET requests";
        }
    }
}