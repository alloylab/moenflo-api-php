<?php
namespace MoenFlo;

class Auth
{
    private $header;
    private $username;
    private $password;

    public function __construct($header)
    {
        $this->header = $header;
    }

    public function check($username, $password)
    {
        /*
        ** Moen Token is Stored as ENV Var for 24 hours to minimize API Calls
        */
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

        $auth_curl = \MoenFlo\Client::post_auth($auth_url, $this->header, $post_data);

        if ($auth_curl != 'SERVER ERROR') {
            $token = explode('"', explode('{"token":"', $auth_curl)[1])[0];

            $expire = time() + 86400;

            putenv('MOEN_TOKEN=$token');
            putenv('MOEN_TOKEN_EXPIRE=$expire');
        }
    }
}
