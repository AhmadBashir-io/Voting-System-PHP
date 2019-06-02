<?php

require 'studentsignin.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>Kampus-Voting</title>
        <style media="screen">
          *{
    	      padding: 0;
    	      margin:0;
    	      box-sizing:border-box;
            -webkit-font-smoothing: antialiased;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
          }.flex-container {
              display: -webkit-flex;
              display: flex;
              -webkit-justify-content: space-between;
              justify-content: space-between;
              max-width:1100px;
              margin:auto;
          }
        .flex-item {

            max-width:260px;
padding: 20px;
          height: 180px;
              margin: 10px;
              border-radius: 10px;
background: rgba(0,0,0,.7);
          		box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);

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
            background:url("img/studentsFBlur.jpg")  no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;

            box-shadow: 1px 12px 20px solid rgba(0, 0, 0, 0.9);          }
          h1{
            font-size: 40px;
            float: right;
            font-weight: 100;
            color: #fff;
          }
          h2{
            text-align: center;
            font-size: 30px;
            color: #fff;
            font-weight: 100;
          }
          #sign-in{
            padding: 6px 10px;
            margin: auto;
            height: 220px;
            max-width: 300px;
            border-radius: 5px;
            background: rgba(0,0,0,.7);
            box-shadow: 0px 0px 370px rgba(0, 0, 0, 0.8);
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

border: 1px solid #fff;
      							transition: all 0.8s ease;
      }

      input[type="text"]:hover,input[type="password"]:hover{
      		border-radius: 3px;
          border: 1px solid #fff;
      }
      input[type="submit"]{
        margin: 4px 90px;
      	border-radius: 5px;
      	font-size: 14px;
      	color: #fff;
      	font-weight: 200;

      	padding: 5px 25px  ;
      outline: none;
      									background:rgba(255,255,255,.1);
      									border-radius: 50px;
      								border:0.5px solid #ccc;
box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1);
      							transition: all 0.8s ease;
      }
      input[type="submit"]:hover{

                        background: rgba(255,255,255,.9 );
                        color: #000;

      }
      header{
        height: 70px; padding: 10px;
        background: rgba(0,0,0,.7);
        border-bottom-left-radius: 20px;
        border-bottom-right-radius: 20px;
        box-shadow: 1px 12px 20px solid rgba(0, 0, 0, 0.9);
      }
      .vote{
        height: 50px;
        width: 190px;
        margin: auto;
      }
      .body{


      }
      button:hover,#voteNow:hover{
          background: rgba(0, 0, 0, 0.98);

          box-shadow: 2px 2px 35px rgba(255, 255, 255, 0.8);

      }  .large{
              font-size: 50px;
              font-weight: 200;
            }
            .medium{
              font-size: 38px;
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
            background: rgba(0, 0, 0, 0.5);
            padding: 8px 10px;
            border-radius: 10px;
            border: 0.5px solid #222;
            box-shadow: 2px 2px 35px rgba(0, 0, 0, 0.8);
            transition: all 0.5s ease;
          }    p{
                text-align: center;
                font-size: 20px;
                font-weight: 200;
                color: #fff
              }

    </style>


  </head>
  <body>
<header>

  <h1 style="float:left; font-weight:800; margin-left:30px;">KAMPUS</h1>  <h1 style="float:left;  margin-top:8px ;font-size:30px;margin-left:15px;">E-Voting</h1>

</header>
<div class="body">


</br></br>

</br></br></br>
  <p class="large"> K-Vote Provides an easy way to vote.</p>
  <p class="medium"> Get results as soon as they are released.</p>
</br></br></br><div class="flex-container">
<div class="vote">
<button id="voteNow"  onclick="openLogin()" >Vote Now</button>
</div>
</div></br></br></br>
<div id="sign-in" style="display:none; ">
  <h2>Student SignIn</h2></br>
  <form class="" action="" method="post">

  <input type="text" name="studentID" value="" placeholder="Student ID" required></br>
  <input type="password" name="password" value="" placeholder="Password" required></br></br>
  <input type="submit" name="signin" value="Sign In">

    </form>

</div></br></br>
<div class="flex-container">

    <div class="flex-item">
      <p class="medium">Step 1</p>
        <p></br>Sign in and Choose your Candidates</p>
    </div>
    <div class="flex-item">

        <p class="medium">Step 2</p>
  <p></br>Place Your Vote, and Wait for Results</p>
    </div>


    <div class="flex-item">
      <p class="medium">Step 3</p>
        <p> </br> Get Results Anywhere as Soon as its Released </p>
    </div>
</div>
</div>
    </br></br>



<script>

function openLogin(){

    document.getElementById("sign-in").style.display ="block";
}
</script>
  </body>

</html>
