	<?php include '../../../function.php'; ?>

	<?php include '../../../connect.php'; ?>
	<?php include '../../layouts/head.php'; ?>
	<body class="hold-transition skin-blue sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">

			<?php include '../../layouts/header.php'; ?>
			<!-- =============================================== -->

			<!-- Left side column. contains the sidebar -->
			<?php include '../../layouts/sidebar.php'; ?>

			<?php
			$idn=$_GET["id"];
			$sql=mysql_query("select * from nhomsanpham where id_nhom=$idn");
			$r=mysql_fetch_array($sql);
			$ten=$r["tennhom"];
			if ($_SERVER['REQUEST_METHOD']=='POST') {
				$error = [];

				if ($_POST['name'] == null) {
					$error['name'] = "Tên nhóm sản phẩm không được trống";
				} else {
					$name = $_POST['name'];
				}

				if (empty($error)) {

					$check=mysql_query("select count(*) from nhomsanpham where tennhom='$name'");
					$r=mysql_fetch_array($check);
					$n=$r[0];
					if($n!=0)
						echo "<script>alert('Lỗi!! Nhóm sản phẩm này đã có trong cơ sở dữ liệu!');window.history.go(-1);</script>";
					else{
						$sql="update nhomsanpham SET tennhom='$name' where id_nhom='$idn'";
///	echo "$sql";
						$kq=mysql_query($sql);	
						if(!$kq)
							echo "<script>alert('Có lỗi xảy ra trong quá trình xử lý');window.history.go(-1);</script>";
						else{
							echo "<script>alert('Đã sửa');window.location='index.php'</script>";
							$name="";
						}
					}
				}
			}
			?>
			<div class="content-wrapper">

				<section class="content">

					<!-- Default box -->
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Sửa nhóm sản phẩm</h3>
						</div>
						<div class="box-body">
							<div class="col-md-7">
								<form action="" method="post">
									<div class="form-group">
										<label>Tên nhóm sản phẩm: </label>
										<input type="text" name="name" class="form-control" value="<?= $ten?>">
										<?php
										if (isset($error['name'])) echo "<p class='text-danger'>" . $error['name'];
										?>
									</div>

									<div class="form-group">

										<button class="btn btn-primary" type="submit">Lưu lại</button>
									</div>
								</form>
							</div>
						</div>

					</div>
					<!-- /.box -->

				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			<?php include '../../layouts/footer.php'; ?>
