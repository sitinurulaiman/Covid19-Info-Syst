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
                                <h4 class="page-title">Update Record</h4>
                                
                            </div>
                            <div class="col-sm-6">
                                
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-sm-6 offset-sm-3">
                            
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title"></h4>
                                    <form method="POST">

                            <div class="row">
                                    <div class="col-sm-12">
                                        

                                        <?php 
                                            $select = "SELECT * FROM data where case_no='".$_GET['id']."'";
                                            $res=mysqli_query($con,$select);
                                            $data=mysqli_fetch_array($res);
                                         ?>

                                        <div class="form-group">
                                            <label class="form-label">State</label>
                                            <div class="controls">
                                                <input  class="form-control" type="text"   name="state" required="" value="<?php echo $data['state'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        
                                        

                                        <div class="form-group">
                                            <label class="form-label">Nationality</label>
                                            <div class="controls">
                                                <input class="form-control" type="text"  name="nat" value="<?php echo $data['nationality'] ?>" required="">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        

                                        <div class="form-group">
                                            <label class="form-label">Status</label>
                                            <div class="controls">
                                                <input class="form-control" type="text" \ name="status" value="<?php echo $data['status'] ?>" required="">
                                            </div>
                                        </div>
                                    </div>


                                    
                                    <div class="col-sm-12">
                                        

                                        <div class="form-group">
                                            <label class="form-label">Age</label>
                                            <div class="controls">
                                                <input class="form-control" type="number"  name="age" value="<?php echo $data['age'] ?>" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Select Gender</label>
                                        <select class="form-control mb-4" name="gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>

                                            
                                        </select>
                                    </div>
                                    </div>


                                    <div class="col-sm-12">
                                        

                                        <div class="form-group">
                                            <label class="form-label">Confirmed Date</label>
                                            <div class="controls">
                                                <input type="date" name="c_date" id="basicFlatpickr" value="2019-09-04" class="form-control flatpickr flatpickr-input active" value="<?php echo $data['from_date'] ?>" >
                                    
                                    <script>
                                        var f1 = flatpickr(document.getElementById('basicFlatpickr'));

                                    </script>
                                            </div>
                                        </div>
                                    </div>
                                    


                                    <div class="col-sm-12">
                                        

                                        <div class="form-group">
                                            <label class="form-label">Recovered Date</label>
                                            <div class="controls">
                                                <input type="date" name="r_date" id="basicFlatpickr1" value="2019-09-04" class="form-control flatpickr flatpickr-input active" type="text" value="<?php echo $data['to_date'] ?>">
                                    
                                    <script>
                                        var f1 = flatpickr(document.getElementById('basicFlatpickr1'));

                                    </script>
                                            </div>
                                        </div>
                                    </div>
                                      
                                    <div class="clearfix"></div>

                                <div class="col-sm-8 offset-sm-2 mt-4">
                                       
                                    <button type="submit" class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" style="width:100%; min-height: 45px;border-radius: 25px; margin-bottom: 20px;">Update</button>
                                                                                

                                    </div>
                            </div>

                                        
                                    </form>

<?php  
        if ($_POST) {
         
$status=$_POST['status'];
$state=$_POST['state'];
$nat=$_POST['nat'];
$age=$_POST['age'];
$c_date=$_POST['c_date'];
$r_date=$_POST['r_date'];
$gender=$_POST['gender'];

$up = "UPDATE data set status = '$status', state = '$state',  nationality= '$nat', age  = '$age', gender = '$gender', from_date = '$c_date', to_date = '$r_date' where case_no='".$_GET['id']."'";
$run=mysqli_query($con,$up);
    if($run){
        $_GET['up']='abv';
    header('location:manage_data.php');
    } 
}

?>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
<?php include "footer.php"; ?>