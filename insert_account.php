<?php
 
 include 'db_connect.php';

 $username = $_POST['username'];
 $password = $_POST['password'];

//  Insert in the database table
$insert = "INSERT INTO users(userName, Password) VALUES ('$username','$password')";
$sql_command =  mysqli_query($conn, $insert);
 
 if($sql_command > 0){
    echo "<script>alert('Account')<script/>;
    window.location.href = index.php";
 }else{
    echo "<script>alert('Failed')<script/>";
 }

?>