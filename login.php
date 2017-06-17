<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
include("classes/system_helper.php");

$User= new user();

if(isset($_POST['do_login'])){
    $data['name'] = $_POST['user_name'];
    $data['pass'] =$_POST['password'];
        
        $User->login($data);
}

    if(isset($_POST['do_register'])){

        $data['first_name']=$_POST['first_name'];
        $data['last_name']=$_POST['last_name'];
        $data['email']=$_POST['email'];
        $data['user_name']=$_POST['user_name'];
        $data['password']=$_POST['password'];
        $data['phone']=$_POST['phone'];
        $data['gender']=$_POST['gender'];
        

        $User->register($data);
        

    }
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Popular Login Form Widget Flat Responsive Widget Template :: w3layouts</title>  
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Popular Login Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login Sign up Responsive web template, Smart phone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- Custom Theme files -->
<link href="css/style_login.css" rel="stylesheet" type="text/css" media="all"/>
<!-- //Custom Theme files -->
<!-- web-font -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
    
    <style>
        
        .group{
           width:100%;
           margin-left: 30%;
          display: -webkit-box;
       }
         .group p{
          width:250px;
          display:inline-block;
       }
        .group label{ 
              display: inline-block;
              text-align: right;
              vertical-align: top;  
            margin-right:20px;
            color:white;
        }
        .group input[type="radio"]{
            padding:0;
            margin:0;
            width:20px;
            margin-right:30px;
        }
    
    </style>
<!-- //web-font -->
<!-- pop-up-box -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script>
	$(document).ready(function() {
		$('.popup-top-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});																							
	}); 
</script>
<!-- //pop-up-box --> 
</head>
<body>
	<!-- login starts here -->
	<div class="login agile">
		<div class="w3agile-border">
			<h2>Popular Login Form</h2>
			<div class="login-main login-agileits"> 
				<h1>Login</h1> 
				<form action="#" method="post">
					<p>Email</p>
					<input type="text" placeholder="example@gmail.com" name="user_name" required="">
					<p>Password</p>
					<input type="password" placeholder="Password" name="password" required="">
					<input type="submit" value="Login" name="do_login">
				</form>
				<div class="social-btns w3l">
					<a class="fa" href="#">Facebook</a>
					<a class="g" href="#">Google</a>
				</div>
				<h3>Not a member yet ? <a href="#small-dialog" class="sign-in popup-top-anim"> Sign Up Now !</a></h3>
			</div>
		</div>
		<!-- modal -->
		<div id="small-dialog" class="mfp-hide">
			<h5 class="w3ls-title">Sign Up</h5>
			<div class="login-modal login"> 
				<form action="#" method="post" name="myForm">
					<p>First Name</p>
					<input type="text" name='first_name' placeholder="First Name" required>
                    <p>Last Name</p>
                    <input type="text" name='last_name' placeholder="Last Name" required>
                    <p>E-mail</p>
                    <input type="email" name='email' placeholder="Your E-mail" required>
                    <p>Phone Number</p>
                    <input type="tel" name='phone' placeholder="Phone Number" required pattern="[0-9]{11}">
                    <h2 style="color:red"></h2>
                    <p>User Name</p>
                    <input type="text" name='user_name' placeholder="user Name" required>
                    <p>Password</p>
                    <input type="password" name='password' placeholder="Password" required>
                    <p>Repeat Password</p>
                    <input type="password "name='password2' placeholder="Repeat Password" onkeyup="validatee()" required>
                    <h3 style="color:red"></h3>
                    <div class="group">
                    <label>Male</label><input type="radio" name="gender" value="male" > 
                    <label>Female</label><input type="radio" name="gender" value="female"> 
                    </div>
					<input type="submit" value="Sign Up"  name="do_register">
				</form>
				<div class="social-btns w3l w3-agileits">
					<a class="fa" href="#"> Facebook</a>
					<a class="g" href="#"> Google</a>
				</div>  
			</div> 
		</div>
		<!-- //modal -->  
	</div>
	<!-- //login ends here -->
	<!-- copyrights -->  
	<div class="copy-rights wthree">		 	
		<p>© 2016 Popular Login Form. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>		 	
	</div>
	<!-- //copyright -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
    <script>
    function validatee(){
    
    if( document.forms["myForm"]["password"].value  !=
        document.forms["myForm"]["password2"].value ){
         $('form h3').text("Not Matched");
         document.forms["myForm"]["submit"].setAttribute("disabled","disabled");
    }else{
        $('form h3').text("");
        document.forms["myForm"]["submit"].removeAttribute("disabled");
    }
    
}

</script>
</body>
</html>