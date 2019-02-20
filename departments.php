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
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HR-Easy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="assets/css/employees.css" /> -->
    <link rel="stylesheet" type="text/css" media="screen" href="employees.css" />
    <!-- <script type="text/javascript" src="assets/js/lib/jquery-3.3.1.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,500i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Orbitron" rel="stylesheet">
</head>

<body style="background: url('A_Virus_Named_TOM_Background_Blueprints.jpg'); background-size: cover; background-position: center;">
           <!--Navigation bar-->
    <nav style="font-family: 'Audiowide', cursive;" class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a style="color:#fff;" class="navbar-brand">HR-EASY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">HOME</a>
                </li>
                <hr style="margin-right:-190px; border:0">
                <li class="nav-item">
                    <a class="nav-link" href="employees.php">EMPLOYEES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="departments.php">DEPARTMENTS<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="benefits.php">BENEFITS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="payEmp.php">PAY</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                    <form action="logout.php" class="form-inline my-2 my-lg-0">
                        <button class="btn btn-sm btn-outline-info my-2 my-sm-0" type="submit">Logout <i class="fas fa-sign-out-alt"></i></button>
                    </form>
                    <!--<a class="nav-link" href="logout.php">Logout <i class="fas fa-sign-out-alt"></i></a>-->
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">

        <div style="margin-top:-25px;" class="container">
            <h2 id="innerAdd" class="container"><a href="addDept.php"><i id="add" class="far fa-plus-square"></i></a></h2>
        </div>

        <div id="content" class="container">
            <h1 style="background: black; color: #ccc" id="header" class="container">Departments</h1>

            <div class="inner-addon left-addon">
                <i class="glyphicon glyphicon-search"></i>
                <input class="form-control" type="text" id="search" placeholder="search for departments..." onkeyup="search(this.value)">
            </div>

            <ul id="results">
                <!--<li>-->
                <!--    <span>-->
                <!--        <a href=""><img src="https://www.w3schools.com/howto/img_avatar2.png" /></a>-->
                <!--    </span>Amy-->
                <!--</li>-->
            </ul>
        </div>

    </div>

    <!-- <script type="text/javascript" src="assets/js/employees.js"></script> -->
    <script type="text/javascript" src="departments.js"></script>
    
    <script>
        
function search(value) {

  if(value.length == '')
  {
    $("#results").html("");

  }  else {
    $.post("searchDept.php", {search:value}, function(data){
        $("#results").html(data);
     
      });
   
  }
}
    </script>
</body>

</html>