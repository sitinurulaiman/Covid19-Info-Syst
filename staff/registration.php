<?php include('register.php');
header('X-Frame-Options: DENY'); 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Covid-19 Information System</title>
  <link rel="shortcut icon" href="web/logo.png">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
  <link href="assets/css/style.css" rel="stylesheet" type="text/css">
<style>
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
</style> 
</head>

<div class="home-btn d-none d-sm-block"></div>
    <div class="wrapper-page wrapper-page-login">
        <div class="card overflow-hidden account-card mx-3">
            <div class="bg-primary p-4 text-white text-center position-relative">
                <h4 class="font-20 m-b-5">Register Account</h4>
                <p>Already have an account? <a href='login.php'>Sign in Here</a></p>
                <a style="margin: 0px; padding: 0px; ">
                    <img src="../user/web/logo.png" alt="" height="70">
                </a>
            </div>
            <div class="account-card-content">
                            <form method="POST" action="registration.php">
                                
                            <?php include('errors.php'); ?>
</br>

                                            <div class="row">
                                                <div class="col-12">

                                                    <div class="form-group">
                                                        <label class="form-label">Username</label>
                                                        <div class="controls">
                                                            <input type="text" class="form-control lowercase" name="username" placeholder="user name">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-label">Email</label>
                                                        <div class="controls">
                                                            <input type="email" class="form-control" name="email" placeholder="email">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-label">Password</label>
                                                        <div class="controls">
                                                            <input type="password" class="form-control" name="password" placeholder="password">
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 col-lg-6 col-sm-12">
                                                    <a href="../index.php" class="btn btn-primary w-md waves-effect waves-light">Back</a>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-sm-12">

                                                    <button style="float: right" class="btn btn-primary w-md waves-effect waves-light" type="submit" name="reg_user">Register</button>
                                                </div>
                                            </div>
                                        </form>

            </div>
        </div>
        <div class="m-t-40 text-center">
            <p>© 2020 Filter System</p>
        </div>
    </div>
    <!-- end wrapper-page -->
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/waves.min.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>
</html>