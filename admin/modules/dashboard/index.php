
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

			
			<div class="content-wrapper">

				<section class="content">

					<!-- Default box -->
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Chào mừng bạn đến trang quản trị
							</h3>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="info-box">
										<span class="info-box-icon bg-aqua"><i class="fa fa-th"></i></span>

										<div class="info-box-content">
											<?php
											$sql_nhom = mysql_query("SELECT id_nhom FROM nhomsanpham");
											$nhomsanpham = mysql_num_rows($sql_nhom);
											?>
											<a href="../nhomsanpham">
												<span class="info-box-text">Nhóm sản phẩm</span>
												<span class="info-box-number"><?= $nhomsanpham ?></span>
											</a>
										</div>
										<!-- /.info-box-content -->
									</div>
									<!-- /.info-box -->
								</div>

								<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="info-box">
										<span class="info-box-icon bg-aqua"><i class="fa fa-th"></i></span>

										<div class="info-box-content">
											<?php
											$sql_loai = mysql_query("SELECT id_loai FROM loaisanpham");
											$loaisanpham = mysql_num_rows($sql_loai);
											?>
											<a href="../loaisanpham/">
												<span class="info-box-text">Loại sản phẩm</span>
												<span class="info-box-number"><?= $loaisanpham ?></span>
											</a>
										</div>
										<!-- /.info-box-content -->
									</div>
									<!-- /.info-box -->
								</div>
								<!-- /.col -->
								<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="info-box">
										<span class="info-box-icon bg-red"><i class="fa fa-product-hunt"></i></span>

										<div class="info-box-content">
											<?php
											$sql_sp = mysql_query("SELECT id FROM sanpham");
											$sanpham = mysql_num_rows($sql_sp);
											?>
											<a href="../sanpham/">
												<span class="info-box-text">Sản phẩm</span>
												<span class="info-box-number"><?= $sanpham ?></span>
											</a>
										</div>
										<!-- /.info-box-content -->
									</div>
									<!-- /.info-box -->
								</div>
								<!-- /.col -->

								<!-- fix for small devices only -->
								<div class="clearfix visible-sm-block"></div>

								<div class="col-md-3 col-sm-6 col-xs-12">
									<div class="info-box">
										<span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
										<?php
										$sql_order1 = mysql_query("SELECT id FROM giohang");
										$order1 = mysql_num_rows($sql_order1);
										?>
										<div class="info-box-content">
											<a href="../donhang/thanhvien/">
												<span class="info-box-text">Đơn hàng Thành viên<span>
													<span class="info-box-number"><?=$order1 ?></span>
												</a>
											</div>
											<!-- /.info-box-content -->
										</div>
										<!-- /.info-box -->
									</div>


									<div class="col-md-3 col-sm-6 col-xs-12">
										<div class="info-box">
											<span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>
											<?php
											$sql_order2 = mysql_query("SELECT id_hoadon FROM hoadon");
											$order2 = mysql_num_rows($sql_order2);
											?>
											<div class="info-box-content">
												<a href="../donhang/khach/">
													<span class="info-box-text">Đơn hàng khách hàng<span>
														<span class="info-box-number"><?= $order2 ?></span>
													</a>
												</div>
												<!-- /.info-box-content -->
											</div>
											<!-- /.info-box -->
										</div>

										<!-- /.col -->
										<div class="col-md-3 col-sm-6 col-xs-12">
											<div class="info-box">
												<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

												<?php
												$sql_tv = mysql_query("SELECT user FROM thanhvien");
												$thanhvien = mysql_num_rows($sql_tv);
												?>
												<div class="info-box-content">
													<a href="../thanhvien/">
														<span class="info-box-text">Thành viên</span>

														<span class="info-box-number"><?= $thanhvien ?></span>
													</a>
												</div>
												<!-- /.info-box-content -->
											</div>
											<!-- /.info-box -->
										</div>
										<!-- /.col -->
									</div>
								</div>
							</div>

					


				</section>
				<!-- /.content -->
			</div>

			<!-- /.content-wrapper -->
			<?php include '../../layouts/footer.php'; ?>
