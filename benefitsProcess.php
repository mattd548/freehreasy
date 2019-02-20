<?php
    session_start();
    include_once "db.php";
    if(!$_SESSION['email']) {
        header("Location:index.php");
        exit();
    }
    $benefitType = $_POST['benefitType'];
    
    if($benefitType == "Insurance"){
        $query = "SELECT * FROM benefits WHERE type = 'Insurance' ORDER BY id ASC";
    }
    else if($benefitType == "Dental"){
        $query = "SELECT * FROM benefits WHERE type = 'Dental' ORDER BY id ASC";
    }
     else if($benefitType == "Vision"){
         $query = "SELECT * FROM benefits WHERE type = 'Vision' ORDER BY id ASC";
    }
    else if($benefitType == "AllBenefits"){
         $query = "SELECT * FROM benefits ORDER BY type ASC, id ASC";
    }
    
    $query = mysqli_query($connect,$query);
    if(!$query) {
        die("Failed to Connect".mysqli_error($connect));
    }
    
    while($row= mysqli_fetch_array($query)){
        
        echo "<tr>";
        echo "<td class='id'>";
        echo "<span>";
        echo "<button class='button btn' data-toggle='modal' data-target='#myModal'>";
        echo "<i class='fas fa-edit'></i>";
        echo "</button>";
        echo "</span>";
        echo $row['id'];
        echo "</td>";
        echo "<td style='text-transform:capitalize;'>";
        echo $row['name'];
        echo "</td>";
        echo "<td style='text-transform:capitalize;'>";
        echo $row['type'];
        echo "</td>";
        echo "<td style='text-align:center;'>";
        echo $row['percentage']*100;
        echo "%</td>";
        echo "</tr>";
    }
    
?>
