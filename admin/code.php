<?php
include('security.php');

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
    
    if($password === $confirmpassword)
    {
        $query = "INSERT INTO registration (userName,email,password,userType) VALUES ('$username','$email','$password','$usertype')";
        $query_run = mysqli_query($connection, $query);
        
        if($query_run)
        {
            // echo "Saved";
            $_SESSION['success'] = "Admin Profile Added";
            header('Location: register.php');
        }
        else
        {
            $_SESSION['status'] = "Admin Profile NOT Added";
            header('Location: register.php');    
        }
    }
    else
    {
        $_SESSION['status'] = "Password and Confirm Password Does Not Match";
        header('Location: register.php');    
    }
}

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $email = $_POST['edit_email'];
    $password = $_POST['edit_password'];
    $usertypeupdate = $_POST['update_usertype'];
    
    $query = "UPDATE registration SET userName='$username', email='$email', password='$password', userType='$usertypeupdate' WHERE userID='$id' ";
    $query_run = mysqli_query($connection, $query);
    
    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Updated";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        header('Location: register.php');    
    }
}

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    
    $query = "DELETE FROM registration WHERE userID='$id' ";
    $query_run = mysqli_query($connection, $query);
    
    if($query_run)
    {
        $_SESSION['success'] = "Your Data is Deleted";
        header('Location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Deleted";
        header('Location: register.php');    
    }    
}

if(isset($_POST['login_btn']))
{
    $email_login = $_POST['email'];
    $password_login = $_POST['password'];
    
    $query = "SELECT * FROM registration WHERE email='$email_login' AND password='$password_login' ";
    $query_run = mysqli_query($connection, $query);
    
    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
    }
    else
    {
        $_SESSION['status'] = 'Email ID / Password is Invalid';
        header('Location: login.php');
    }
}

if(isset($_POST['service_delete_btn']))
{
    $id = $_POST['service_delete_id'];
    
    $query = "DELETE FROM addMyService WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    
    if($query_run)
    {
        
        header('Location: emp.php');
    }
    else
    {
        
        header('Location: emp.php');    
    }    
}

if(isset($_POST['contact_delete_btn']))
{
    $id = $_POST['contact_delete_id'];
    
    $query = "DELETE FROM contactUs WHERE userID='$id' ";
    $query_run = mysqli_query($connection, $query);
    
    if($query_run)
    {
        
        header('Location: contact.php');
    }
    else
    {
        
        header('Location: contact.php');    
    }    
}


?>