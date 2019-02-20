<?php
    session_start();
    include_once "db.php";
    if(!$_SESSION['email']) {
        header("Location:index.php");
        exit();
    }
    
    $period = $_POST['period'];
    $query = "SELECT * FROM payments_schedule WHERE period = '$period'";
    $query = mysqli_query($connect,$query);
    if(!$query) {
        die("Failed to Connect".mysqli_error($connect));
    }
    
    while($row= mysqli_fetch_array($query)){
        $period=array($row['beginning'], $row['ending'], $row['payCheckDate'], $row['periodCompleted']);
    }
    
    echo json_encode($period);
?>
