<?php
  
  $server_rname = 'localhost';
  $user_name = 'root';
  $password = '';
  $database = 'customer_info';

   $conn = mysqli_connect($server_rname, $user_name, $password, $database);

  //  if($conn){
  //   echo "Connected succesfully";
  //  }else{
  //   echo "Failed to connect";
  //  }

?>