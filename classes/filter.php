
<?php
  include "system_helper.php";
  include "db_helper.php";

 $dept = $_GET['cat'];
 $conn = new mysqli("localhost", "zizo", "123", "hospital");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
if($dept == "All Topics")
    $sql = "select * from question";
    else
    $sql = "select * from question where dept='".$dept."'";

    $result = $conn->query($sql);
        
   ?>
    <?php if ($result->num_rows > 0):  ?>  
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
<?php else: ?>
               <h2 class="topic"><strong>There is no questions Now</strong></h2>
            
                <?php endif; ?> 
            