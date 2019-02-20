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


    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" media="screen" href="benefits.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,500i,700" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Orbitron" rel="stylesheet">

</head>

<body id="body">
    
     <!--Navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                    <a class="nav-link" href="departments.php">DEPARTMENTS</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="benefits.php">BENEFITS<span class="sr-only">(current)</span></a>
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
    
    
    <div style="margin-top:-10px;" class="container">
        <div style="font-family: 'Audiowide', cursive;" class="container">

            <div style="text-align:center; margin-top: 50px;">
                <div style="text-align:center; margin-bottom: 20px;"><a href="addBenefit.php"><i id="add" class="fas fa-briefcase-medical"></i></a></div>
                <img width="200px;" src="ChartColorAreas.png" alt="">
                <h1 id="header">BENEFITS</h1>
            </div>

            <!-- Modal -->
            <div style="font-family: 'Audiowide', cursive; text-align: center;" class="modal fade" id="myModal"
                tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!-- <div class="modal-header">
              <h5 style="font-size: 17px; color: rgb(211, 3, 3);" class="modal-title">Are you sure you want to delete this benefit?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div> -->
                        <div style="text-align:center; margin: 0 auto;" class="modal-body">
                            <h5 style="font-size: 17px; color: rgb(220, 24, 100); margin-bottom: 15px;" class="modal-title">EDIT
                                BENEFIT</h5>

                            <!-- Update benefit -->
                            <div class="container">
                                <div style="height: 420px;" class="jumbotron">
                                    <div class="container">
                                        <form class="" action="editBenefit.php" method="POST" target="">
                                            <div class="row">

                                                <div style="text-align:center;" class="col-md-12 desc">
                                                    <label for=""><i style="font-size:50px; color:rgb(220, 24, 100)"
                                                            class="fas fa-briefcase-medical"></i></label>
                                                </div>

                                                <!-- Benefit ID -->
                                                <div style="margin-top: 5px;" class="col-md-12 desc">
                                                    <input style="background:#eee; text-align: center;" id="benefitID"
                                                        placeholder="ID" type="text" value="" name="benefitID" class="form-control"
                                                        required readonly>
                                                </div>

                                                <!-- Benefit name -->
                                                <div style="margin-top: 5px; margin-left: 0px;" class="col-md-12 desc">
                                                    <input id="benefitName" placeholder="New Name" type="text" value=""
                                                        name="benefitName" class="form-control" required>
                                                </div>

                                                <!-- Benefit type -->
                                                <div style="margin-top: 5px;" class="col-md-12 desc">
                                                    <select id="benefitType" required class="form-control" name="benefitType">
                                                        <option value="" disabled selected>New Type</option>
                                                        <option value="Insurance">Insurance</option>
                                                        <option value="Dental">Dental</option>
                                                        <option value="Vision">Vision</option>
                                                    </select>
                                                </div>

                                                <!-- Benefit percentage -->
                                                <div style="margin-top: 5px;" class="col-md-12 desc">
                                                    <input id="benefitPercentage" placeholder="New Percentage: e.g 0.02"
                                                        type="text" value="" name="benefitPercentage" class="form-control"
                                                        required>
                                                </div>
                                            </div>

                                            <!-- Submit/Save -->
                                            <div style="margin-top:10px; text-align:center;" id="" class="col-lg-12">
                                                <div id="button" class="col-sm-12">
                                                    <button id="save" name="submit" type="submit"><i class="fas fa-clipboard-check"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal2">Delete
                                    <i class="far fa-trash-alt"></i></button>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>

                <!-- Modal2 -->
                <div style="font-family: 'Audiowide', cursive; text-align: center;" class="modal fade" id="myModal2"
                    tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <!-- <div class="modal-header">
              <h5 style="font-size: 17px; color: rgb(211, 3, 3);" class="modal-title">Are you sure you want to delete this benefit?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div> -->
                            <div style="text-align:center; margin: 0 auto;" class="modal-body">
                                <h5 style="font-size: 17px; color: rgb(220, 24, 100); margin-bottom: 15px;" class="modal-title">Are
                                    you
                                    sure
                                    you want to delete this benefit?</h5>

                                <!-- Delete benefit -->
                                <form method="POST" action="deleteBenefit.php" target="">
                                    <label for="benefitToDelete">Benefit to delete (ID):</label>
                                    <input style="background:#eee;" placeholder="ID #" id="benefitToDelete" type="text"
                                        class="form-control" value="" name="benefitToDelete" required readonly>
                                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div id="content" class="table-responsive-sm">
                <table class="table table-dark table-bordered table-striped table-hover table-sm">
                    <!-- Head -->
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Benefit</th>
                            <th>Type</th>
                            <th style="text-align:center;">Percentage</th>
                        </tr>
                    </thead>
                    <!-- Body -->

                    <tbody id="results">
                        <!-- Insurance -->
                        <!--<tr>-->
                        <!--  <td class="id">-->
                        <!--    <span>-->
                        <!--      <button class="button btn" data-toggle="modal" data-target="#myModal">-->
                        <!--        <i class="fas fa-edit"></i>-->
                        <!--      </button>-->
                        <!--    </span>1-->
                        <!--  </td>-->
                        <!--  <td>MetroPlus</td>-->
                        <!--  <td>Insurance</td>-->
                        <!--  <td style="text-align:center;">2%</td>-->
                        <!--</tr>-->

                        <!-- Dental -->
                        <!--<tr>-->
                        <!--  <td class="id">-->
                        <!--    <span>-->
                        <!--      <button class="button btn" data-toggle="modal" data-target="#myModal">-->
                        <!--        <i class="fas fa-edit"></i>-->
                        <!--      </button>-->
                        <!--    </span>4-->
                        <!--  </td>-->
                        <!--  <td>Ameritas</td>-->
                        <!--  <td>Dental</td>-->
                        <!--  <td style="text-align:center;">2%</td>-->
                        <!--</tr>-->

                        <!-- Vision -->
                        <!--<tr>-->
                        <!--  <td class="id">-->
                        <!--    <span>-->
                        <!--      <button class="button btn" data-toggle="modal" data-target="#myModal">-->
                        <!--        <i class="fas fa-edit"></i>-->
                        <!--      </button>-->
                        <!--    </span>7-->
                        <!--  </td>-->
                        <!--  <td>Aetna</td>-->
                        <!--  <td>Vision</td>-->
                        <!--  <td style="text-align:center;">2%</td>-->
                        <!--</tr>-->

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <!-- <script type="text/javascript" src="assets/js/employees.js"></script> -->
    <script type="text/javascript" src="benefits.js"></script>
</body>

</html>