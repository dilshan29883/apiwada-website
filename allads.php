<?php
include('includes/navbar.php');
include('includes/header.php');
?>
<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-3">
				<h2 class="text-center text-warning">Catogaries</h2>
				<hr class="bg-warning">
				<ul class="list-group">
				<li class="list-group-item"><a href="#">All Proffessions</a></li>
					<?php
						$connection = mysqli_connect("localhost","root","","apiwada_db");
						$query = "SELECT * FROM profession";
						$query_run = mysqli_query($connection, $query);
						if(mysqli_num_rows($query_run) > 0)
						{
							foreach($query_run as $row)
							{
								?>
								<li class="list-group-item"><a href="#"><?php echo $row['professionName']; ?></a></li>
								
								<?php
							}
						}
						else
						{
							echo "No Record Found";
						}
						
						?>
			</div>
			<div class="col-9">
				<h2 class="text-center text-info">All Ads</h2>
				<hr class="bg-info">
			<table id="myTable" class="table table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th>Worker Name</th>
							<th>phone No</th>
							<th>Proffession</th>
							<th>Working area</th>

						</tr>
					</thead>
					<tbody>
						<?php
						$connection = mysqli_connect("localhost","root","","apiwada_db");
						$query = "SELECT a.name, a.phoneNo, p.professionName, c.cityName
									FROM addMyService a
									JOIN profession p ON a.professionID = p.professionID
									JOIN city c ON a.cityID = c.cityID";
						$query_run = mysqli_query($connection, $query);
						if(mysqli_num_rows($query_run) > 0)
						{
							foreach($query_run as $row)
							{
								?>
								<tr>
									<td><?php echo $row['name']; ?></td>
									<td><?php echo $row['phoneNo']; ?></td>
									<td><?php echo $row['professionName']; ?></td>
									<td><?php echo $row['cityName']; ?></td>
									
							</tr>
								<?php
							}
						}
						else
						{
							echo "No Record Found";
						}
						?>
					</tbody>
				</table>

			</div>
		</div>
	
				


<br>
<?php 
	  include('includes/footer.php');
	  include('includes/scripts.php');
 ?>
