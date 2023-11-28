<?
include '../Admin/view/header.php';
?>
<?
include '../db/conect.php';
?>
<?
if (isset($_POST['login'])) { // tôn tai => true |I false
	$username = $_POST['username'];
	$password = $_POST['password'];
	if (empty($username)) {
		$err_username = "Vui lòng nhập email";
	}
	if (empty($password)) {
		$err_password = "Vui lòng nhập mật khẩu";
	}
	if(!isset ($err_username) && !isset ($err_password))  {
		$select = "SELECT * FROM users WHERE user_name='$username'AND password='$password'";
		$result = $connect->query($select);
		if ($result->num_rows > 0) {
		  if($result->fetch_assoc()['role']== '0'){
			header("Location:../user/index.php");
		  }else{
			header("Location:../admin/index.php");
		  }
	  } else {
		$err_username = "Tài khoản hoặc Mật khẩu không đúng";
	  }
	  }
}
?>

<body class="app app-login p-0">
	<div class="row g-0 app-auth-wrapper">
		<div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
			<div class="d-flex flex-column align-content-end">
				<div class="app-auth-body mx-auto">
					<div class="app-auth-branding mb-4"><a class="app-logo" href="index.php"><img class="logo-icon me-2" src="assets/images/DKD.jpg" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-5">Log in to DKD SHOP</h2>
					<div class="auth-form-container text-start">
						<form class="auth-form login-form" action="login.php" method="post">
							<div class="email mb-3">
								<label for="exampleInputEmail1" class="form-label">Email address</label>
								<input type="text" class="form-control" name="username">
								<?
								if (isset($err_username)) :
								?>
									<label for="exampleInputEmail1" class="form-label"><?echo "<br><span style='color:red;'>$err_username</span>" ?></label>
								<?
								endif;
								?>
							</div><!--//form-group-->
							<div class="password mb-3">
								<label for="exampleInputPassword1" class="form-label"> Password </label> <input type="password" class="form-control" name="password">
								<?
								if (isset($err_password)) :
								?>
									<label for="exampleInputEmaill" class="form-label"><? echo "<br><span style='color:red;'>$err_password</span>" ?></label>
								<?
								endif;
								?>
								<div class="extra mt-3 row justify-content-between">
									<div class="col-6">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
											<label class="form-check-label" for="RememberPassword">
												Remember me
											</label>
										</div>
									</div><!--//col-6-->
									<div class="col-6">
										<div class="forgot-password text-end">
											<a href="reset-password.php">Forgot password?</a>
										</div>
									</div><!--//col-6-->
								</div><!--//extra-->
							</div><!--//form-group-->
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto" name="login">Log In</button>
							</div>
						</form>

						<div class="auth-option text-center pt-5">No Account? Sign up <a class="text-link" href="signup.php">here</a>.</div>
					</div><!--//auth-form-container-->

				</div><!--//auth-body-->

				<footer class="app-auth-footer">
					<div class="container text-center py-3">
						<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
						<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>

					</div>
				</footer><!--//app-auth-footer-->
			</div><!--//flex-column-->
		</div><!--//auth-main-col-->
		<div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
			<div class="auth-background-holder">
			</div>
			<div class="auth-background-mask"></div>
			<div class="auth-background-overlay p-3 p-lg-5">
				<div class="d-flex flex-column align-content-end h-100">
					<div class="h-100"></div>
					<div class="overlay-content p-3 p-lg-4 rounded">
						<h5 class="mb-3 overlay-title">Explore Portal Admin Template</h5>
						<div>Portal is a free Bootstrap 5 admin dashboard template. You can download and view the template license <a href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">here</a>.</div>
					</div>
				</div>
			</div><!--//auth-background-overlay-->
		</div><!--//auth-background-col-->

	</div><!--//row-->


</body>

</html>
<?
include '../db/close.php'
?>