<?php
    $connection = mysqli_connect("localhost","root","","apiwada_db");
    session_start();

    if(isset($_POST['service_btn']))
    {
        if(isset($_SESSION['username']))
        {
            $name = $_POST['name'];
            $number = $_POST['number'];
            $job = $_POST['job'];
            $area = $_POST['area'];
            $other = $_POST['other'];
        
        $query = "INSERT INTO addMyService (name,phoneNo,professionID,cityID,otherInfo) VALUES ('$name','$number','$job','$area','$other')";
        $query_run = mysqli_query($connection, $query);
        
        if($query_run)
        {
            
            header('Location: index.php');
            exit();
        }
        else
        {
            $_SESSION['submission_error'] = "submission failed";
            header('Location: addmyser.php');
            exit(); 
        }
        }
        else
        {
            $_SESSION['submission_error'] = "submission failed: Please login to continue";
            header('Location: addmyser.php');
            exit(); 
        }
    }

    
if(isset($_POST['contact_btn']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $message = $_POST['msg'];
        
        $query = "INSERT INTO contactUS (username,email,phoneNo,message) VALUES ('$name','$email','$number','$message')";
        $query_run = mysqli_query($connection, $query);
        
        if($query_run)
        {
            // echo "Saved";
            echo "<script type='text/javascript'>alert('Your Data is Added');</script>";
            header('Location: index.php');
        }
        else
        {
            echo "<script type='text/javascript'>alert('Your Data is NOT Added');</script>";
            header('Location: contactus.php');    
        }
    }

?>