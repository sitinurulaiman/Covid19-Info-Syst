<?php include "header.php";
header('X-Frame-Options: DENY'); 
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
                </div>
            </div>
        </div>


                   
                    <!-- end row -->
               
                
                    <div class="row" style="padding-left: 20px; padding-top: 150px; width: 80%;" >
                        <h2 style="color: #ffffff;">Information About Patients</h2> 
                        <div class="col-sm-12">
                            
                            <div class="card">
                                <div class="card-body">

                                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                
                                <tr>
                                    <th>Case No</th>
                                    <th>Age</th>
                                    <th>State</th>
                                    <th>Nationality</th>
                                    <th>Gender</th>
                                    <th>status</th>
                                    <th>Confirmed Date</th>
                                    <th>Recovered Date</th>



                                    
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
                                    <td><?php echo $data['gender'] ?></td>
                                    <td><?php echo $data['status'] ?></td>
                                    
                                    <td><?php echo $data['from_date'] ?></td>
                                    <td><?php echo $data['to_date'] ?></td>
                                    
                                </tr>
                        
                                <?php
                                
                                } 
                                
                                 ?>

                            </tbody>
                        </table>
 
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div></div>

<br>
<br>