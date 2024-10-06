<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-success">User's problems</h5>
</div>
<div class="card-body">

    <div class="table-responsive">

    <?php
    $query = "SELECT * FROM contactUs";
    $query_run = mysqli_query($connection, $query);
    ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    
                    <th>Number</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Message</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if(mysqli_num_rows($query_run) > 0)
            {
                while($row = mysqli_fetch_assoc($query_run))
                {
                    ?>
                <tr>
                    
                    <td><?php echo $row['userID']; ?></td>
                    <td><?php echo $row['userName']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phoneNo']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                    <td>
                        <form action="code.php" method="post">
                            <input type="hidden" name="contact_delete_id" value="<?php echo $row['userID']; ?>">
                            <button type="submit" name="contact_delete_btn" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
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
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
