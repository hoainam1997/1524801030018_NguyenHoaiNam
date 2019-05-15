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
			$result = mysql_query("SELECT * FROM nhomsanpham");
			?>
			<div class="content-wrapper">

				<section class="content">

					<!-- Default box -->
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Quản sản phẩm</h3>
						</div>

						<?php 
						$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
						$limit = 8;
						$products = mysql_query("SELECT * FROM sanpham ");
						$total_records	= mysql_num_rows($products);

						$total_page = ceil($total_records / $limit);
						// Giới hạn current_page trong khoảng 1 đến total_page

						if ($current_page > $total_page){
							$current_page = $total_page;
						}
						else if ($current_page < 1){
							$current_page = 1;
						}

						// Tìm Start
						$start = ($current_page - 1) * $limit;

						$sql = "SELECT sanpham.id, sanpham.id_loai, sanpham.tensp, sanpham.hinh, sanpham.gia, sanpham.ghichu, loaisanpham.id_loai, loaisanpham.tenloaisp
						FROM sanpham 
						INNER JOIN loaisanpham ON sanpham.id_loai = loaisanpham.id_loai
						ORDER BY sanpham.tensp ASC LIMIT $start,$limit";
						$result = mysql_query($sql);


						?>
						<div class="box-body">

							<div class="col-md-12">
								<div class="table-responsive">   
									<a href="add.php" class="btn btn-primary pull-right">Tạo mới</a>       
									<table class="table">
										<thead>
											<tr>
												<th>STT</th>
												<th>Hình ảnh</th>
												<th>Tên sản phẩm</th>
												<th>Loại sản phẩm</th>
												<th>Giá ( VND )</th>
												<th>Ghi Chú</th>
												<th>Hành động</th>
												
											</tr>
										</thead>
										<tbody>
											<?php $i = 1; while ($rows = mysql_fetch_array($result)) { ?>
												<tr>
													<td><?= $i ?></td>
													<td>
														<img width="200px" height="140xp"src="../../../sanpham/large/<?= $rows['hinh'] ?>">
													</td>
													<td><?= $rows['tensp'] ?></td>
													<td><?= $rows['tenloaisp'] ?></td>
													<td><?= number_format($rows['gia'],0,",",".") ?></td>
													<td><?= $rows['ghichu'] ?></td>
													<td>
														<a class="btn btn-info" href="edit.php?id=<?= $rows['id'] ?>"><i class="fa fa-edit"> Sửa</i></a>
														<a onclick="return confirm('ban chac chan xoa ?')" class="btn btn-danger" href="delete.php?id=<?= $rows['id'] ?>"><i class="fa fa-trash"></i> Xóa</a>
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
					<?php
//*******************************Xuất số trang*******************************************
					if($total_records==0)
						echo "<script>alert('Dòng sản phẩm này đang được cập nhật');window.location='index.php';</script>";
					else{
						echo "<br>";

						
						for($i=1;$i<=$total_page ;$i++)
						{
							if($current_page==$i)
								echo "<a href='?page=".$i."'><font color='#0000FF'>[".$i."]</font></a> &nbsp;";
							else
								echo "<a href='?page=".$i."'>[".$i."]</a> &nbsp;";
						}

					}

					?>
				</div>
				<!-- /.content-wrapper -->
				<?php include '../../layouts/footer.php'; ?>
