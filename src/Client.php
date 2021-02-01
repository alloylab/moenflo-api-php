<?php

use GuzzleHttp\Client;

namespace MoenFlo;

class Client
{
    public function post($url, $header, $post_data)
    {
        try {
            $client = new \GuzzleHttp\Client($header);
            $response = $client->request('POST', $url, ['body' => json_encode($post_data)]);

            if ($response->getStatusCode() == 200) {
                $result = $response->getBody();
            } else {
                throw new Exception(__FUNCTION__ . ' - invalid reponse from api');
            }
        } catch (Exception $e) {
            throw new Exception(__FUNCTION__ . $e);
        }

        return $result;
    }

    public function get($url, $header)
    {
        try {
            $client = new \GuzzleHttp\Client($header);
            $result = $client->request('GET', $url);
        } catch (Exception $e) {
            throw new Exception(__FUNCTION__ . $e);
        }

        return $result;
    }
}
