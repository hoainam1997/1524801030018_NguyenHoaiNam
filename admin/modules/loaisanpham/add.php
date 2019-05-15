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
			if ($_SERVER['REQUEST_METHOD']=='POST') {
				$error = [];

				if (!isset($_POST['nhomsp']) || $_POST['nhomsp'] == '') {
					$error['nhomsp'] = 'Vui lòng chọn nhóm sản phẩm';
				} else {
					$nhomsp = $_POST['nhomsp'];
				}
				if ($_POST['name'] == null) {
					$error['name'] = "Tên loại sản phẩm không được trống";
				} else {
					$name = $_POST['name'];
				}

				if (empty($error)) {
					
					$check=mysql_query("select count(*) from loaisanpham where tenloaisp='$name'");
					$r=mysql_fetch_array($check);
					$n=$r[0];
					if($n!=0)
						echo "<script>alert('Lỗi!! Loại sản phẩm này đã có trong cơ sở dữ liệu!');window.history.go(-1);</script>";
					else{
						$sql="insert into loaisanpham(id_nhom,tenloaisp) values ($nhomsp,'$name')";
///	echo "$sql";
						$kq=mysql_query($sql);	
						if(!$kq)
							echo "<script>alert('Có lỗi xảy ra trong quá trình xử lý');window.history.go(-1);</script>";
						else{
							echo "<script>alert('Đã thêm');window.location='index.php'</script>";
							$ten="";
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
							<h3 class="box-title">Thêm loại sản phẩm</h3>
						</div>
						<div class="box-body">
							<div class="col-md-7">
								<form action="" method="post">
									<?php
									$nhomsanpham = mysql_query("SELECT * FROM nhomsanpham");
									?>
									<div class="form-group">
										<select class="form-control" name="nhomsp">
											<option value="">Chọn nhóm sản phẩm...</option>
											<?php while ($rows = mysql_fetch_array($nhomsanpham)) {?>
												<option value="<?= $rows['id_nhom'] ?>" <?php echo old('nhomsp') == $rows['id_nhom'] ? "selected" : "" ?>><?= $rows['tennhom'] ?></option>

											<?php }?>
										</select>
										<?php
										if (isset($error['nhomsp'])) echo "<p class='text-danger'>" . $error['nhomsp'];
										?>
									</div>

									<div class="form-group">
										<label>Tên loại sản phẩm: </label>
										<input type="text" name="name" class="form-control" value="<?= old('name')?>">
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
