<?php
require 'functions.php';
//home.php


session_start();

if(!isset($_SESSION['user_id']) ){
    //User not logged in. Redirect them back to the login.php page.
    header('Location: adminReg.php');
    exit;
}


 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Voting System</title>
   </head>
   <body>

     <h2><?=e($_SESSION['user_id']);?></h2>

   </body>
 </html>
