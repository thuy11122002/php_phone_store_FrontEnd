<?php
//  global variable
require("./includes/scripts/api/APIs.php");
// fuctions
function testfun()
{
    echo $_POST['search-bar'];
}
function deleteItem(){
    $url= 'http://localhost:8080/product/'.''.$_POST['rowID'];
    deleteAPI($url);
}
// check which button is clicked 
if (array_key_exists('button1', $_POST)) {
    testfun();
}
if (array_key_exists('button3', $_POST)) {
    $url= 'http://localhost:8080/product';
    $data = $_POST;
    unset($data['button3']);
    $rs = getList($url);
    $data["productID"] = count($rs) + 1;


    //  var_dump(json_encode($data));
    postAPI($data,$url);
}
if (array_key_exists('view', $_POST)) {
    echo "view btn";
}
if (array_key_exists('edit', $_POST)) {
    echo "edit btn";
}
if (array_key_exists('delete', $_POST)) {
    deleteItem();
}

?>