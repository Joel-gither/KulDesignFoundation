<?php
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://api.flutterwave.com/v3/charges?type=card', [
  'body' => '{"amount":100,"currency":"UG","card_number":"5399670123490229","cvv":"123","expiry_month":1,"expiry_year":21,"email":"user@flw.com","tx_ref":"MC-3243e","authorization":{"mode":"pin","pin":2245,"city":"San Francisco","address":"333 Fremont Street, San Francisco, CA","state":"California","country":"US","zipcode":94105},"preauthorize":false,"fullname":"Yemi Desola","phone_number":"07033002245","payment_plan":"12345","redirect_url":"https://webhook.site/3ed41e38-2c79-4c79-b455-97398730866c","meta":{"flightID":"123949494DC","sideNote":"This is a side note to track this call"},"device_fingerprint":"62wd23423rq324323qew1","client_ip":"154.123.220.1","eci":"03","a_authenticationtoken":"zPkn+YYYYYY53434HFHDss=","a_amount":"100","a_version":"2.1.0","a_transactionid":"1F3Uciah9cnh4mrnPPtyT_RA_test","a_transactionstatus":"Y","a_statusreasoncode":"33","is_custom_3ds_enabled":true,"a_time":"2024-04-11T08:08:43.974Z"}',
  'headers' => [
    'Authorization' => 'Bearer FLWSECK_TEST-SANDBOXDEMOKEY-X',
    'Content-Type' => 'application/json',
    'accept' => 'application/json',
  ],
]);

echo $response->getBody();
?>