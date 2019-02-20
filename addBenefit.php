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
    <link rel="stylesheet" type="text/css" media="screen" href="addBenefit.css" />

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous"> -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

    <!-- Font Awesome Free CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Orbitron" rel="stylesheet">
</head>

<body id="body">

    <div class="container">
        <div class="jumbotron">
            <h1 style="font-family: 'Orbitron', sans-serif; font-weight: bolder;">NEW BENEFIT</h1>
            <div class="container">
                <form class="" action="addBenefitProcess.php" method="POST">
                    <div class="row">

                        <div style="text-align:center;" class="col-md-12 desc">
                            <label for=""><i style="font-size:70px; color:rgb(220, 24, 100)" class="fas fa-briefcase-medical"></i></label>
                        </div>

                        <!-- Benefit ID -->
                        <!--<div class="col-md-2 desc">-->
                        <!--    <label for="benefitID">ID:</label>-->
                        <!--    <input id="benefitID" placeholder="#" type="text" value="" name="benefitID" class="form-control"-->
                        <!--        required>-->
                        <!--</div>-->

                        <!-- Benefit name -->
                        <div style="margin-top: 5px; margin-left: 0px;" class="col-md-4 desc">
                            <label for="benefitName">Name:</label>
                            <input id="benefitName" placeholder="Name" type="text"
                                value="" name="benefitName" class="form-control" required>
                        </div>

                        <!-- Benefit type -->
                        <div class="col-md-4 desc">
                            <label for="benefitType">Type:</label>
                            <select id="benefitType" required class="form-control" name="benefitType">
                                <option value="" disabled selected>Type</option>
                                <option value="Insurance">Insurance</option>
                                <option value="Dental">Dental</option>
                                <option value="Vision">Vision</option>
                            </select>
                        </div>

                        <!-- Benefit percentage -->
                        <div class="col-md-4 desc">
                            <label for="benefitPercentage">Percentage:</label>
                            <input id="benefitPercentage" placeholder="e.g 0.02" type="text" value="" name="benefitPercentage"
                                class="form-control" required>
                        </div>
                    </div>

                    <!-- Submit/Save -->
                    <div style="text-align:center;" id="" class="col-lg-12">
                        <div id="button" class="col-sm-12">
                            <button id="save" name="submit" type="submit"><i class="fas fa-clipboard-check"></i></button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script type="text/javascript" src="addBenefit.js"></script>
</body>

</html>