
<?php include 'layouts/head.php'; ?>
<body>
	<div id="wrapper">
		<!---->
		<!--HEADER-->

		<?php include 'layouts/header.php'; ?>
		<!--END HEADER-->


		<!--MENUNAV-->
		<?php include 'layouts/menu.php'; ?>
		<!--ENDMENUNAV-->
		
		<div id="maincontent">
			<div class="container">
				<?php include 'layouts/sidebar.php'; ?>
				<div class="col-md-9 bor">
				<div class="ism-slider" data-play_type="loop" id="my-slider">
  <ol>
    <li>
      <img src="ism/image/slides/_u/1557412773787_960530.jpg">
          </li>
    <li>
      <img src="ism/image/slides/_u/1557412821530_953563.png">
        </li>
    <li>
      <img src="ism/image/slides/_u/1557413735667_600392.jpg">
        </li>
  </ol>
</div>
<p class="ism-badge" id="my-slider-ism-badge"></p>
					



<?php 
					$sql = "SELECT * FROM loaisanpham";
					$cate = mysql_query($sql);

					?>
					<?php while($rows = mysql_fetch_array($cate)) { ?>
						<section class="box-main1">
							<h3 class="title-main" style="text-align: center;"><a href="javascript:void(0)"> <?= $rows['tenloaisp'] ?> </a> </h3>
							<?php 
							$cate_id = $rows['id_loai'];
							$products = mysql_query("SELECT * FROM sanpham  WHERE id_loai = $cate_id LIMIT 4	");

							?>	

							<?php while($rows = mysql_fetch_array($products)) { ?>
								<div class="showitem">
									<div class="col-md-3 item_product bor">
										<a href="detail.php?id=<?= $rows['id'] ?>">

											<img class="img_responsive" width="100px" height="100px"  src="<?php echo base_url() ?>sanpham/large/<?= $rows['hinh'] ?>">
										</a>
										<div class="info-item">
											<a href="detail.php?id=<?= $rows['id'] ?>"  ><?= $rows['tensp'] ?></a>
											<p> <b class="price"><?php echo number_format($rows['gia'],0,',','.') ?> đ</b></p>
										</div>

									</div>
								</div>
							<?php }?>
						</section>
						<div style="clear: both;"></div>
					<?php }?>
				</div>
			</div>

			<div class="container">
				<div class="col-md-4 bottom-content">
					<a href=""><img src="<?= base_url() ?>public/frontend/images/free-shipping.png"></a>
				</div>
				<div class="col-md-4 bottom-content">
					<a href=""><img src="<?= base_url() ?>public/frontend/images/guaranteed.png"></a>
				</div>
				<div class="col-md-4 bottom-content">
					<a href=""><img src="<?= base_url() ?>public/frontend/images/deal.png"></a>
				</div>
			</div>
			<div class="bando">
			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14898.128606089082!2d105.87013165!3d21.011383000000002!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1465579316838" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="container-pluid">
				<section id="footer">
					<div class="container">
						
					
							<p class="text-center" style="color: #fff">Copyright © 2019 . Design by Nam Nguyễn !!! </p>
						
					</div>
				</section>

				
			</div>
		</div>      
	</div>
</div>      
</div>
<script  src="<?= base_url()  ?>public/frontend/js/slick.min.js"></script>

</body>

</html>