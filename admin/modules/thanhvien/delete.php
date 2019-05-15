<?php 
include '../../../connect.php';
$user = $_GET['user'];
$sql ="DELETE FROM thanhvien WHERE user = '$user'";
$result = mysql_query($sql);
if ($result) {
			echo "<script>alert('Đã xóa');window.location='index.php';</script>";		

}
?>