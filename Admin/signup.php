
<?
include '../db/conect.php'
?>
<?
include '../Admin/view/header.php'
?>
<?
if (isset($_POST['dangky'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if (empty($username)) {
		$err_username = 'Vui lòng điền Họ và Tên';
	}
	if (empty($email)) {
		$err_email = 'Vui lòng điền Email';
	}
	if (empty($password)) {
		$err_password = 'Vui lòng điền mật khẩu';
	}
	if (!isset($err_username) && !isset($err_password) && !isset($err_email)) {
		$select = "SELECT * FROM users WHERE user_name='$username'";
		//   echo $select;
		$result = $connect->query($select);
		if ($result->num_rows > 0) {
			$err_username = "Username da ton tai";
		} else {
			$sql = "INSERT INTO users (user_id,user_name, password, address, phone, email, role)
	VALUES('1','$username', '$password','address', 'phone','$email','0')";

			// echo $sql;

			if ($connect->query($sql)) {
				header("Location:../Admin/signup.php");
			}
		}
	}
}
?>

<body class="app app-signup p-0">    	
    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.php"><img class="logo-icon me-2" src="assets/images/DKD.jpg" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-4">Sign up to DKD SHOP</h2>					
	
					<div class="auth-form-container text-start mx-auto">
						<form class="auth-form auth-signup-form" method="post" action="signup.php">         
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Your Name</label>
								<input id="signup-name" name="username" type="text" class="form-control signup-name" placeholder="Username" >
								<? if (isset($err_username)) : ?>
                                            <label class="text-danger"><?= $err_username ?></label>
                                        <? endif; ?>
							</div>
							<div class="email mb-3">
								<label class="sr-only" for="signup-email">Your Email</label>
								<input id="signup-email" name="email" type="email" class="form-control signup-email" placeholder="Email">
								<? if (isset($err_email)) : ?>
                                            <label class="text-danger"><?= $err_email ?></label>
                                        <? endif; ?>
							</div>
							<div class="password mb-3">
								<label class="sr-only" for="signup-password">Password</label>
								<input id="signup-password" name="password" type="password" class="form-control signup-password" placeholder="Create a password">
								<? if (isset($err_password)) : ?>
                                            <label class="text-danger"><?= $err_password ?></label>
                                        <? endif; ?>
							</div>
							<div class="extra mb-3">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
									<label class="form-check-label" for="RememberPassword">
									I agree to Portal's <a href="#" class="app-link">Terms of Service</a> and <a href="#" class="app-link">Privacy Policy</a>.
									</label>
								</div>
							</div><!--//extra-->
							
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto" name="dangky" >Sign Up</button>
							</div>
						</form><!--//auth-form-->
						
						<div class="auth-option text-center pt-5">Already have an account? <a class="text-link" href="login.php" >Log in</a></div>
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
include '../db/close.php';
?>
