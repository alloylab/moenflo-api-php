<?php

namespace MoenFlo;

use \GuzzleHttp\Client as \GuzzleHttp\GuzzleClient;

class Client
{
    public function post($url, $header, $post_data)
    {
        try {
            $client = new \GuzzleHttp\GuzzleClient($header);
            $response = $client->request('POST', $url, ['body' => json_encode($post_data)]);

            if ($response->getStatusCode() < 300) {
                $result = $response->getBody();
            } else {
                throw new \Exception(__FUNCTION__ . ': ' . $response->getStatusCode() . ' - invalid reponse from api');
            }
        } catch (Exception $e) {
            throw new \Exception(__FUNCTION__ . $e);
        }

        return $result;
    }

    public function get($url, $header)
    {
        try {
            $client = new \GuzzleHttp\GuzzleClient($header);
            $response = $client->request('GET', $url);

            if ($response->getStatusCode() < 300) {
                $result = $response->getBody();
            } else {
                throw new \Exception(__FUNCTION__ . ': ' . $response->getStatusCode() . ' - invalid reponse from api');
            }
        } catch (Exception $e) {
            throw new \Exception(__FUNCTION__ . $e);
        }

        return $result;
    }
}
