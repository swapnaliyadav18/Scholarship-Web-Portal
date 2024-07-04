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
    $select5="SELECT * FROM `st_add` WHERE student_id=$cutomer";

    $query5=mysqli_query($conn,$select5);

    if(mysqli_num_rows($query5)>0){
        foreach ($query5 as $row5) {
            $stud=$row5['student_id'];
            $address=$row5['Address'];
            $state=$row5['state'];
            $dist=$row5['dist'];
            $tal=$row5['tal'];
            $village=$row5['village'];
            $pincode=$row5['pincode'];

        ?>

        <?php

        }
    }
            
?>

<!--Main Start-->
                    <div id="st_2" class="col-md-12 text-center">
                        <?php
                            if(isset($_SESSION['st_2'])){
                        ?>
                        <div class="alert alert-success fw-bold" role="alert">
                            <?php echo $_SESSION['st_2']; ?>
                        </div>
                        <?php
                            unset($_SESSION['st_2']);
                            }
                        ?>
                        <?php
                            if(isset($_SESSION['st_2'])){
                        ?>
                        <div class="alert alert-danger fw-bold" role="alert">
                            <?php echo $_SESSION['st_2']; ?>
                        </div>
                        <?php
                            unset($_SESSION['st_2']);
                            }
                        ?>
                    </div>
                    <div class="col-md-12 pb-2">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: <?php echo $multi;?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="fw-bold"><?php echo $multi;?>% Completed</span></div>
                        </div>
                    </div>
                       <div class="col-md-12">
                        
                            <?php
                                if ($cutomer==$stud) {
                                    echo '<form action="../insert/st-2.php" method="post" class="needs-validation" novalidate>
                                    <div class="row g-2 p-3 bg-light rounded">
                                        <div class="col-md-12 text-center">
                                            <span class="fs-5 fw-bold">
                                                Address Information
                                            </span>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="validationServerUsername" class="form-label fw-500">Address <span class="text-danger">*</span></label>
                                            <div class="input-group has-validation">
                                                <input type="text" class="form-control" name="address" id="validationServerUsername" value="'?><?php echo $address;?><?php echo'" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    Please Enter your address.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="validationServerUsername" class="form-label fw-500">State <span class="text-danger">*</span></label>
                                            <div class="input-group has-validation">
                                                <input type="text" class="form-control" name="state" value="'?><?php echo $state;?><?php echo'" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    Please Enter your address.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="validationServerUsername" class="form-label fw-500">District <span class="text-danger">*</span></label>
                                            <div class="input-group has-validation">
                                                <input type="text" class="form-control" name="dist" value="'?><?php echo $dist;?><?php echo'" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    Please Enter your District.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="validationServerUsername" class="form-label fw-500">Taluka <span class="text-danger">*</span></label>
                                            <div class="input-group has-validation">
                                                <input type="text" class="form-control" name="tal" id="validationServerUsername" value="'?><?php echo $tal;?><?php echo'" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    Please Enter your Taluka.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="validationServerUsername" class="form-label fw-500">Village <span class="text-danger">*</span></label>
                                            <div class="input-group has-validation">
                                                <input type="text" class="form-control" name="village" value="'?><?php echo $village;?><?php echo'" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    Please Enter your Village.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="validationServerUsername" class="form-label fw-500">Pincode <span class="text-danger">*</span></label>
                                            <div class="input-group has-validation">
                                                <input type="tel" class="form-control" pattern="[0-9]{6}" value="'?><?php echo $pincode;?><?php echo'" name="pincode" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    Please Enter your Pincode.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-6 text-end">
                                                    <a href="st-1.php" class="btn btn-danger fw-500">Back</a>
                                                </div>
                                                <div class="col-6 text-start">
                                                    <button type="submit" name="submit" class="btn btn-success fw-500">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>;'?><?php
                                }else{
                                    echo '<form action="../insert/st-2.php" method="post" class="needs-validation" novalidate>
                                    <div class="row g-2 p-3 bg-light rounded">
                                        <div class="col-md-12 text-center">
                                            <span class="fs-5 fw-bold">
                                                Address Information
                                            </span>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="validationServerUsername" class="form-label fw-500">Address <span class="text-danger">*</span></label>
                                            <div class="input-group has-validation">
                                                <input type="text" class="form-control" name="address" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    Please Enter your address.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="validationServerUsername" class="form-label fw-500">State <span class="text-danger">*</span></label>
                                            <div class="input-group has-validation">
                                                <input type="text" class="form-control" name="state" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    Please Enter your address.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="validationServerUsername" class="form-label fw-500">District <span class="text-danger">*</span></label>
                                            <div class="input-group has-validation">
                                                <input type="text" class="form-control" name="dist" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    Please Enter your District.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="validationServerUsername" class="form-label fw-500">Taluka <span class="text-danger">*</span></label>
                                            <div class="input-group has-validation">
                                                <input type="text" class="form-control" name="tal" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    Please Enter your Taluka.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="validationServerUsername" class="form-label fw-500">Village <span class="text-danger">*</span></label>
                                            <div class="input-group has-validation">
                                                <input type="text" class="form-control" name="village" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    Please Enter your Village.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="validationServerUsername" class="form-label fw-500">Pincode <span class="text-danger">*</span></label>
                                            <div class="input-group has-validation">
                                                <input type="tel" class="form-control" pattern="[0-9]{6}" name="pincode" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    Please Enter your Pincode.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-6 text-end">
                                                    <a href="st-1.php" class="btn btn-danger fw-500">Back</a>
                                                </div>
                                                <div class="col-6 text-start">
                                                    <button type="submit" name="submit" class="btn btn-success fw-500">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>';
                                }
                            ?>
                        </div>
<!--Main End-->

<?php
    include '../main2.php';
?>

<?php
    include '../footer.php';
?>