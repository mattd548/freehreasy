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
    <link rel="stylesheet" type="text/css" media="screen" href="addEmp.css" />

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

<body style="background-color: rgb(25, 45, 66);">

    <div class="container">

        <div style="margin-top:125px; min-height: 500px; height: 370px;" class="jumbotron">
            <h1 style="font-family: 'Orbitron', sans-serif; font-weight: bolder;">NEW DEPARTMENT</h1>
            <div class="container">

                <form action="processdept.php" method="POST">
                    <div class="row">
                        <div class="form-group">
                            <div id="" class="col-md-12">
                                <div style="padding-right: 5px;" class="row">
                                    <!-- Picture -->
                                    <div style="margin: 0 auto; text-align: center;" class="col-xs-12 col-lg-offset-5  col-md-offset-5  col-sm-offset-4  col-xs-offset-4  desc image-upload">
                                        <label style="margin-left: 10px; margin-bottom: 20px;" for="photo">
                                            <!-- <img src="https://www.w3schools.com/howto/img_avatar2.png" /> -->
                                            <svg aria-hidden="true" data-prefix="far" data-icon="building" class="svg-inline--fa fa-building fa-w-14"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512">
                                                <path fill="black" d="M128 148v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12zm140 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm-128 96h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm128 0h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm-76 84v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm76 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm180 124v36H0v-36c0-6.6 5.4-12 12-12h19.5V24c0-13.3 10.7-24 24-24h337c13.3 0 24 10.7 24 24v440H436c6.6 0 12 5.4 12 12zM79.5 463H192v-67c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v67h112.5V49L80 48l-.5 415z"></path>
                                            </svg>
                                        </label>
                                        <input id="photo" type="file" accept="image/*" name="photo" class="">
                                    </div>
                                </div>
                            </div>

                            <div id="" class="col-md-12">
                                <div class="row">
                                    <!-- Department name -->
                                    <div style="margin-top:-25px; margin-left: 0px;" class="col-md-12 desc">
                                        <label for="firstname"><i class="fas fa-building"></i> Department:</label>
                                        <input id="department" placeholder="Department name"
                                            type="text" value="" name="department" class="form-control" required>
                                    </div>

                                    <!-- Dept ID -->
                                    <!--<div style="margin-top:-20px;" class="col-md-6 desc">-->
                                    <!--    <label for="deptid"></label>-->
                                    <!--    <input id="deptid" placeholder="Dept ID" type="text" value="" name="deptid" class="form-control" required>-->

                                    <!--</div>-->
                                </div>
                            </div>
                            <div style="margin-top:60px; text-align:center;" id="" class="col-lg-12">
                                <!-- Submit/Save -->
                                <div style="text-align:center;" id="button" class="col-sm-18">
                                    <button style="margin: 0 auto;" id="save" type="submit" name="submit"><i class="fas fa-clipboard-check"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="addEmp.js"></script>
</body>

</html>