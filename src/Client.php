<?php

use GuzzleHttp\Client;

namespace MoenFlo;

class Client
{
    public function post_auth($url, $header, $post_data)
    {
        try {
            $client = new \GuzzleHttp\Client($header);
            $result = $client->request('POST', $url, ['body' => http_build_query($post_data)]);
        } catch (Exception $e) {
            throw new Exception(__FUNCTION__ . $e);
        }

        return $result;
    }

    public function curl_api_get($url, $header)
    {
        try {
            $client = new \GuzzleHttp\Client($header);
            $result = $client->request('GET', $url);
        } catch (Exception $e) {
            throw new Exception(__FUNCTION__ . $e);
        }

        return $result;
    }

    public function curl_api_post($url, $header, $post_data)
    {
        try {
            $client = new \GuzzleHttp\Client($header);
            $result = $client->request('POST', $url, ['body' => json_encode($post_data)]);
        } catch (Exception $e) {
            throw new Exception(__FUNCTION__ . $e);
        }

        return $result;
    }
}
