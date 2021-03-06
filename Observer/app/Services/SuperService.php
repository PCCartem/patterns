<?php
namespace App\Services;

use App\Interfaces\Service;
use App\Interfaces\Observer;

class SuperService implements Service {

    protected $observers = [];

    protected static $instance = null;

    private function __clone(){}

    public function __construct(){}

    static public function getInstance()
    {
        if(self::$instance == NULL)
        {
            self::$instance = new SuperService();
        }
        return self::$instance;
    }

    public function registerObserver($observer) {
        $this->observers[] = $observer;
    }

    public function notifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->notify();
        }
    }

    public function getPostsObservers()
    {
        $posts = [];
        foreach ($this->observers as $observer) {
            $obsPosts = $observer->getPosts();
            foreach ($obsPosts as $obsPost) {
                $posts[] = $obsPost;
            }
        }
        usort($posts, function ($a, $b) {
            if ((int)$a['timestamp'] == (int)$b['timestamp']) {
                return 0;
            }
            return ((int)$a['timestamp'] > (int)$b['timestamp']) ? -1 : 1;
        });
        return $posts;
    }
}