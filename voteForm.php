<?php

session_start();

require 'DBcon.php';
$sql = "SELECT canVote FROM students WHERE studentID = '".$_SESSION['user_id']."' ";
$stmt = $pdo->prepare($sql);
 $stmt->execute();
$result = $stmt->fetchColumn();

if ($result === 1){

  header("Location: cantVote.php");
die;
}

if(isset($_POST['submitVote'])){

$president = $_POST["president"];
$vpresident = $_POST["vpresident"];
$organizer = $_POST["organizer"];
$secretary = $_POST["secretary"];
$vsecretary = $_POST["vsecretary"];





  if($president == 1){
    //add one vote to president 1

    $sql = "SELECT votes FROM candidate WHERE candidate_ID = 1";
    $stmt = $pdo->prepare($sql);

    //Execute.
    $stmt->execute();
$result = $stmt->fetchColumn();
$result = $result + 1;


$sql = "UPDATE candidate SET votes = $result WHERE candidate_ID = 1";
$stmt = $pdo->prepare($sql);

//Execute.
$stmt->execute();


  }elseif ($president == 2) {
      //add one vote to president 2
      $sql = "SELECT votes FROM candidate WHERE candidate_ID =  2";
      $stmt = $pdo->prepare($sql);

      //Execute.
      $stmt->execute();
  $result = $stmt->fetchColumn();
  $result = $result + 1;


  $sql = "UPDATE candidate SET votes = $result WHERE candidate_ID = 2";
  $stmt = $pdo->prepare($sql);

  //Execute.
  $stmt->execute();

  }else{
      //add one vote to president 3
      $sql = "SELECT votes FROM candidate WHERE candidate_ID = 3";
      $stmt = $pdo->prepare($sql);

      //Execute.
      $stmt->execute();
  $result = $stmt->fetchColumn();
  $result = $result + 1;


  $sql = "UPDATE candidate SET votes = $result WHERE candidate_ID = 3";
  $stmt = $pdo->prepare($sql);

  //Execute.
  $stmt->execute();
  }




  if($vpresident == 1){
    //add one vote to vpresident 1

    $sql = "SELECT votes FROM candidate WHERE candidate_ID = 4";
    $stmt = $pdo->prepare($sql);

    //Execute.
    $stmt->execute();
$result = $stmt->fetchColumn();
$result = $result + 1;


$sql = "UPDATE candidate SET votes = $result WHERE candidate_ID = 4";
$stmt = $pdo->prepare($sql);

//Execute.
$stmt->execute();

  }elseif ($vpresident == 2) {
      //add one vote to vpresident 2

      $sql = "SELECT votes FROM candidate WHERE candidate_ID = 5";
      $stmt = $pdo->prepare($sql);

      //Execute.
      $stmt->execute();
  $result = $stmt->fetchColumn();
  $result = $result + 1;


  $sql = "UPDATE candidate SET votes = $result WHERE candidate_ID = 5";
  $stmt = $pdo->prepare($sql);

  //Execute.
  $stmt->execute();
  }else{
      //add one vote to vpresident 3

      $sql = "SELECT votes FROM candidate WHERE candidate_ID = 6";
      $stmt = $pdo->prepare($sql);

      //Execute.
      $stmt->execute();
  $result = $stmt->fetchColumn();
  $result = $result + 1;


  $sql = "UPDATE candidate SET votes = $result WHERE candidate_ID = 6";
  $stmt = $pdo->prepare($sql);

  //Execute.
  $stmt->execute();
  }

  if($organizer == 1){
    //add one vote to organizer 1
    $sql = "SELECT votes FROM candidate WHERE candidate_ID = 7";
    $stmt = $pdo->prepare($sql);

    //Execute.
    $stmt->execute();
$result = $stmt->fetchColumn();
$result = $result + 1;


$sql = "UPDATE candidate SET votes = $result WHERE candidate_ID = 7";
$stmt = $pdo->prepare($sql);

//Execute.
$stmt->execute();
  }else{
      //add one vote to organizer 2
      $sql = "SELECT votes FROM candidate WHERE candidate_ID = 8";
      $stmt = $pdo->prepare($sql);

      //Execute.
      $stmt->execute();
  $result = $stmt->fetchColumn();
  $result = $result + 1;


  $sql = "UPDATE candidate SET votes = $result WHERE candidate_ID  = 8";
  $stmt = $pdo->prepare($sql);

  //Execute.
  $stmt->execute();
  }

  if($secretary == 1){
    //add one vote to secretary 1
    $sql = "SELECT votes FROM candidate WHERE candidate_ID = 9";
    $stmt = $pdo->prepare($sql);

    //Execute.
    $stmt->execute();
$result = $stmt->fetchColumn();
$result = $result + 1;


$sql = "UPDATE candidate SET votes = $result WHERE candidate_ID = 9";
$stmt = $pdo->prepare($sql);

//Execute.
$stmt->execute();
  }else{
      //add one vote to secretary 2
      $sql = "SELECT votes FROM candidate WHERE candidate_ID = 10";
      $stmt = $pdo->prepare($sql);

      //Execute.
      $stmt->execute();
  $result = $stmt->fetchColumn();
  $result = $result + 1;

  $sql = "UPDATE candidate SET votes = $result WHERE candidate_ID = 10";
  $stmt = $pdo->prepare($sql);

  //Execute.
  $stmt->execute();
  }

  if($vsecretary == 1){
    //add one vote to vsecretary 1
    $sql = "SELECT votes FROM candidate WHERE candidate_ID = 11";
    $stmt = $pdo->prepare($sql);

    //Execute.
    $stmt->execute();
$result = $stmt->fetchColumn();
$result = $result + 1;


$sql = "UPDATE candidate SET votes = $result WHERE candidate_ID = 11";
$stmt = $pdo->prepare($sql);

//Execute.
$stmt->execute();
  }else{
      //add one vote to vsecretary 2
      $sql = "SELECT votes FROM candidate WHERE candidate_ID = 12";
      $stmt = $pdo->prepare($sql);

      //Execute.
      $stmt->execute();
  $result = $stmt->fetchColumn();
  $result = $result + 1;


  $sql = "UPDATE candidate SET votes = $result WHERE candidate_ID = 12";
  $stmt = $pdo->prepare($sql);

  //Execute.
  $stmt->execute();
  }

  $canVote = 1;
  $sql = "UPDATE students SET canVote = $canVote WHERE studentID = '".$_SESSION['user_id']."' ";
  $stmt = $pdo->prepare($sql);

  //Execute.
  $stmt->execute();


    header("Location: thanks.php");

}
?>
