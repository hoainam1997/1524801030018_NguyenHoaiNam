<?php
include '../../../../connect.php';
$id = $_GET['id'];
$sql = "DELETE FROM hoadon WHERE id_hoadon = $id and tinhtrang='dathang'";
$result = mysql_query($sql);
if ($result) {
		echo "<script>alert('Đã xóa đơn hàng');window.location='index.php'</script>";

}
 ?>