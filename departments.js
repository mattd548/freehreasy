function search(value) {

  if(value.length == '')
  {
    $("#results").html("");

  }  else {
    $.post("searchDept.php", {search:value}, function(data){
        $("#results").html(data);
     
      });
   
  }
}