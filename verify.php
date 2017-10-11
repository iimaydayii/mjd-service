<?php
$access_token = 'S/WKkJ/cr6+vqEj2bCvpy4oYGRc0PE2pH7Io97Ijf1yOllU6u0Mdu54yzxHiNMVzTlDTDD3a3BO3bBYwtwNOzU6U8pZPpqtptKZvyVSbRfX93pkWuAaSo6yublI6URZaGZkez/1eRJy3f/VW4bPeqQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
