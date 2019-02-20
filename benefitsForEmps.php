<?php
    session_start();
    include_once "db.php";
    if(!$_SESSION['email']) {
        header("Location:index.php");
        exit();
    }
    $benefitType = $_POST['benefitType'];
    
    if($benefitType == "Insurance"){
        $query = "SELECT * FROM benefits WHERE type = 'Insurance' ORDER BY name ASC";
    }
    else if($benefitType == "Dental"){
        $query = "SELECT * FROM benefits WHERE type = 'Dental' ORDER BY name ASC";
    }
     else if($benefitType == "Vision"){
         $query = "SELECT * FROM benefits WHERE type = 'Vision' ORDER BY name ASC";
    }
    
     else if($benefitType == "Departments"){
         $query = "SELECT * FROM departments ORDER BY dept_name ASC";
    }
    
    $query = mysqli_query($connect,$query);
    if(!$query) {
        die("Failed to Connect".mysqli_error($connect));
    }
    
    if($benefitType != "Departments"){
    while($row= mysqli_fetch_array($query)){
        echo "<option value='";
        echo $row['name'];
        echo "'>";
        echo $row['name'];
        echo "</option>";
    }
    }
    else{
         while($row= mysqli_fetch_array($query)){
        echo "<option value='";
        echo $row['dept_name'];
        echo "'>";
        echo $row['dept_name'];
        echo "</option>";
    }
    }

?>
