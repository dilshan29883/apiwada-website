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
	    <div class="col-2"></div>
	    <div class="col-8 rounded" style="background-color: rgba(176,168,168,1.00)">
			<br><br>
		    <h4>Contact Us</h4>
			<p>If you did not find the answer to your question or problem, please get in touch with us using the form below and we will respond to your message as soon as possible.</p>

			<form action="webcode.php" method="POST">
  				<div class="mb-3">
 					<label>Name<span class="red">*</span></label>
					    <input type="text" name="name" class="form-control inputbg"  placeholder="Enter your Name" required>
				</div>
				<div class="mb-3">
 					<label>Email<span class="red">*</span></label>
					    <input type="email" name="email" class="form-control inputbg" placeholder="Enter your Email" required>
					    <div class="form-text">We'll never share your email with anyone else.</div>
				</div>
				  <div class="mb-3">
   					 <label>Phone Number</label>
  					  <input type="tel"name="number" class="form-control inputbg" placeholder="Enter your Phone Number">
 				  </div>
				<div class="mb-3">
   					 <label>Message<span class="red">*</span></label>
					 <br><textarea class="inputbg rounded" name="msg" placeholder="Enter your Message" required></textarea>
 				  </div>
  				<button type="submit" name="contact_btn" class="btn btn-primary">Submit</button>
			</form><br><br>
		  </div>
	    <div class="col-2"></div>
    </div>
  </div>
  <br><br>

	  <?php 
	  include('includes/footer.php');
	  include('includes/scripts.php');
	   ?>
