<?php

    session_start();
    include "connection.php" ;
    
    //tangkap data yang dikirim dari from login
    $username = $_POST["username"];
    $password = $_POST["password"];

    //kueri data dari database
    $query = mysqli_query($connection,"select * from user where username='$username' and password ='$password'");
    $cek=mysqli_num_rows($query); //melakukan pencocokan
    if($cek==TRUE){
            $_SESSION['username']=$username; 
            header("location:home.php"); }
    else{
    echo "<script> alert('Username atau Password Salah'); window.location = 'login.php'; </script>";
    }

?>