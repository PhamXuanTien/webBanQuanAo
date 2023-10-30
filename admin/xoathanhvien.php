<?php
    include("ketnoi.php");
    $id=$_GET['id'];
    $sql="delete from user where id='$id'";
    if(mysqli_query($conn, $sql)){
        echo 'Xóa Xong';
        header("location:quanlythanhvien.php");
    }
    else{
        echo "Xảy ra lỗi";
    }
?>