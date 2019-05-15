<?php
include '../../../../connect.php';
$id = $_GET['id'];
	$sql = "UPDATE hoadon SET tinhtrang = 'damua' WHERE id_hoadon = $id";
	$result = mysql_query($sql);
	echo "<script>alert('Đã xác nhận đơn hàng');window.location='dagiaiquyet.php'</script>";
?>