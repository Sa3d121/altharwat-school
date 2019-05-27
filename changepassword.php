<?php

if ( isset( $_POST['submit'] ) )
 {
 	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "school";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $conn->query("SET NAMES 'UTF8'");
        
	  $email=($_POST['email']);

	   $stmt = $conn->prepare("SELECT * FROM `students` WHERE email=?");
	  
	   
	 
	    
	    $stmt->execute([$email]);
	    $user=$stmt->fetch();
	    if($user)
	    {
	    	
	    	 if($_POST['password']==$_POST['cpassword'])
	    	 {

	    	 	  $stmt2 = $conn->prepare("UPDATE `students` SET `password` =:pass WHERE email =:mail");

	    	 	  $newpass=md5($_POST['password']);
	    	 	  $stmt2->bindParam(':pass',$newpass);
	    	 	   $stmt2->bindParam(':mail',$email);
	    	 	   $stmt2->execute();
	    	 	   
	    	 	   header("location:index.php");
	
	    	 }
	    	 else{
	    	 	echo "كلمة السر غير متطابقه";
	    	 }
	    }
	    else{
	    	echo "الايميل غير موجود من فضلك انشىء حساب جديد";
	    }
	   
	   
	    }
	catch(PDOException $e)
	    {
	    echo "<br>" . $e->getMessage()."<br>".$e->getLine()  ;
	    }

	$conn = null;

 }
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
								
								<li>
									<a href="train&devolp.html">التطوير و التدريب</a>
								</li>
								<li>
									<a href="studentcorner.html">ركن الطلاب</a>
								</li>
								<li>
									<a href="schedule.html">جدول الحصص</a>
								</li>
								
							</ul>						
						</nav>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
	</header>

    <div id="sequence">
	<section class="section" id="contactus" style="padding:50px">
		<div class="container">
		<div class="row">
		  <div class="span12">
					<div class="headline">
						<h3 id="joinus"><span> تغير كلمة المرور</span></h3>
					</div>
				</div>
        <form action="" method="post" style="max-width:500px;margin:auto">
            <div class="input-container">
		<i class="fa fa-envelope icon" style="float:right; padding:5px 0px"> </i><span style="float:right">&nbsp;&nbsp; البريد الالكتروني&nbsp;&nbsp;</span><span style="float:right"> :</span>
		<input type="email" class="form-control" id="email" placeholder="ادخل الايميل" name="email"style="padding:20px;width:100%;margin: 8px 0;display:inline-block;border: 1px solid #ccc;box-sizing: border-box;" required>
			</div>
			<div class="input-container">
		<i class="fa fa-key icon" style="float:right;padding:5px 0px"></i> <span style="float:right;">&nbsp;&nbsp; كلمه المرور &nbsp;&nbsp;</span>  <span style="float:right">:</span>
		<input type="password" class="form-control" id="pwdn" placeholder="ادخل كلمة المرور الجديده" name="password"style="padding:20px;" required >
		</div>
			<div class="input-container">
		<i class="fa fa-key icon" style="float:right;padding:5px 0px"></i> <span style="float:right;">&nbsp;&nbsp; كلمه المرور &nbsp;&nbsp;</span>  <span style="float:right">:</span>
		<input type="password" class="form-control" id="pwdc" placeholder="تـأكيد كلمة المرور" name="cpassword"style="padding:20px;" required >
		</div>
            <button type="submit" id="signinbtn" name="submit" style="font-size:18px;">تغير كلمة السر</button>
        </form>
     </div>
	</div>
	</section>
	</div>


	<footer>
		<div class="verybottom">
			<div class="container">
				<div class="row">
					<div class="span12">
						<div class="aligncenter">
							<div class="logo">
								<a class="brand" href="index.html"><img alt="" src="img/logo.png"></a>
							</div>
							<p style="font-size:27px;text-align:center;color:white;font-family:serif;">Visit our page on social media</p>
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