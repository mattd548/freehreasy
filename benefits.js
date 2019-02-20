$(document).ready(function () {
    // // Insurance
    // $.post("benefitsProcess.php", {
    //     benefitType: "Insurance"
    // }, function (result) {
    //     $("#results").append(result);
    // });

    // //   Dental
    // $.post("benefitsProcess.php", {
    //     benefitType: "Dental"
    // }, function (result) {
    //     $("#results").append(result);
    // });

    // //   Vision
    // $.post("benefitsProcess.php", {
    //     benefitType: "Vision"
    // }, function (result) {
    //     $("#results").append(result);
    // });

    //   All benefits
    $.post("benefitsProcess.php", {
        benefitType: "AllBenefits"
    }, function (result) {
        $("#results").html(result);
    });
});


var currBenefit = "";
$('tbody').on({
        'mouseenter': function () {
            // currBenefit = $(this).text().trim();
            currBenefit = $(this).text().replace(/\s/g, "");
            // console.log(currBenefit.length);
            $("#benefitID").val(currBenefit);
            $("#benefitToDelete").val(currBenefit);

            $.post("editingBenefit.php", {
                benefitID: currBenefit
            }, function (result) {
                result = JSON.parse(result);
                // console.log(result);
                $("#benefitName").val(result[0]);
                $("#benefitType").val(result[1]);
                $("#benefitPercentage").val(parseFloat(result[2].toString()));
            });
        }
    },
    'td.id'
);