<?php include "header.php";
include "connection.php";
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
                                <h4 class="page-title">Update Medical Staff Record</h4>
                                
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
                                            $select = "SELECT * FROM register where 'id'='".$_GET['id']."'";
                                            $res=mysqli_query($con,$select);
                                            $data=mysqli_fetch_array($res);
                                         ?>

                                        <div class="form-group">
                                            <label class="form-label">Username</label>
                                            <div class="controls">
                                                <input  class="form-control" type="text"   name="username" required="" value="<?php echo $data['username'] ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        
                                        

                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <div class="controls">
                                                <input class="form-control" type="text"  name="email" value="<?php echo $data['email'] ?>" required="">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        

                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <div class="controls">
                                                <input class="form-control" type="text" name="password" value="<?php echo $data['password'] ?>" required="">
                                            </div>
                                        </div>
                                    </div>
                                      
                                    <div class="clearfix"></div>

                                <div class="col-sm-8 offset-sm-2 mt-4">
                                       
                                    <button name="up" type="submit" class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" style="width:100%; min-height: 45px;border-radius: 25px; margin-bottom: 20px;">Update</button>
                                                                                
                                    </div>
                            </div>
                 
                                    </form>

<?php  
        if ($_POST) {
         
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$trn_date = date("Y-m-d H:i:s");

$up = "UPDATE register set username = '".$username."', email = '".$email."', password= '".md5($password)."', trn_date  = '".$trn_date."' where id='".$_GET['id']."'";
$run=mysqli_query($con,$up);
    if($run){
        $_GET['up']='abv';
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


