<?php

session_start();

require 'DBcon.php';


if(isset($_POST['signin'])){

    $studentID = !empty($_POST['studentID']) ? trim($_POST['studentID']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

    $sql = "SELECT id, studentID, password FROM students WHERE studentID = :studentID";
    $stmt = $pdo->prepare($sql);

    //Bind value.
    $stmt->bindValue(':studentID', $studentID);


    $stmt->execute();

    //Fetch row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //If $row is FALSE.
    if($user === false){
      ?>
  <script type="text/javascript">
   alert("No Such Student Registered ");
  </script>

          <?php
        die;
    } else{

          //Compare the passwords.
          $validPassword = password_verify($passwordAttempt, $user['password']);

          //If $validPassword is TRUE, the login has been successful.
          if($validPassword){

              //Provide the user with a login session.
              $_SESSION['user_id'] = $studentID;

              ?>
        <script type="text/javascript">
        alert("SignIn Successful!!!n");
        </script>

              <?php
              header("Location: shome.php");
              exit;

          } else {      ?>
        <script type="text/javascript">
         alert("Incorrect email and password");
        </script>

                <?php
          }
      }

  }





 ?>
