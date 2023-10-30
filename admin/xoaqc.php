<?php
    $id=$_GET['id'];
    include('ketnoi.php');
    $sql="delete from quangcao where id='$id'";
    if($query=mysqli_query($conn, $sql)){
        header('location: quanlyquangcao.php');
    }
    else{
        echo 'Xay ra loi';
    }
    
?>