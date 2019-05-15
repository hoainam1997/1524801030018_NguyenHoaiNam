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
			$id1 = $_GET['id'];
			$sql=mysql_query("select *,mota from sanpham where id = $id1");
			$sanpham=mysql_fetch_array($sql);

			if ($_SERVER['REQUEST_METHOD']=='POST') {
				
				$error = [];

				if (!isset($_POST['loaisp']) || $_POST['loaisp'] == '') {
					$error['loai'] = 'Vui lòng chọn loai sản phẩm';
				} else {
					$loai = $_POST['loaisp'];
				}

				if (!isset($_POST['ghichu']) || $_POST['ghichu'] == '') {
					$error['ghichu'] = 'Vui lòng chọn loai sản phẩm';
				} else {
					$ghichu = $_POST['ghichu'];
				}

				if ($_POST['name'] == null) {
					$error['name'] = "Tên  sản phẩm không được trống";
				} else {
					$name = $_POST['name'];
				}

				if ($_POST['gia'] == null) {
					$error['gia'] = "giá sản phẩm không được trống";
				} else {
					$gia = $_POST['gia'];
				}



				if ($_POST['description'] == null) {
					$error['description'] = "Miêu tả sản phẩm không được trống";
				} else {
					$description = $_POST['description'];
				}

				$id=time();

				if (empty($error)) {
					if ($_FILES['image']['size'] == '') {
						$file_name = $sanpham['hinh'];
					}

					else{

						$file_name = time().$_FILES['image']['name'];
						unlink('../../../sanpham/large/'.$sanpham['hinh']);

						move_uploaded_file($_FILES['image']['tmp_name'], '../../../sanpham/large/' . $file_name);
					}

					// $sql="insert into sanpham(id,id_loai, tensp,mota,hinh,gia,ghichu,id_menu) values ('$id',$loai, '$name','$description','$image_name',$gia,'$ghichu',0)";

					$sql_update = "UPDATE sanpham SET id_loai = $loai, tensp = '$name', mota = '$mota', hinh = '$file_name', gia = $gia, ghichu = '$ghichu' WHERE id = $id1";
					//$sql_update = "UPDATE sanpham SET id_loai = $loai, tensp = '$name', mota = 'nam13132345', hinh = '$file_name', gia = $gia, ghichu = '$ghichu' WHERE id = $id1";
					$result = mysql_query($sql_update);
					if ($result) {
						echo "<script>alert('Đã sửa  sản phẩm!');window.location='index.php'</script>";
					}
				}	
			}
			?>


			<div class="content-wrapper">

				<section class="content">

					<!-- Default box -->
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Thêm sản phẩm</h3>
						</div>
						<div class="box-body">
							<div class="col-md-7">
								<form action="" method="post" enctype="multipart/form-data">
									<?php
									$loaisanpham = mysql_query("SELECT * FROM loaisanpham");
									?>
									<div class="form-group">
										<select class="form-control" name="loaisp">
											<?php while ($rows = mysql_fetch_array($loaisanpham)) {?>
												<option value="<?= $rows['id_loai'] ?>" <?php echo 
												$sanpham['id_loai'] == $rows['id_loai'] ? "selected" : "" ?>><?= $rows['tenloaisp'] ?></option>

											<?php }?>
										</select>
										<?php

										if (isset($error['loai'])) echo "<p class='text-danger'>" . $error['loai'];
										?>
									</div>

									<div class="form-group">
										<label>Tên sản phẩm: </label>
										<input type="text" name="name" class="form-control" value="<?= $sanpham['tensp']?>">
										<?php
										if (isset($error['name'])) echo "<p class='text-danger'>" . $error['name'];
										?>
									</div>

									<div class="form-group">
										<label>Gía: </label>
										<input type="text" name="gia" class="form-control" value="<?=  $sanpham['gia']?>">
										<?php
										if (isset($error['gia'])) echo "<p class='text-danger'>" . $error['gia'];
										?>
									</div>
									<div class="form-group">
										<label>Miêu tả: </label>
										<!--<input type="text" name="description" class="form-control" value="">-->
										
										<textarea class="form-control" name="description" id="description" cols="50" rows="10"><?= $sanpham['mota'] ?></textarea>
										<?php
										if (isset($error['description'])) echo "<p class='text-danger'>" . $error['description'];
										?>
									</div>
									<div class="form-group">
										<label>Ghi chú: </label>
										<select class="form-control" name="ghichu">
											<option value="new" <?php echo 
											$sanpham['ghichu'] == 'new' ? "selected" : "" ?>>Mặt hàng mới</option>
											<option value="hienthi" <?php echo 
											$sanpham['ghichu'] == "hienthi" ? "selected" : "" ?>>Hiển thị</option>
											<option value="hangdat" <?php echo 
											$sanpham['ghichu'] == 'hangdat' ? "selected" : "" ?>>Hàng đặt</option>
										</select>
										<?php
										if (isset($error['ghichu'])) echo "<p class='text-danger'>" . $error['ghichu'];
										?>
									</div>

									<div class="form-group">
										<label for="exampleInputFile">HÌnh ảnh</label><br>
										<img width="400px" height="350px" src="../../../sanpham/large/<?= $sanpham['hinh'] ?>">
										<input type="file" name="image">
										
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
