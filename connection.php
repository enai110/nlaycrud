<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $database = "sekolah";
    $port = "3307";

    $connection = mysqli_connect($host, $user, $pass, $database, $port);
    if ($connection) {
        echo("sukses");
    }

?>