$(document).ready(function () {
    // Insurance
    $.post("benefitsForEmps.php", {
        benefitType: "Insurance"
    }, function (result) {
        $("#insurance").append(result);
        $("#insurance").append("<option value='N/A'>N/A</option>")
    });

    //   Dental
    $.post("benefitsForEmps.php", {
        benefitType: "Dental"
    }, function (result) {
        $("#dental").append(result);
        $("#dental").append("<option value='N/A'>N/A</option>");
    });

    //   Vision
    $.post("benefitsForEmps.php", {
        benefitType: "Vision"
    }, function (result) {
        $("#vision").append(result);
        $("#vision").append("<option value='N/A'>N/A</option>");
    });
    
     //   Department
    $.post("benefitsForEmps.php", {
        benefitType: "Departments"
    }, function (result) {
        $("#department").append(result);
    });
});

var inputs = $("input");
var SSNeye = $("#SSNeye");

SSNeye.click(function () {
    if ($("#ssn").val() === "") {
        SSNeye.html('<i class=\"glyphicon glyphicon-eye-close"></i>');
        $("#ssn").attr('type', 'password');
        return;
    }
    if (SSNeye.html() === '<i class=\"glyphicon glyphicon-eye-open\"></i>') {
        SSNeye.html('<i class=\"glyphicon glyphicon-eye-close"></i>');
        $("#ssn").attr('type', 'password');
    } else {
        SSNeye.html('<i class=\"glyphicon glyphicon-eye-open"></i>');
        $("#ssn").attr('type', 'text');
    }
});

$("#ssn").keyup(function () {
    if ($("#ssn").val() === "") {
        SSNeye.html('<i class=\"glyphicon glyphicon-eye-close"></i>');
        $("#ssn").attr('type', 'password');
    }
});