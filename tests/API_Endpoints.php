<?php

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

require_once('vendor/autoload.php');
require_once('../src/API.php');
require_once('../src/Auth.php');
require_once('../src/Client.php');
require_once('../src/Device_Defaults.php');

try {
    $username = getenv('username');
    $password = getenv('password');
    $moen_user_id = getenv('moen_user_id');
    $device_id = getenv('moen_device_id');
    $location_id = getenv('moen_location_id');
    $mac_address = getenv('moen_mac_address');

    $Moen_API = new \MoenFlo\API($username, $password, $moen_user_id);

    $Moen_API->set_device_settings($device_id);
    $Moen_API->override_alert($device_id);
    $Moen_API->set_valve_status($device_id, 'open');
    $Moen_API->device_consumption($location_id, $mac_address, '12/1/2020', '12/31/2020');
} catch (Exception $e) {
    throw new Exception($e);
}
