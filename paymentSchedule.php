<?php
    session_start();
    include_once "db.php";
    if(!$_SESSION['email']) {
        header("Location:index.php");
        exit();
    }
    $query = "SELECT * FROM payments_schedule ORDER BY period DESC";
    $query = mysqli_query($connect,$query);
    if(!$query) {
        die("Failed to Connect".mysqli_error($connect));
    }
    
    while($row= mysqli_fetch_array($query)){
        
        echo "<tr>";
        echo "<td class='id' style='text-align:center; vertical-align: middle;'>";
        echo "<span>";
        echo "<button class='button btn' data-toggle='modal' data-target='#myModal3'>";
        echo "<i class='fas fa-edit'></i>";
        echo "</button>";
        echo "</span>";
        echo $row['period'];
        echo "</td>";
        echo "<td>";
        echo $row['beginning'];
        echo "</td>";
        echo "<td>";
        echo $row['ending'];
        echo "</td>";
        echo "<td>";
        echo $row['payCheckDate'];
        echo "</td>";
        echo "<td style='text-align:center; vertical-align: top;'>";
        if($row['periodCompleted'] == 1 ){
            echo "<input style='margin-left:-10px;' value='true' type='checkbox' class='form-check-input' disabled checked>";
        }
        else if($row['periodCompleted'] == 0 ){
            echo "<input style='margin-left:-10px;' value='true' type='checkbox' class='form-check-input' disabled>";
        }
        echo "</td>";
        
        echo "</tr>";
    }
    
    ?>
