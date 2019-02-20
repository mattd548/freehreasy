<?php
session_start();
 include_once "db.php";
 if(!$_SESSION['email']) {
    header("Location:index.php");
    exit();
 }

    $query = "SELECT  * FROM employees ";
    $query = mysqli_query($connect,$query);

    while($row= mysqli_fetch_array($query)) {
      echo '<div>';
      echo "<a href='profile.php?userId=" . $row["id"] . "'>";
      echo  $row['firstName'] . "  ". "  ".$row['lastName'];
      echo '</a>';
      echo '</div>';
   }




?>

