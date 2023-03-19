<?php 
// test fetch api using fetch() 
// also use curl to avoid SSL err
$url = 'http://localhost:8080/product'; // url to api 
$curl = curl_init($url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);

if ($response !== false) {
    $data = json_decode($response, true);
    // Do something with the data
   echo json_encode($data);

} else {
    // Handle the error
    
   
}

curl_close($curl);

?>