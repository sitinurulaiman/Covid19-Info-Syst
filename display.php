<?php include "header.php" ;
header('X-Frame-Options: DENY');
?>
<!--  END SIDEBAR  -->

<!--  BEGIN CONTENT AREA  -->

<div id="content" class="main-content">
    <h2 style="margin: 20px">Filter System</h2>

    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">


            <div  class="col-xl-12  col-lg-12 col-md-12 col-sm-12 col-12" style="margin-bottom: 2%">
            <form method="POST">

                <div class="form">
                    <div class="row">
                        <div class="col-lg-1 col-md-1"></div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="fullName">Case No</label>
                                <input type="text" class="form-control mb-4" id="fullName" name="case_no" placeholder="Enter Case Number">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="fullName">Age</label>
                                <input name="age" type="text" class="form-control mb-4" id="fullName" placeholder="Enter Age" >
                            </div>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col-lg-1 col-md-1"></div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="fullName">State</label>
                                <input type="text" class="form-control mb-4" id="fullName" name="state" placeholder="Enter State">
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="fullName">Nationality</label>
                                <input type="text" name="nationality" class="form-control mb-4" id="fullName" placeholder="Enter Nationality" >
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-1 col-md-1"></div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                            <label class="form-label">Confirmed Date</label>
                                            
                                                <input type="date" name="from_date" id="basicFlatpickr1" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                                    
                                    <script>
                                        var f1 = flatpickr(document.getElementById('basicFlatpickr1'));

                                    </script>
                                            
                                        </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                            <label class="form-label">Recovered Date</label>
                                            
                                                <input type="date" name="to_date" id="basicFlatpickr" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date..">
                                    
                                    <script>
                                        var f1 = flatpickr(document.getElementById('basicFlatpickr'));

                                    </script>
                                            
                                        </div>
                        </div>  
                    </div>



                    <div class="row">
                        <div class="col-lg-1 col-md-1"></div>

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Select Gender</label>
                                <select class="form-control mb-4" name="gender">
                                  <option value=""></option>

                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- <div class="col-sm-5">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control mb-4" name="status">
                                  <option value=""></option>

                                  <option value="hospital">Hospital</option>
                                  <option value="death">Death</option>
                                  <option value="recovered">Recovered</option>
                                </select>
                            </div>
                        </div> -->

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="fullName">Status</label>
                                <input type="text" name="status" class="form-control mb-4" id="fullName" placeholder="Enter Status" >
                            </div>
                        </div>

                    </div>

                    <!-- new --> 
                    <div class="row">
                        <div class="col-lg-1 col-md-1"></div>
                        
                        <div class="col-sm-5">
                            <button type="submit" name="profile_btn" class="btn btn-primary form-control mb-4" style="color:black; background-color:#F4DC81; margin-top: 30px" >Search</button> 
                            
                        
                    </div>
                    </div>

                    
                    
                    
                </form>






            </div>
            <br>
            <br>
            <br>

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <div class="table-responsive mb-4 mt-4">
                        
                        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Case No</th>
                                    <th>Age</th>
                                    <th>State</th>
                                    <th>Nationality</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                    <th>Confirmed Date</th>
                                    <th>Recovered Date</th>


                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                if($_POST){
    $gender='';
    $case_no=$_POST['case_no'];
    $age=$_POST['age'];
    $state=$_POST['state'];
    $nationality=$_POST['nationality'];
    $from_date=$_POST['from_date'];
    $to_date=$_POST['to_date'];
    $gender=$_POST['gender'];
    $status=$_POST['status'];
    $data='';

    $from_date = str_replace('/', '-', $from_date);
    //$from_date = date('Y-m-d', strtotime($from_date));


    $to_date = str_replace('/', '-', $to_date);
    //$to_date = date('Y-m-d', strtotime($to_date));

    $z=0;

    if($case_no!=''){
        $data.='case_no='.$case_no;
        $z=1;
    }if($age!=''){
        if($z==1)$data.=' and ';
        $z=1;
        $data.='age='.$age;
    }if($state!=''){
        if($z==1)$data.=' and ';
        $z=1;
        $data.='state="'.$state.'"';
    }if($nationality!=''){
        if($z==1)$data.=' and ';
        $z=1;
        $data.='nationality="'.$nationality.'"';
    }if($from_date!=''){
        if($z==1)$data.=' and ';
        $z=1;
        $data.='from_date="'.$from_date.'"';
    }if($to_date!=''){
        if($z==1)$data.=' and ';
        $z=1;
        $data.='to_date="'.$to_date.'"';
    }if($gender!=''){
        if($z==1)$data.=' and ';
        $z=1;
        $data.='gender="'.$gender.'"';
    }if($status!=''){
        if($z==1)$data.=' and ';
        $z=1;
        $data.='status="'.$status.'"';
    }

    $select = "SELECT * FROM data WHERE $data";
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
                                }
                                 ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>




        </div>

    </div>




    
    
