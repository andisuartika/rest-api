<?php

$data = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/');

$bali = json_decode($data, true);

// var_dump($bali);

echo $bali[11]["attributes"]["Kasus_Posi"];
