<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<?php include '../function.php'; 
		include '../connect.php';
	?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng nhập quản trị</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?= base_url() ?>public/backend//bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url() ?>public/backend/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?= base_url() ?>public/backend/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url() ?>public/backend/dist/css/AdminLTE.min.css">


</head>
<body class="hold-transition login-page">

	<?php 
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$error = array();

		if ($_POST['user'] == NULL) {
			$error['user'] = "Tài khoản không được trống";
		} else {
			$user = $_POST['user'];
		}

		if ($_POST['password'] == NULL) {
			$error['password'] = "Mật khẩu không được trống";
		} else {
			$password = md5($_POST['password']);
		}
		if (empty($error)) {
			$sql="select * from thanhvien where user='$user' and pass='$password' and capquyen = 1";

			// $sql = "SELECT * FROM thanhvien WHERE user = '$user' and pass = '$password'";
			$result = mysql_query($sql);
			// $conunt_user = mysql_num_rows($result);
			if (mysql_num_rows($result) == 1) {
				$_SESSION['admin'] = $user;
					// $_SESSION['customer_id'] = $result['id'];

				echo "<script>alert('Đăng nhập thành công');location.href='modules/dashboard'</script>";
			}
			else {
				$_SESSION['error_login'] = "Tài khoản hoặc mật khẩu không chính xác";

			}

		}
	}
	?>
	<div class="login-box">

		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">Đăng nhập hệ thống</p>
			<?php if (isset($_SESSION['error_login'])):?>
				<div class="text text-danger">
					<?php echo $_SESSION['error_login']; session_unset();?>
				</div>
			<?php endif ?>

			<form action="" method="post">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Tài khoản" name="user" value="<?= old('user') ?>">
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
					<?php if (isset($error['user'])) {
						echo "<p class='text-danger'>$error[user].</p>";
					} ?>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Mật khẩu" name="password" value="<?= old('password') ?>">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
					<?php if (isset($error['password'])) {
						echo "<p class='text-danger'>$error[password].</p>";
					} ?>
				</div>
				<div class="row">

					<!-- /.col -->
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Đăng nhập</button>
					</div>
					<!-- /.col -->
				</div>
			</form>

		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->

	<!-- jQuery 3 -->
	<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<script>
		$(function () {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' /* optional */
			});
		});
	</script>
</body>
</html>
