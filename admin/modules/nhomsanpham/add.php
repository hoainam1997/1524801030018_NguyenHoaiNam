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

				if ($_POST['name'] == null) {
					$error['name'] = "Tên nhóm sản phẩm không được trống";
				} else {
					$name = $_POST['name'];
				}

				if (empty($error)) {
					$sql = "INSERT INTO nhomsanpham(tennhom) VALUES ('$name')";
					$result = mysql_query($sql);

					if ($result) {
						echo "<script>alert('Thêm nhóm sản phẩm thành công');window.location='index.php';</script>";
					}
				}
			}
			?>
			<div class="content-wrapper">

				<section class="content">

					<!-- Default box -->
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Thêm nhóm sản phẩm</h3>
						</div>
						<div class="box-body">
							<div class="col-md-7">
								<form action="" method="post">
									<div class="form-group">
										<label>Tên nhóm sản phẩm: </label>
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
