<?php
function getUserList(){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => true, // curl option 
        CURLOPT_URL => 'http://localhost:8080/user',
        CURLOPT_USERAGENT => 'test cURL Request',
        CURLOPT_SSL_VERIFYPEER => false
    ));
    
    $resp = curl_exec($curl);
    //$result = json_decode(curl_exec($curl));
    //Kết quả trả tìm kiếm trả về dạng JSON
    $results = json_decode($resp);
    
    
    
    curl_close($curl);
    
    return $results;
    
}

