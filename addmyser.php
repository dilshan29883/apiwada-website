<?php
include('includes/navbar.php');
include('includes/header.php');

?>
	  	  <!-- top image -->
  			<section>
	  			<img class="img-fluid" src="images/single_flame.png" alt="top">
  			 </section><br><br>
	  
  	<!-- form -->
  <div class="container">
	  <div class="row">
	    <div class="col-lg-2"></div>
	    <div class="col-lg-8 rounded" style="background-color: rgba(176,168,168,1.00)">
			<br><br>
		  <h4>Register On Apiwada.lk</h4>
			<p>Please proceed to add your services and complete the registration process to unlock professional, tailored management capabilities for your account.</p>
			
			<?php
            // Check if submission error message exists
            if(isset($_SESSION['submission_error'])) {
                echo '<div class="alert alert-danger" role="alert">';
                echo $_SESSION['submission_error'];
                echo '</div>';

                // Unset the session variable after displaying the error
                unset($_SESSION['submission_error']);
            }
            ?>

			<form action="webcode.php" method="post">
				<!--UserName(text)-->
				<div class="mb-3">
 					<label for="name">User Name<span class="red">*</span></label>
					<input type="text" class="form-control inputbg" name="name"  placeholder="Enter your Name (For Display)" required>
				</div>
				<!--Mobile number(number)-->
  				<div class="mb-3">
 					<label for="number">Phone number<span class="red">*</span></label>
					<input type="number" class="form-control inputbg" name="number"  placeholder="Enter your phone number" required>
				</div>
				<!--proffession(job)-->
				<div class="mb-3">
					<label for="jpb">Proffession<span class="red">*</span></label>
					<select name="job" class="form-control inputbg" required>
						<option value="0">Select your proffession</option>
						<?php
						$connection = mysqli_connect("localhost","root","","apiwada_db");
						$query = "SELECT * from profession";
						$query_run = mysqli_query($connection, $query);
						if(mysqli_num_rows($query_run) > 0)
						{
							foreach($query_run as $row)
							{
								?>
								<option value="<?php echo $row['professionID']; ?>"><?php echo $row['professionName']; ?></option>
								<?php
							}
						}
						else
						{
							echo "No Record Found";
						}
						?>
					</select>
					</div>
				<!--working Area(area)-->
				<div class="mb-3">
					<label for="area">Working area<span class="red">*</span></label>
					<select name="area" class="form-control inputbg" required>
						<option value="0">Select your Working area</option>
						<?php
						$connection = mysqli_connect("localhost","root","","apiwada_db");
						$query = "SELECT * from city";
						$query_run = mysqli_query($connection, $query);
						if(mysqli_num_rows($query_run) > 0)
						{
							foreach($query_run as $row)
							{
								?>
								<option value="<?php echo $row['cityID']; ?>"><?php echo $row['cityName']; ?></option>
								<?php
							}
						}
						else
						{
							echo "No Record Found";
						}
						?>
					</select>
					</div>
			<!--other information(other)-->
				<div class="mb-3">
   					 <label for="other" class="form-label">Other Information</label>
					 <br><textarea class="inputbg rounded" name="other" placeholder="(optional) If you want to add additional details Enter here"></textarea>
 				  </div>
  				<button type="submit" name="service_btn" class="btn btn-primary">Submit</button>
				<button type="reset" class="btn btn-primary">Reset</button>
			</form><br><br>
		  </div>
	    <div class="col-lg-2"></div>
    </div>
  </div>
  <br><br>
	

	  <?php 
	  include('includes/footer.php');
	  include('includes/scripts.php');
	   ?>
