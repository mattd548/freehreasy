<?php
include_once "db.php";
    //$userId = ($_GET['userId']);
    session_start();
    //echo $_SESSION['userprofileid'];
    //echo $userId;
    
    $endDate = ($_GET['endDate']);
    if(isset($_POST['submit'])) {
      $endDate = ($_GET['endDate']);
      $query = "UPDATE employees SET terminationDate = '$endDate' WHERE id = {$_SESSION['userprofileid']}";
      $run_query = mysqli_query($connect,$query);
  }

    $query = "SELECT firstName, lastName, middleName, gender, ssn, dob, organization, department, iden, position, salary, weekhours, startDate, terminationDate, maritalStatus, dependants, health, dental,vision, addressOne, addressTwo, apt, city, _state, zipcode, phone, email FROM employees WHERE id = {$_SESSION['userprofileid']}";
    $results = mysqli_query($connect, $query);

   while($row = mysqli_fetch_array($results)) {
       $firstName = $row['firstName'];
       $lasttName = $row['lastName'];
       $middletName = $row['middleName'];
       $gender = $row['gender'];
       $ssn = $row['ssn'];
       $dob = $row['dob'];
       $organization = $row['organization'];
       $department = $row['department'];
       $id = $row['iden'];
       $position = $row['position'];
       $salary= $row['salary'];
       $weekhours= $row['weekhours'];
       $startDate = $row['startDate'];
       $terminationDate=$row['terminationDate'];
       $maritalStatus = $row['maritalStatus'];
       $dependants = $row['dependants'];
       $health = $row['health'];
       $dental = $row['dental'];
       $vision = $row['vision'];
       $addressOne = $row['addressOne'];
       $addressTwo = $row['addressTwo'];
       $apt = $row['apt'];
       $city = $row['city'];
       $state = $row['_state'];
       $zipcode = $row['zipcode'];
       $phone = $row['phone'];
       $email  = $row['email'];
   }
  
   $query = "INSERT INTO employee_history(firstName, lastName, middleName, gender, ssn, dob, organization, department, iden, position, salary, weekhours, startDate, terminationDate, maritalStatus, dependants, health,dental, vision, addressOne, addressTwo , apt, city, _state, zipcode, phone, email) VALUES ('$firstName', '$lasttName', '$middletName', '$gender', '$ssn', '$dob', '$organization', ' $department', '$id', '$position', '$salary', '$weekhours', '$startDate', '$terminationDate', '$maritalStatus', '$dependants', '$health', '$dental', '$vision', '$addressOne', '$addressTwo', '$apt', '$city', '$state', '$zipcode', '$phone', '$email')";
   $run_query = mysqli_query($connect,$query);
   $query="DELETE FROM employees WHERE id = {$_SESSION['userprofileid']}";
   $delete = mysqli_query($connect,$query);
     header("Refresh:1; employees.php");
?>