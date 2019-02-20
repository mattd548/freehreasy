<?php
include_once "db.php";
session_start();
 if(!$_SESSION['email']){
    header("Location:index.php");
    exit();
 }

  if(isset($_POST['submit'])) {
      $userId = $_POST['userId'];
      $query = "DELETE FROM departments WHERE dept_no = '$userId'";
      $run_query = mysqli_query($connect,$query);
      header("Refresh:1; departments.php");
    // header("Location:searchdept.html");
  }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HR-Easy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="processing.css" /> -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Orbitron|Space+Mono|Syncopate" rel="stylesheet">

    <!-- Font Awesome Free CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">

    <style>
        #body {
            background: #071418;

            background-size: cover;
            background-position: center;

            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        html {
            height: 100%;
        }

        div.container {
            width: 80%;
        }

        #title {
            margin-top: 40px;
            color: rgba(255, 255, 255, 0.9);
            font-size: 45px;
            padding-bottom: 7%;
        }

        #label {
            margin-top: -10px;
            font-size: 35px;
            color: #fff;
            /* text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px blue, 0 0 10px blue, 0 0 10px blue, 0 0 10px blue, 0 0 10px blue; */
        }

        #content {
            /* font-variant: small-caps; */
            font-weight: normal;
            font-family: 'Audiowide', cursive;
            text-align: center;
            padding: 170px 0;
            margin: 0 auto;
            width: 400px;
            text-shadow: 0 4px 3px rgba(0, 0, 0, 0.2), 0 8px 13px rgba(0, 0, 0, 0.1), 0 18px 23px rgba(0, 0, 0, 0.1);
            /* x-offset, y-offset, blur radius, color. */
        }
    </style>
</head>

<body id="body">
    <div class="container">
        <div id="content">
            <h1 id="title">PROCESSING</h1>
            <h1 id="label"><i class="fa fa-spinner fa-spin"></i></h1>
        </div>
    </div>
</body>

</html>