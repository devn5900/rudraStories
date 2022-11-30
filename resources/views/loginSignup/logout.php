<?php
    session_start();
   include './logIn.php';
       if(logoutstat($_SESSION['ssn'])){

           session_unset();
           session_destroy();
           header("location:   /Log_In/");
        }else{
            logoutstat($_SESSION['ssn']);
        }
         
    // header("location:   /Log_In/");
?>