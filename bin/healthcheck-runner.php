<?php 

$consul_address = 'http://consul.service.consul:8500';
$service_id = 'nodestatus_healthcheck';

while (true) {
    try {
        $is_up = !file_exists(__DIR__.'/down');



        if ($is_up) {
            getData($consul_address."/v1/agent/check/pass/".$service_id);
        } else {
            $note = "The down file was missing";
            getData($consul_address."/v1/agent/check/fail/".$service_id.'?note='.urlencode($note));
        }
    } catch (Exception $e) {
        echo "ERROR: ".$e->getMessage()."\n";
        sleep(5);
    }

    sleep(15);
}


function putData($url, $value) {
    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $value);
    // curl_setopt($curl, CURLOPT_VERBOSE, true);


    // Make the REST call, returning the result
    echo "PUT ".$url." ".$value."\n";
    $response = curl_exec($curl);
    if ($response === false) { throw new Exception("Connection Failure"); }

}


function getData($url) {
    $curl = curl_init($url);

    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


    // Make the REST call, returning the result
    echo "GET ".$url." ".$value."\n";
    $response = curl_exec($curl);
    if ($response === false) { throw new Exception("Connection Failure"); }
}