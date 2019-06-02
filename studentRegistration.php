<?php

session_start();

require 'DBcon.php';

if(isset($_POST['submit'])){
  $firstName = !empty($_POST['firstName']) ? trim($_POST['firstName']) : null;
  $lastName = !empty($_POST['lastName']) ? trim($_POST['lastName']) : null;
  $phone = !empty($_POST['phone']) ? trim($_POST['phone']) : null;
  $studentID = !empty($_POST['studentID']) ? trim($_POST['studentID']) : null;
  $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
  $password = !empty($_POST['password']) ? trim($_POST['password']) : null;


      //TO ADD: Error checking (username characters, password length, etc).


      //Construct the SQL statement and prepare it.
      $sql = "SELECT COUNT(studentID) AS num FROM students WHERE studentID = :studentID";
      $stmt = $pdo->prepare($sql);

      //Bind the provided studentID to our prepared statement.
      $stmt->bindValue(':studentID', $studentID);
      //Execute.
      $stmt->execute();
      //fetch the row
      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      if($row['num'] > 0){

        ?>
        <script type="text/javascript">
         alert("User Already Exist");
        </script>
        <?php
        die();


      }

    $hash_password = password_hash($password, PASSWORD_DEFAULT, ['cost' => 12]);

    //Prepare our INSERT statement.
    //Remember: We are inserting a new row into our users table.
    $sql = "INSERT INTO students (firstName, lastName, phone, studentID, email, password) VALUES (:firstName, :lastName, :phone, :studentID, :email, :password)";
    $stmt = $pdo->prepare($sql);

    //Bind our variables.
    $stmt->bindValue(':firstName', $firstName);
    $stmt->bindValue(':lastName', $lastName);
    $stmt->bindValue(':phone', $phone);
    $stmt->bindValue(':studentID', $studentID);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $hash_password);

    //Execute the statement and insert the new account.
    $result = $stmt->execute();

    //If the signup process is successful.
    if($result){

      header("Location: votingReg.php");
      exit;


      }


    }
    ?>
