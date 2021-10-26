<?php

$number = rand();
$hashNumber = md5($number);
$hashNumber2 = md5($hashNumber);
echo $number;
echo PHP_EOL;
echo $hashNumber;
echo PHP_EOL;
echo $hashNumber2;
$json = json_encode($hashNumber);

$bytes = file_put_contents("fichier.json", $json);  


function khey($path)
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


function miner(){
    $nombre = 0;
    $hasNombre2 = 0;
    $hashNombre = 0;
    $coucou = file_get_contents("http://sophos.gg:7676/block");
    

    $coucou2 = json_decode($coucou);


        for($i = 0; $i<100; $i++){
            $hasNombre= strtoupper(md5($i));
            $hashNombre2 = strtoupper(md5($hashNombre));
            if($coucou2->{"block"} == $hasNombre2){
            echo "ouiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii!!!!!!!!!!!!!";
            die;
        }


        

        
        echo "c'est pas bon hahahahahhahahaha";
    }
    echo "tu as trouvé !";
    var_dump($coucou2);
}



if($argv[1]== "create" && $argv[2] == "wallet"){
    khey($argv[3]);
}

if($argv[1]== "miner"){
    miner();
}




// var_dump($coucou2);


?>