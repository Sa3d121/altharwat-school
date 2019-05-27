<?php

session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>مدرسه الثروات الوطنيه الخاصه</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="مدرسه الروات الوطنيه الخاصه " name="description">
	<meta content="" name="author"><!-- styles -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/overwrite.css" rel="stylesheet">
	<link href="font/stylesheet.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/flexslider.css" rel="stylesheet">
	<link href="css/sequencejs.css" media="screen" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet"><!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
  <![endif]-->
	<link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet">
	<link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
	<link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
	<link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
	<link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed">
	<link href="icon/favicon.png" rel="shortcut icon" sizes="114x114">
</head>
<body>
	<header>
	
<!-- start top -->

		<div class="navbar " id="topnav" style="background-color:rgb(47, 48, 64);">
			<div class="navbar-inner" style="background-color:rgb(47, 48, 64);">
				<div class="container">
									<a  href="index.php" style="float:left"><img alt="" src="img/logo.png"></a>
					<div class="navigation">
						<nav>
							
							<ul class="nav pull-right">
								<li>
									<a href="index.php">الصفحه الرئيسيه</a>
								</li>
								<li>
									<a href="index.php">عن مدرستنا</a>
						
								<li>
									<a href="index.php ">القسم الاعلامي</a>
								</li>
								<li>
									<a href="index.php">تواصل معنا</a>
								</li>
							 <li class="nav-item dropdown">
                                    <?php
                                        if(isset($_SESSION['username'])):
                                        ?> <a class=" nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $_SESSION['username']?> مرحبا </a>

                                    <div class="dropdown-menu" style=" color:white;background-color:#666">


                                        <a class="dropdown-item" href="signout.php">تسجيل الخروج</a>


                                    </div>


                                    <?php
                                        else:
										header("location: index.php");
														?>
                                    <?php
			                         endif;
			                         ?>
                                </li>
								</li>
								<li class="current">
									<a href="train&devolp.php">التطوير و التدريب</a>
								</li>
								<li>
									<a href="studentcorner.php">ركن الطلاب</a>
								</li>
								<li>
									<a href="schedule.php">جدول الحصص</a>
								</li>
								
							</ul>						
						</nav>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
	</header>


	<!-- section contact -->
	<section class="section" id="contactus">
		<div class="container">
		
		</div>	
	</section><!-- end section contact -->
	<footer>
		<div class="verybottom">
			<div class="container">
				<div class="row">
					<div class="span12">
						<div class="aligncenter">
							<div class="logo">
								<a class="brand" href="index.html"><img alt="" src="img/logo.png"></a>
							</div>
							<p style="font-size:27px;text-align:center;color:white;">visit our page on facebook</p>
							<div class="social-links">
								<ul class="social-links">
									<li>
										<a href="https://www.facebook.com/altharawat/" target="_blank" title="Facebook"><i class="icon-circled icon-64 icon-facebook"></i></a>
									</li>
								</ul>	

								Designed by <a href="#">Sa3d</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- Javascript Library Files -->
	
	<script src="js/jquery-3.3.1.min.js">
	</script> 
	<script src="js/jquery.min.js">
	</script> 
	<script src="js/jquery.easing.js">
	</script> 
	<script src="js/bootstrap.js">
	</script> 
	<script src="js/jquery.lettering.js">
	</script> 
	<script src="js/parallax/jquery.parallax-1.1.3.js">
	</script> 
	<script src="js/nagging-menu.js">
	</script> 
	<script src="js/sequence.jquery-min.js">
	</script> 
	<script src="js/sequencejs-options.sliding-horizontal-parallax.js">
	</script> 
	<script src="js/portfolio/jquery.quicksand.js">
	</script> 
	<script src="js/portfolio/setting.js">
	</script> 
	<script src="js/jquery.scrollTo.js">
	</script> 
	<script src="js/jquery.nav.js">
	</script> 
	<script src="js/modernizr.custom.js">
	</script> 
	<script src="js/prettyPhoto/jquery.prettyPhoto.js">
	</script> 
	<script src="js/prettyPhoto/setting.js">
	</script> 
	<script src="js/jquery.flexslider.js">
	</script> 
	<script src="js/jquery.nicescroll.min.js">
	</script> 
	<script src="js/wow.min.js">
	</script> 
	<script>
	new WOW().init(); 
	</script> 
	<!-- Contact Form JavaScript File -->
	 
	<script src="contactform/contactform.js">
	</script> <!-- Template Custom Javascript File -->
	 
	<script src="js/custom.js">
	</script>
	
</body>
</html>