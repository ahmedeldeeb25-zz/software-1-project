<?php include "includes/header.php"; ?>

<script>
	
	function ajax(cat){
        
        var xmlhttp = new XMLHttpRequest();  
          xmlhttp.onreadystatechange = function(){
              if(xmlhttp.readyState ==4 && xmlhttp.status ==200 ){
                  var div=document.getElementById('top');
                  div.innerHTML ="";
                  div.innerHTML = xmlhttp.responseText;
              }
          }
        xmlhttp.open("GET","classes/filter.php?cat="+cat,true);
        xmlhttp.send();
        
	}
</script>
<ul id="topics">
        <!----------------- Filter --------------------------------->
          <div id="filter">
            <label class="control-label">Category</label>
            <select class="form-group" name="department" onchange="ajax(this.value)">
                <option >All Topics</option>
	       <?php  
		   $result =getTotalData("department");
		    while( $row =$result->fetch_assoc() ){ 
			?>
				<option value="<?php echo $row["department"];?> " > <?php echo $row["department"]; ?> </option>			
			<?php }?>
            </select>
          </div>
    <!-------------------- questions-------------------->
        <div id="top">
            <?php
            $result = getTotalData("question");
            if ($result->num_rows > 0):
                ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                    <li class="topic">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="avatar pull-left" src="images/avatar1.jpg" width="80" height="50" >
                            </div>

                            <div class="col-md-10">
                                <div class="topic-content ">
                                    <h3><a href="single.php?id=<?php echo $row['id'] ?>">
                <?php echo $row['title']; ?></a></h3>
                                    <div class="topic-info">

                                        <h2><?php echo shortenText($row['text'], 100); ?></h2>
                                        <p class="smith">By :<span> <?php echo $row['username'] ?> - Category : <?php echo $row['dept'] ?> 
                                                <br><?php echo formatDate($row['date']) ?></span></p>
                                        <span style="margin-top: 10px" class="badge pull-right">
                                        <?php echo getTotalReplies($row['id'])?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>

                <?php endwhile; ?> 
         </div>

</ul>
<?php else :  ?>
<p class="topic" style="font-size:30px; font-weight: bold">No Topics To Display</p>
<?php  endif;  ?>

<div id="static">
    <h3 >Forum Statistics</h3>

    <ul style="margin-left: 10%; margin-top: 10px;">
        <li>Total Number of users : <strong><?php echo getTotalNumber('users'); ?></strong></li>
        <li>Total Number of Topics : <strong><?php echo getTotalNumber('question'); ?></strong></li>
        <li>Total Number of Departments : <strong><?php echo getTotalNumber('department');    ?></strong></li>

    </ul>
</div>
<?php include "includes/footer.php"; ?>                     
