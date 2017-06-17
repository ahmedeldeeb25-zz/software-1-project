<?php include("classes/system_helper.php"); ?>

<?php
   $User = new user();
   
   session_start();
   $User->do_logout();

?>