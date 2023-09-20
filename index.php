<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.payriff.com/api/v2/createOrder',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "body": {
        "amount": 0.03,
        "currencyType": "AZN",
        "description": "Example",
        "language": "AZ",
        "approveURL": "http://localhost/dashboard/payr/success.php",
        "cancelURL": "cancelURL",
        "declineURL": "https://decline,com"
    },
    "merchant": "ES1092137"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: 7BE4753626B24E94955745F1D7C4BAD0'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>