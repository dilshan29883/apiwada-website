<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h5 class="m-0 font-weight-bold text-success">Registered Employee Information</h5>
</div>
<div class="card-body">

    <div class="table-responsive">

    <?php
    $query = "SELECT * FROM addMyService";
    $query_run = mysqli_query($connection, $query);
    ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    
                    <th>Phone No</th>
                    <th>Proffession No</th>
                    <th>Area No</th>
                    <th>other</th>
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
                    
                    <td><?php echo $row['phoneNo']; ?></td>
                    <td><?php echo $row['professionID']; ?></td>
                    <td><?php echo $row['cityID']; ?></td>
                    <td><?php echo $row['otherInfo']; ?></td>
                    <td>
                        <form action="code.php" method="post">
                            <input type="hidden" name="service_delete_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="service_delete_btn" class="btn btn-danger">DELETE</button>
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
