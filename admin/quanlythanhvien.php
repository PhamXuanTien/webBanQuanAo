<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html"  charset="utf-8"/>
	<meta name="author" content="GallerySoft.info" />

	<title>Untitled 2</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
    	<?php
		if($_SESSION['level']==2){

    echo "<div id='top'>Welcome Admin <a href='../dangnhapthanhcong/logout.php' style='color:white;font-size:15px;'>(Logout)</a></div>";
		}
	else{
		header('location:../dangnhapthanhcong/login.php');
		}	
		?>
    <div id="menu">
        <ul>
            <li><a href="quanlythanhvien.php">Quản lý thành viên</a></li>
     
            <li><a href="quanlychuyenmuc/quanlychuyenmuc.php">Quản lý chuyên mục</a></li>
      
            <li><a href="quanlysanpham/quanlysanpham.php">Quản lý sản phẩm</a></li>
        
             <li ><a href="quanlylienhe/quanlylienhe.php">Quản lý liên hệ</a></li>
            <li><a href="quanlyquangcao.php">Quản lý quảng cáo</a></li>
            <li><a href="quanlydonhang/quanlydonhang.php">Quản lý hoá đơn</a></li>
        </ul>
    </div>
    <div id="table">
        <table>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Giới tính</th>
                <th>Xem</th>
                <th>Xóa</th>
            </tr>
            <?php 
                include('ketnoi.php');
                $sql="select * from user ";
                $query=mysqli_query($conn,$sql);
                $stt=0;
                while($row=mysqli_fetch_assoc($query)){
                    $stt++;
            ?>
            <tr>
                <td><?php echo $stt;?></td>
                <td><?php echo $row['ten'];?></td>
                <td><?php echo $row['mail'];?></td>
                <td><?php if( $row['gioitinh']==1){echo "Nam";} else { echo "Nữ";};?></td>
                <td><a href="xemthanhvien.php?id=<?php echo $row['ID']?>">Xem</a></td>
                <td><a href="xoathanhvien.php?id=<?php echo $row['ID'];?>" >Delete</a></td>
            </tr>    
            <?php }?>
        </table>
    </div>
    <div id="footer">Phạm Xuân Tiến - 0377776357</div>
</body>
</html>