<?php
$url = 'https://api.nexmo.com/verify/search/json?' . http_build_query([
        'api_key' => API_KEY,
        'api_secret' => API_SECRET,
        'request_id' => '1178e48a940a485eaca317a1237279e5'
    ]);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
error_log($response);