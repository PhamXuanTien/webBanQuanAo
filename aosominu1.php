<?php
    include('file_cat/top.php');
?>
    	<link rel="stylesheet" type="text/css" href="style4.css" />
         <div id="content-center">
         	<div id="quangcao">Thời trang bốn mùa</div>
            <div class="sanpham">
                    <ul>
            	   <?php
                    include('ketnoi.php');
                    $sql="select * from sanpham where chuyenmuc_id=3";
                    $query=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_assoc($query)){
                   ?>
                	<li><a href="thongtinsp.php?id=<?php echo $row['id']?>"><img src="<?php echo 'admin/quanlysanpham/'.$row['hinhanh'];?>" width="130" height="150"/><p align="center"><?php echo $row['tensp']?></p><p align="center" style="color: rgb(255, 0, 106);" ><?php echo $row['gia']?></p></a></li>
                    <?php } ?>
                </ul>
            </div>
         </div>
<?php
    include('file_cat/footer.php');
?>        