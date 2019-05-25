<?php
$access_token = '4/Q8KZY2YlyxmdY3VY8e7DvM3V4U6hvR9D1kqX3sF/JMwGbfLTkqiyLZbCu2KHbGGYTEhJ5L3Zy3I132J4OtT6mJifdN4iNPBPHXSszB33xdCica5EnUOas9WVoJE2BtEbPQgmffXkOOv7mL/jPaxwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
