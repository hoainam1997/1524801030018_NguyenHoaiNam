<?php
	include '../../../connect.php';
	$id = $_GET['id'];
	$sql = "DELETE FROM lienhe WHERE id_lienhe = $id";
	$result = mysql_query($sql);
	if ($result) {
		echo "<script>alert('Đã xóa !');window.location='index.php';</script>";
	}
 ?>