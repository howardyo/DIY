<?php
    function get_Templates($data) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => DUDA_ENDPOINT.'/sites/multiscreen/templates',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Authorization: Basic '.DUDA_API_KEY,
            'Content-Type: application/json',
            'Cookie: JSESSIONID=5A884B2746B0FEABB17FA89D5AFB55FA-n1'
        ),
        ));

        $responce = curl_exec($curl);
        //$responce = json_decode($resp);

        curl_close($curl);
        echo $responce;
    }
?>