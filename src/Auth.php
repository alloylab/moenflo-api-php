<?php

namespace MoenFlo;

class Auth
{
    private $moen_api_v1;
    private $header;
    private $username;
    private $password;

    public function __construct($header)
    {
        $this->moen_api_v1 = 'https://api.meetflo.com/api/v1';
        $this->header = $header;
    }

    public function check($username, $password)
    {
        if (getenv('MOEN_TOKEN') != null && getenv('MOEN_TOKEN_EXPIRE') != null) {
            $expire = getenv('MOEN_TOKEN_EXPIRE');

            if ($expire < time()) {
                $this->initiate($username, $password);
            }
        } else {
            $this->initiate($username, $password);
        }

        return getenv('MOEN_TOKEN');
    }

    private function initiate($username, $password)
    {
        $auth_url = $this->moen_api_v1 . '/users/auth';
        $post_data = array(
            'username' => $username,
            'password' => $password,
        );

        $auth_curl = \MoenFlo\Client::post($auth_url, $this->header, $post_data);

        $response = json_decode($auth_curl);
        $token = $response->token;
        $expire = $response->timeNow + $response->tokenExpiration;

        putenv("MOEN_TOKEN=$token");
        putenv("MOEN_TOKEN_EXPIRE=$expire");
    }
}
