<?php
session_start();
require 'functions.php';
require 'DBcon.php';
//home.php

if(!isset($_SESSION['user_id']) ){
    //User not logged in. Redirect them back to the login.php page.
    header('Location: studentlogin.php');
    exit;
}else {


$sql = "SELECT canVote FROM students WHERE studentID = '".$_SESSION['user_id']."' ";
$stmt = $pdo->prepare($sql);
 $stmt->execute();
$result = $stmt->fetchColumn();

if ($result === 1){

  header("Location: cantVote.php");

}
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Vote A candidate</title>
<style media="screen">
*{
  padding: 0;
  margin:0;
  -webkit-font-smoothing: antialiased;

  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
}
html{

}
  img{
    width: 100%;
    height: 100%;
    border-radius: 10px;
  }
  .flex-container {
      display: -webkit-flex;
      display: flex;
      -webkit-justify-content: space-between;
      justify-content: space-between;
      max-width:1100px;
      margin:auto;
  }
  .two-flex-container {
      display: -webkit-flex;
      display: flex;
      -webkit-justify-content: space-between;
      justify-content: space-between;
      max-width:750px;
      margin:auto;
  }
  .flex-item {

    max-width:260px;

  height: 230px;
      margin: 30px;
  		padding: 0px 0px 140px;
      border-radius: 10px;

  		box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);

  }
  h2{
    margin-right: 280px;
    margin-top: 10px;
    font-size: 100px;
    text-align: center;
    font-weight: 200;
    color: #fff;

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
  }
  a:hover{
      background: #666;

  }
  header{
    height: 50px; padding: 10px;
    background: #222;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 1px 12px 20px solid rgba(0, 0, 0, 0.9);
  }

  .btn{
    margin: auto;
    height: 0px;
    width: 0px;
  }
  input[type=submit]{
    margin: auto;
    width: 250px;
    height: 50px;
    background: #444;
    color: #aaa;
    font-size: 30px;
    font-weight:200;
    transition: all 0.3s ease;
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
    border: 0px solid #fff;
  }
  input[type="submit"]:hover{

    background: #000;
    color: #fff;

  }
  input[type="radio"]{
    margin: 10px 30px;
  }
  h1{
    color: #ccc;
    text-align: center;
    font-size: 86px;
    font-weight: 100;

  }
  p{
    text-align: center;
    font-size: 20px;
    font-weight: 100;
  }

.name{
  text-align: center;
  font-size: 27px;
  font-weight: 100;
}
</style>
  </head>
  <body>
  <header><h1 style="float:left; font-weight:800; font-size:40px; margin-left:30px;">KAMPUS</h1>  <h1 style="float:left;  margin-top:8px ;font-size:30px;margin-left:15px;">E-Voting</h1>
        <a href="slogout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>  Log Out
        </a><h2 style="font-size:22px;">Student ID:  <?=e($_SESSION['user_id']);?></h2> </br></br>
      </header>
    </br>



    <h1>Vote For A Candidate</h1>
  </br>

  <form class="vote" action="voteForm.php" method="post">

  <div class="flex-container">

      <div class="flex-item">
          <img src="img/vs1.jpg" alt=""></br>
          <div class="name">
          Banda Panda
        </div> <input type="radio" name="president" value="1" required><p>As </br> President</p></br></br>
      </div>

      <div class="flex-item">
        <img src="img/vs1.jpg" alt=""></br>
        <div class="name">
          Keleb Broese
        </div><input type="radio" name="president" value="2" required><p>As </br> President</p></br></br>
      </div>

      <div class="flex-item">
        <img src="img/vs1.jpg" alt=""> </br>
        <div class="name">
          Kemu kinsite
        </div> <input type="radio" name="president" value="3" required><p>As </br> President</p></br></br>
      </div>
      </br></br>
  </div>
  <div class="flex-container">

      <div class="flex-item">
        <img src="img/vs1.jpg" alt=""></br>
        <div class="name">
          Kanda pomo
        </div><input type="radio" name="vpresident" value="1" required><p>As </br> Vice President</p></br></br>
      </div>

      <div class="flex-item">
      <img src="img/vs1.jpg" alt=""></br>
      <div class="name">
        Kofi Kinata
      </div>
      <input type="radio" name="vpresident" value="2" required><p>As </br> Vice President</p></br></br>
      </div>

      <div class="flex-item">
      <img src="img/vs1.jpg" alt=""></br>
      <div class="name">
        Kemu kinsite
      </div><input type="radio" name="vpresident" value="3" required><p>As </br> Vice President</p></br></br>
      </div>
      </br></br>
  </div>

  <div class="two-flex-container">

      <div class="flex-item">
      <img src="img/vs1.jpg" alt=""></br>
      <div class="name">
        Keleb Broese
      </div><input type="radio" name="organizer" value="1" required><p>As </br> Organizer</p></br></br>
      </div>

      <div class="flex-item">
      <img src="img/vs1.jpg" alt="">
    </br>
    <div class="name">
    Banda Panda
  </div> <input type="radio" name="organizer" value="2" required><p>As </br> Organizer</p></br></br>
      </div>
      </br></br>
  </div>

  <div class="two-flex-container">

      <div class="flex-item">
        <img src="img/vs1.jpg" alt=""></br>
        <div class="name">
          Kofi Kinata
        </div><input type="radio" name="secretary" value="1" required><p>As </br> Secretary</p></br></br>
      </div>

      <div class="flex-item">
      <img src="img/vs1.jpg" alt=""></br>
      <div class="name">
      Banda Panda
    </div> <input type="radio" name="secretary" value="2" required><p>As </br> Secretary</p></br></br>
      </div>
      </br></br>
  </div>

  <div class="two-flex-container">

      <div class="flex-item">
      <img src="img/vs1.jpg" alt=""></br>
      <div class="name">
        Keleb Broese
      </div><input type="radio" name="vsecretary" value="1" required><p>As </br> Vice Secretary</p></br></br>
      </div>

      <div class="flex-item">
      <img src="img/vs1.jpg" alt=""></br>
      <div class="name">
      Banda Panda
    </div> <input type="radio" name="vsecretary" value="1" required><p>As </br> Vice Secretary</br></br>
      </div>
      </br></br>
  </div></br></br></br>
<div class="two-flex-container">

        <input type="submit" name="submitVote" value="Vote">
</div>




  </form>
  </div>


  </body>
</html>
