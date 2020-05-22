<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $dbname = "training";

    $connection = mysqli_connect($server,$user,$password,$dbname);
    if(!$connection){
        die("Connection error!!!");
    }
?>