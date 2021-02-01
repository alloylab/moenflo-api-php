<?php
namespace MoenFlo;

class Device_Defaults
{
    public function settings($device_id)
    {
        $settings = array(
            'device' => array(
                'floSense' => array(
                    'userEnabled' => true,
                    'shutoffLevel' => 3,  // 1 to 5 w/ 5 being less alerts
                ),
                'irrigationType' => 'none',
                'prvInstallation' => 'none',
                'healthTest' => array(
                    'config' => array(
                        'enabled' => true,
                        'timesPerDay' => 1,
                        'start' => '03:00',
                        'end' => '04:00',
                    ),
                ),
            ),
            'user' => array(
                'items' => array(
                    0 => array(
                        'deviceId' => $device_id,
                        'smallDripSensitivity' => 2, // 1 to 4 w/ 1 being least sensitive
                        'settings' => array(
                            //Home - Informative
                            0 => array(
                                'systemMode' => 'home',
                                'callEnabled' => true,
                                'smsEnabled' => false,
                                'alarmId' => 45,
                                'emailEnabled' => true,
                                'pushEnabled' => true,
                            ),
                            1 => array(
                                'callEnabled' => true,
                                'systemMode' => 'home',
                                'emailEnabled' => true,
                                'smsEnabled' => false,
                                'pushEnabled' => true,
                                'alarmId' => 46,
                            ),
                            2 => array(
                                'pushEnabled' => true,
                                'callEnabled' => true,
                                'emailEnabled' => true,
                                'systemMode' => 'home',
                                'alarmId' => 34,
                                'smsEnabled' => false,
                            ),
                            //Home - Warning
                            3 => array(
                                'callEnabled' => true,
                                'systemMode' => 'home',
                                'smsEnabled' => false,
                                'alarmId' => 23,
                                'emailEnabled' => true,
                                'pushEnabled' => true,
                            ),
                            4 => array(
                                'callEnabled' => true,
                                'systemMode' => 'home',
                                'emailEnabled' => true,
                                'alarmId' => 33,
                                'smsEnabled' => false,
                                'pushEnabled' => true,
                            ),
                            5 => array(
                                'smsEnabled' => false,
                                'systemMode' => 'home',
                                'emailEnabled' => true,
                                'pushEnabled' => true,
                                'alarmId' => 50,
                                'callEnabled' => true,
                            ),
                            6 => array(
                                'pushEnabled' => true,
                                'alarmId' => 13,
                                'callEnabled' => true,
                                'smsEnabled' => false,
                                'systemMode' => 'home',
                                'emailEnabled' => true,
                            ),
                            7 => array(
                                'emailEnabled' => true,
                                'callEnabled' => true,
                                'alarmId' => 22,
                                'smsEnabled' => false,
                                'pushEnabled' => true,
                                'systemMode' => 'home',
                            ),
                            8 => array(
                                'emailEnabled' => true,
                                'smsEnabled' => false,
                                'pushEnabled' => true,
                                'alarmId' => 16,
                                'callEnabled' => true,
                                'systemMode' => 'home',
                            ),
                            9 => array(
                                'systemMode' => 'home',
                                'emailEnabled' => true,
                                'alarmId' => 15,
                                'callEnabled' => true,
                                'pushEnabled' => true,
                                'smsEnabled' => false,
                            ),
                            10 => array(
                                'alarmId' => 57,
                                'systemMode' => 'home',
                                'callEnabled' => true,
                                'smsEnabled' => false,
                                'pushEnabled' => true,
                                'emailEnabled' => true,
                            ),
                            11 => array(
                                'callEnabled' => true,
                                'systemMode' => 'home',
                                'smsEnabled' => false,
                                'emailEnabled' => true,
                                'alarmId' => 28,
                                'pushEnabled' => true,
                            ),
                            12 => array(
                                'emailEnabled' => true,
                                'alarmId' => 18,
                                'pushEnabled' => true,
                                'callEnabled' => true,
                                'smsEnabled' => false,
                                'systemMode' => 'home',
                            ),
                            //Home - Critical
                            13 => array(
                                'pushEnabled' => true,
                                'smsEnabled' => true,
                                'callEnabled' => false,
                                'alarmId' => 26,
                                'systemMode' => 'home',
                                'emailEnabled' => false,
                            ),
                            14 => array(
                                'callEnabled' => false,
                                'systemMode' => 'home',
                                'emailEnabled' => false,
                                'smsEnabled' => true,
                                'pushEnabled' => true,
                                'alarmId' => 10,
                            ),
                            15 => array(
                                'smsEnabled' => true,
                                'systemMode' => 'home',
                                'pushEnabled' => true,
                                'callEnabled' => false,
                                'alarmId' => 11,
                                'emailEnabled' => false,
                            ),
                            16 => array(
                                'alarmId' => 73,
                                'pushEnabled' => true,
                                'callEnabled' => false,
                                'smsEnabled' => true,
                                'emailEnabled' => false,
                                'systemMode' => 'home',
                            ),
                            17 => array(
                                'callEnabled' => false,
                                'smsEnabled' => true,
                                'pushEnabled' => true,
                                'systemMode' => 'home',
                                'alarmId' => 72,
                                'emailEnabled' => false,
                            ),
                            18 => array(
                                'pushEnabled' => true,
                                'emailEnabled' => false,
                                'alarmId' => 71,
                                'callEnabled' => false,
                                'systemMode' => 'home',
                                'smsEnabled' => true,
                            ),
                            19 => array(
                                'systemMode' => 'home',
                                'smsEnabled' => true,
                                'alarmId' => 70,
                                'emailEnabled' => false,
                                'pushEnabled' => true,
                                'callEnabled' => false,
                            ),
                            20 => array(
                                'systemMode' => 'home',
                                'alarmId' => 74,
                                'pushEnabled' => true,
                                'callEnabled' => false,
                                'smsEnabled' => true,
                                'emailEnabled' => false,
                                ),
                            21 => array(
                                'emailEnabled' => false,
                                'smsEnabled' => true,
                                'alarmId' => 53,
                                'pushEnabled' => true,
                                'callEnabled' => true,
                                'systemMode' => 'home',
                            ),
                            22 => array(
                                'smsEnabled' => true,
                                'alarmId' => 51,
                                'systemMode' => 'home',
                                'emailEnabled' => false,
                                'pushEnabled' => true,
                                'callEnabled' => true,
                            ),
                            23 => array(
                                'callEnabled' => true,
                                'alarmId' => 52,
                                'emailEnabled' => false,
                                'pushEnabled' => true,
                                'smsEnabled' => true,
                                'systemMode' => 'home',
                            ),
                            24 => array(
                                'smsEnabled' => true,
                                'systemMode' => 'home',
                                'callEnabled' => true,
                                'emailEnabled' => false,
                                'pushEnabled' => true,
                                'alarmId' => 83,
                            ),
                            25 => array(
                                'systemMode' => 'home',
                                'smsEnabled' => true,
                                'emailEnabled' => false,
                                'pushEnabled' => true,
                                'alarmId' => 82,
                                'callEnabled' => true,
                            ),
                            26 => array(
                                'systemMode' => 'home',
                                'callEnabled' => true,
                                'pushEnabled' => true,
                                'alarmId' => 81,
                                'emailEnabled' => false,
                                'smsEnabled' => true,
                            ),
                            27 => array(
                                'alarmId' => 80,
                                'emailEnabled' => false,
                                'smsEnabled' => true,
                                'callEnabled' => true,
                                'systemMode' => 'home',
                                'pushEnabled' => true,
                            ),
                            28 => array(
                                'systemMode' => 'home',
                                'emailEnabled' => false,
                                'pushEnabled' => true,
                                'smsEnabled' => true,
                                'alarmId' => 84,
                                'callEnabled' => true,
                            ),
                            //Away - Informative
                            29 => array(
                                'smsEnabled' => false,
                                'callEnabled' => true,
                                'pushEnabled' => true,
                                'alarmId' => 45,
                                'systemMode' => 'away',
                                'emailEnabled' => true,
                            ),
                            30 => array(
                                'alarmId' => 46,
                                'smsEnabled' => false,
                                'emailEnabled' => true,
                                'callEnabled' => true,
                                'systemMode' => 'away',
                                'pushEnabled' => true,
                            ),
                            31 => array(
                                'emailEnabled' => true,
                                'systemMode' => 'away',
                                'pushEnabled' => true,
                                'alarmId' => 34,
                                'callEnabled' => true,
                                'smsEnabled' => false,
                            ),
                            //Away - Warning
                            32 => array(
                                'smsEnabled' => false,
                                'systemMode' => 'away',
                                'emailEnabled' => true,
                                'pushEnabled' => true,
                                'alarmId' => 23,
                                'callEnabled' => true,
                            ),
                            33 => array(
                                'pushEnabled' => true,
                                'emailEnabled' => true,
                                'callEnabled' => true,
                                'alarmId' => 33,
                                'smsEnabled' => false,
                                'systemMode' => 'away',
                            ),
                            34 => array(
                                'systemMode' => 'away',
                                'callEnabled' => true,
                                'alarmId' => 50,
                                'smsEnabled' => false,
                                'emailEnabled' => true,
                                'pushEnabled' => true,
                            ),
                            35 => array(
                                'systemMode' => 'away',
                                'pushEnabled' => true,
                                'emailEnabled' => true,
                                'smsEnabled' => false,
                                'alarmId' => 13,
                                'callEnabled' => true,
                            ),
                            36 => array(
                                'smsEnabled' => false,
                                'pushEnabled' => true,
                                'alarmId' => 22,
                                'systemMode' => 'away',
                                'emailEnabled' => true,
                                'callEnabled' => true,
                            ),
                            37 => array(
                                'emailEnabled' => true,
                                'alarmId' => 16,
                                'callEnabled' => true,
                                'systemMode' => 'away',
                                'pushEnabled' => true,
                                'smsEnabled' => false,
                            ),
                            38 => array(
                                'smsEnabled' => false,
                                'systemMode' => 'away',
                                'emailEnabled' => true,
                                'pushEnabled' => true,
                                'alarmId' => 15,
                                'callEnabled' => true,
                            ),
                            39 => array(
                                'pushEnabled' => true,
                                'smsEnabled' => false,
                                'systemMode' => 'away',
                                'emailEnabled' => true,
                                'callEnabled' => true,
                                'alarmId' => 57,
                            ),
                            40 => array(
                                'callEnabled' => true,
                                'systemMode' => 'away',
                                'alarmId' => 28,
                                'emailEnabled' => true,
                                'pushEnabled' => true,
                                'smsEnabled' => false,
                            ),
                            41 => array(
                                'alarmId' => 18,
                                'pushEnabled' => true,
                                'emailEnabled' => true,
                                'callEnabled' => true,
                                'systemMode' => 'away',
                                'smsEnabled' => false,
                            ),
                            //Away - Critical
                            42 => array(
                                'alarmId' => 26,
                                'smsEnabled' => true,
                                'emailEnabled' => false,
                                'systemMode' => 'away',
                                'pushEnabled' => true,
                                'callEnabled' => false,
                            ),
                            43 => array(
                                'callEnabled' => false,
                                'smsEnabled' => true,
                                'pushEnabled' => true,
                                'emailEnabled' => false,
                                'alarmId' => 10,
                                'systemMode' => 'away',
                            ),
                            44 => array(
                                'systemMode' => 'away',
                                'smsEnabled' => true,
                                'emailEnabled' => false,
                                'alarmId' => 11,
                                'pushEnabled' => true,
                                'callEnabled' => false,
                            ),
                            45 => array(
                                'alarmId' => 73,
                                'emailEnabled' => false,
                                'smsEnabled' => true,
                                'pushEnabled' => true,
                                'callEnabled' => false,
                                'systemMode' => 'away',
                            ),
                            46 => array(
                                'callEnabled' => false,
                                'smsEnabled' => true,
                                'emailEnabled' => false,
                                'alarmId' => 72,
                                'systemMode' => 'away',
                                'pushEnabled' => true,
                            ),
                            47 => array(
                                'pushEnabled' => true,
                                'emailEnabled' => false,
                                'callEnabled' => false,
                                'systemMode' => 'away',
                                'alarmId' => 71,
                                'smsEnabled' => true,
                            ),
                            48 => array(
                                'alarmId' => 70,
                                'emailEnabled' => false,
                                'smsEnabled' => true,
                                'callEnabled' => false,
                                'pushEnabled' => true,
                                'systemMode' => 'away',
                            ),
                            49 => array(
                                'emailEnabled' => false,
                                'pushEnabled' => true,
                                'alarmId' => 74,
                                'systemMode' => 'away',
                                'smsEnabled' => true,
                                'callEnabled' => false,
                            ),
                            50 => array(
                                'alarmId' => 55,
                                'smsEnabled' => true,
                                'emailEnabled' => false,
                                'systemMode' => 'away',
                                'pushEnabled' => true,
                                'callEnabled' => false,
                            ),
                        ),
                    ),
                ),
            ),
        );

        return $settings;
    }
}