<?php
include('security.php');
if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];
    
    $query = "SELECT * FROM registration WHERE email='$email_login' AND password='$password_login' ";
    $query_run = mysqli_query($connection, $query);
    $user_type = mysqli_fetch_array($query_run);
    
    if($user_type['userType'] == "admin")
    {
        $_SESSION['username'] = $user_type['userName'];
        header('Location: index.php');
    }
    else if ($user_type['userType'] == "user")
    {
        $_SESSION['username'] = $user_type['userName'];
        header('Location: ../index.php');
    }
    else
    {
        $_SESSION['status'] = 'Email ID / Password is Invalid';
        header('Location: login.php');
    }
}
?>