<?php include("includes/header.php") ; ?>


<script>
    
    function view_comments(){
        
         var xmlhttp = new XMLHttpRequest();  
          xmlhttp.onreadystatechange = function(){
              if(xmlhttp.readyState ==4 && xmlhttp.status ==200 ){
                  var div=document.getElementById('users_comment');
                  div.innerHTML =="";
                  div.innerHTML = xmlhttp.responseText;
              }
          }
          xmlhttp.open("GET","classes/ajax_comment.php",true);
          xmlhttp.send();
        
    }
    
    function add_comment(){
         var message = document.getElementById('mess').value;
         document.getElementById('mess').value ="";
        var xmlhttp = new XMLHttpRequest();  
          xmlhttp.onreadystatechange = function(){
              if(xmlhttp.readyState ==4 && xmlhttp.status ==200 ){
                  var div=document.getElementById('users_comment');
                  div.innerHTML ="";
                  div.innerHTML = xmlhttp.responseText;
              }
          }
           
          xmlhttp.open("GET","classes/ajax_comment.php?mess="+message,true);
          xmlhttp.send();
        
        
        view_comments();
        
    }
    
</script>

<?php

        $servername = "localhost";
        $username = "zizo";
        $password = "123";
        $dbname = "hospital";
        
        
		
			$id=$_GET['id'];
			$sql = "SELECT * FROM question where id=".$id;
			$sql2 = "SELECT replies.*,users.username FROM replies
                        INNER JOIN users
                        ON replies.user_id = users.id and 
                        question_id=".$id.
                        " ORDER BY date  ";
			
		
			
			
		

           $conn = new mysqli($servername, $username, $password, $dbname);

           // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            //$sql = "SELECT * FROM question where id=".$id;
            $result = $conn->query($sql);


          /*  $sql = "SELECT replies.*,users.username FROM replies
                        INNER JOIN users
                        ON replies.user_id = users.id and 
                        question_id=".$id.
                        " ORDER BY date  "; */
            $result2 = $conn->query($sql2);




//////////////////Leave comment///////////////////////////////////////////
/*
        if(isset($_POST['add_comment']) && $_POST['add_comment'] == "send" ){
            
             $User= new user();
             $data['message'] = $_POST['message'];
             $User->leave_comment($data);

             }
            
    */   

?>
<!--//header-top-->
 <!-- //Line Slider -->
		<div class="top_banner two" onload="view_comments()">
			<div class="container">
			       <div class="sub-hd-inner">
						<h3 class="tittle">Welcome to our  <span> Community Page</span></h3>
                       <h3 class="lead">Put your question and response</h3>
					</div>
			</div>
		</div>
	<!--/single-->
 <div class="single" >
			<div class="container">
				<div class="article-post w3l">
				<div class="post-details s-page">
				   <?php
                        if ($result->num_rows > 0){
                             while($row = $result->fetch_assoc()) {
                                 $_SESSION['question_id']=$row["id"];
                                   
                        ?>

                            <h2><?php echo $row["title"]; ?></h2>
                            <p class="smith"  ><span><?php echo $row["date"]; ?></span></p><br/>
                           
                            <p class="eget"> <?php echo $row["text"];  ?> </p>
                           
                    
                    <?php
                                                                  }}
                    ?>
				</div>
				<!--post-details-->	
				<div class="clearfix"> </div>
				</div>	
		   <div class="top-single w3l">
			    <div class="single-middle">
				  <ul class="social-share">
					<li><span>SHARE</span></li>
					<li><a href="#"><i> </i></a></li>						
					<li><a href="#"><i class="tin"> </i></a></li>
					<li><a href="#"><i class="message"> </i></a></li>				
				</ul>
				<a href="#"><i class="arrow"> </i></a>
				<div class="clearfix"> </div>
			</div>
			<div class="top-comments" id="users_comment">
			   <!--<h3><?php //echo $result2->num_rows; ?> <span> Comments</span> </h3> -->
             <h3><?php echo $result2->num_rows; ?> <span> Comments</span> </h3>
             <!-------------------main comment------------------------------>
                <?php 
                  if ($result2->num_rows > 0){
                      while( $row = $result2->fetch_assoc()) {
                           
                                  
                ?>
                <div class="met">
                    <div class="code-in">
                        <p class="smith"><a href="#"><?php echo $row['username'] ?></a> <span><?php echo $row['date'] ?></span></p>

                        <div class="clearfix"> </div>
                    </div>
                    <div class="comments-top-top">
                        <div class="men" >
                            <i class="glyphicon glyphicon-user"></i>
                        </div>					
                            <p class="men-it"> <?php echo $row['body'] ?> </p>
                        <div class="clearfix"> </div>
                    </div>

                </div>
                
                <?php   
                      }} ?>
               <!-------------------end of main comment------------------------------>
			
		   </div>
		    <?php if(isLoggedIn()): ?>
				 <div class="leave w3l">
					<h3>Leave <span> a comment </span></h3>
						 
							<div class="single-grid">
								<div class="single-us">
								   
									  
											<!--<input type="text" placeholder="Name" required="" name="name">
											<input type="text" placeholder="Email" required="" name="email"> -->
									   
										<textarea id="mess" placeholder="Message" name="message"></textarea>
									   <button  type="submit" class="btn btn-danger" name="add_comment" value="send"
											   onclick="add_comment()">Add Comment</button>

									

								</div>
						 
						</div>
					</div>
           <?php endif; ?>			
		</div>
			</div>
	</div>
	<!--//single-->	

	<!--//reviews-->
	<!--/start-footer-section-->
			<?php include("includes/footer.php") ; ?>