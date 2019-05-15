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
			$result = mysql_query("select * from lienhe order by ngaylienhe DESC");

			?>
			<div class="content-wrapper">

				<section class="content">

					<!-- Default box -->
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Danh sách góp ý</h3>
						</div>
						<div class="box-body">
							<div class="col-md-12">
								<div class="table-responsive">   
									<table class="table">
										<thead>
											<tr>
												<th>STT</th>
												<th>Họ tên</th>
												<th>Email</th>
												<th>Điện thoại</th>
												<th>Nội dung</th>
												<th>Hành động</th>
												
											</tr>
										</thead>
										<tbody>
											<?php $i = 1; while ($rows = mysql_fetch_array($result)) { ?>
												<tr>
													<td><?= $i ?></td>
													<td><?= $rows['hoten'] ?></td>
													<td><?= $rows['email'] ?></td>
													<td><?= $rows['dienthoai'] ?></td>
													<td><?= $rows['noidung'] ?></td>
													<td>
														
														<a onclick="return confirm('ban chac chan xoa ?')" class="btn btn-danger" href="delete.php?id=<?= $rows['id_lienhe'] ?>"><i class="fa fa-trash"></i> Xóa</a>
													</td>
												</tr>
											<?php $i++; }?>
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
			<?php include '../../layouts/footer.php'; ?>
