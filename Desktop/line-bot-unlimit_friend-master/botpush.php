<?php
require "vendor/autoload.php";



$access_token = 'sONg+sXBOONQjWPuCfkfzYSYOx+xtSWn1sI1RD9wuttHPHF3jcGmPWOZOUhg98biMbCqPWnXzHodOhMqpa+4O+QjjSJKP0ZQb/4vPXoUNhzYUAhhNz8JxLetLjmsBnFSvsZu5UnERfzY7aOdvY7N2QdB04t89/1O/w1cDnyilFU=';

$channelSecret = '83cbbcfa65de5592e3da84630e7375e3';
// ID ที่ต้องการส่งไปหา
$pushID = 'U2c568bbaf0ae23584c8e6f2b5e36cad3';


$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('มาลองตอบอะไรก็ได้กัน');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
echo "OK2";




 


