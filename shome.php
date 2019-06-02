<?php
session_start();
require 'functions.php';
if(!isset($_SESSION['user_id']) ){
    //User not logged in. Redirect them back to the login.php page.
    header('Location: studentlogin.php');
    exit;
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Homepage</title>
    <style media="screen">
    *{
      padding: 0;
      margin:0;
      -webkit-font-smoothing: antialiased;

      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
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
      .logout{
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
      a:hover,#voteNow:hover{
          background: #666;

      }
      header{
    background: #222;
    height: 34px;
    padding: 20px 30px;
    box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.5);

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
        font-size: 40px;
        float: right;
        font-weight: 100;
        color: #fff;
      }
      header{ width: 100%;
        height: 50px; padding: 10px;
        background: rgba(0,0,0,.7);
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        box-shadow: 1px 12px 20px solid rgba(0, 0, 0, 0.9);
      }
      p{
        text-align: center;
        font-size: 20px;
        font-weight: 100;
        color: #fff
      }
      .large{
        font-size: 50px;
        font-weight: 200;
      }
      .medium{
        font-size: 38px;
          font-weight: 200;
      }
    .name{
      text-align: center;
      font-size: 27px;
      font-weight: 100;
    }
    #voteNow{
      font-size: 40px;
      font-weight: 100;
      padding: 10px;
      text-decoration: none;
      color: #fff;
      background: #444;
      padding: 8px 10px;
      border-radius: 10px;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
      transition: all 0.5s ease;
    }
    .flex-container {
        display: -webkit-flex;
        display: flex;
        -webkit-justify-content: space-between;
        justify-content: space-between;
        max-width:1100px;
        margin:auto;
    }
    .vote{
      height: 50px;
      width: 190px;
      margin: auto;
    }
    .results{
      max-width:260px;
padding: 20px;
    height: 220px;
        margin: 10px;
        border-radius: 10px;
background: rgba(0,0,0,.7);
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);

    }
    html{

              background:url("img/studentsFBlur.jpg")  no-repeat center center fixed;
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
    }
    </style>
  </head>
  <body>
    <header><h1 style="float:left; font-weight:800; margin-left:30px;">KAMPUS</h1>  <h1 style="float:left;  margin-top:8px ;font-size:30px;margin-left:15px;">E-Voting</h1>
          <a class="logout"href="slogout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>  Log Out
          </a><h2 style="font-size:22px;">Student ID:  <?=e($_SESSION['user_id']);?></h2>
        </header>
        <div class="body">


</br></br></br></br>


          <p class="medium">STEP 1::: Choose a Canditade for Each Position</p>
                    <p class="medium">STEP 2::: Place Your Vote and Wait for Results </p>
                    <p class="medium">STEP 3:::Get Results Immediately They are Posted</p>
          <p class="medium"> </p>
        </br></br></br><div class="flex-container">
        <div class="vote">
  <a id="voteNow" href="vote.php">Vote Now</a>
        </div>


        </div></br></br>
      </br></br><p class="large">RESULTS</p>
      <div class="results">
          <p class="medium">Results haven't been released yet, Please come back later.</p>
      </div>
</br></br>
</div>
  </body>
</html>
