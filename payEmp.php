<?php
session_start();
  $periodStartDate= ($_GET['periodStartDate']);
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
    <link rel="stylesheet" type="text/css" media="screen" href="payEmps.css" />
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

<body style="background: rgb(2, 20, 27);">
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
                <li class="nav-item active">
                    <a class="nav-link" href="payEmp.php">PAY<span class="sr-only">(current)</span></a>
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
    <div style="padding-bottom:15px; margin-top:10px;" class="container">

        <!-- Button trigger periodsModal -->
        <div style="text-align:center; margin:0 auto;">
            <button id="periodsTrigger" style="margin-bottom: -5px; font-family: 'Audiowide', cursive; text-align: center;"
                type="button" class="btn btn-dark" data-toggle="modal" data-target="#periodsModal">
                <i style="color:#ccc;" class="far fa-calendar-alt"></i> Pay Periods
            </button>
        </div>

        <!-- Periods Modal -->
        <div style="font-family: 'Audiowide', cursive; text-align: center;" class="modal fade" id="periodsModal"
            tabindex="-1" role="dialog" aria-labelledby="periodsModalModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div style="border: 3px #ccc solid; border-radius: 5px;" class="modal-content">
                    <!--<div class="modal-header">-->
                    <!--    <h5 class="modal-title" id="exampleModalLabel">Pay Periods</h5>-->
                    <!--    <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                    <!--        <span aria-hidden="true">&times;</span>-->
                    <!--    </button>-->
                    <!--</div>-->
                    <div style="background: black" class="modal-body">
                        <button style="margin-bottom:10px;" type="button" class="btn btn-dark btn-sm" data-toggle="modal"
                            data-target="#myModal2">
                            <i id="add" class="far fa-calendar-plus"></i></button>

                        <h5 style="color:#ccc; margin-bottom:-5px;" class="modal-title" id="periodsModalModalLabel">Pay
                            Periods</h5>
                        <!--<div class="container">-->

                        <!-- Table -->
                        <div id="tableContent" class="table-responsive-sm">
                            <table class="table table-dark table-bordered table-striped table-hover table-sm">
                                <!-- Head -->
                                <thead class="thead-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Start</th>
                                        <th>End</th>
                                        <th>Pay</th>
                                        <th>Done</th>
                                        <!-- <th>Complete</th> -->
                                    </tr>
                                </thead>
                                <!-- Body -->
                                <tbody id="periodResults">
                                    <!--<tr>-->
                                    <!--  <td class="id">-->
                                    <!--    <span>-->
                                    <!--      <button class="button btn" data-toggle="modal" data-target="#myModal">-->
                                    <!--        <i class="fas fa-edit"></i>-->
                                    <!--      </button>-->
                                    <!--    </span>1-->
                                    <!--  </td>-->
                                    <!--  <td>2018-11-04</td>-->
                                    <!--  <td>2018-11-04</td>-->
                                    <!--  <td>2018-11-04</td>-->
                                    <!--<td style='text-align:center; vertical-align: top;'>-->
                                    <!--<input style='margin-left:-10px;' value='true' type='checkbox' class='form-check-input' disabled checked>-->
                                    <!--</td>-->
                                    <!--</tr>-->
                                </tbody>
                            </table>
                        </div>
                        <!--</div>-->
                    </div>
                    <div style="background:#ccc;" class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Period -->
        <div style="font-family: 'Audiowide', cursive; text-align: center;" class="modal fade" id="myModal2" tabindex="-1"
            role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div style="text-align:center; margin: 0 auto;" class="modal-body">
                        <h5 style="font-size: 17px;  color:#000; margin-bottom: 15px;" class="modal-title">ADD PERIOD</h5>

                        <div class="container">
                            <div style="height: 310px; background:#000;" class="jumbotron">
                                <div class="container">
                                    <form class="" action="addPeriod.php" method="POST" target="">
                                        <div class="row">

                                            <div style="text-align:center; margin-top:-45px;" class="col-md-12 desc">
                                                <label for=""><i style="font-size:50px; color:#ccc;" class="far fa-calendar-plus"></i></label>
                                            </div>

                                            <!-- Period -->
                                            <div style="margin-top: 5px;" class="col-md-12 desc">
                                                <input style="background:#eee; text-align: center;" id="periodNumber"
                                                    placeholder="Period #" type="text" value="" name="periodNumber"
                                                    class="form-control" required>
                                            </div>

                                            <!-- beginning -->
                                            <div style="margin-top: 5px; margin-left: 0px;" class="col-md-12 desc">
                                                <input id="beginning" placeholder="Start: yyyy-mm-dd" type="date" value=""
                                                    name="beginning" class="form-control" pattern="\d{4}[\-]\d{2}[\-]\d{2}"
                                                    required>
                                            </div>

                                            <!-- ending -->
                                            <div style="margin-top: 5px; margin-left: 0px;" class="col-md-12 desc">
                                                <input id="ending" placeholder="End: yyyy-mm-dd" type="date" value=""
                                                    name="ending" class="form-control" pattern="\d{4}[\-]\d{2}[\-]\d{2}"
                                                    required>
                                            </div>

                                            <!-- Pay date -->
                                            <div style="margin-top: 5px;" class="col-md-12 desc">
                                                <input id="payDate" placeholder="Pay: yyyy-mm-dd" type="date" value=""
                                                    name="payDate" class="form-control" pattern="\d{4}[\-]\d{2}[\-]\d{2}"
                                                    required>
                                            </div>
                                        </div>

                                        <!-- Submit/Save -->
                                        <div style="margin-top:10px; text-align:center;" id="" class="col-lg-12">
                                            <div id="button" class="col-sm-12">
                                                <button id="save" class="button" name="submit" type="submit"><i style="font-size:30px"
                                                        class="fas fa-clipboard-check"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="modal-footer">-->
                    <!--    <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Close</button>-->
                    <!--</div>-->
                </div>
            </div>
        </div>

        <!-- Edit Period -->
        <div style="font-family: 'Audiowide', cursive; text-align: center;" class="modal fade" id="myModal3" tabindex="-1"
            role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div style="text-align:center; margin: 0 auto;" class="modal-body">
                        <h5 style="font-size: 17px;   color: rgb(13, 101, 255); margin-bottom: 15px;" class="modal-title">EDIT
                            PERIOD</h5>

                        <div class="container">
                            <div style="height: 310px; background:#000;" class="jumbotron">
                                <div class="container">
                                    <form class="" action="editPeriod.php" method="POST" target="">
                                        <div class="row">

                                            <input id="completed" type="hidden" value="">

                                            <div style="text-align:center; margin-top:-40px;" class="col-md-12 desc">
                                                <label for=""><i style="font-size:50px; color:#ccc;" class="far fa-calendar-alt"></i></label>
                                            </div>

                                            <!-- Period -->
                                            <div style="margin-top: 5px;" class="col-md-12 desc">
                                                <input style="background:#eee; text-align: center;" id="periodNumberE"
                                                    placeholder="Period #" type="text" value="" name="periodNumber"
                                                    class="form-control" required readonly>
                                            </div>

                                            <!-- beginning -->
                                            <div style="margin-top: 5px; margin-left: 0px;" class="col-md-12 desc">
                                                <input id="beginningE" placeholder="Start: yyyy-mm-dd" type="date"
                                                    value="" name="beginning" class="form-control" pattern="\d{4}[\-]\d{2}[\-]\d{2}"
                                                    required>
                                            </div>

                                            <!-- ending -->
                                            <div style="margin-top: 5px; margin-left: 0px;" class="col-md-12 desc">
                                                <input id="endingE" placeholder="End: yyyy-mm-dd" type="date" value=""
                                                    name="ending" class="form-control" pattern="\d{4}[\-]\d{2}[\-]\d{2}"
                                                    required>
                                            </div>

                                            <!-- Pay date -->
                                            <div style="margin-top: 5px;" class="col-md-12 desc">
                                                <input id="payDateE" placeholder="Pay: yyyy-mm-dd" type="date" value=""
                                                    name="payDate" class="form-control" pattern="\d{4}[\-]\d{2}[\-]\d{2}"
                                                    required>
                                            </div>
                                        </div>

                                        <!-- Submit/Save -->
                                        <div style="margin-top:10px; text-align:center;" id="" class="col-lg-12">
                                            <div id="" class="col-sm-12">
                                                <button id="" class="btn btn-primary btn-sm" name="submitE" type="submit"><i
                                                        class="fas fa-clipboard-check"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content" class="container">
        <h1 id="header" class="container">Pay Employees</h1>

        <!-- Modal -->
        <!--<div style="font-family: 'Audiowide', cursive; text-align: center;" class="modal fade" id="myModal"-->
        <!--    tabindex="-1" role="dialog" aria-labelledby="myModalLabel">-->
        <!--    <div class="modal-dialog" role="document">-->
        <!--        <div class="modal-content">-->
        <!--            <div id="modalText" class="modal-body">-->
        <!--                <h4 style="color: red;">Invalid Date</h4>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->

        <div style="margin-left:150px; width: 200px; text-align: center;"><label for="">Period Start Date</label></div>
        <div style="margin-left:150px; width: 200px; text-align: center;" class="inner-addon right-addon">
            <form action="payEmp.php" method="GET">
                <i class="glyphicon glyphicon-calendar"></i>
                <input id="periodStartDate" placeholder="yyyy-mm-dd" type="date" value="" name="periodStartDate" class="form-control"
                    pattern="\d{4}[\-]\d{2}[\-]\d{2}" required>
                <input id="dbDate" type="hidden" value="2018-11-03">
                <input id="dateToCheck" type="hidden" value="<?php echo $periodStartDate; ?>">
                <button style="margin-top:5px;" type="submit" class="btn btn-secondary btn-sm">Submit</button>
            </form>
        </div>

        <div class="inner-addon left-addon">
            <i class="glyphicon glyphicon-search"></i>
            <!--<input class="form-control" type="text" id="search" placeholder="search for employees..." onkeyup="search(this.value)">-->
            <input class="form-control" type="text" id="search" placeholder="search for employees..." readonly>
        </div>

        <ul style="height:325px;" id="results">
            <!--<li>-->
            <!--    <span>-->
            <!--        <a href="paystub/paystub.html"><i class="far fa-money-bill-alt"></i></a>-->
            <!--    </span><img src="https://www.w3schools.com/howto/img_avatar2.png" />Amy Hills-->
            <!--</li>-->
            <!--<li>-->
            <!--    <span>-->
            <!--        <a href="paystub/paystub.html"><i class="far fa-money-bill-alt"></i></a>-->
            <!--    </span><img src="https://www.w3schools.com/howto/img_avatar2.png" />Joe DiPablo-->
            <!--</li>-->
        </ul>
    </div>


    <!--<script type="text/javascript" src="payEmps.js"></script>-->
    <script>
        $('#search').bind('keyup', function () {

            var searchString = $(this).val();

            $("ul li").each(function (index, value) {
                var currentName = $(value).text();
                if (currentName.toUpperCase().indexOf(searchString.toUpperCase()) > -1) {
                    $(value).show();
                } else {
                    $(value).hide();
                }
            });

            // if (searchString == "") {
            //     $("#label").text("");
            //     $("ul li").each(function (index, value) {
            //         $(value).hide();

            //     });
            // }
        });

        $(document).ready(function () {
            // console.log("hi");
            var date = $("#dateToCheck").val();

            $.post("validDate.php", {
                dateToCheck: date
            }, function (r) {
                // console.log(r);
                if (r === "") {
                    // $("a").css('pointer-events', 'none');
                    $("#results").html(
                        "<li style='font-size: 15px; border:0px; background: transparent; height:20px; text-align:center; color:red;'>NO RESULTS [YET]</li>"
                    );
                    $("#results").append(
                        "<li style='font-size: 15px; border:0px; background: transparent; height:20px; text-align:center; color:green;'>ENTER A VALID DATE</li>"
                    );
                } else {
                    $.post("payEmps.php", {
                        dateToCheck: date
                    }, function (result) {
                        // console.log(result);
                        if (result) {
                            $("#search").removeAttr("readonly");
                            $("#periodStartDate").val($("#dateToCheck").val());
                            $("#results").html(result);
                        } else {
                            $("#results").html(
                                "<li style='font-size: 15px; border:0px; background: transparent; height:20px; text-align:center; color:rgb(13, 101, 255);'>ALL EMPLOYEES HAVE BEEN PAID FOR THIS PERIOD <i style='color:green;' class='fas fa-check-circle'></i></li>"
                            );

                            // Complete the period!
                            $.post("completePeriod.php", {
                                dateToCheck: date
                            }, function (result) {
                                $.post("paymentSchedule.php", function (pr) {
                                    $("#periodResults").html(pr);
                                });
                            });
                        }

                    });
                }
            });

            $.post("paymentSchedule.php", function (pr) {
                $("#periodResults").html(pr);
            });

        });

        // $("a").css('pointer-events', 'none');

        var periodStartDate = $("#periodStartDate");
        var dbDate = $("#dbDate");
        var submitBtn = $("button");
        // var myModal = $("#myModal");

        // var d1 = Date.parse(periodStartDate.val());
        // var d2 = Date.parse(dbDate.val());

        // submitBtn.attr("data-toggle", "modal");
        // submitBtn.attr("data-target", "#myModal");

        // periodStartDate.keyup(function () {
        //   d1 = Date.parse(periodStartDate.val());
        // });

        $("#periodsTrigger").click(function () {
            $addPanel = $("div#periodsModal");
            $addPanel.modal("show");
        });

        // submitBtn.click(function () {
        //   if (d1 === d2) {
        //     $("a").css('pointer-events', 'all');
        //     // submitBtn.removeAttr('data-toggle');
        //     // submitBtn.removeAttr('data-target');
        //     $("#modalText").html("<h4 style='color: green;'>Success!</h4>");
        //   } else {
        //     // $("body").addClass("model-open");
        //     // $("body").append("<div id='toggleDiv' class='modal-backdrop fade in'></div>");
        //     // myModal.css('display', 'block');
        //     // myModal.css('padding-left', '0px');
        //     submitBtn.attr("data-toggle", "modal");
        //     submitBtn.attr("data-target", "#myModal");
        //     $("#modalText").html("<h4 style='color: red;'>Invalid Date</h4>");
        //     $("a").css('pointer-events', 'none');
        //   }
        // });

        // $("body").click(function () {
        //   // $("body").removeClass("model-open");
        //   // $("body").remove("#toggleDiv");
        //   // myModal.css('display', 'none');
        //   // myModal.css('padding-left', '0px');  
        // });



        $('tbody').on({
                'mouseenter': function () {
                    currPeriod = $(this).text().replace(/\s/g, "");
                    $("#periodNumberE").val(currPeriod);

                    $.post("editingPeriod.php", {
                        period: currPeriod
                    }, function (result) {
                        result = JSON.parse(result);
                        // console.log(result);
                        $("#beginningE").val(result[0]);
                        $("#endingE").val(result[1]);
                        $("#payDateE").val(result[2]);
                        $("#completed").val(result[3]);

                        if (parseInt($("#completed").val())) {
                            $("#beginningE").attr("disabled", "disabled");
                            $("#endingE").attr("disabled", "disabled");
                            $("#payDateE").attr("disabled", "disabled");
                        } else {
                            $("#beginningE").removeAttr("disabled");
                            $("#endingE").removeAttr("disabled");
                            $("#payDateE").removeAttr("disabled");
                        }
                    });
                }
            },
            'td.id'
        );
    </script>
</body>

</html>