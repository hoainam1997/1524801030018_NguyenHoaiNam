
<div id="header">
	<div id="header-top">
		<div class="container">
			<div class="row clearfix">
				<div class="col-md-6" id="header-text">

				</div>
				<div class="col-md-6">
					<nav id="header-nav-top">
						<ul class="list-inline pull-right" id="headermenu">

							<?php if(!isset($_SESSION['customer_name'])): ?>
								<li>
									<a href="<?= base_url() ?>dang-nhap.php"><i class="fa fa-unlock"></i> Đăng nhập</a>
								</li>

								<li>
									<a href="<?= base_url() ?>dang-ki.php"><i class="fa fa-unlock"></i> Đăng kí</a>
								</li>
								<?php else: ?>
									<li>
										<a href=""><i class="fa fa-user"></i> Tài khoản của tôi <i class="fa fa-caret-down"></i></a>
										<ul id="header-submenu" style="width: 85%">
											
											<li><a href="<?= base_url()?>dang-xuat.php">Đăng xuất</a></li>
										</ul>
									</li>
								<?php endif ?>


							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row" id="header-main">
				<div class="col-md-5">
					<form class="form-inline" action="<?= base_url() ?>timkiem.php" method="post">
						<div class="form-group">

							<input type="text" name="keywork" placeholder="Tìm kiếm" class="form-control">
							<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</div>
				<div class="col-md-4 animated rotateIn delay-20s">
					<a href="<?php echo base_url() ?>">
						<img src="<?= base_url() ?>public/frontend/images/logo-default.png">
					</a>
				</div>
				<div class="col-md-3" id="header-right">
					<div class="pull-right">
						<div class="pull-left">
							<i class="glyphicon glyphicon-phone-alt"></i>
						</div>
						<div class="pull-right">
							<p id="hotline">HOTLINE</p>
							<p>035.471.4915</p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>