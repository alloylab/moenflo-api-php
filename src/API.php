<?php
namespace MoenFlo;

class API
{
    private $username;
    private $password;
    private $moen_user_id;

    private $moen_api_v1;
    private $moen_api_v2;
    private $moen_user_agent;

    private $moen_token;

    public function __construct($username, $password, $moen_user_id)
    {
        $this->moen_api_v1 = 'https://api.meetflo.com/api/v1';
        $this->moen_api_v2 = 'https://api-gw.meetflo.com/api/v2';
        $this->moen_user_agent = 'Flo-iOS-1.0';

        $this->moen_user_id = $moen_user_id;

        $header = $this->moen_auth_header();
        $auth = new \MoenFlo\Auth($header);
        $this->moen_token = $auth->check($username, $password);
    }

    public function set_device_settings($device_id, $device_settings = array())
    {
        if (empty($device_settings)) {
            $device_settings = \MoenFlo\Device_Defaults::settings($device_id);
        }

        // Device Settings on Device
        $url = $this->moen_api_v2 . '/devices/' . $device_id;
        $header = $this->moen_header();

        \MoenFlo\Client::post($url, $header, $device_settings['device']);


        // Device Settings on User
        $url = $this->moen_api_v2 . '/users/' . $this->moen_user_id . '/alarmSettings';
        $header = $this->moen_header();

        \MoenFlo\Client::post($url, $header, $device_settings['user']);
    }

    public function alert_override($device_id)
    {
        $post_data = array(
            'alarm_suppress_until_event_end' => true
        );

        $url = $this->moen_api_v2 . '/devices/' . $device_id . '/fwProperties';
        $header = $this->moen_header();

        $results = \MoenFlo\Client::post($url, $header, $post_data);

        return $results;
    }

    public function valve_unit_status($device_id, $status)
    {
        if ($status == 'open' || $status == 'closed') {
            $post_data = array(
                'valve' => array(
                    'target' => $status
                ),
            );

            $url = $this->moen_api_v2 . '/devices/' . $device_id;
            $header = $this->moen_header();

            $results = \MoenFlo\Client::post($url, $header, $post_data);

            return $results;
        }
    }

    public function device_consumption($location_id, $mac_address, $start_date, $end_date)
    {
        //Billing Dates
        $startDate_moen = date('Y-m-d', strtotime($start_date)) . 'T00:00:00.000';
        $endDate_moen = date('Y-m-d', strtotime($end_date)) . 'T23:59:59.999';

        $url = $this->moen_api_v2 . '/water/consumption?startDate=' . $startDate_moen . '&endDate=' . $endDate_moen . '&locationId=' . $location_id . '&macAddress=' . $mac_address .'&interval=1d';
        $header = $this->moen_header();

        $results = \MoenFlo\Client::get($url, $header);

        return $results;
    }

    private function moen_header()
    {
        $moen_header = array(
            'headers' => array(
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => $this->moen_token,
                'User-Agent' => $this->moen_user_agent,
            ),
        );

        return $moen_header;
    }

    private function moen_auth_header()
    {
        $moen_header = array(
            'headers' => array(
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'User-Agent' => $this->moen_user_agent,
            ),
        );

        return $moen_header;
    }

    //MOEN API Calls, Need To add
    //$locations = curl_header('https://api-gw.meetflo.com/api/v2/users/' . $user_id . '?expand=locations', $moen_header);
    //$location_detail = curl_header('https://api-gw.meetflo.com/api/v2/locations/' . $location_id . '?expand=devices', $moen_header);
    //$device_detail = curl_header('https://api-gw.meetflo.com/api/v2/devices/' . $device_id, $moen_header);
}
