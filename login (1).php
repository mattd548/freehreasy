<?php 
  include_once "db.php";
  session_start();
   if(isset($_POST['submit'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $db_email="";
      $login_query = " SELECT * FROM system_user WHERE email='$email' AND  password='$password' AND role='admin' ";

      $result= $connect->query($login_query);
      while($row=$result->fetch_assoc()) {
        //fetch user info from the database
          $db_user_id = $row['id'];
          $db_email = $row['email'];
          $db_password = $row['password'];
          $db_user_role = $row['role'];      
      }
       //if the user is found, start the session and take the user to the dashboard
      if($email === $db_email && $password === $db_password) {
          
           $_SESSION['email'] = $email;
            $_SESSION['user_id'] = $db_user_id;
            $_SESSION['user_email'] = $db_email;
            $_SESSION['user_password'] = $db_password;
            $_SESSION['user_role'] = $db_user_role; 
            $_SESSION['logged_in']=true;
          header("Location:admin.php");    
      }  else 
      {
           $_SESSION['errMsg'] = "Invalid username or password"; //redirect user to the home page if not found
           header("Location:index.php");
      }
         
   }

?>