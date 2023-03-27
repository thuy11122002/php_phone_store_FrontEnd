<?php
function postProduct($data){
    $curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => 'http://localhost:8080/product',
    CURLOPT_USERAGENT => 'API POST',
    CURLOPT_POST => true,
    
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_SSL_VERIFYPEER => false, //Bỏ kiểm SSL
    CURLOPT_HTTPHEADER=> array('Content-Type: application/json')
));
$resp = curl_exec($curl);



curl_close($curl);
}