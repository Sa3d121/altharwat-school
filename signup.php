<?php

	if($_SERVER['REQUEST_METHOD']=='POST')
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

	    	  
	    $username=$_POST['username'];
	    $email=$_POST['email'];
	    $password=($_POST['password']);
	    $mobile=$_POST['mobile'];
	    

	    $stmt = $conn->prepare("INSERT INTO students (name, email, password,mobile) 
	    VALUES (:name, :email, :password, :mobile)");
	    $stmt->bindParam(':name', $username);
	    $stmt->bindParam(':email', $email);
	    $stmt->bindParam(':password', $password);
	    $stmt->bindParam(':mobile', $mobile);
	    
	    $stmt->execute();

	    
	    
	    header("location:signin.php");
	    }
	catch(PDOException $e)
	    {
	    echo "<br>" . $e->getMessage();
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
					<a  href="index.html" style="float:left"><img alt="" src="img/logo.png"></a>
				<p id="tns" style="display:inline;color:white;position:absolute;top:50px;margin-left:10px;font-weight:bold;">T N S</p> 
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
								<li class="current">
									<a href="signup.php">التسجيل </a>
								</li>
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
	
    	<!-- section contact -->
	<div id="sequence">
	<section class="section" id="contactus" style="padding:50px">
		<div class="container">
		<div class="row">
		  <div class="span12">
					<div class="headline">
						<h3 id="joinus"><span> التسجيل </span></h3>
					</div>
				</div>
        <form id="regiseration" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" style="max-width:500px;margin:auto">
           
            <div class="input-container">
			<i class="fa fa-user icon" style="float:right; padding:5px 0px"></i> <span style="float:right">&nbsp;&nbsp; اسم المستخدم &nbsp;&nbsp;</span><span style="float:right"> :</span>
            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="ادخل الاسم" name="username"style="padding:20px;" required> 			
            </div>
   
            <div class="input-container">
			<i class="fa fa-envelope icon" style="float:right; padding:5px 0px"> </i><span style="float:right">&nbsp;&nbsp; البريد الالكتروني&nbsp;&nbsp;</span><span style="float:right"> :</span>
			<input type="email" class="form-control" id="useremail" aria-describedby="emailHelp" placeholder="ادخل الايميل" name="email" style="padding:20px;width:100%;margin: 8px 0;display:inline-block;border: 1px solid #ccc;box-sizing: border-box;" required>
            </div>
			
            <div class="input-container">
			<i class="fa fa-key icon" style="float:right;padding:5px 0px"></i> <span style="float:right;">&nbsp;&nbsp; كلمه المرور &nbsp;&nbsp;</span>  <span style="float:right">:</span>
			<input type="password" class="form-control" id="userpassword" placeholder="ادخل كلمة السر" name="password"style="padding:20px;" required >			
			</div>   
			
				<div class="input-container">
				<i class="fas fa-phone" style="float:right; padding:5px 0px"> </i><span style="float:right">&nbsp;&nbsp; الهاتف المحمول&nbsp;&nbsp;</span><span style="float:right"> :</span>
				<input type="text" class="form-control" id="usermobile" placeholder="ادخل الموبايل" name="mobile" style="padding:20px;" required>
				</div>
				<a href="signin.php" style="float:right;font-weight:bold;">  هل لديك حساب بالفعل ؟ قم بتسجيل الدخول</a>
   <br>
 
<br>
  <button id="signupbtn"type="submit" value="Register"><span style="font-weight:bold;font-size:22px"> تسجيل </span></button>
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
		<script src='https://www.google.com/recaptcha/api.js'></script>
	
</body>
</html>