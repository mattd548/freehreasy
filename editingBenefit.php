<?php
    session_start();
    include_once "db.php";
    if(!$_SESSION['email']) {
        header("Location:index.php");
        exit();
    }
    
    $benefitID = $_POST['benefitID'];
    $query = "SELECT * FROM benefits WHERE id = '$benefitID'";
    $query = mysqli_query($connect,$query);
    if(!$query) {
        die("Failed to Connect".mysqli_error($connect));
    }
    
    while($row= mysqli_fetch_array($query)){
        $benefit=array($row['name'], $row['type'], $row['percentage']);
    }
    
    echo json_encode($benefit);
?>