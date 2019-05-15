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
					$sql="select hoten,ngaydat,sum(tongtien) as tongtien from hoadon where tinhtrang='damua' group by hoten,ngaydat order by ngaydat DESC";

					// $sql="select * from hoadon, sanpham where hoadon.id = sanpham.id AND tinhtrang='damua' order by ngaydat DESC";
					$kq=mysql_query($sql);
					
					?>

					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">DANH SÁCH ĐƠN HÀNG ĐÃ GIẢI QUYẾT CHO THÀNH VIÊN
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
												<th>Tổng tiền</th>

											

											</tr>
										</thead>
										<tbody>
											<?php  while($r = mysql_fetch_array($kq)) { ?>
												<tr>

													<td><?= ConvertDate_time_db($r["ngaydat"]) ?></td>
													<td><?= $r["hoten"]; ?></td>
													
													
													<td><?= number_format($r['tongtien'],0,'','.'); ?></td>
												
												</tr>
											<?php }?>
										</tbody>
									</table>
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
