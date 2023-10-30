<?php
    include("../ketnoi.php");
    $id=$_GET['id'];
    $sql="delete from sanpham where id='$id'";
    if (mysqli_query($conn, $sql))
    header("location:quanlysanpham.php")
?>