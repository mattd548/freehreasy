var inputs = $("input");
var editButton = $("#edit");
var saveButton = $("#save");
var deptId = $("#name");
var imageFile = $("#photo");
var photo = $("img");

inputs.attr('readonly', 'readonly');
buttonText = $("#btnText");
buttonText.text("Edit ");

// Current values
var currDpt = $("#department").val();


// $(document).ready(function(){    
//     //Check if the current URL contains '#'
//     if(document.URL.indexOf("#")==-1){
//         // Set the URL to whatever it was plus "#".
//         url = document.URL+"#";
//         location = "#";

//         //Reload the page
//         location.reload(true);
//     }
// });

editButton.click(function () {

    buttonText.text() === "Edit " ? buttonText.text("Cancel ") : buttonText.text("Edit ");

    if (buttonText.text() === "Cancel ") {
        inputs.removeAttr('readonly');
        inputs.addClass("form-control");
        
       deptId.attr('readonly', 'readonly');
       deptId.removeClass("form-control");
        
        saveButton.css("display", "initial");
    
    } else {
        inputs.attr('readonly', 'readonly');
        inputs.removeClass("form-control");
        saveButton.css("display", "none");

        // Reset inputs if changes have been made
        $("#department").val(currDpt);
        

        // location.reload(false);
    }
});

