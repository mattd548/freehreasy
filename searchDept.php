<?php
    session_start();
    include_once "db.php";
    if(!$_SESSION['email']) {
        header("Location:index.php");
        exit();
    }
    $search = $_POST['search'];
    $query =" SELECT  * FROM departments WHERE dept_name LIKE '%$search%' ORDER BY dept_name ASC";
    //   $query =" SELECT * FROM departments ORDER BY dept_name ASC";
    $query = mysqli_query($connect,$query);
    if(!$query) {
        die("Failed to Connect".mysqli_error($connect));
    }
    while($row= mysqli_fetch_array($query)){
        
        echo "<li style='text-transform: capitalize;'>";
        echo "<span>";
        echo "<a href='deptprofile.php?userId=" . $row["dept_no"] . "&department=". $row["dept_name"] ."'>";
        echo "<img style='width:40px; height:40px;' src='https://png.pngtree.com/svg/20161109/department_1333974.png' />";
        echo "</a>";
        echo "</span>";
        echo $row['dept_name'];
        echo "</li>";
        
    }
    
    ?>