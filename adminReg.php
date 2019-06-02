<?php
require 'registration.php';
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>Administrator Registration</title>
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
margin: 4px 90px;
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

</style>
  </head>
  <body></br></br>
    <h1>VOTING SYSTEM</h1>
    </br></br>
    <div class="reg">
      <h2>Admin Registration</h2>
</br>
<form class="" action="registration.php" method="post">


    <input type="text" name="firstName" value="" placeholder="First Name" required pattern="^[A-Za-z]+"></br>
    <input type="text" name="lastName" value="" placeholder="Last Name" required pattern="^[A-Za-z]+"></br>
    <input type="text" name="phone" value="" placeholder="Phone" required pattern="^[0-9]+"</br>
    <input type="text" name="email" value="" placeholder="Email"required pattern="^[A-Za-z0-9]+"></br>
    <input type="password" name="password" value="" placeholder="Password" required pattern="^[A-Za-z0-9]+"></br></br>
    <input type="submit" name="register" value="Register">

    </form>
</div>
</br></br>

<div class="sign-in">
  <h2>Admin SignIn</h2></br>
  <form class="" action="signin.php" method="post">


  <input type="text" name="email" value="" placeholder="Email" required></br>
  <input type="password" name="password" value="" placeholder="Password" required></br></br>
  <input type="submit" name="signin" value="Sign In">

    </form>
</div>
  </body>
</html>
