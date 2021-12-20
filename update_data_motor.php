<!-- fungsi untuk servis -->

<?php

require __DIR__ . '/vendor/autoload.php';
use GuzzleHttp\Client;
$id = $_GET['id'];
$client = new Client([
    'base_uri' => 'http://127.0.0.1:8080',
    'timeout' => 5
]);

$response =  $client->request('PUT','/api/motor',[
    'json' => [
        'id' => $id,
        'tipe' => $_POST['tipe'],
        'jumlah' => $_POST['jumlah'],
        'harga' => $_POST['harga']
    ]
]);

$body = $response->getBody();
header('location:motor.php')

?>