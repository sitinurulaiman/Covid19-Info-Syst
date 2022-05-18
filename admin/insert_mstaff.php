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
                                <h4 class="page-title">Insert New Medical Staff</h4>

                                <p><a href="medical_staff.php">Medical Staff</a> 

|                                   <a href="mstaff_list.php">Medical Staff List</a>

|                                   <a href="logout.php">Logout</a></p>
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
                                            <label class="form-label">Username</label>
                                            <div class="controls">
                                                <input class="form-control" type="text"   name="username" required="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        

                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <div class="controls">
                                                <input class="form-control" type="text"  name="email" required="">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        

                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <div class="controls">
                                                <input class="form-control" type="text" \ name="password" required="">
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
         
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$trn_date = date("Y-m-d H:i:s");

echo $insert = "insert into register(username,email,password,trn_date) values ('$username','$email','".md5($password)."','$trn_date')";
$run=mysqli_query($con,$insert);
    if($run){
        $_SESSION['ok']='abv';
    header('location:mstaff_list.php');
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