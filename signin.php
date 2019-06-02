<?php

session_start();

require 'DBcon.php';


if(isset($_POST['signin'])){

    //Retrieve the field values from our login form.
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

    //Retrieve the user account information for the given username.
    $sql = "SELECT id, email, password FROM admin WHERE email = :email";
    $stmt = $pdo->prepare($sql);

    //Bind value.
    $stmt->bindValue(':email', $email);


    $stmt->execute();

    //Fetch row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    //If $row is FALSE.
    if($user === false){
        die();
        ?>
        <script type="text/javascript">
         alert("User Doesn't Exist");
        </script>
        <?php
    } else{


          $validPassword = password_verify($passwordAttempt, $user['password']);

          if($validPassword){

              //Provide the user with a login session.
              $_SESSION['admin_id'] = $email;
              ?>
              <script type="text/javascript">
               alert("SignIn Successfull");
              </script>
              <?php
              header("Location: votingReg.php");
              exit;

          } else {

            ?>
            <script type="text/javascript">
             alert("Incorrect Email or Password");
            </script>
            <?php
            die();
          }
      }

  }





 ?>
