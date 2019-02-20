<?php
    session_start();
    include_once "db.php";
    if(!$_SESSION['email']) {
        header("Location:index.php");
        exit();
    }
    $search = $_POST['search'];
    $query =" SELECT  * FROM employees WHERE firstName LIKE '%$search%' OR lastName LIKE '%$search%' ORDER BY firstName ASC";
    $query = mysqli_query($connect,$query);
    if(!$query) {
        die("Failed to Connect".mysqli_error($connect));
    }
    
    $image = "";
    while($row= mysqli_fetch_array($query)){
        
        echo "<li>";
        echo "<span>";
        echo "<a href='profile.php?userId=" . $row["id"] . "'>";
        
        if($row["gender"] == Male){
            $image = "https://www.w3schools.com/w3css/img_avatar3.png";
        }
        else if($row["gender"] == Female){
            $image = "https://www.w3schools.com/w3css/img_avatar4.png";
        }
        echo "<img style='width:43px; height:43px;' src=$image />";
        
        echo "</a>";
        echo "</span>";
        echo $row['firstName']."  ".$row['lastName'];
        echo "</li>";
        
    }
    
    ?>

