<?php



require "vendor/autoload.php";

$access_token = '4/Q8KZY2YlyxmdY3VY8e7DvM3V4U6hvR9D1kqX3sF/JMwGbfLTkqiyLZbCu2KHbGGYTEhJ5L3Zy3I132J4OtT6mJifdN4iNPBPHXSszB33xdCica5EnUOas9WVoJE2BtEbPQgmffXkOOv7mL/jPaxwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '2128d7d59327b4615609b84f37129ab0';

$pushID = 'U454dbf9d16c259010f45e7739e4771ca';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







