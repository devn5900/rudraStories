<?php 
 session_start();
    function csrf_gene(){

        $token= bin2hex(random_bytes(32));
        $_SESSION['token']=$token;
        $_SESSION['token_time']=time();
    }
    function validate_token($token){

        if($token==$_SESSION['token']){
            return true;
        }else{
            return false;
        }

    }
  
?>