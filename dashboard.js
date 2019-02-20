//  setInterval(function () {
//      var d = new Date();
//      var mins = "";

//      if (d.getMinutes() < 10) {
//          mins = "0" + d.getMinutes().toString();
//      } else {
//          mins = d.getMinutes().toString();
//      }

//      var date = (d.getMonth() + 1).toString() + "-" + d.getDate().toString() + "-" + (d.getYear() + 1900).toString();
//      date += " " + (d.getHours()).toString() + ":" + mins;
//      document.getElementById("date").innerHTML = date;
//  }, 1000);

 var d = new Date();
 document.getElementById("date").innerHTML = d;