<?php
$access_token = 'N9JQNjhEKyDfk8WrZjNwHNzwH65GheUUpRBCtTFIX1teSnfNqHY/fV/eD2/YjafDbw3bHtFGBr2EEUguekxKPezcLGRmLoC4r8FZsAtptr1gW0TjqDoa76iVTHPEe8CTVYYmYSRpnG471VMqP13VYwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
