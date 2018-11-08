<?php
namespace App\Observers;

use App\Interfaces\Oserver;

class InstagramObserver implements Oserver {


    public function __construct($config)
    {

        $this->config = $config['instagram'];
    }

    public function notify()
    {
        // TODO: Implement notify() method.
    }

    public function getPosts($count = 5)
    {
        $posts = [];
        $recent = json_decode((file_get_contents('https://api.instagram.com/v1/users/5357757896/media/recent?access_token='.$this->config['token'].'&count='.$count)), true);
        foreach ($recent['data'] as $item) {
            $photo = $item['images']['standard_resolution']['url'];
            $posts[] = [
                'type' => 'Инстаграм',
                'id' => $item['id'],
                'text' => $item['caption']['text'],
                'photo' => $photo,
                'timestamp' => $item['created_time']
            ];
        }

        return $posts;
    }
    public function getTokenFromCode()
    {
        $url = "https://api.instagram.com/oauth/access_token";
        $access_token_parameters = array(
            'client_id'                =>     $this->config['key'],
            'client_secret'            =>     $this->config['secret'],
            'grant_type'               =>     'authorization_code',
            'redirect_uri'             =>     $this->config['callback'],
            'code'                     =>     $this->config['code']
        );
        $curl = curl_init($url);    // we init curl by passing the url
        curl_setopt($curl,CURLOPT_POST,true);   // to send a POST request
        curl_setopt($curl,CURLOPT_POSTFIELDS,$access_token_parameters);   // indicate the data to send
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);   // to return the transfer as a string of the return value of curl_exec() instead of outputting it out directly.
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);   // to stop cURL from verifying the peer's certificate.
        $result = curl_exec($curl);   // to perform the curl session
        curl_close($curl);   // to close the curl session
        return $result;
    }
}