<?php 

 function setUserdata($row){
        
        $_SESSION['is_logged_in'] = true;
        $_SESSION['username'] =$user;
         
        
    }

function redirect ($page =false,$message= null , $message_type = null){
    
    if(is_string($page)){
        $location = $page;
    }
    else{
        $location = $_SERVER['SCRIPT_NAME'];
	}
    
    
        $_SESSION['message'] = $message;

        $_SESSION['message_type']= $message_type;


header('Location:'.$location);
    exit();
}


   function isLoggedIn(){
       if(isset($_SESSION['is_logged_in']))
           
           return true;
       else
           return false;
       
   }

  


function displayMessage() {
    
    if(!empty($_SESSION['message'])){
        $message = $_SESSION['message'];
        
        if(!empty($_SESSION['message_type'])){
            
            $message_type = $_SESSION['message_type'];
            
            if($message_type == 'error'){
                echo '<div class="alert alert-danger">' . $message .'</div>';
            }else{
                echo '<div class="alert alert-success">'. $message .'</div>';
            }
        }
            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
             
                
        }else{
            echo '';
        }
    
}
function shortenText($text, $chars=400){
   // $text = $text."";
    $text = substr($text,0,$chars);
   /// $text = substr($text,0,strrpos($text,' '));
    $text = $text."...";
    return $text;
}

function __autoload($class_name){
    require_once('classes/'.$class_name.'.php'); 
}

function formatDate($date){
	//F i,Y,g:i a
    $date = date("d M-Y h:i a",strtotime($date));
    return $date;
}




?>