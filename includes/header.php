<?php

session_start();

include("classes/system_helper.php");
include("classes/db_helper.php");
 


?>

<!DOCTYPE HTML>
<html>
<head>
<title>SoftWare Engineering</title>
    <link rel="icon" href="images/aa.png" type="image/x-icon"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medicinal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="css/slider.css">
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
    <script src="js/bootstrap.js"></script>
<!--/web-font-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
   
<link href="css/font-awesome.min.css" rel="stylesheet"  />

<script src="ckeditor/ckeditor.js"></script>
  
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				 
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
    
    jQuery(document).ready(function($){
        
      if($(".userMessage h3").text() !=""){
		  
        $(".userMessage").css("display","block");
        $(".userMessage").animate({left:'150px'},3000).delay(2000);
        $(".userMessage").slideUp(2000);
		
      }
        
    });
</script>
<!--/script-->

</head>
    
<body id="main">
<!--start-home-->
    <div class="userMessage <?php echo $_SESSION['message_type']; ?>">
        
		<?php //if(isset($_SESSION['username'])) echo '<p>Welcome</p>' ?>
        <p>Welcome</p> 
        <h3><?php
             if(isset($_SESSION['message'])){
                 echo $_SESSION['message'];
                 unset($_SESSION['message']);
             }
           
            ?></h3>
        
    </div>
		<!--header-top-->

			<div class="header-top" id="house">
			  <div class="container">
					 <nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Online </span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<h1><a class="navbar-brand" href="index.php"><span>H</span>ospital  <img src="images/logo.png" /></a></h1>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						  <div class="top-menu">
							<nav class="menu menu--francisco">
									<ul class="nav navbar-nav menu__list">
										<li class="menu__item menu__item--current">
                                            <a href="index.php" class="menu__link"><span class="menu__helper">Home</span></a>
                                        </li>
										
										<li class="menu__item"><a href="community.php" class="menu__link">
                                            <span class="menu__helper">Community </span></a></li>
										<li class="menu__item"><a href="gallery.php" class="menu__link"><span class="menu__helper">Departments</span></a></li>
										<li class="menu__item"><a href="contact.php" class="menu__link"><span class="menu__helper">Contact Us</span></a></li>
										<li class="menu__item"><a href="about.php" class="menu__link">
                                            <span class="menu__helper">About Us</span></a></li>
                                         
                                        <!----------------------------------->
                                        <li class="dropdown menu__item menu__dropDown">
                                              <button class="btn btn-default dropdown-toggle" type="button"
                                                      id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <i class="fa fa-cog fa-spin"></i>
                                                 
                                              </button>
                                              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                
                                                <li><a href="create.php">Ask Question</a></li>
                                                <?php if(!isLoggedIn()) { ?>
                                                <li><a href="login.php">Login</a></li>
                                                <li><a href="login.php">Register</a></li>
                                                  <?php } ?>
                                                <?php if(isLoggedIn()) { ?>
                                                <li><a href="#">Profile</a></li>
                                                  <li role="separator" class="divider"></li>
                                                <li><a href="#">Setting</a></li>
                                                <li><a href="logout.php">Logout</a></li>
                                                <?php } ?>
                                              </ul>
                                            </li>
                                        <!----------------------------------->
                                        
                                        
                                        <!--  <li class="menu__item"><a  class="menu__link">
                                             <span  style="font-size:30px;" onclick="openNav()">
                                                 <i class="fa fa-cog fa-spin"></i> 
                                             </span></a></li> -->
									</ul>
								</nav>
							</div>
					</div>
					<!-- /.navbar-collapse -->
				</nav>

			   <div class="clearfix"></div>
			</div>
	</div>
    
    
    
    
    
    
    
    