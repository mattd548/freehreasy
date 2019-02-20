<?php
session_start();
 if(!$_SESSION['email']) {
    header("Location:index.php");
    exit();
 }
?>






<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
body { 
    background: url(t.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
label {
font-weight: bold;
display: block;
width: 150px;
float: left;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-6">
<div id="ui">
    <form class="form-group" action="process.php" method="post">
	
	    <div class="row">
		    <div class="col-lg-6">
			<br>
			<br>
			<label>First Name:</label>
			<input type="text" name="firstName" class="form-control" placeholder="First name">
			</div>
			<div class="col-lg-6">
			<br>
			<br>
			<label>Last Name:</label>
			<input type="text" name="lastName" class="form-control" placeholder="Last name">
			</div>
			<br>
			<label>E-mail</label>
			<input type="email" name="email" class="form-control" placeholder"Email">
	  <div class="row">
		    <div class="col-lg-6">
			<br>
			<label>Zipcode:</label>
			<input type="text" name="zipcode" class="form-control" placeholder="Zipcode">
			<label>Salary</label>
			<input type="Salary" name="salary" class="form-control" placeholder="Hourly wage">
			</div>
			<div class="col-lg-6">
			<br>
			<label>Address:</label>
			<input type="text" name="address" class="form-control" placeholder="Address">
			<label>Position/Title</label>
			<input type="position" name="position" class="form-control"  placeholder="Job title">
			</div>
			
</div>
<br>
<label>Gender:</label>
<select class="form-control" name="gender">
<option>Choose Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="other">others</option>
</select>
<br>

<label>Healthcare:</label>
<select class="form-control" name="healthcare">
<option>Choose Healthcare Plan</option>
<option value="Metro Plus">MetroPlus</option>
<option value="Mvp Health Plan">MVP Health Plan</option>
<option value="Oscar Insurance Corporation">Oscar Insurance Corporation</option>
</select>

<br>

<label>Vision Plan:</label>
<select class="form-control" name="vision">
<option>Choose Vision Plan</option>
<option value="Aetna">Aetna</option>
<option value="guardian">Guardian</option>
<option value="united Health Care">UnitedHealthCare</option>
</select>

<br>
<label>Dental:</label>
<select class="form-control" name="dental">
<option>Choose Dental Plan</option>
<option value="Humana">Humana</option>
<option value="Cigna">Cigna</option>
<option value="Ameritas">Ameritas</option>
</select>

<br>
<input type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn-lg">
</form>
<div class="col-lg-3"></div>
</body>
</html>