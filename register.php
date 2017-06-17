<?php 
          if(isset($_POST['submit'])){
              
             
             
              
          }
    
    ?>
<?php include("includes/header.php") ; ?>


    <div class="wrapper">
	<div class="containerr">
		<h1>Welcome</h1>
        
        
		
		<form class="form" method="post" name="myForm" action=''>
			<input type="text" name='first_name' placeholder="First Name" required>
			<input type="text" name='last_name' placeholder="Last Name" required>
            <input type="email" name='email' placeholder="Your E-mail" required>
            <input type="tel" name='phone' placeholder="Phone Number" required pattern="[0-9]{11}">
            <h2 style="color:red"></h2>
            <input type="text" name='user_name' placeholder="userName" required>
            <input type="password" name='password' placeholder="Password" required>
            <input type="password "name='password2' placeholder="Repeat Password" onkeyup="validatee()" required>
            <h3 style="color:red"></h3>
			<button  type="submit" id="login-button"  name="submit">Login</button>
		</form>
        
       
        
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
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
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/index.js"></script>


    
    
    
  </body>
</html>
