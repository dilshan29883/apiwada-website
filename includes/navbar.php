<?php
session_start();
include('admin/database/dbconfig.php');
if($dbconfig)
{
	// echo "Database Connected";
}
else
{
	header("Location: database/dbconfig.php");
}
?>
<!--Navigation bar-->
      
			<nav class="navbar navbar-expand-lg navbar-light" style="background-image: linear-gradient(to right, #FFFD2B, #f7b839);"> <a class="navbar-brand" href="#"><img src="images/logo2.jpg" alt="logo" style="height: 50px; width: 50px; border-radius: 50%;"></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
				<ul class="navbar-nav mr-auto">
				  <li class="nav-item active"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
				  <li class="nav-item"> <a class="nav-link" href="allads.php">All Ads</a> </li>
				<li class="nav-item"> <a class="nav-link" href="addmyser.php">Add my service</a> </li>
			  </ul>  
			  <?php
			  				if(isset($_SESSION['username']))
										  				{
			  					echo '<a href="logout.php"><button class="btn" style="background-color: #c4c3c0;" type="button">Log Out</button></a>';
			  				}
			  				else
			  				{
			  					echo '<a href="admin/signin.php"><button class="btn" style="background-color: #c4c3c0;" type="button">Sign In</button></a>&nbsp;
			  					<a href="admin/login.php"><button class="btn" style="background-color: #c4c3c0;" type="button">Log In</button></a>';
			  				}
										  				?>	        
				</div>
		  </nav>
		