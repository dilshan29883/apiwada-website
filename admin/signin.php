<?php
include('includes/header.php');
?>


<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0 bg-warning">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
                                    </div>
                                    <form class="user" action="signincode.php" method="POST" onsubmit="return checkPassword(this)" >
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control form-control-user" placeholder="Enter Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user" placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="confirmpassword" class="form-control form-control-user" placeholder="Confirm Your Password">
                                        </div>
                                        <input type="hidden" name="usertype" value="user">

                                        <button type="submit" name="signin_btn" class="btn btn-primary btn-user btn-block">Register</button><br>
                                        <center class="text-dark">Already have an account? <a href="login.php">Login</a></center>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <script>
        function checkPassword(form) { 
    
    var password1 = form.password.value; 
    var password2 = form.confirmpassword.value;
    var email = form.email.value;

    // If password not entered 
    if (password1 === '') {
        alert("Please enter Password"); 
        return false;
    }
    
    // If confirm password not entered 
    if (password2 === '') {
        alert("Please enter confirm password");
        return false;
    }

    // If email not entered 
    if (email === '') {
        alert("Please enter Email");
        return false;
    }
    
    // If Not same return False.     
    if (password1 !== password2) { 
        alert("Password did not match. Please try again...");
        return false; 
    } 

    // If same return True. 
    return true; 
}

        
    </script>

<?php
include('includes/scripts.php');
?>