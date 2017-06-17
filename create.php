<?php include "includes/header.php"; ?>

<?php
    if (isset($_POST['do_create'])) {
        
        $title = $_POST['title'];
        $body  = $_POST['body'];
		$dept  = $_POST['department'];

        $user = new user();
        $user->ask($title,$dept,$body);
    }
?>

<div style=" border-top: 1.5px #b0bfbf solid; margin-top: 20px;" id="createForm">
    <form role="form" method="post" action="create.php"
          style="
          padding: 20px 0;
          position: relative;
          z-index: 2;
          width: 70%;
          margin-left: 15%;
          ">
        <div class="form-group">
            <label for="title" class="control-label">Topic Title</label>
            <input name="title" type="text" id="username" class="form-control" placeholder="Enter Post Title" >      
        </div>
         
        <div class="form-group">
            <label class="control-label">Category</label>
			
            <select class="form-group" name="department">
	       <?php  
		   $result =getTotalData("department");
		    while( $row =$result->fetch_assoc() ){ 
			?>
				<option value="<?php echo $row["department"];?> " > <?php echo $row["department"]; ?> </option>			
			<?php }?>
            </select>     
        </div>

        <div class="form-group">
            <label for="Body" class="control-label">Topic Body</label>
            <textarea name="body" rows="6" cols="80" id="Body" class="form-control"></textarea> 
            <script>
                CKEDITOR.replace('Body');
            </script>
        </div>




        <input type="submit" name="do_create" class="btn btn-info btn-block" value="Create">
    </form>

</div>

<?php include "includes/footer.php"; ?>