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
			$id_loai = $_GET['id'];
			$sql=mysql_query("select nhomsanpham.*,loaisanpham.* from nhomsanpham,loaisanpham where nhomsanpham.id_nhom=loaisanpham.id_nhom and loaisanpham.id_loai=$id_loai");
			$r=mysql_fetch_array($sql);
			$ten=$r["tenloaisp"];$idn=$r["id_nhom"];
			if ($_SERVER['REQUEST_METHOD']=='POST') {
				$error = [];


				if ($_POST['name'] == null) {
					$error['name'] = "Tên loại sản phẩm không được trống";
				} else {
					$name = $_POST['name'];
				}

				if (empty($error)) {
					
					$nhomsp=$_POST["nhomsp"];
					$sql="update loaisanpham SET id_nhom='$nhomsp',tenloaisp='$name' where id_loai='$id_loai'";
					$kq=mysql_query($sql);	
					if(!$kq)
						echo "<script>alert('Có lỗi xảy ra trong quá trình xử lý');window.history.go(-1);</script>";
					else{
						echo "<script>alert('Đã sửa');window.location='index.php'</script>";
						
					}
				}
			}
			?>


			<div class="content-wrapper">

				<section class="content">

					<!-- Default box -->
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Sửa loại sản phẩm</h3>
						</div>
						<div class="box-body">
							<div class="col-md-7">
								<form action="" method="post">
									<?php
									$nhomsanpham = mysql_query("SELECT * FROM nhomsanpham");
									?>
									<div class="form-group">
										<select class="form-control" name="nhomsp">
											<?php while ($rows = mysql_fetch_array($nhomsanpham)) {?>
												<option value="<?= $rows['id_nhom'] ?>" <?php echo 
												$idn == $rows['id_nhom'] ? "selected" : "" ?>><?= $rows['tennhom'] ?></option>

											<?php }?>
										</select>
										<?php
										if (isset($error['nhomsp'])) echo "<p class='text-danger'>" . $error['nhomsp'];
										?>
									</div>

									<div class="form-group">
										<label>Tên loại sản phẩm: </label>
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
