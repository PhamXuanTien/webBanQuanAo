<?php
    include('../ketnoi.php');
    $id=$_GET['id'];
    $sql="delete from lienhe where id_lh='$id'";
    if($query=mysqli_query($conn,$sql)){
        echo 'Xoá thành công';
        header('location: quanlylienhe.php');
    }
    else {
        echo "Xảy ra lỗi";
    }
    
?>