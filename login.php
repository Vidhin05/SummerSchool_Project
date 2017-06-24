<?php
error_reporting(0);
include('conn.php');
if(isset($_REQUEST['submit'])){
	$unm=$_REQUEST['unm'];
	$eid=$_REQUEST['eid'];
	$pass=$_REQUEST['pass'];
	$sq="insert into login(unm,eid,pass) values ('$unm','$eid','$pass')";
	$res=$conn->query($sq);
	if($res){
		?>
		<script type="text/javascript">
			window.location="login.php"
		</script>
		<?php
	}
	else{
		?>
		<script type="text/javascript">
			alert(" Username or email id already registered");
			window.location="login.php";
		</script>
		<?php
	}
}
?>
<?php
include('conn.php');
if(isset($_REQUEST['login'])){
	$unm=$_REQUEST['unm'];
	$pass=$_REQUEST['pass'];
	$lgn="select * from login where unm='$unm' AND pass='$pass'";
	$res=$conn->query($lgn);
	$chk=$res->num_rows;
	if($chk>=1){
		?>
		<script type="text/javascript">
			window.location="index.htm"
		</script>
		<?php
	}
	else{
		?>
		<script type="text/javascript">
			alert("invalid Password or Username");
			window.location="login.php";
		</script>
		<?php
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Login | DA-Cart</title>
	<link href="./css/bootstrap.min.css" rel="stylesheet">
	<link href="./css/font-awesome.min.css" rel="stylesheet">
	<link href="./css/prettyPhoto.css" rel="stylesheet">
	<link href="./css/price-range.css" rel="stylesheet">
	<link href="./css/animate.css" rel="stylesheet">
	<link href="./css/main.css" rel="stylesheet">
	<link href="./css/responsive.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->

<body>
	<header id="header">
		<!--header-->
		<div class="header_top">
			<!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i>+91 7016571633</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> ividhin@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header_top-->
		<div class="header-middle">
			<!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="./index.htm"><img src="./images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">

								<li><a href="./checkout.htm"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="./cart.htm"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="./login.php" class="active"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/header-middle-->

		<div class="header-bottom">
			<!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="./shop?catid="></a></li>
								<li><a href="./contact-us.htm">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
					</div>
				</div>
			</div>
		</div>
		<!--/header-bottom-->
	</header>
	<!--/header-->
</body>

</html>
<section id="form">
	<!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login-form">
					<!--login form-->
					<h2>Login to your account</h2>
					<form action="" method="POST">
						<input type="text" name="unm" placeholder="Username">
						<input type="Password" name="pass" placeholder="Password">
						<input class="btn btn-default" type="submit" name="login" value="SignIn">
					</form>
				</div>
				<!--/login form-->
			</div>
			<div class="col-sm-1">
				<h2 class="or">OR</h2>
			</div>
			<div class="col-sm-4">
				<div class="signup-form">
					<!--sign up form-->
					<h2>New User</h2>
					<form action="" method="POST">
						<input type="text" name="unm" placeholder="Username">
						<input type="text" name="eid" placeholder="EmailID">
						<input type="Password" name="pass" placeholder="Password">
						<input class="btn btn-default" type="submit" name="submit" value="submit">
					</form>
				</div>
				<!--/sign up form-->
			</div>
		</div>
	</div>
</section>
<!--/form-->


<footer id="footer">
	<!--Footer-->
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
					<div class="companyinfo">
						<h2><span>DA</span>-Cart</h2>
						<p>A fashion and lifestyle website lets your wardrobe stay stylishly up-to-date with its repository of cutting-edge fashion
							apparel, footwear and accessories.</p>
					</div>
				</div>
				<div class="col-sm-7">
					<div class="col-sm-3">
						<div class="video-gallery text-center">
							<a href="./spring.htm">
								<div class="iframe-img">
									<img src="./images/home/iframe1.png" alt="" />
								</div>
								<div class="overlay-icon">
									<i class="fa fa-play-circle-o"></i>
								</div>
							</a>
							<p>Spring collection</p>
							<h2>14 June 2017</h2>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="video-gallery text-center">
							<a href="./autumn.htm">
								<div class="iframe-img">
									<img src="./images/home/iframe2.png" alt="" />
								</div>
								<div class="overlay-icon">
									<i class="fa fa-play-circle-o"></i>
								</div>
							</a>
							<p>Autumn collection</p>
							<h2>26 FEB 2017</h2>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="video-gallery text-center">
							<a href="./winter.htm">
								<div class="iframe-img">
									<img src="./images/home/iframe3.png" alt="" />
								</div>
								<div class="overlay-icon">
									<i class="fa fa-play-circle-o"></i>
								</div>
							</a>
							<p>Winter collection</p>
							<h2>22 DEC 2017</h2>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="video-gallery text-center">
							<a href="./summer.htm">
								<div class="iframe-img">
									<img src="./images/home/iframe4.png" alt="" />
								</div>
								<div class="overlay-icon">
									<i class="fa fa-play-circle-o"></i>
								</div>
							</a>
							<p>Summer collection</p>
							<h2>2 MAY 2017</h2>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="address">
						<img src="./images/home/map.png" alt="" />
						<p>505 S Atlantic Ave juhu Beach,mumbai,INDIA</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-widget">
		<div class="container">
			<div class="row">
				<div class="col-sm-2">
				</div>
				<div class="col-sm-2">
				</div>
				<div class="col-sm-2">
				</div>
				<div class="col-sm-2">
					<div class="single-widget">
					</div>
				</div>
				<div class="col-sm-3 col-sm-offset-1">
				</div>

			</div>
		</div>
	</div>

	<div class="footer-bottom"> </div>

</footer>
<!--/Footer-->
</body>

</html>