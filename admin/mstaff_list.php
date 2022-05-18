<?php include "header.php";
?>
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title">Medical Staff List</h4>
                                <title>Medical Staff List</title>
                                <p><a href="medical_staff.php">Medical Staff</a> 
|                                   <a href="insert_mstaff.php">Insert New Medical Staff</a>
                                    <a href="logout.php">Logout</a></p>
                                
                            </div>
                            <div class="col-sm-6">
                
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-sm-12">
                            
                            <div class="card">
                                <div class="card-body">

                                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>               
                                <?php         
    $count=1;
    $select = "SELECT * FROM register ORDER BY id asc";
    $res=mysqli_query($con,$select);
    while($data=mysqli_fetch_assoc($res))
    {  
 ?> 
                                <tr>
                                   <td><?php echo $count; ?></td>
                                    <td><?php echo $data['username'] ?></td>
                                    <td><?php echo $data['email'] ?></td>
                                    <td><?php echo $data['trn_date'] ?></td>
                                    

                                    <td><a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $data["id"] ?>">Delete</a><a style="margin-left: 5px" class="btn btn-primary btn-sm" href="edit_mstaff.php?id=<?php echo $data["id"] ?>">Edit</a></td>
                                
                                </tr>

                                <?php $count++; 
                                } 
                                 ?>

                            </tbody>
                        </table>
  
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
           
<?php include "footer.php"; ?>