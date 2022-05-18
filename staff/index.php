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
                                <h4 class="page-title">Medical Staff Panel</h4>
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
                                        <?php if (isset($_SESSION['ok'])): ?>
                                            
                                        <div class="alert alert-success">Data saved successfully</div>
                                        <?php endif; unset($_SESSION['ok']); ?>

                                        <div class="form-group">
                                            <label class="form-label">State</label>
                                            <div class="controls">
                                                <input class="form-control" type="text"   name="state" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        

                                        <div class="form-group">
                                            <label class="form-label">Nationality</label>
                                            <div class="controls">
                                                <input class="form-control" type="text"  name="nat" required="">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        

                                        <div class="form-group">
                                            <label class="form-label">Status</label>
                                            <div class="controls">
                                                <input class="form-control" type="text" \ name="status" required="">
                                            </div>
                                        </div>
                                    </div>


                                    
                                    <div class="col-sm-12">
                                        

                                        <div class="form-group">
                                            <label class="form-label">Age</label>
                                            <div class="controls">
                                                <input class="form-control" type="number"  name="age" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="radio" name="gender" value="male">
                                        <label for="male">Male</label>
                                        <input type="radio" name="gender" value="female">
                                        <label for="female">Female</label>
                                    </div>
                                    </div>


                                    <div class="col-sm-12">
                                        

                                        <div class="form-group">
                                            <label class="form-label">Confirmed Date</label>
                                            <div class="controls">
                                                <input type="date" name="c_date" id="basicFlatpickr" value="2019-09-04" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                                    
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
                                                <input type="date" name="r_date" id="basicFlatpickr1" value="2019-09-04" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                                    
                                    <script>
                                        var f1 = flatpickr(document.getElementById('basicFlatpickr1'));

                                    </script>
                                            </div>
                                        </div>
                                    </div>
                                      
                                    <div class="clearfix"></div>

                                <div class="col-sm-8 offset-sm-2 mt-4">
                                       
                                    <button type="submit" class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" style="width:100%; min-height: 45px;border-radius: 25px; margin-bottom: 20px;">Submit</button>
                                                                                

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

echo $insert = "insert into data(status,state,nationality,age,gender,from_date,to_date) values ('$status','$state','$nat','$age','$gender','$c_date','$r_date')";
$run=mysqli_query($con,$insert);
    if($run){
        $_SESSION['ok']='abv';
    header('location:index.php');
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