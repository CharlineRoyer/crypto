<?php

$number = rand();
$hashNumber = md5($number);
echo $number;
echo PHP_EOL;
echo $hashNumber;

$json = json_encode($hashNumber);

$bytes = file_put_contents("fichier.json", $json);  


function khey( $path)
{
    $data = array();
    $length = 30;

    $data["privateKey"] = '';

    for($i = 0; $i < $length; $i ++) {
        $data["privateKey"] .= chr(mt_Rand(33, 126));
    }

    $data["publicKey"] = md5($data["privateKey"]);
    $json = json_encode($data);
    $bytes = file_put_contents($path, $json);     
}

khey($argv[1]);






?>