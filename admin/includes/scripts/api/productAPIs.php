<?php
// get product API
function getProductList(){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => true, // curl option 
        CURLOPT_URL => 'http://localhost:8080/product',
        CURLOPT_USERAGENT => 'get cURL Request',
        CURLOPT_SSL_VERIFYPEER => false
    ));
    
    $resp = curl_exec($curl);
    //$result = json_decode(curl_exec($curl));
    //Kết quả trả tìm kiếm trả về dạng JSON
    $results = json_decode($resp);
    
    
    
    curl_close($curl);
    
    return $results;
    
}
// post product API
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
// update product api
function putProduct($data,$url){
    $curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $url,
    CURLOPT_USERAGENT => 'API POST',
    CURLOPT_POST => true,
    
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_SSL_VERIFYPEER => false, //Bỏ kiểm SSL
    CURLOPT_HTTPHEADER=> array('Content-Type: application/json')
));
$resp = curl_exec($curl);



curl_close($curl);
}

// delete Product API
function deleteProduct($url){
    $curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL => $url,
    CURLOPT_USERAGENT => 'API Delete',
    CURLOPT_CUSTOMREQUEST => 'DELETE',
    CURLOPT_SSL_VERIFYPEER => false, //Bỏ kiểm SSL
   
));
$resp = curl_exec($curl);



curl_close($curl);
}
