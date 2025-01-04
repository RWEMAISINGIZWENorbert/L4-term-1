<?php
 include 'db_connect.php';

 $user_name = $_POST['username'];
 $password  = $_POST['password'];

echo $user_name;

 $sql_command = mysqli_query($conn, "SELECT * FROM users WHERE username = '$user_name' AND password = '$password' ");
 
 if(mysqli_num_rows($sql_command) > 0){
    $result = mysqli_fetch_assoc($sql_command);
    session_start();
    $_SESSION['username'] = $user_name;
    echo $_SESSION['username'];

     echo "<script>
       alert('login successfully done');
       window.location.href = 'admindashboard.php'
     </script>";
 }else{
    echo "<script>
        alert('Failed to login');
        window.location.href = 'index.php'
    </script>";
 }
 

?>