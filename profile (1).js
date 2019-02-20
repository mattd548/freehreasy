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