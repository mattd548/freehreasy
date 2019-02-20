<?php

  $connect = mysqli_connect("**************","***************", "***********","************");

  if(!$connect) {
      die("Conncetion failed:".mysqli_error());
  }

?>