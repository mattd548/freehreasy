
function search(value) {

  if(value.length == '')
  {
    $("#results").html("");

  }  else {
    $.post("searchEmp.php", {search:value}, function(data){
        $("#results").html(data);
     
      });
   
  }
}