<?php
class Weather_station_api {
    public function get_all_sensors(){
        $json = file_get_contents("http://45.126.132.55:4444/sensor/", false, $this->header_authorization());
        $data = json_decode($json);
        return $this->array_merger($data);
    }

    public function data_for_today(){
        return $this->weather_information_and_sensors("http://45.126.132.55:4444/dailydata/?limit=1&celcius=True");
    }

    private function weather_information_and_sensors($data){
        // get sensors
        $json_sensor    = file_get_contents("http://45.126.132.55:4444/sensor/" , false, $this->header_authorization());
        $json_weather   = file_get_contents($data                               , false, $this->header_authorization());
        $data_sensor    = $this->array_merger(json_decode($json_sensor));
        $data_weather   = $this->array_merger(json_decode($json_weather));
        $final_data = array();
        foreach($data_weather as $dw){
            foreach ($data_sensor as $ds) {
                if($dw->ID === $ds->ID){
                    $data = array(
                        "ID" => $ds->ID,
                        "humidity" =>  $dw->humidity,
                        "temp"  =>  $dw->tempf,
                        "lokasi" =>  $ds->lokasi,
                        "lat" =>  $ds->lat,
                        "long" =>  $ds->long
                    );
                    array_push($final_data, $data);
                }
            }
        }
        return $final_data;
    }
    
    private function header_authorization(){
        $context = stream_context_create(array(
            'http' => array(
                'method' => 'GET',
                'header' => "Authorization: ".ACCESS_TOKEN."\r\n"
            )
        ));
        return $context;
    }

    private function array_merger($data){
        return call_user_func_array('array_merge',$data);
    }
}
