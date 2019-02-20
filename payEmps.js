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