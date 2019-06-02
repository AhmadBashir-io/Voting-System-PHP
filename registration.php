<?php

session_start();

require 'DBcon.php';

if(isset($_POST['register'])){
  $firstName = !empty($_POST['firstName']) ? trim($_POST['firstName']) : null;
  $lastName = !empty($_POST['lastName']) ? trim($_POST['lastName']) : null;
  $phone = !empty($_POST['phone']) ? trim($_POST['phone']) : null;
  $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
  $password = !empty($_POST['password']) ? trim($_POST['password']) : null;


      //TO ADD: Error checking (username characters, password length, etc).

      $sql = "SELECT COUNT(email) AS num FROM admin WHERE email = :email";
      $stmt = $pdo->prepare($sql);

      $stmt->bindValue(':email', $email);
      //Execute.
      $stmt->execute();
      //fetch the row
      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      if($row['num'] > 0){
         ?>
<script type="text/javascript">
  alert("That email already exists!");
</script>


         <?php
      }

    $hash_password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);

    $sql = "INSERT INTO admin (firstName, lastName, phone, email, password) VALUES (:firstName, :lastName, :phone, :email, :password)";
    $stmt = $pdo->prepare($sql);

    //Bind variables.
    $stmt->bindValue(':firstName', $firstName);
    $stmt->bindValue(':lastName', $lastName);
    $stmt->bindValue(':phone', $phone);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $hash_password);

    $result = $stmt->execute();

    if($result){
      $_SESSION['admin_id'] = $email;
      header("Location: votingReg.php");

      }

    }

    ?>
