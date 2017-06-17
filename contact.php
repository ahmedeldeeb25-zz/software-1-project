<?php include("includes/header.php") ; ?>

<?php

$User =new user();

    if(isset($_POST['submit'])){
        
        $data['name']=$_POST['name'];
        $data['phone']=$_POST['phone'];
        $data['mail']=$_POST['mail'];
        $data['message']=$_POST['message'];

          echo  $_POST['mail'];
        $User->contact_us($data);
    }


?>




<!--//header-top-->
 <!-- //Line Slider -->
		<div class="top_banner two">
			<div class="container">
			       <div class="sub-hd-inner">
						<h3 class="tittle">CONTACT <span>US</span></h3>
					</div>
			</div>
		</div>
	<!--/contact-->		
		<div class="contact-top">
		    <div class="container">
				  <div class="contact-text contact text-center">
				    <div class="con-text">
					  <p><a href="mailto:contact@example.com"> cs.mufic @yahoo.com</a></p>
				     <p> 040 - 5448992</p>
					 <h6> SHIBEN EL KOM - MENOFIA - EGYPT </h6>
				  </div>
				  
				 
              <!--- contact form---->   
                 
                   <div class="field">
            
                
                <i class="fa fa-mobile fa-5x"></i>
                <h1>What do you think? Tell us</h1>
                <p class="lead">Happy to receive your messages</p>
                
               
                <div class="row">
                    
                        <form role="form" method="post" action="">
                            <div class="col-md-6">

                            <div class="form-group">
                              <input type="text" class="form-control input-lg" name="name" placeholder="Your name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control input-lg" placeholder="Cell phone" name="phone">
                            </div>
                            <div class="form-group">
                              <input type="email" class="form-control input-lg" placeholder="E-mail" name="mail">
                            </div>
                            </div>
                        
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea class="form-control input-lg" placeholder="Your message" name="message"></textarea>
                        
                        </div>
                        <div class="form-group">
                            <button type="submit" class="input-lg btn btn-danger btn-block" name="submit">Contact us</button>
                        
                        </div>
                    
                    </div>
                     </form>       
                </div>

             
        </div>
    
    
    </div>
                 <!--- end of contact form---->

			</div>
		</div>
	<!--//contact-->	

	  <!--//reviews-->
	<!--/start-footer-section-->
			<?php include("includes/footer.php") ; ?>