<?php 
include '../../../connect.php';
$id_loai = $_GET['id'];
$sql_sp = "SELECT * FROM sanpham WHERE id_loai = $id_loai";
$count = mysql_num_rows(mysql_query($sql_sp));
if ($count == 0) {
	mysql_query("Delete from loaisanpham where id_loai=$id_loai");
	echo "<script>alert('xoa thanh cong');window.location='index.php';</script>";	
} else {
	echo "<script>alert('Không thể xóa loại sản phẩm! vì có các sản phẩm thuộc loại sản phẩm này');window.location='index.php';</script>";	
}
?>