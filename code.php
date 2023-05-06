<?php
session_start();
require 'dbconn.php';

if(isset($_POST['save_adn']))

{
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $user = mysqli_real_escape_string($con,$_POST['user']);
    $pass = mysqli_real_escape_string($con,$_POST['pass']);

    $query= "INSERT INTO login ( username,  password, name) VALUES ('$user','$pass','$name')" ;
    $query_run = mysqli_query($con, $query);

    if ($query_run)
    {
        $_SESSION['message']="Admin Created Sucessfully";
        header("Location:Cread.php");
        exit(0);
    }
    else{
        $_SESSION['message']="Admin Not Created ";
        header("Location:Cread.php");
        exit(0);
    }   
}
?>