<?php
require 'functions.php';
//home.php

require 'studentRegistration.php';
if(!isset($_SESSION['admin_id']) ){
    //User not logged in. Redirect them back to the login.php page.
    header('Location: adminReg.php');
    exit;
}


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register Student</title>
    <style media="screen">

      *{
      	padding: 0;
      	margin:0;
      	box-sizing:border-box;
        -webkit-font-smoothing: antialiased;

        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      }
        .reg{
          margin: auto;
          height: 330px;
          max-width: 300px;
          background: rgba(255,255,255,.9);
          padding: 6px 10px;
          border-radius: 30px;
          box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.7);
        }
        html{
          background:url("img/vs1.jpg")  no-repeat center center fixed;
           -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;

        }
  h1{
    font-size: 60px;
    text-align: center;
    font-weight: 600;
    color: #eee;

  }
        h2{
          text-align: center;
          font-size: 30px;
          color: #444;
          font-weight: 100;
        }
        .sign-in{
          padding: 6px 10px;
          margin: auto;
          height: 200px;
          max-width: 300px;
          border-radius: 30px;
          background: rgba(255,255,255,.9);
          box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.7);
        }

        input[type="text"],input[type="password"]{
          margin: 4px 40px;
        	border-radius: 5px;
        	font-size: 14px;
        	color: #333;
        	font-weight: 200;

        	padding: 5px 25px  ;
        outline: none;
        									background:#fff;
        									border-radius: 50px;
        								border:0.5px solid #ccc;

        							transition: all 0.8s ease;
        }

        input[type="text"]:hover,input[type="password"]:hover{
        		border-radius: 3px;
            border: 0.5px solid #000;
        }
        input[type="submit"]{
          margin: 4px 60px;
        	border-radius: 5px;
        	font-size: 14px;
        	color: #333;
        	font-weight: 200;

        	padding: 5px 25px  ;
        outline: none;
        									background:#fff;
        									border-radius: 50px;
        								border:0.5px solid #ccc;
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1);
        							transition: all 0.8s ease;
        }
        input[type="submit"]:hover{

                          background:#666;
                          color: #fff;

        }
        header{
background: #fff;
height: 60px;
padding: 10px 20px;
box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.5);

        }
      a{
          float: right;
          text-decoration: none;
          color: #fff;
          background: #444;
          font-weight: 300;
          padding: 8px 10px;
          border-radius: 10px;
          box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
          transition: all 0.5s ease;
        } button:hover,a:hover{
            background: #666;

        }
        button{
          color: #fff;
          background: #444;
          font-weight: 300;
          padding: 8px 10px;
          font-size: 18px;
          float: left;
          border: 0px solid #fff;
          border-radius: 10px;
          box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
          transition: all 0.5s ease;
        }
    </style>
  </head>
  <body>
    <header>
  <button  onclick="openCandidate()" >Register Candidates</button>
      <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>  Log Out
      </a><h2 style="font-size:22px;">ADMIN USER:  <?=e($_SESSION['admin_id']);?></h2>
  </br></br>

    </header>

  </br></br>
    <h1>STUDENT REGISTRATION</h1>
    </br></br>

    <div class="reg">

<h2>Register Student</h2>


<form  action="" method="post">

    <input type="text" name="firstName" value="" placeholder="First Name"></br>
    <input type="text" name="lastName" value="" placeholder="Last Name"></br>
    <input type="text" name="phone" value="" placeholder="Phone" ></br>
    <input type="text" name="studentID" value="" placeholder="Student ID"></br>
    <input type="text" name="email" value="" placeholder="Email"></br>
    <input type="password" name="password" value="" placeholder="Password"></br></br>
    <input type="submit" name="submit" value="Register Student">
    </form>
</div></br></br></br>

<div class="reg" id="candidate" style="height:320px; display:none;">

    <span style="font-size:24px; float:right; margin-right:10px;" onclick="closeCandidate()">&times;</span><h2>Register Candidate</h2></br>

  <form  action="regCandidate.php" method="post">

      <input type="text" name="name" value="" placeholder="Full Name"></br>
      <input type="text" name="phone" value="" placeholder="Phone" ></br>
      <input type="text" name="position" value="" placeholder="Position" ></br>
      <input type="text" name="student_ID" value="" placeholder="Student ID"></br></br>
      <input type="text" name="candidate_ID" value="" placeholder="Candidate ID"></br></br>
      <input type="submit" name="regCan" value="Register Candidate">
      </form>
</div>
</br></br></br></br></br></br>
<script >

 function  openCandidate(){
  document.getElementById("candidate").style.display ="block";
  }
  function closeCandidate(){

      document.getElementById("candidate").style.display ="none";
  }
</script>
  </body>
</html>
