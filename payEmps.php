<?php
    session_start();
    include_once "db.php";
    if(!$_SESSION['email']) {
        header("Location:index.php");
        exit();
    }
    $dateToCheck = $_POST['dateToCheck'];
    $query = "SELECT * FROM employees WHERE id NOT IN (SELECT employee_FK FROM employees_records 
    WHERE periodPaid = '1' AND periodStartDate_FK IN (SELECT beginning FROM payments_schedule WHERE beginning = '$dateToCheck' ) ) 
    AND startDate <= '$dateToCheck' ORDER BY firstName ASC, lastName ASC;";
    
    $query = mysqli_query($connect,$query);
    if(!$query) {
        die("Failed to Connect".mysqli_error($connect));
    }
    
    $image = "";
    while($row= mysqli_fetch_array($query)){
        
        echo "<li>";
        echo "<span>";
        echo "<a href='paystub/paystub.php?userId=" . $row['id'] ."&periodStartDate=$dateToCheck'>";
        echo "<i class='far fa-money-bill-alt'></i>";
        echo "</a>";
        echo "</span>";
        
        if($row["gender"] == Male){
            $image = "https://www.w3schools.com/w3css/img_avatar3.png";
        }
        else if($row["gender"] == Female){
            $image = "https://www.w3schools.com/w3css/img_avatar4.png";
        }
        echo "<img style='width:43px; height:43px;' src=$image />";
        
        echo $row['firstName']."  ".$row['lastName'];
        echo "</li>";
    
    }
    
    ?>