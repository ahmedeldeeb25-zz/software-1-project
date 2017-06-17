
<?php
include("user.php");
session_start();

$User= new user();

        $servername = "localhost";
        $username = "zizo";
        $password = "123";
        $dbname = "hospital";

           $conn = new mysqli($servername, $username, $password, $dbname);

           // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
        
            $sql = "SELECT replies.*,users.username FROM replies
                        INNER JOIN users
                        ON replies.user_id = users.id and
                        question_id=".$_SESSION['question_id']."						
                         ORDER BY date";
            $result2 = $conn->query($sql);

//////////////////Leave comment///////////////////////////////////////////
  if(isset($_REQUEST['mess'])){
             $User= new user();
             $data['message'] = $_REQUEST['mess'];
             $User->leave_comment($data);
  }


///////////////////////view//////////////////////////////////////////////
?>
      <h3><?php echo $result2->num_rows; ?> <span> Comments</span> </h3>
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