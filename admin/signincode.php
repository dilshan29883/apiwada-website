<?php

if(isset($_POST['signin_btn']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
    
    
        $connection = mysqli_connect("localhost","root","","apiwada_db");
        $query = "INSERT INTO registration (userName,email,password,userType) VALUES ('$name','$email','$password','$usertype')";
        $query_run = mysqli_query($connection, $query);
        
        if($query_run)
        {
            // echo "Saved";            
            header('Location: ../index.php');
        }
        else
        {
            header('Location: signin.php');    
        }
    
}
?>