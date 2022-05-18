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
                                <h4 class="page-title">Manage Records</h4>
                                
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




<?php if (isset($_SESSION['del'])): ?>
                                            
                                        <div class="alert alert-danger">Delete successfully</div>
                                        <?php endif; unset($_SESSION['del']); ?>


                                        <?php if (isset($_SESSION['up'])): ?>
                                            
                                        <div class="alert alert-success">Update successfully</div>
                                        <?php endif; unset($_SESSION['up']); ?>

                                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Case No</th>
                                    <th>Age</th>
                                    <th>State</th>
                                    <th>Nationality</th>
                                    <th>Status</th>
                                    <th>Gender</th>
                                    <th>From Date</th>
                                    <th>To Date</th>
                                    <th>Action</th>



                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                

    $select = "SELECT * FROM data";
    $res=mysqli_query($con,$select);
    while($data=mysqli_fetch_array($res))
    {

 ?>
                                
                                <tr>
                                    
                                    <td><?php echo $data['case_no'] ?></td>
                                    <td><?php echo $data['age'] ?></td>
                                    <td><?php echo $data['state'] ?></td>
                                    <td><?php echo $data['nationality'] ?></td>
                                    <td><?php echo $data['status'] ?></td>
                                    <td><?php echo $data['gender'] ?></td>
                                    <td><?php echo $data['from_date'] ?></td>
                                    <td><?php echo $data['to_date'] ?></td>

                                    <td><a class="btn btn-danger btn-sm" href="manage_data.php?id=<?php echo $data['case_no'] ?>&action=del">Delete</a><a style="margin-left: 5px" class="btn btn-primary btn-sm" href="edit.php?id=<?php echo $data['case_no'] ?>">Edit</a></td>



                                    
                                    
                                </tr>
                        
                                <?php
                                
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
            <?php 
                if($_GET['id']) {
                    if($_GET['action']=='del') {
                        $del = "DELETE FROM data where case_no='".$_GET['id']."'";
                        $res=mysqli_query($con,$del);
                        $_SESSION['del']='abc';
                        header('location:manage_data.php');
                    }

                    
                    
                }
             ?>




<?php include "footer.php"; ?>