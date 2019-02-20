<?php
    session_start();
    include_once "db.php";
    if(!$_SESSION['email']) {
        header("Location:index.php");
        exit();
    }
    $dateToCheck = $_POST['dateToCheck'];
    $query = "SELECT * FROM payments_schedule WHERE beginning IN (SELECT beginning FROM payments_schedule WHERE beginning = '$dateToCheck')";
    $query = mysqli_query($connect,$query);
    if(!$query) {
        die("Failed to Connect".mysqli_error($connect));
    }
    
    // $row= mysqli_fetch_array($query);
    while($row= mysqli_fetch_array($query)){
        echo $row['beginning'];
    }
    
    ?>
