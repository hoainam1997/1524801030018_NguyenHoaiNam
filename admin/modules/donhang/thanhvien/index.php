	<?php include '../../../../function.php'; ?>

	<?php include '../../../../connect.php'; ?>
	<?php include '../../../layouts/head.php'; ?>
	<body class="hold-transition skin-blue sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">

			<?php include '../../../layouts/header.php'; ?>
			<!-- =============================================== -->

			<!-- Left side column. contains the sidebar -->
			<?php include '../../../layouts/sidebar.php'; ?>

			<div class="content-wrapper">

				<section class="content">

					<!-- Default box -->
					<?php
					$sql="select * from giohang,sanpham,thanhvien where thanhvien.user=giohang.user AND giohang.id=sanpham.id and giohang.tinhtrang='dathang'  order by ngaydat DESC ";
					$kq=mysql_query($sql);
					?>

					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">DANH SÁCH ĐƠN HÀNG CHỜ GIẢI QUYẾT
							</h3>
						</div>
						<div class="box-body">
							<div class="col-md-12">
								<div class="table-responsive">   
									
										<table class="table">
											<thead>
												<tr>

													<th>Ngày đặt</th>
													<th>Khách Hàng</th>
													<th>Tên sản phẩm</th>
													<th>Số lượng</th>
													<th>Giá</th>
													<th>Hành động</th>

												</tr>
											</thead>
											<tbody>
												<?php  while($r = mysql_fetch_array($kq)) { ?>
													<tr>

														<td><?= ConvertDate_time_db($r["ngaydat"]) ?></td>
														<td><?= $r["hoten"]; ?></td>
														<td><?= $r["tensp"] ?></td>
														<td><?= $r["soluong"]; ?></td>
														<td><?= number_format($r['gia'],0,'','.'); ?></td>
														<td>
															<a class="btn btn-info" href="xacnhandonhangthanhvien.php?id=<?= $r['id_giohang'] ?>"><i class="fa fa-edit"> xác nhận</i></a>
															<a onclick="return confirm('ban chac chan xoa ?')" class="btn btn-danger" href="delete.php?id=<?= $r['id_giohang'] ?>"><i class="fa fa-trash"></i> Xóa</a>
														</td>
													</tr>
												<?php }?>
											</tbody>
										</table>
									</form>
								</div>
							</div>
						</div>

					</div>
					<!-- /.box -->

				</section>
				<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			<?php include '../../../layouts/footer.php'; ?>
