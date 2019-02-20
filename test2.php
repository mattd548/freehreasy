<?php
session_start();

 if(!isset($_SESSION['email']))
 {
    //echo"this works";
    flush();
    header("Location:index.php");
    die('should have redirected by now');
    exit();
 }
else {
    
}


?>


<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HR-Easy</title>
    <!-- To show icon next to the title. -->
    <!-- <link rel="shortcut icon" href="your_image_path_and_name.ico" /> -->
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Style sheet -->
    <link rel="stylesheet" type="text/css" href="dashboard.css">

    <!-- Font Awesome Free CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Audiowide|Orbitron" rel="stylesheet">
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<style>
    body {
    /* background-size: cover;
    background-position: center; */

    /* From https://uigradients.com/#BoraBora */
    background: #00c6ff;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to bottom, #2f75ca, #00c6ff);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to bottom, #0072ff, #00c6ff);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    font-weight: normal;
    font-family: 'Audiowide', cursive;
}

html {
    height: 100%;
    min-height: 100%;
    height: auto !important;
}

#content {
    text-align: center;
    padding-top: 12%;
    text-shadow: 0 4px 3px rgba(0, 0, 0, 0.4), 0 8px 13px rgba(0, 0, 0, 0.1), 0 18px 23px rgba(0, 0, 0, 0.1);
    /* x-offset, y-offset, blur radius, color. */
}

h3,h4 {
    color: white;
    /* We could also apply it to the body. */
}

h1 {
    font-weight: bold;
    font-size: 5em;
}

h2 {
    color: white;
    font-weight: bold;
    font-size: 2.7em;
    padding-bottom: 7%;
}

hr {
    width: 400px;
    border-top: 1px solid #f8f8f8;
    border-bottom: 1px solid rgba(0, 0, 0, 0.2);
    padding-top: 0.1%;
}


#check {
    padding-top: 3%;
    padding-bottom: 2.5%;
}

path {
    transition: fill 0.9s ease;
    fill: black;
}

path:hover {
    fill: rgba(255, 255, 255, 0.8);
}

.navbar-inverse .navbar-toggle {
    border: 1.5px solid #9d9d9d;
}

.navbar-inverse .navbar-toggle:hover {
    border-color: #fff;
}

/* .navbar-toggle {
    background-image: url('https://mdbootstrap.com/img/svg/hamburger2.svg?color=fff');
}

.navbar-inverse .navbar-toggle .icon-bar {
    background-color: transparent;
} */

/* No selectable */
body {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* button{
    right: 100%;
    width: 100%;
    background: none;
    border: 0px;
    outline: none;
} */

</style>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">HR-Easy</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="logout.php">Logout
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="content">

                    <div style="margin-top: 19px;" class="col-lg-4 col-md-4 col-xs-12">
                        <div class="">
                            <a href="search.html">
                                <svg width="250" height="150" aria-hidden="true" data-prefix="fas" data-icon="users"
                                    class="svg-inline--fa fa-users fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 640 512">
                                    <path fill="black" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm32 32h-64c-17.6 0-33.5 7.1-45.1 18.6 40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64zm-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32 208 82.1 208 144s50.1 112 112 112zm76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2zm-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z"></path>
                                </svg>
                            </a>
                            <h2 class="">Employees</h2>
                        </div>
                    </div>

                    <div style="margin-top: 19px;" class="col-lg-4 col-md-4 col-xs-12">
                        <div class="">
                            <a href="searchdept.html">
                                <svg width="250" height="150" aria-hidden="true" data-prefix="fas" data-icon="building"
                                    class="svg-inline--fa fa-building fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 448 512">
                                    <path fill="black" d="M436 480h-20V24c0-13.255-10.745-24-24-24H56C42.745 0 32 10.745 32 24v456H12c-6.627 0-12 5.373-12 12v20h448v-20c0-6.627-5.373-12-12-12zM128 76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76zm0 96c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40zm52 148h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12zm76 160h-64v-84c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v84zm64-172c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40zm0-96c0 6.627-5.373 12-12 12h-40c-6.627 0-12-5.373-12-12V76c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40z"></path>
                                </svg>
                            </a>
                            <h2 class="">Departments</h2>
                        </div>
                    </div>

                    <div style="margin-top: 19px;" class="col-lg-4 col-md-4 col-xs-12">
                        <div class="">
                            <a href="#">
                               
                <svg  width="250" height="150" aria-hidden="true" data-prefix="fas" data-icon="file-medical-alt" class="svg-inline--fa fa-file-medical-alt fa-w-14"
                    role="img" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 448 512">
                    <path fill="black" d="M288 136V0H88C74.7 0 64 10.7 64 24v232H8c-4.4 0-8 3.6-8 8v16c0 4.4 3.6 8 8 8h140.9c3 0 5.8 1.7 7.2 4.4l19.9 39.8 56.8-113.7c2.9-5.9 11.4-5.9 14.3 0l34.7 69.5H352c8.8 0 16 7.2 16 16s-7.2 16-16 16h-89.9L240 275.8l-56.8 113.7c-2.9 5.9-11.4 5.9-14.3 0L134.1 320H64v168c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H312c-13.2 0-24-10.8-24-24zm153-31L343.1 7c-4.5-4.5-10.6-7-17-7H320v128h128v-6.1c0-6.3-2.5-12.4-7-16.9z"></path>
                </svg>
                            </a>
                            <h2 class="">Benefits</h2>
                        </div>
                    </div>

                    <div style="margin-top: 0px;" class="col-xs-12" id="check">
                        <div class="">
                            <a href="payEmps.html">
                                <svg width="200" height="150" aria-hidden="true" data-prefix="fas" data-icon="money-check-alt"
                                    class="svg-inline--fa fa-money-check-alt fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewbox="0 0 640 512">
                                    <path fill="black" d="M608 32H32C14.33 32 0 46.33 0 64v384c0 17.67 14.33 32 32 32h576c17.67 0 32-14.33 32-32V64c0-17.67-14.33-32-32-32zM176 327.88V344c0 4.42-3.58 8-8 8h-16c-4.42 0-8-3.58-8-8v-16.29c-11.29-.58-22.27-4.52-31.37-11.35-3.9-2.93-4.1-8.77-.57-12.14l11.75-11.21c2.77-2.64 6.89-2.76 10.13-.73 3.87 2.42 8.26 3.72 12.82 3.72h28.11c6.5 0 11.8-5.92 11.8-13.19 0-5.95-3.61-11.19-8.77-12.73l-45-13.5c-18.59-5.58-31.58-23.42-31.58-43.39 0-24.52 19.05-44.44 42.67-45.07V152c0-4.42 3.58-8 8-8h16c4.42 0 8 3.58 8 8v16.29c11.29.58 22.27 4.51 31.37 11.35 3.9 2.93 4.1 8.77.57 12.14l-11.75 11.21c-2.77 2.64-6.89 2.76-10.13.73-3.87-2.43-8.26-3.72-12.82-3.72h-28.11c-6.5 0-11.8 5.92-11.8 13.19 0 5.95 3.61 11.19 8.77 12.73l45 13.5c18.59 5.58 31.58 23.42 31.58 43.39 0 24.53-19.05 44.44-42.67 45.07zM416 312c0 4.42-3.58 8-8 8H296c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h112c4.42 0 8 3.58 8 8v16zm160 0c0 4.42-3.58 8-8 8h-80c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h80c4.42 0 8 3.58 8 8v16zm0-96c0 4.42-3.58 8-8 8H296c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h272c4.42 0 8 3.58 8 8v16z"></path>
                                </svg>
                            </a>
                            <h2 class="">Pay</h2>
                        </div>
                    </div>


                    <p style="color:white;" id="date"></p>
                    
                    <h4>
            <!--<div id="temp"></div>-->
            <!--<div id="minutely"></div>-->
          </h4>
          <h4>
            <!--<div id="location"></div>-->
          </h4>
          
                    <hr>

                </div>
            </div>
        </div>
    </div>
    
    
    <script type="text/javascript" src="dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>

</html>



