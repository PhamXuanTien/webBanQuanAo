<?php
    $servername = "localhost";
    $username ="root";
    $password = "";
    $database = "webbanhang";
    $conn = mysqli_connect($servername,$username,$password,$database);
    mysqli_query($conn,"SET NAMES 'utf8'");
?>