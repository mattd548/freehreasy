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

        <div class="jumbotron">
            <h1 style="font-family: 'Orbitron', sans-serif; font-weight: bolder;">NEW EMPLOYEE</h1>
            <div class="container">

                <form action="process.php" method="POST">
                    <div class="row">
                        <div class="form-group">
                            <div id="" class="col-lg-12">
                                <div style="padding-right: 5px;" class="row">
                                    <!-- Picture -->
                                    <div style="margin: 0 auto; text-align: center;" class="col-xs-12 col-lg-offset-5  col-md-offset-5  col-sm-offset-4  col-xs-offset-4  desc image-upload">
                                        <label style="margin-left: 10px; margin-bottom: 20px;" for="photo">
                                            <!-- <img src="https://www.w3schools.com/howto/img_avatar2.png" /> -->
                                            <svg aria-hidden="true" data-prefix="fas" data-icon="user-circle" class="svg-inline--fa fa-user-circle fa-w-16"
                                                role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 496 512">
                                                <path fill="blakc" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path>
                                            </svg>
                                        </label>
                                        <input id="photo" type="file" accept="image/*" name="photo" class="">
                                    </div>
                                </div>
                            </div>

                            <div id="" class="col-lg-12">
                                <div class="row">
                                    <!-- First name -->
                                    <div style="margin-top:-25px; margin-left: 0px;" class="col-md-3 desc">
                                        <label for="firstname"><i class="glyphicon glyphicon-user"></i> Name:</label>
                                        <input id="firstname" placeholder="First Name" type="text" value="" name="firstname"
                                            class="form-control" required>
                                    </div>

                                    <!-- Middle Initial -->
                                    <div style="margin-top:-20px;" class="col-md-3 desc">
                                        <label for="mi"></label>
                                        <input id="mi" placeholder="M.I." type="text" value="" name="mi" class="form-control">
                                    </div>

                    </div>
                </form>
            </div>

        </div>
    </div>

    <script type="text/javascript" src="addEmp.js"></script>
</body>

</html>
