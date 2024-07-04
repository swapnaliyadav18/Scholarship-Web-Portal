<?php
  include '../conn.php';

  session_start();
  
  if(!isset($_SESSION['username'])){
      header('Location: ../../index.php');
  }
?>
<?php
    include '../header.php';

    include '../navbar.php';
?>

<?php
    include '../main1.php';
?>

<?php

    $cutomer=$_SESSION['student_id'];
    $select="SELECT COUNT(*) AS ct FROM `st_info` WHERE student_id=$cutomer";

    $query=mysqli_query($conn,$select);

    if(mysqli_num_rows($query)>0){
        foreach ($query as $row) {
            $f=$row['ct'];
        }
    }

    $select1="SELECT COUNT(*) AS ct1 FROM `st_add` WHERE student_id=$cutomer";

    $query1=mysqli_query($conn,$select1);

    if(mysqli_num_rows($query1)>0){
        foreach ($query1 as $row1) {
            $f1=$row1['ct1'];
        }
    }

    $select2="SELECT COUNT(*) AS ct2 FROM `st_otr` WHERE student_id=$cutomer";

    $query2=mysqli_query($conn,$select2);

    if(mysqli_num_rows($query2)>0){
        foreach ($query2 as $row2) {
            $f2=$row2['ct2'];
        }
    }
    $select3="SELECT COUNT(*) AS ct3 FROM `st_crt_c` WHERE student_id=$cutomer";

    $query3=mysqli_query($conn,$select3);

    if(mysqli_num_rows($query3)>0){
        foreach ($query3 as $row3) {
            $f3=$row3['ct3'];
        }
    }
    $select4="SELECT COUNT(*) AS ct4 FROM `st_pastq` WHERE student_id=$cutomer";

    $query4=mysqli_query($conn,$select4);

    if(mysqli_num_rows($query4)>0){
        foreach ($query4 as $row4) {
            $f4=$row4['ct4'];
        }
    }

    $total=$f+$f1+$f2+$f3+$f4;

    $multi=$total*20;

?>

<?php
    error_reporting(0);
    $select5="SELECT * FROM `st_info` WHERE student_id=$cutomer";

    $query5=mysqli_query($conn,$select5);

    if(mysqli_num_rows($query5)>0){
        foreach ($query5 as $row5) {
            $cst=$row5['student_id'];
            $name=$row5['name'];
            $profile=$row5['profile'];
            $adhar=$row5['adhar'];
            $adharf=$row5['adharf'];
            $adharb=$row5['adharb'];
            $email=$row5['email'];
            $mobile=$row5['mobile'];
            $bod=$row5['bod'];
            $age=$row5['age'];
            $perentmobile=$row5['perentmobile'];
            $gender=$row5['gender'];
            $mstatus=$row5['mstatus'];
            $religion=$row5['religion'];
            $acstecat=$row5['castecat'];
            $cast=$row5['casste'];
            $certifacate=$row5['castcer'];
            $religion=$row5['religion'];
            $fincome=$row5['fincome'];
            $distype=$row5['distype'];
            $account_no=$row5['account_no'];
            $ifsc=$row5['ifsc'];
            $bname=$row5['bname'];

        ?>

        <?php

        }
    }
            
?>

<!--Main Start-->

        <div class="row mt-3">
            <div class="col-md-12 pb-2">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: <?php echo $multi;?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="fw-bold"><?php echo $multi;?>% Completed</span></div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adhar Card Front</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="w-100" src="<?php echo $adharf; ?>" alt="">
                </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adhar Card Back</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="w-100" src="<?php echo $adharb; ?>" alt="">
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Profile Photo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="w-100" src="<?php echo $profile; ?>" alt="">
                </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cast Certificate</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="w-100" src="<?php echo $certifacate; ?>" alt="">
                </div>
                </div>
            </div>
        </div>
    <?php
        if ($cst==$cutomer){
            echo '<div class="col-md-12 mt-2">
            <form action="../insert/st-1.php" method="post" class="needs-validation" novalidate>
                 <div class="row g-2 p-3 bg-light rounded">
                     <div class="col-md-12 text-center">
                         <span class="fs-5 fw-bold">
                             Personal Information
                         </span>
                     </div>
                     <div class="col-md-12">
                         <label for="validationServerUsername" class="form-label fw-500">Applicant Name <span class="text-danger">*</span></label>
                         <div class="input-group has-validation">
                             <input type="text" class="form-control" name="appname" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" value="'?><?php echo $name;?><?php echo '" required>
                             <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                 Please Enter your Full Name.
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="validationServerUsername" class="form-label fw-500">Profile Photo <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-12">
                                <a href="#exampleModal3" data-bs-toggle="modal" class="btn btn-danger">View</a>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                         <label for="validationServerUsername" class="form-label fw-500">Aadhar No <span class="text-danger">*</span></label>
                         <div class="input-group has-validation">
                             <input type="tel" class="form-control" pattern="[0-9]{12}" name="adhar" id="validationServerUsername" value="'?><?php echo $adhar;?><?php echo '" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                             <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                 Please Enter your Aadhar No.
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="validationServerUsername" class="form-label fw-500">Aadhar front <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-12">
                                <a href="#exampleModal" data-bs-toggle="modal" class="btn btn-danger">View</a>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="validationServerUsername" class="form-label fw-500">Aadhar Back <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-12">
                                <a href="#exampleModal2" data-bs-toggle="modal" class="btn btn-danger">View</a>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                         <label for="validationServerUsername" class="form-label fw-500">Email <span class="text-danger">*</span></label>
                         <div class="input-group has-validation">
                             <input type="email" class="form-control" name="email" id="validationServerUsername" value="'?><?php echo $email;?><?php echo '" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                             <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                 Please Enter your Email.
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <label for="validationServerUsername" class="form-label fw-500">Mobile No <span class="text-danger">*</span></label>
                         <div class="input-group has-validation">
                             <input type="tel" class="form-control" pattern="[0-9]{10}" name="mobile" id="validationServerUsername" value="'?><?php echo $mobile;?><?php echo '" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                             <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                 Please Enter your Mbile Number.
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <label for="validationServerUsername" class="form-label fw-500">Birth Date <span class="text-danger">*</span></label>
                         <div class="input-group has-validation">
                             <input type="Date" class="form-control" name="bdate" id="validationServerUsername" value="'?><?php echo $bod;?><?php echo '" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                             <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                 Please Enter your Birth Date.
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <label for="validationServerUsername" class="form-label fw-500">Age <span class="text-danger">*</span></label>
                         <div class="input-group has-validation">
                             <input type="tel" class="form-control" pattern="[0-9]{2}" name="age" value="'?><?php echo $age;?><?php echo '" id="validationServerUsername" min="1" max="50" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                             <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                 Please Enter your Age.
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <label for="validationServerUsername" class="form-label fw-500">Parent`s / Guaedian Mobile No <span class="text-danger">*</span></label>
                         <div class="input-group has-validation">
                             <input type="tel" class="form-control" name="pmobile" id="validationServerUsername" value="'?><?php echo $perentmobile;?><?php echo '" min="1" max="50" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                             <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                 Please Enter your Parent`s / Guaedian Mobile No .
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <label for="validationServerUsername" class="form-label fw-500">Gender <span class="text-danger">*</span></label>
                         <div class="input-group has-validation">
                             <select class="form-select" name="gender" aria-label="Please select Gender" required>
                                 <option selected value="'?><?php echo $gender;?><?php echo '">'?><?php echo $gender;?><?php echo '</option>
                                 <option value="Male">Male</option>
                                 <option value="Female">Female</option>
                             </select>
                             <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                 Please Enter your Gender .
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <label for="validationServerUsername" class="form-label fw-500">Marital Status <span class="text-danger">*</span></label>
                         <div class="input-group has-validation">
                             <select class="form-select" name="marital" aria-label="Please select Gender" required>
                                 <option selected value="'?><?php echo $mstatus;?><?php echo '">'?><?php echo $mstatus;?><?php echo '</option>
                                 <option value="Single">Single</option>
                                 <option value="Married">Married</option>
                                 <option value="Widowed">Widowed</option>
                                 <option value="Separated">Separated</option>
                                 <option value="Divorced">Divorced</option>
                               </select>
                             <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                 Please Enter your Marital Status .
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <label for="validationServerUsername" class="form-label fw-500">Religion <span class="text-danger">*</span></label>
                         <div class="input-group has-validation">
                             <select class="form-select" name="religion" aria-label="Please select Gender" required>
                                 <option selected value="'?><?php echo $religion;?><?php echo '">'?><?php echo $religion;?><?php echo '</option>
                                 <option value="African Traditional & Diasporic">African Traditional &amp; Diasporic</option>
                                 <option value="Agnostic">Agnostic</option>
                                 <option value="Atheist">Atheist</option>
                                 <option value="Baha`i">Baha`i</option>
                                 <option value="Buddhism">Buddhism</option>
                                 <option value="Cao Dai">Cao Dai</option>
                                 <option value="Chinese traditional religion">Chinese traditional religion</option>
                                 <option value="Christianity">Christianity</option>
                                 <option value="Hinduism">Hinduism</option>
                                 <option value="Islam">Islam</option>
                                 <option value="Jainism">Jainism</option>
                                 <option value="Juche">Juche</option>
                                 <option value="Judaism">Judaism</option>
                                 <option value="Neo-Paganism">Neo-Paganism</option>
                                 <option value="Nonreligious">Nonreligious</option>
                                 <option value="Rastafarianism">Rastafarianism</option>
                                 <option value="Secular">Secular</option>
                                 <option value="Shinto">Shinto</option>
                                 <option value="Sikhism">Sikhism</option>
                                 <option value="Spiritism">Spiritism</option>
                                 <option value="Tenrikyo">Tenrikyo</option>
                                 <option value="Unitarian-Universalism">Unitarian-Universalism</option>
                                 <option value="Zoroastrianism">Zoroastrianism</option>
                                 <option value="primal-indigenous">primal-indigenous</option>
                                 <option value="Other">Other</option>
                               </select>
                             <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                 Please select your Marital Status .
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <label for="validationServerUsername" class="form-label fw-500">Caste Category <span class="text-danger">*</span></label>
                         <div class="input-group has-validation">
                             <select class="form-select" name="castecat" aria-label="Please select Gender" required>
                                 <option selected value="'?><?php echo $acstecat;?><?php echo '">'?><?php echo $acstecat;?><?php echo '</option>
                                 <option value="ST">GENERAL</option>
                                 <option value="OBC">OBC</option>
                                 <option value="SBC">SBC</option>
                                 <option value="SC">SC</option>
                                 <option value="ST">ST</option>
                               </select>
                             <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                 Please select your Caste Category .
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <label for="validationServerUsername" class="form-label fw-500">Caste <span class="text-danger">*</span></label>
                         <div class="input-group has-validation">
                             <input type="text" class="form-control" name="caste" value="'?><?php echo $cast;?><?php echo '" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                             <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                 Please Enter your Caste.
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="validationServerUsername" class="form-label fw-500">Cast Certificate <span class="text-danger">*</span></label>
                            </div>
                            <div class="col-md-12">
                                <a href="#exampleModal4" data-bs-toggle="modal" class="btn btn-danger">View</a>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                         <label for="validationServerUsername" class="form-label fw-500">Family Income<span class="text-danger">*</span></label>
                         <div class="input-group has-validation">
                             <input type="tel" class="form-control" pattern="[0,9]\d{4-10}" value="'?><?php echo $fincome;?><?php echo '" name="fincome" id="validationServerUsername" min="1" max="50" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                             <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                 Please Enter your Family Income.
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <label for="validationServerUsername" class="form-label fw-500">Disability of Any Type <span class="text-danger">*</span></label>
                         <div class="input-group has-validation">
                             <select class="form-select" name="type" aria-label="Please select Gender" required>
                                 <option selected value="'?><?php echo $distype;?><?php echo '">'?><?php echo $distype;?><?php echo '</option>
                                 <option value="Yes">Yes</option>
                                 <option value="No">No</option>
                               </select>
                             <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                 Please Enter your Marital Status .
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <label for="validationServerUsername" class="form-label fw-500">Account No <span class="text-danger">*</span></label>
                         <div class="input-group has-validation">
                             <input type="tel" class="form-control" pattern="{0-9}" name="account" value="'?><?php echo $account_no;?><?php echo '" id="validationServerUsername" min="1" max="50" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                             <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                 Please Enter your Account No.
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <label for="validationServerUsername" class="form-label fw-500">IFSC Code<span class="text-danger">*</span></label>
                         <div class="input-group has-validation">
                             <input type="text" class="form-control" value="'?><?php echo $ifsc;?><?php echo '" pattern="[A-Z]{0-9}" name="ifsc" id="validationServerUsername" min="1" max="50" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                             <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                 Please Enter your IFSC Code.
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12">
                         <label for="validationServerUsername" class="form-label fw-500">Branch Name<span class="text-danger">*</span></label>
                         <div class="input-group has-validation">
                             <input type="text" class="form-control" name="branchname" value="'?><?php echo $bname;?><?php echo '" id="validationServerUsername" min="1" max="50" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                             <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                 Please Enter your Branch Name.
                             </div>
                         </div>
                     </div>
                     <div class="col-md-12 text-center">
                         <button class="btn btn-success fw-500" name="submit" type="submit">Next</button>
                     </div>
                 </div>
             </form>
         </div>';?><?php
        }else{
            echo '
        <div class="col-md-12 mt-2">
           <form action="../insert/st-1.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                <div class="row g-2 p-3 bg-light rounded">
                    <div class="col-md-12 text-center">
                        <span class="fs-5 fw-bold">
                            Personal Information
                        </span>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Applicant Name <span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" name="appname" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please Enter your Full Name.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Upload Profile Photo <span class="text-danger">*</span></label>
                        <input type="file" name="profile" class="form-control" aria-label="file example" required>
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Aadhar No <span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <input type="tel" class="form-control" pattern="[0-9]{12}" name="adhar" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please Enter your Aadhar No.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Upload Adhra Card Front <span class="text-danger">*</span></label>
                        <input type="file" name="aphoto" class="form-control" aria-label="file example" required>
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Upload Adhra Card Back<span class="text-danger">*</span></label>
                        <input type="file" name="bphoto" class="form-control" aria-label="file example" required>
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Email <span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <input type="email" class="form-control" name="email" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please Enter your Email.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Mobile No <span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <input type="tel" class="form-control" pattern="[0-9]{10}" name="mobile" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please Enter your Mbile Number.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Birth Date <span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <input type="Date" class="form-control" name="bdate" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please Enter your Birth Date.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Age <span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <input type="tel" class="form-control" pattern="[0-9]{2}" name="age" id="validationServerUsername" min="1" max="50" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please Enter your Age.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Parent`s / Guaedian Mobile No <span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <input type="tel" class="form-control" name="pmobile" id="validationServerUsername" min="1" max="50" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please Enter your Parent`s / Guaedian Mobile No .
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Gender <span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <select class="form-select" name="gender" aria-label="Please select Gender" required>
                                <option selected value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please Enter your Gender .
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Marital Status <span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <select class="form-select" name="marital" aria-label="Please select Gender" required>
                                <option selected disabled value="">Select Marital Status</option>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Separated">Separated</option>
                                <option value="Divorced">Divorced</option>
                              </select>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please Enter your Marital Status .
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Religion <span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <select class="form-select" name="religion" aria-label="Please select Gender" required>
                                <option selected disabled value="">Select Religion</option>
                                <option value="African Traditional & Diasporic">African Traditional &amp; Diasporic</option>
                                <option value="Agnostic">Agnostic</option>
                                <option value="Atheist">Atheist</option>
                                <option value="Baha`i">Baha`i</option>
                                <option value="Buddhism">Buddhism</option>
                                <option value="Cao Dai">Cao Dai</option>
                                <option value="Chinese traditional religion">Chinese traditional religion</option>
                                <option value="Christianity">Christianity</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Islam">Islam</option>
                                <option value="Jainism">Jainism</option>
                                <option value="Juche">Juche</option>
                                <option value="Judaism">Judaism</option>
                                <option value="Neo-Paganism">Neo-Paganism</option>
                                <option value="Nonreligious">Nonreligious</option>
                                <option value="Rastafarianism">Rastafarianism</option>
                                <option value="Secular">Secular</option>
                                <option value="Shinto">Shinto</option>
                                <option value="Sikhism">Sikhism</option>
                                <option value="Spiritism">Spiritism</option>
                                <option value="Tenrikyo">Tenrikyo</option>
                                <option value="Unitarian-Universalism">Unitarian-Universalism</option>
                                <option value="Zoroastrianism">Zoroastrianism</option>
                                <option value="primal-indigenous">primal-indigenous</option>
                                <option value="Other">Other</option>
                              </select>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please select your Marital Status .
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Caste Category <span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <select class="form-select" name="castecat" aria-label="Please select Gender" required>
                                <option selected disabled value="">--Select--</option>
                                <option value="ST">GENERAL</option>
                                <option value="OBC">OBC</option>
                                <option value="SBC">SBC</option>
                                <option value="SC">SC</option>
                                <option value="ST">ST</option>
                              </select>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please select your Caste Category .
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Caste <span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" name="caste" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please Enter your Caste.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Upload Caste Certificatr <span class="text-danger">*</span></label>
                        <input type="file" name="castphoto" class="form-control" aria-label="file example" required>
                        <div class="invalid-feedback">Example invalid form file feedback</div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Family Income<span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <input type="tel" class="form-control" pattern="[0,9]\d{4-10}" name="fincome" id="validationServerUsername" min="1" max="50" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please Enter your Family Income.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Disability of Any Type <span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <select class="form-select" name="type" aria-label="Please select Gender" required>
                                <option selected disabled value="">Select Disability of Any Type</option>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                              </select>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please Enter your Marital Status .
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Account No <span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <input type="tel" class="form-control" pattern="{0-9}" name="account" id="validationServerUsername" min="1" max="50" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please Enter your Account No.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">IFSC Code<span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" pattern="[A-Z]{0-9}" name="ifsc" id="validationServerUsername" min="1" max="50" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please Enter your IFSC Code.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationServerUsername" class="form-label fw-500">Branch Name<span class="text-danger">*</span></label>
                        <div class="input-group has-validation">
                            <input type="text" class="form-control" name="branchname" id="validationServerUsername" min="1" max="50" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please Enter your Branch Name.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <button class="btn btn-success fw-500" name="submit" type="submit">Next</button>
                    </div>
                </div>
            </form>
        </div>';
        }

    ?>
<!--Main End-->

<?php
    include '../main2.php';
?>

<?php
    include '../footer.php';
?>