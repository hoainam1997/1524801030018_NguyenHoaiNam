
<div id="menunav">
	<div class="container">
		<nav>
			<div class="home pull-left animated bounce delay-2s">
				<a href="<?php echo base_url() ?>">Trang chủ</a>
			</div>
			<!--menu main-->
			<ul  id="menu-main">
				<li>
					<a href="<?= base_url() ?>lien-he.php">Liên hệ</a>
				</li>
			</ul>
		
			<ul class="pull-right animated infinite fadeIn delay-2s" id="main-shopping">
				<li>
					<a href="<?php echo base_url() ?>gio-hang.php"><i class="fa fa-shopping-basket"></i> Giỏ hàng <span style="color: #fff"><?= isset($_SESSION['cart'])? count($_SESSION['cart']):0 ?></span> sản phẩm</a>
				</li>
			</ul>
			<!--end Shopping-->
		</nav>
	</div>
</div>