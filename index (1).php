<!DOCTYPE html>
<?php
session_start();
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HR-Easy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no"">
      <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="login.css" />

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Orbitron|Space+Mono|Syncopate" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div id="content">
            <h1 id="title">HR-EASY</h1>
            <h1 id="label">Sign in</h1>
            <form action="login.php" method="POST">
                <div class="row">
                    <!-- Email/username-->
                    <div id="username" class="col-sm-12">
                        <!-- <label for="email"><i class="glyphicon glyphicon-triangle-right"></i></label> -->
                        <input class="form-control" id="email" type="email" placeholder="someone@example.com" name="email"
                            required>
                    </div>

                    <!-- Password  -->
                    <div id="pass" class="col-sm-12">
                        <!-- <label for="password"><i class="glyphicon glyphicon-triangle-right"></i></label> -->
                        <input class="form-control" id="password" type="password" placeholder="Password" name="password"
                            pattern=".{5,12}" required title="Password must be longer than 5 characters">
                    </div>

                    <!-- Submit -->
                    <div id="button" class="col-sm-12">
                        <button id="bt" type="submit" class="btn btn-primary" name="submit">Sign in</button>
                    </div>
                <div style="color: red;"><?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; }?> </div>
       
        <!--<?php unset($_SESSION['errMsg']); ?>-->
                    <!-- Forgot password -->
                    <div>
                        <a id="forgot" href="#">Forgot password?</a>
                    </div>

                </div>
            </form>
        </div>
    </div>
    

</body>

</html>