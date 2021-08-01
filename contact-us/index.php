<?php
  $insert = false;
  if(isset($_POST['name'])){
      // Set connection variables
      $server = "localhost";
      $username = "root";
      $password = "Prabhjot@2002";
  
      // Create a database connection
      $con = mysqli_connect($server, $username, $password);
  
      // Check for connection success
      if(!$con){
          die("connection to this database failed due to" . mysqli_connect_error());
      }
      echo "Success connecting to the db";
  
      Collect post variables
      $name = $_POST['name'];
    
      $email = $_POST['email'];  
  
      $message = $_POST['message'];
      $sql = "INSERT INTO `contact_us`.`contact` (`name`, `email`, `message`) VALUES ('$name',  '$email', '$message');";
  }
?>