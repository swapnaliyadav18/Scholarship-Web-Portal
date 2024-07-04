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
    $select5="SELECT * FROM `st_otr` WHERE student_id=$cutomer";

    $query5=mysqli_query($conn,$select5);

    if(mysqli_num_rows($query5)>0){
        foreach ($query5 as $row5) {
            $stud=$row5['student_id'];
            $fname=$row5['faname'];
            $occ=$row5['occ'];
            $salari=$row5['salari'];
            $maname=$row5['maname'];
            $occs=$row5['occs'];
            $slaris=$row5['salaris'];

        ?>

        <?php

        }
    }
            
?>

<!--Main Start-->

                    <div id="st_3" class="col-md-12 text-center">
                        <?php
                            if(isset($_SESSION['st_3'])){
                        ?>
                        <div class="alert alert-success fw-bold" role="alert">
                            <?php echo $_SESSION['st_3']; ?>
                        </div>
                        <?php
                            unset($_SESSION['st_3']);
                            }
                        ?>
                        <?php
                            if(isset($_SESSION['st_3'])){
                        ?>
                        <div class="alert alert-danger fw-bold" role="alert">
                            <?php echo $_SESSION['st_3']; ?>
                        </div>
                        <?php
                            unset($_SESSION['st_3']);
                            }
                        ?>
                    </div>
                    <div class="col-md-12 pb-2">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: <?php echo $multi;?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="fw-bold"><?php echo $multi;?>% Completed</span></div>
                        </div>
                    </div>

                    <?php
                        if ($cutomer==$stud) {
                            echo '<div class="col-md-12">
                            <form action="../insert/st-3.php" method="post" class="needs-validation" novalidate>
                                <div class="row g-2 p-3 bg-light rounded">
                                    <div class="col-md-12 text-center">
                                        <span class="fs-5 fw-bold">
                                            Other Information
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Father Name <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="father" id="validationServerUsername" value="'?><?php echo $fname; ?> <?php echo'" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your father Name.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Is Salaried <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <select class="form-select" name="fissal" aria-label="Please select Is Salaried" required>
                                                <option selected value="'?><?php echo $occ; ?> <?php echo'">'?><?php echo  $occ; ?> <?php echo'</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                              </select>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Is Salaried.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Occupation <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="focc" id="validationServerUsername" value="'?><?php echo $salari;  ?> <?php echo'" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Occupation.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Mother Name <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="mother" id="validationServerUsername" value="'?><?php echo $maname; ?> <?php echo'" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Mother Name.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Is Salaried <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <select class="form-select" name="missal" aria-label="Please select Is Salaried" required>
                                                <option selected value="'?><?php echo $slaris; ?> <?php echo'" >'?><?php echo $slaris; ?> <?php echo'</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                              </select>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Is Salaried.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Occupation <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="mocc" id="validationServerUsername" value="'?><?php echo $occs; ?> <?php echo'" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Occupation.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-6 text-end">
                                                <a href="st-2.php" class="btn btn-danger fw-500">Back</a>
                                            </div>
                                            <div class="col-6 text-start">
                                                <button type="submit" name="submit" class="btn btn-success fw-500">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>   
                        </div>;'?> <?php
                        }else{
                            echo '<div class="col-md-12">
                            <form action="../insert/st-3.php" method="post" class="needs-validation" novalidate>
                                <div class="row g-2 p-3 bg-light rounded">
                                    <div class="col-md-12 text-center">
                                        <span class="fs-5 fw-bold">
                                            Other Information
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Father Name <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="father" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your father Name.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Is Salaried <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <select class="form-select" name="fissal" aria-label="Please select Is Salaried" required>
                                                <option selected disabled value="">Select is Salaried</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                              </select>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Is Salaried.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Occupation <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="focc" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Occupation.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Mother Name <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="mother" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Mother Name.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Is Salaried <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <select class="form-select" name="missal" aria-label="Please select Is Salaried" required>
                                                <option selected disabled value="">Select is Salaried</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                              </select>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Is Salaried.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Occupation <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="mocc" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Occupation.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-6 text-end">
                                                <a href="st-2.php" class="btn btn-danger fw-500">Back</a>
                                            </div>
                                            <div class="col-6 text-start">
                                                <button type="submit" name="submit" class="btn btn-success fw-500">Next</button>
                                            </div>
                                        </div>
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