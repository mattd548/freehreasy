<?php
    session_start();
    include_once "db.php";
    $userId= ($_GET['userId']);
    $_SESSION['userprofileid']=$userId;
    $query = "SELECT firstName, lastName, middleName, gender, ssn, dob, organization, department, iden, position, salary, weekhours, startDate, maritalStatus, dependants, health, dental,vision, addressOne, addressTwo, apt, city, _state, zipcode, phone, email FROM employees WHERE id = {$userId}";
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
       $iden = $row['iden'];
       $position = $row['position'];
       $salary= $row['salary'];
       $weekhours= $row['weekhours'];
       $startDate = $row['startDate'];
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
   
   $image = "";
   if($gender == Male){
       $image = "https://www.w3schools.com/w3css/img_avatar3.png";
       
   }
   else if($gender == Female){
       $image = "https://www.w3schools.com/w3css/img_avatar4.png";
   }
   
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


        <div style="margin-top:100px; padding-bottom:10px;" class="jumbotron">
            <div class="container">

                <div class="row">
                    <!-- <div class="col-lg-12"> -->
                    <div style="margin-bottom:10px;" id="content">

                        <form class="" action="editEmp.php" method="POST" target="">

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
                                            <img src='<?php echo $image;?>' />
                                        </label>
                                        <!-- <input id="photo" type="file" accept="image/*" name="photo" class=""> -->
                                    </div>

                                    <!-- Name -->
                                    <div class="col-sm-12 desc" style="margin-top:-5px;">
                                        <input id="name" type="text" placeholder="First Name" value='<?php echo $firstName;?>'
                                            name="name" class="name" required>
                                    </div>

                                    <!-- Middle Initial -->
                                    <div style="margin-top:-30px;" class="col-sm-12 desc">
                                        <label for="mi"></label>
                                        <input id="mi" placeholder="M.I" type="text" value="<?php echo $middletName;?>"
                                            name="mi" class="name">
                                    </div>


                                    <!--Last Name-->
                                    <div class="col-sm-12 desc" style="margin-top:-10px;">
                                        <input placeholder="Last Name" value='<?php echo $lasttName;?>' name="lastName"
                                            class="name" required>
                                    </div>
                                </div>
                            </div>

                            <div style="height:300px; margin:0 auto; padding:" id="info" class="col-lg-8 col-md-12 col-sm-12">
                                <!-- Form -->
                                <!-- <form class="" action="#" method="POST" target=""> -->
                                <div class="row">

                                    <!-- Organization -->
                                    <div class="col-sm-12 desc">
                                        <label for="organization"><i class="fas fa-globe"></i> Organization:</label>
                                        <input id="organization" placeholder="Organization" type="text" value="<?php echo $organization; ?>"
                                            name="organization" class="" required>
                                    </div>
                                    <hr class="line">


                                    <!-- Department -->
                                    <div class="col-sm-12 desc">
                                        <label for="department"><i class="fas fa-building"></i> Department:</label>
                                        <input id="departmentVal" type="hidden" value="<?php echo $department; ?>">
                                        <select style="text-transform: capitalize;" id="department" class="form-control"
                                            name="department">
                                        </select>
                                        <!--   <input style="text-transform: capitalize;" id="department" type="text" value="<?php echo $department; ?>"-->
                                        <!--name="department" class="" required>-->
                                    </div>
                                    <hr class="line">

                                    <!-- EmplID -->
                                    <div class="col-sm-12 desc">
                                        <label for="emplid"><i class="fas fa-id-card-alt"></i> Emplid:</label>
                                        <input id="emplid" type="text" value="<?php echo $iden ;?>" name="emplid"
                                            placeholder="xxxxxxxx" class="" pattern=".{8,8}" required>
                                    </div>
                                    <hr class="line">

                                    <!-- Position -->
                                    <div class="col-sm-12 desc">
                                        <label for="position"><i class="fas fa-user"></i> Position:</label>
                                        <input id="position" type="text" placeholder="Position" value="<?php echo $position ;?>"
                                            name="position" class="" required>
                                    </div>
                                    <hr class="line">

                                    <!-- Pay rate -->
                                    <div class="col-sm-12 desc">
                                        <label for="payRate"><i class="fas fa-coins"></i> Pay Rate:</label>
                                        <input id="payRate" type="text" value="<?php echo $salary; ?>" placeholder="$"
                                            name="payrate" class="" required>
                                    </div>
                                    <hr class="line">

                                    <!-- Weekly Hours -->
                                    <div class="col-sm-12 desc">
                                        <label for="weeklyHours"><i class="fas fa-clock"></i> Weekly Hours:</label>
                                        <input id="weeklyHours" type="text" value="<?php echo $weekhours; ?>"
                                            placeholder="00.00" name="weeklyHours" class="" required>
                                    </div>
                                    <hr class="line">

                                    <!-- Marital Status -->
                                    <div class="col-sm-12 desc">
                                        <label for="maritalStatus"><i class="fas fa-balance-scale"></i> Marital Status:</label>
                                        <input id="maritalVal" type="hidden" value="<?php echo $maritalStatus; ?>">
                                        <select style="text-transform: capitalize;" id="maritalStatus" required class="form-control"
                                            name="maritalStatus">
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Divorced">Divorced</option>
                                        </select>

                                    </div>
                                    <hr class="line">

                                    <!-- Number of dependants -->
                                    <div class="col-sm-12 desc">
                                        <label for="dependants"><i class="fas fa-users"></i> Dependants:</label>
                                        <input id="dependantsVal" type="hidden" value="<?php echo $dependants; ?>">
                                        <select id="dependants" required class="form-control" name="dependants">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    <hr class="line">

                                    <!-- Insurance -->
                                    <div class="col-sm-12 desc">
                                        <label for="insurance"><i class="fas fa-briefcase-medical"></i> Insurance:</label>
                                        <input id="insuranceVal" type="hidden" value="<?php echo $health; ?>">
                                        <select style="text-transform: capitalize;" id="insurance" class="form-control"
                                            name="insurance">
                                        </select>
                                        <!--<input style="text-transform: capitalize;" id="insurance" type="text" value="<?php echo $health;?>"-->
                                        <!-- name="insurance" class="" required>-->
                                    </div>
                                    <hr class="line">

                                    <!-- Dental -->
                                    <div class="col-sm-12 desc">
                                        <label for="dental"><i class="fas fa-tooth"></i> Dental Plan:</label>
                                        <input id="dentalVal" type="hidden" value="<?php echo $dental; ?>">
                                        <select style="text-transform: capitalize;" id="dental" class="form-control"
                                            name="dental">
                                        </select>
                                    </div>
                                    <hr class="line">

                                    <!-- Vision -->
                                    <div class="col-sm-12 desc">
                                        <label for="vision"><i class="fas fa-eye"></i> Vision Plan:</label>
                                        <input id="visionVal" type="hidden" value="<?php echo $vision; ?>">
                                        <select style="text-transform: capitalize;" id="vision" class="form-control"
                                            name="vision">
                                        </select>
                                    </div>
                                    <hr class="line">


                                    <!-- DOB -->
                                    <div class="col-sm-12 desc">
                                        <label for="dob"><i class="fas fa-birthday-cake"></i> DOB:</label>
                                        <input id="dob" type="date" value="<?php echo $dob; ?>" name="dob" placeholder="yyyy-mm-dd"
                                            class="" pattern="\d{4}[\-]\d{2}[\-]\d{2}" required>
                                    </div>
                                    <hr class="line">

                                    <!-- Gender -->
                                    <div class="col-sm-12 desc">
                                        <label for="gender"><i class="fa fa-venus-mars custom"></i> Gender:</label>
                                        <input id="genderVal" type="hidden" value="<?php echo $gender; ?>">
                                        <select style="text-transform: capitalize;" id="gender" required class="form-control"
                                            name="gender">
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                        </select>
                                    </div>
                                    <hr class="line">

                                    <!-- Address -->
                                    <div class="col-sm-12 desc">
                                        <label for="address"><i class="fas fa-location-arrow"></i> Address:</label>
                                        <input placeholder="Address Line 1" id="address" type="text" value="<?php echo $addressOne;?>"
                                            name="address_l1" class="" required>
                                    </div>

                                    <!-- Address line 2 -->
                                    <div class="col-sm-12 desc">
                                        <input style="margin-top:-12px;" placeholder="Address Line 2" id="address_l2"
                                            type="text" value="<?php echo $addressTwo;?>" name="address_l2" class="">
                                    </div>

                                    <!-- Apt -->
                                    <div class="col-sm-12 desc">
                                        <input style="margin-top:-12px;" placeholder="Apt" id="apt" type="text" value="<?php echo $apt;?>"
                                            name="apt" class="">
                                    </div>

                                    <!-- City -->
                                    <div class="col-sm-12 desc">
                                        <input style="margin-top:-12px;" placeholder="City" id="city" type="text" value="<?php echo $city;?>"
                                            name="city" class="" required>
                                    </div>

                                    <!-- State -->
                                    <div class="col-sm-12 desc">
                                        <input style="margin-top:-12px;" placeholder="State" id="state" type="text"
                                            value="<?php echo $state;?>" name="state" class="" required>
                                    </div>

                                    <!--Zip code-->
                                    <div class="col-sm-12 desc">
                                        <input style="margin-top:-12px;" id="zip" placeholder="zip code" type="text"
                                            value="<?php echo $zipcode;?>" name="zip" class="" required>
                                    </div>
                                    <hr class="line">

                                    <!-- Phone -->
                                    <div class="col-sm-12 desc">
                                        <label for="phone1"><i class="fas fa-phone"></i> Phone:</label>
                                        <input id="phone1" type="tel" value="<?php echo $phone; ?>" placeholder="xxx-xxx-xxxx"
                                            name="phone1" class="" pattern="\d{3}[\-]\d{3}[\-]\d{4}" required>
                                    </div>
                                    <hr class="line">

                                    <!-- Email -->
                                    <div class="col-sm-12 desc">
                                        <label for="email"><i class="fas fa-envelope"></i> Email:</label>
                                        <input id="email" type="email" value="<?php echo $email; ?>" placeholder="something@example.com"
                                            name="email" class="" required>
                                    </div>
                                    <hr class="line">
                                    <!-- Start date -->
                                    <div class="col-sm-12 desc">
                                        <label for="startDate"><i class="far fa-calendar-alt"></i> Start Date:</label>
                                        <input id="startDate" type="date" value="<?php echo $startDate; ?>" name="startDate"
                                            class="" pattern="\d{4}[\-]\d{2}[\-]\d{2}" required>
                                    </div>


                                    <input type="hidden" value="<?php echo $userId; ?>" name="userId">

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
                                                   <h5 style="margin-bottom:20px;" class="modal-title" id="myModalLabel">Are you sure you want to
                                                    proceed?</h5>
                                                <!-- Delete form -->
                                                <form action="deleteEmp.php" method="POST" target="">
                                                    <label for="endDate"><i class="far fa-calendar-alt"></i>
                                                        Termination
                                                        date:</label>
                                                    <input style="text-align:center;" id="endDate" placeholder="yyyy-mm-dd" type="date" value=""
                                                        name="endDate" class="form-control" pattern="\d{4}[\-]\d{2}[\-]\d{2}"
                                                        required>
                                                    <button style="margin-top: 10px;" type="submit" class="btn btn-danger btn-sm">Delete</button>
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

    <script>
       function loadData() {
    // Insurance
    $.post("benefitsForEmps.php", {
        benefitType: "Insurance"
    }, function (result) {
        $("#insurance").html(result);
        $("#insurance").append("<option value='N/A'>N/A</option>")
        $("#insurance").val($("#insuranceVal").val());
    });

    //   Dental
    $.post("benefitsForEmps.php", {
        benefitType: "Dental"
    }, function (result) {
        $("#dental").html(result);
        $("#dental").append("<option value='N/A'>N/A</option>");
        $("#dental").val($("#dentalVal").val());
    });

    //   Vision
    $.post("benefitsForEmps.php", {
        benefitType: "Vision"
    }, function (result) {
        $("#vision").html(result);
        $("#vision").append("<option value='N/A'>N/A</option>");
        $("#vision").val($("#visionVal").val());
    });

    //   Department
    $.post("benefitsForEmps.php", {
        benefitType: "Departments"
    }, function (result) {
        $("#department").html(result);
        $("#department").val($("#departmentVal").val());
    });
}


$(document).ready(function () {
    loadData();
});

window.onload = function () {
    $("#maritalStatus").val($("#maritalVal").val());
    $("#dependants").val($("#dependantsVal").val());
    $("#gender").val($("#genderVal").val());
};

var inputs = $("input");
var editButton = $("#edit");
var saveButton = $("#save");
var nameInput = $("#name");
var imageFile = $("#photo");
var photo = $("img");
var endDate = $("#endDate");
var startDate = $("#startDate");

inputs.attr('readonly', 'readonly');
buttonText = $("#btnText");
buttonText.text("Edit ");

$("#endDate").removeAttr('readonly');

// Current values
var currName = $("#name").val();
var currLastName = $("#lastName").val();
var currOrg = $("#organization").val();
var currDpt = $("#departmentVal").val();
var currEmplid = $("#emplid").val();
var currPosition = $("#position").val();
var currPayRate = $("#payRate").val();
var currHours = $("#weeklyHours").val();
var currMaritalStatus = $("#maritalStatus").val();
var currDependants = $("#dependants").val();

var currInsurance = $("#insuranceVal").val();
var currDental = $("#dentalVal").val();
var currVision = $("#visionVal").val();

var currDob = $("#dob").val();
var currGender = $("#genderVal").val();
var currAddress = $("#address").val();

var currAddressL2 = $("#address_l2").val();
var currApt = $("#apt").val();
var currCity = $("#city").val();
var currState = $("#state").val();
var currZip = $("#zipcode").val();

var currPhone1 = $("#phone1").val();
var currEmail = $("#email").val();

$("#endDate").removeAttr('readonly');

$("select").attr('disabled', 'disabled');

editButton.click(function () {

    buttonText.text() === "Edit " ? buttonText.text("Cancel ") : buttonText.text("Edit ");

    if (buttonText.text() === "Cancel ") {
        inputs.removeAttr('readonly');
        inputs.addClass("form-control");

        // Select fields
        $("select").removeAttr('disabled');

        // Start date is uneditable
        startDate.attr('readonly', 'readonly');
        startDate.removeClass("form-control");

        saveButton.css("display", "initial");
        nameInput.css("font-size", "20px");
        $("#lastName").css("font-size", "20px");

    } else {
        inputs.attr('readonly', 'readonly');
        inputs.removeClass("form-control");
        saveButton.css("display", "none");
        nameInput.css("font-size", "26px");
        $("#lastName").css("font-size", "26px");

        // Reset inputs if changes have been made
        $("#name").val(currName);
        $("#lastName").val(currLastName);
        $("#organization").val(currOrg);
        $("#department").val(currDpt);

        $("#emplid").val(currEmplid);
        $("#position").val(currPosition);
        $("#payRate").val(currPayRate);
        $("#weeklyHours").val(currHours);
        $("#maritalStatus").val(currMaritalStatus);
        $("#dependants").val(currDependants);

        $("#insurance").val(currInsurance);
        $("#dental").val(currDental);
        $("#vision").val(currVision);

        $("#dob").val(currDob);
        $("#gender").val(currGender);
        $("#address").val(currAddress);
        $("#address_l2").val(currAddressL2);
        $("#apt").val(currApt);
        $("#city").val(currCity);
        $("#state").val(currState);
        $("#zipcode").val(currZip);
        $("#phone1").val(currPhone1);
        $("#email").val(currEmail);

        // Select fields
        $("select").attr('disabled', 'disabled');

        // location.reload(false);
    }

    $("#endDate").removeAttr('readonly');
});

var today = new Date();
var date = Date.parse(today);
var end = "";

$("#endDate").keyup(function () {
    end = Date.parse(endDate.val());
    if (end > date) {
        alert("ENTER A VALID DATE");
        endDate.val("");
    }
});

// function changeImage() {
//     photo.attr("src", imageFile.val());
// }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!--<script type="text/javascript" src="profile.js"></script>-->
</body>

</html>