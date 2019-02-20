<?php
include_once "db.php";
session_start();
 if(!$_SESSION['email']){
    header("Location:index.php");
    exit();
 }
 $dateToCheck = $_POST['dateToCheck'];
 $query = "UPDATE payments_schedule SET periodCompleted = '1' WHERE beginning = '$dateToCheck'";
 $run_query = mysqli_query($connect,$query);
?>
