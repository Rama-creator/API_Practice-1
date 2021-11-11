<?php
//deklarasi
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', '62coffee');

//parameter
$connection = mysqli_connect(HOST, USER, PASS, DB);
//if ($connection) {
//    echo ("Connection has been successfully");
//} else {
//    die('Unable Connection');
//}
header('Content-Type: application/json');
