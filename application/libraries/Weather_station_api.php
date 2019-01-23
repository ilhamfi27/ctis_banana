<?php
class Weather_station_api {
    public function get_all_sensors(){
        $context = stream_context_create(array(
            'http' => array(
                'method' => 'GET',
                'header' => "Authorization: ".ACCESS_TOKEN."\r\n"
            )
        ));
        $json = file_get_contents("http://45.126.132.55:4444/sensor/", false, $context);
        $data = json_decode($json);
        return call_user_func_array('array_merge',$data);
    }
}
