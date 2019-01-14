<?php


$access_token = 'sONg+sXBOONQjWPuCfkfzYSYOx+xtSWn1sI1RD9wuttHPHF3jcGmPWOZOUhg98biMbCqPWnXzHodOhMqpa+4O+QjjSJKP0ZQb/4vPXoUNhzYUAhhNz8JxLetLjmsBnFSvsZu5UnERfzY7aOdvY7N2QdB04t89/1O/w1cDnyilFU=';

$userId = 'U8a959fcd70ac037b4ecbaf5c76bdea3e'; 

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

