<?php
include '../../../connect.php';
$id = $_GET['id'];

$sanpham = mysql_fetch_array(mysql_query("SELECT * FROM sanpham WHERE id = $id"));
unlink('../../../sanpham/large/'.$sampham['hinh']);
$result = mysql_query("DELETE FROM sanpham WHERE id = $id");

if ($result) {
	echo "<script>alert('Đã xóa sản phẩm!');window.location='index.php';</script>";
}

?>