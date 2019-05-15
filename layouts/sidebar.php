	<div class="col-md-3  fixside">
		<div class="box-left box-menu wow slideInLeft" >
			<h3 class="box-title"><i class="fa fa-list"></i>  Danh mục</h3>
			<?php
			$nhomsanpham = mysql_query("SELECT * FROM nhomsanpham");
			?>
			<div class="panel panel-primary">
				<?php while($rows = mysql_fetch_array($nhomsanpham)) {?>
					<div class="panel-heading"><?= $rows['tennhom'] ?></div>
				
				<div class="panel-body">
					<?php
					$id_nhom = $rows['id_nhom'];
					$cate = mysql_query("SELECT * FROM loaisanpham where id_nhom = $id_nhom"); 
					?>
					<ul class="list-group">
						<?php while ($rows = mysql_fetch_array($cate)) {?>
							<?php 
							$cate_id = $rows['id_loai'];
							$sql_count = mysql_query("SELECT * FROM sanpham  WHERE id_loai = $cate_id");
							$count = mysql_num_rows($sql_count);
							?>
							<li class="list-group-item">
								<a style="color: #444; font-size: 12px;text-transform: uppercase;font-weight: bold;" href="<?= base_url() ?>category.php?id=<?= $rows['id_loai'] ?>"><?= $rows['tenloaisp'] ?> <span class="badge pull-right"><?= $count?></span></a>

							</li>
						<?php } ?>
					</ul>
				</div>
				<?php }?>
			</div>
			<?php 
			$sql = "SELECT * FROM loaisanpham";
			$cate = mysql_query($sql);

			?>
			
		</div>

		<div class="box-left box-menu wow slideInLeft">
			<h3 class="box-title animated  flash delay-20s"><i class="fa fa-list"></i>  Sản phẩm mới </h3>
			<!--  <marquee direction="down" onmouseover="this.stop()" onmouseout="this.start()"  > -->
				<ul>
					<?php 
					$sql = "SELECT * FROM sanpham ORDER BY id DESC LIMIT 7";
					$product_new = mysql_query($sql);

					?>
					<?php while ($rows = mysql_fetch_array($product_new)) {?>
						<li class="clearfix">
							<a href="">
								<img src="<?php echo base_url() ?>sanpham/large/<?= $rows['hinh'] ?>" class="img-responsive pull-left" width="80" height="80">
								<div class="info pull-right">
									<p class="name"> <?= $rows['tensp'] ?></p >
									<b class="price">Giá: <?php echo number_format($rows['gia'],0,',','.') ?></b><br>
									
									
								</div>
							</a>
						</li>
					<?php } ?>

				</ul>
				<!-- </marquee> -->
			</div>

			
		</div>