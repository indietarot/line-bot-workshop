<?php
$access_token = 'JNHYZM4lvcCnJeEIRIgR76kxbbzh8ZIHL0wW+vfeCQK2Fa6i5fHGeMdet3ZHvFYqMbCqPWnXzHodOhMqpa+4O+QjjSJKP0ZQb/4vPXoUNhzQYpqzaNMckhjnpejnt21Sjtp10JMgxoejuxO9UQTofgdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
