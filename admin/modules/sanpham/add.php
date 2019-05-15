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
				$image = $_FILES['image']['name'];
				$image_name = time() . '.' . $image;
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


				if ($_FILES['image']['name'] == null){
					$error['image'] = "Bạn chưa chon file";
				}

				$id=time();


				if (empty($error)) {
					move_uploaded_file($_FILES['image']['tmp_name'], '../../../sanpham/large/' . $image_name);
					$sql="insert into sanpham(id,id_loai, tensp,mota,hinh,gia,ghichu,id_menu) values ('$id',$loai, '$name','$description','$image_name',$gia,'$ghichu',0)";
					$result = mysql_query($sql);
					if ($result) {
						echo "<script>alert('Đã thêm  sản phẩm!');window.location='index.php'</script>";
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
											<option value="">Chọn loại sản phẩm...</option>
											<?php while ($rows = mysql_fetch_array($loaisanpham)) {?>
												<option value="<?= $rows['id_loai'] ?>" <?php echo old('loaisp') == $rows['id_loai'] ? "selected" : "" ?>><?= $rows['tenloaisp'] ?></option>

											<?php }?>
										</select>
										<?php

										if (isset($error['loai'])) echo "<p class='text-danger'>" . $error['loai'];
										?>
									</div>

									<div class="form-group">
										<label>Tên sản phẩm: </label>
										<input type="text" name="name" class="form-control" value="<?= old('name')?>">
										<?php
										if (isset($error['name'])) echo "<p class='text-danger'>" . $error['name'];
										?>
									</div>

									<div class="form-group">
										<label>Gía: </label>
										<input type="text" name="gia" class="form-control" value="<?= old('gia')?>">
										<?php
										if (isset($error['gia'])) echo "<p class='text-danger'>" . $error['gia'];
										?>
									</div>
									<div class="form-group">
										<label>Miêu tả: </label>
										<textarea class="form-control" name="description" id="description" cols="50" rows="10">
											<?= old('description') ?>
										</textarea>
										<?php
										if (isset($error['description'])) echo "<p class='text-danger'>" . $error['description'];
										?>
									</div>
									<div class="form-group">
										<label>Ghi chú: </label>
										<select class="form-control" name="ghichu">
											<option value="">----------Chọn----------</option>
											<option value="new">Mặt hàng mới</option>
											<option value="hienthi">Hiển thị</option>
											<option value="hangdat">Hàng đặt</option>
										</select>
										<?php
										if (isset($error['ghichu'])) echo "<p class='text-danger'>" . $error['ghichu'];
										?>
									</div>

									<div class="form-group">
										<label for="exampleInputFile">HÌnh ảnh</label>
										<input type="file" name="image">
										<?php
										if (isset($error['image'])) echo "<p class='text-danger'>" . $error['image'];

										?>
									</div>


									<div class="form-group">

										<button class="btn btn-primary" type="submit">Lưu lại</button>
<?php    if (isset($_POST['uploadclick']))
    {
        // Nếu người dùng có chọn file để upload
        if (isset($_FILES['image']))
        {
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
            if ($_FILES['image']['error'] > 0)
            {
                echo 'File Upload Bị Lỗi';
            }
            else{
                // Upload file
                move_uploaded_file($_FILES['image']['tmp_name'], '../../../sanpham/small/'.$_FILES['image']['name']);
                echo 'File Uploaded';
            }
        }
        else{
            echo 'Bạn chưa chọn file upload';
        }
    }  ?>
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
