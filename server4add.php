<?php
header('Content-Type: text/html; charset=utf-8');


$array = Array(
    "fam" => "Петров",
    "name" => "alesha",
    "contacts" => Array(
        "phone" => "2849384938",
        "email" => "vedvd@rvd", 
        "tgram" => "@vffsdv",
        "address"=> "Санкт-Петербург, ул Татарская, д 48"
    ),

);

//$json = json_encode($array);
//echo $json;

$seri = serialize($array);
echo $seri;

?>