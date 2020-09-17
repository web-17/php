<?php

require_once "includes/db.php";

//var_dump($_POST);

$id =$_POST['id'];

if(empty($id)){
  die;
}

$sql = $conn->prepare("DELETE FROM books WHERE id=?");
$sql->bind_param("i", $id);
$result=$sql->execute();

if($result){
  echo '<div class= "md-offset-4 col-md-5 text-center alert alert-success">
  ! record was deleted! </div>';
  }
  else{
    die('connection error');
    }
    $sql->close();
    $conn->closw();








 ?>
