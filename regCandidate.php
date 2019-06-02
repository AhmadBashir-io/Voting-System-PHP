<?php

session_start();
require 'DBcon.php';

if(isset($_POST['regCan'])){
  $name = !empty($_POST['name']) ? trim($_POST['name']) : null;
  $phone = !empty($_POST['phone']) ? trim($_POST['phone']) : null;
  $position = !empty($_POST['position']) ? trim($_POST['position']) : null;
  $student_ID = !empty($_POST['student_ID']) ? trim($_POST['student_ID']) : null;
  $candidate_ID = !empty($_POST['candidate_ID']) ? trim($_POST['candidate_ID']) : null;


      //TO ADD: Error checking (username characters, password length, etc).

      $sql = "SELECT COUNT(student_ID) AS num FROM candidate WHERE student_ID = :student_ID";
      $stmt = $pdo->prepare($sql);

      $stmt->bindValue(':student_ID', $student_ID);
      //Execute.
      $stmt->execute();
      //fetch the row
      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      if($row['num'] > 0){
         ?>
<script type="text/javascript">
  alert("That Student already exists!");
</script>


         <?php
      }

    $sql = "INSERT INTO candidate (name, phone, position, student_ID, candidate_ID) VALUES (:name, :phone, :position, :student_ID, :candidate_ID)";
    $stmt = $pdo->prepare($sql);

    //Bind variables.
    $stmt->bindValue(':name', $name);
    $stmt->bindValue(':phone', $phone);
    $stmt->bindValue(':position', $position);
    $stmt->bindValue(':student_ID', $student_ID);
$stmt->bindValue(':candidate_ID', $candidate_ID);
    $result = $stmt->execute();

    if($result){

        ?>
<script type="text/javascript">
 alert("Successfully registered Candidate !!!");
</script>

        <?php
      }

    }

    ?>
