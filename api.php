<?php
$lat = $_GET["lat"];
$lng = $_GET["lng"];
$limit = $_GET["limit"];

$ch = curl_init('http://api.ratings.food.gov.uk/Establishments?longitude='.$lng.'&latitude='.$lat.'&maxDistanceLimit='.$limit.'&pageSize=20&pageNumber=1');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                                
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',
    'x-api-version: ' . 2)
);                                                                                                                   
 
$result = curl_exec($ch);
header('Content-type: application/json');
echo $result;
?>
