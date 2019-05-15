<?php 
include '../../../connect.php';

$idn=$_GET["id"];	
$check=mysql_query("select count(*) from loaisanpham where id_nhom='$idn'");
$r=mysql_fetch_array($check);
$n=$r[0];
if($n!=0)
	echo "<script>alert('Không thể xóa!! vì có loại sản phẩm thuộc nhóm sản phẩm này');window.location='index.php';</script>";		
else{
	$sql="delete from nhomsanpham where id_nhom='$idn'";
	$kq=mysql_query($sql);
	if(!$kq)
		echo "<script>alert('Có lỗi trong khi xóa!!!');window.location='index.php';</script>";
	else
	{
		$n=mysql_affected_rows();
		echo "<script>alert('Đã xóa');window.location='index.php';</script>";		
	}
}
?>