<?php

function mc_send_request($url, $body = null, $method = 'GET') {

    $encodedAuth = base64_encode(MC_API_LOGIN.":".MC_API_PASS);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER,array("Expect:" ,"Content-Type:application/json", "Authorization: Basic ".$encodedAuth));
    
    if ($method == 'POST') {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body );
    }    
    
    $result=curl_exec ($ch);
    curl_close ($ch);

    return $result;        
}