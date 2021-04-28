<?php

// $mahasiswa = [
//     [
//         "nama" => "Andi Suartika",
//         "nim" => "1905021001",
//         "Prodi" => "Manajemen Informatika"
//     ],
//     [
//         "nama" => "Andi ",
//         "nim" => "1905021001",
//         "Prodi" => "Manajemen Informatika"
//     ],

// ];

$dbh = new PDO('mysql:host=localhost;dbname=siak', 'root', '');
$db = $dbh->prepare('SELECET * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
