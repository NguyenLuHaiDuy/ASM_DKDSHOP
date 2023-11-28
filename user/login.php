<?
include 'header.php';
?>
<?
if(isset ($_POST ['login'])){ // tôn tai => true |I false
$username = $_POST['username'];
$password = $_POST['password'];
if(empty ($username)){
$err_username = "Please enter username";
}
if (empty ($password) ){
$err_password = "Please enter password";
}
if(!isset ($err_username) && !isset ($err_password)){
  $select = "SELECT * FROM users WHERE username='$username'AND password='$password'";
  $result = $connect->query($select);
  if ($result->num_rows > 0) {
    if($result->fetch_assoc()['role']== 'user'){
      header("Location:../user/home.php");
    }else{
      header("Location:./admin");
    }
} else {
  $err_username = "Tài khoản hoặc Mật khẩu không đúng";
}
}
}
?>
<section class="login-block">
    <div class="container">
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Login Now</h2>
		    <form class="login-form" method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase" >Username</label>
    
    <input type="text" class="form-control" placeholder="" name="username">
    <?
    if(isset($err_username)):
    ?>
    <label for="exampleInputEmail1" class="text-uppercase" name="username"><?= $err_username?></label>
    <?
    endif;
    ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase" >Password</label>
    <input type="password" class="form-control" placeholder=""name="password">
    <?
    if(isset($err_password)):
    ?>
    <label for="exampleInputPassword1" class="text-uppercase" name="password"><?=$err_password?></label>
    <?
    endif;
    ?>
  </div>
  
  
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      <small>Remember Me</small>
    </label>
    <button type="submit" class="btn btn-login float-right" name="login">Submit</button>
  </div>
  
</form>
		</div>
		<div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2></h2>
            <p></p>
        </div>	
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2></h2>
            <p></p>
        </div>	
    </div>
    </div>
            </div>	   
		    
		</div>
	</div>
</div>
</section>

<?
include 'footer.php';
?>

