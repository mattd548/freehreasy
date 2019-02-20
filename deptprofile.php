<?php
    include_once "db.php";
    $dept = ($_GET['department']);
    $userId = ($_GET['userId']);
    
$query = "SELECT dept_no,dept_name FROM departments WHERE dept_no= {$userId}";
$results = mysqli_query($connect, $query);

   while($row = mysqli_fetch_array($results)) {
       
       $departmenid= $row['dept_no'];
       $department = $row['dept_name'];
   }
   
//   if($dept!=$department){
//       header("Refresh:0; searchdept.html");
//   }
?>


<!DOCTYPE html>
<html style="height: 70%;">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HR-Easy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="profile.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,500i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Orbitron" rel="stylesheet">
</head>

<body style="background-color: rgb(25, 45, 66);">
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
                    <a class="nav-link" href="departments.php">DEPARTMENTS</a>
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
        <!-- <img src="https://www.w3schools.com/howto/img_avatar2.png" alt=""> -->


        <div style="margin-top:100px; padding-bottom:10px; background: #fff;" class="jumbotron">
            <div class="container">

                <div class="row">
                    <!-- <div class="col-lg-12"> -->
                    <div style="margin-bottom:10px;" id="content">

                        <form class="" action="editDept.php" method="POST" target="">

                            <!-- Profile picture and name -->
                            <div style="float:left; text-align:center; margin-top:-40px; margin-bottom: -10px; width:100%;"
                                id="inf" class="col-lg-4 col-md-12 col-sm-12">
                                <!-- <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="">
                            <h2 id="name">Amy Hills</h2> -->
                                <!-- <button class="btn btn-default btn-sm" id="edit"><span id="btnText"></span><i class="glyphicon glyphicon-pencil"></i></button> -->
                                <div class="row">
                                    <!-- Picture -->
                                    <div class="col-sm-12 desc image-upload">
                                        <label for="photo">
                                            <img src="https://png.pngtree.com/svg/20161109/department_1333974.png" />
                                        </label>
                                        <!-- <input id="photo" type="file" accept="image/*" name="photo" class=""> -->
                                    </div>

                                    <!-- Dept ID -->
                                    <div class="col-xs-12 desc">
                                        <input id="name" type="text" value='<?php echo $departmenid;?>' name="id" class="name"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <div style="height:300px; margin:0 auto; padding:" id="info" class="col-lg-8 col-md-12 col-sm-12">
                                <!-- Form -->
                                <!-- <form class="" action="#" method="POST" target=""> -->
                                <div class="row">

                                    <!-- Organization -->
                                    <!--<div class="col-sm-12 desc">-->
                                    <!--    <label for="organization"><i class="fas fa-globe"></i> Organization:</label>-->
                                    <!--    <input id="organization" placeholder="Organization" type="text" value="<?php echo $organization; ?>"-->
                                    <!--        name="organization" class="">-->
                                    <!--</div>-->
                                    <hr class="line">

                                    <!-- Department name -->
                                    <div class="col-sm-12 desc">
                                        <label for="department"><i class="fas fa-building"></i> Department Name:</label>
                                        <input id="department" type="text" value="<?php echo $department; ?>" name="department"
                                            class="" required>
                                        <input type="hidden" value='<?php echo $userId; ?>' name=userId>
                                    </div>


                                    <!-- Submit/Save -->
                                    <div style="margin:0 auto; text-align:center;" id="button" class="col-sm-12">
                                        <button id="save" name="submit" type="submit"><i class="far fa-save"></i></button>
                                    </div>

                                </div>
                            </div>
                        </form>


                    </div>
                    <div style="margin:0 auto; text-align:center;">
                        <div class="row">

                            <div style="margin:0 auto; text-align:center;" class="col-sm-12">

                                <!-- Modal -->
                                <div style="font-family: 'Audiowide', cursive; text-align: center;" class="modal fade"
                                    id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <!--<div class="modal-header">-->
                                            <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span-->
                                            <!--            aria-hidden="true">&times;</span></button>-->
                                            <!--    <h5 class="modal-title" id="myModalLabel">Are you sure you want to-->
                                            <!--        proceed?</h5>-->
                                            <!--</div>-->
                                            <div class="modal-body">
                                                <h5 style="margin-bottom:15px;" class="modal-title" id="myModalLabel">Are you sure you want to
                                                    proceed?</h5>
                                                <!-- Delete form -->
                                                <form action="deleteDept.php" method="POST" target="">
                                                    <input type="hidden" value="<?php echo $userId; ?>" name="userId">
                                                    <button style="margin-top: 10px;" name="submit" type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>

        </div>


        <div style="margin:0 auto; margin-top:-130px;text-align:center;">
            <div class="dropdown">
                <button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="true">
                    <i class="fas fa-cog"></i>
                    <span class="caret"></span>
                </button>
                <ul style="background:#eee; margin: 0 -60px;" class="dropdown-menu" aria-labelledby="dropdownMenu">
                    <a class="dropdown-item"><button class="" id="edit"><span id="btnText"></span><i class="glyphicon glyphicon-pencil"></i></button></a>
                    <div style="border:black inset 1px;" class="dropdown-divider"></div>
                    <a class="dropdown-item"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal"
                            data-target="#deleteModal" id="delete"><span>Delete </span><i class="fas fa-trash-alt"></i></button></a>
                </ul>

            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="deptprofile.js"></script>
</body>

</html>