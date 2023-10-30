<?php
    include("../ketnoi.php");
    $id=$_GET['id'];
    $sql="delete from chuyenmuc where chuyenmuc_id='$id' ";
    if(mysqli_query($conn, $sql)){
        echo 'X�a th�nh c�ng';
        header("location:quanlychuyenmuc.php");
    }
    else {
        echo "X�y ra l?i";
    }
?>