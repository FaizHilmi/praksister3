<!-- fungsi untuk barang -->
<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

$response =  $client->request('POST','/api/motor',[
    'json' => [
        'tipe' => $_POST['tipe'],
        'jumlah' => $_POST['jumlah'],
        'harga' => $_POST['harga']
    ]
]);

$body = $response->getBody();
header('location:motor.php')

?>