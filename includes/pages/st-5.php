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
    $select5="SELECT * FROM `st_pastq` WHERE student_id=$cutomer";

    $query5=mysqli_query($conn,$select5);

    if(mysqli_num_rows($query5)>0){
        foreach ($query5 as $row5) {
            $stud=$row5['student_id'];
            $universiy=$row5['universiy'];
            $state=$row5['state'];
            $dist=$row5['dist'];
            $tal=$row5['tal'];
            $city=$row5['city'];
            $qualification=$row5['qualification'];
            $stream=$row5['stream'];
            $clgname=$row5['clgname'];
            $course=$row5['course'];
            $yoss=$row5['yoss'];
            $complete=$row5['c&com'];
            $mode=$row5['mode'];
            $adyear=$row5['adyear'];
            $passyear=$row5['passyear'];
            $result=$row5['result'];
            $percentage=$row5['percentage'];
            $attempt=$row5['attempt'];
            $mark=$row5['mark'];
        }
    }
            
?>
<!--Main Start-->
                    <div id="st_5" class="col-md-12 text-center">
                        <?php
                            if(isset($_SESSION['st_5'])){
                        ?>
                        <div class="alert alert-success fw-bold" role="alert">
                            <?php echo $_SESSION['st_5']; ?>
                        </div>
                        <?php
                            unset($_SESSION['st_5']);
                            }
                        ?>
                        <?php
                            if(isset($_SESSION['st_5'])){
                        ?>
                        <div class="alert alert-danger fw-bold" role="alert">
                            <?php echo $_SESSION['st_5']; ?>
                        </div>
                        <?php
                            unset($_SESSION['st_5']);
                            }
                        ?>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Marklist Certificate</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img class="w-100" src="<?php echo $mark; ?>" alt="">
                            </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-12 pb-2">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width: <?php echo $multi;?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span class="fw-bold"><?php echo $multi;?>% Completed</span></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <?php
                            if ($cutomer==$stud) {
                                echo'<form action="../insert/st-5.php" method="post" class="needs-validation" novalidate>
                                <div class="row g-2 p-3 bg-light rounded">
                                    <div class="col-md-12 text-center">
                                        <span class="fs-5 fw-bold">
                                            Past Course Details
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Qualification Level <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <select class="form-select" name="qlevel" aria-label="Please select Qualification Level" required>
                                                <option selected disabled vlaue="'?><?php echo $qualification; ?><?php echo'">'?><?php echo $qualification ?><?php echo'</option>'?>
                                            <?php
                                                $select0="SELECT * FROM qlevel";

                                                $result0=mysqli_query($conn, $select0);

                                                if(mysqli_num_rows($result0)>0){
                                                    foreach ($result0 as $row0) {
                                                        ?>
                                                            <option value="<?php echo $row0['qlevel'];?>"><?php echo $row0['qlevel'];?></option>
                                                        <?php
                                                    }
                                                }
                                            ?><?php echo '
                                            </select>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Select your Qualification Level .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Institute State <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" value="'?><?php echo $state; ?><?php echo'" name="istate" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Institute State.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Institute District <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" value="'?><?php echo $dist; ?><?php echo'" name="idist" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Institute District.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Institute Taluka <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="ital" value="'?><?php echo $tal; ?><?php echo'" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Institute Taluka.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Institute City <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="city" value="'?><?php echo $city; ?><?php echo'" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Institute Taluka.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Stream <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <select class="form-select" name="stream" aria-label="Please select Stream" required>
                                                <option selected disabled vlaue="'?><?php echo $stream; ?><?php echo'">'?><?php echo $stream ?><?php echo'</option>
                                                <option value="Arts">Arts</option>
                                                <option value="Science">Science</option>
                                                <option value="Commerce">Commerce</option>
                                                <option value="MCA">MCA</option>
                                                <option value="Nursing">Nursing</option>
                                              </select>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Select your Stream .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">College Name / School Name <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <select class="form-select" name="clgname" aria-label="Please select College Name / School Name" required>
                                                <option selected value="'?><?php echo $clgname; ?><?php echo'" disabled >'?><?php echo $clgname; ?><?php echo'</option>
                                                '?>
                                                <?php
                                                    $selecttt="SELECT * FROM collegename";

                                                    $resulttt=mysqli_query($conn, $selecttt);

                                                    if(mysqli_num_rows($resulttt)>0){
                                                        foreach ($resulttt as $rowww) {
                                                            ?>
                                                                <option value="<?php echo $rowww['college'];?>"><?php echo $rowww['college'];?></option>
                                                            <?php
                                                        }
                                                    }
                                                ?><?php echo '
                                              </select>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Select your College Name / School Name .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Course Name <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <select class="form-select" name="coursename" aria-label="Default select example" required>
                                            <option selected disabled value="'?><?php echo $course ?><?php echo'">'?><?php echo $course; ?><?php echo'</option>'?>
                                            <?php
                                                $select111="SELECT * FROM degree";

                                                $result111=mysqli_query($conn, $select111);

                                                if(mysqli_num_rows($result111)>0){
                                                    foreach ($result111 as $row111) {
                                                        ?>
                                                            <option value="<?php echo $row111['course'];?>"><?php echo $row111['course'];?></option>
                                                        <?php
                                                    }
                                                }
                                            ?><?php echo '
                                            </select>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Course Name.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Year Of Study <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="studyyear" value="'?><?php echo $yoss; ?><?php echo'" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Year Of Study.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Completed Or Continue <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <select class="form-select" name="complete" aria-label="Please select Gender" required>
                                                <option selected disabled vlaue="'?><?php echo $complete; ?><?php echo'">'?><?php echo $complete; ?><?php echo'</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                              </select>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Select Completed Or Continue .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Board/University <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="university" value="'?><?php echo $universiy; ?><?php echo'" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your University.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Mode <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <select class="form-select" name="mode" aria-label="Please select Gender" required>
                                                <option selected disabled vlaue="'?><?php echo $mode; ?><?php echo'">'?><?php echo $mode; ?><?php echo'</option>
                                                <option value="Resular">Regular</option>
                                                <option value="No">Distance</option>
                                              </select>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Select Mode .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Admission Year <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="adyear" value="'?><?php echo $adyear; ?><?php echo'" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Admission Year.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Passing Year <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="passyear" value="'?><?php echo $passyear; ?><?php echo'" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Passing Year.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Result <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <select class="form-select" name="result" aria-label="Please select Gender" required>
                                                <option selected disabled vlaue="'?><?php echo $result; ?><?php echo'">'?><?php echo $result; ?><?php echo'</option>
                                                <option value="Passed">Passed</option>
                                                <option value="Failed">Failed</option>
                                              </select>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Select Result .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Percentage <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="per" value="'?><?php echo $percentage; ?><?php echo'" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Percentage.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Attempts <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="number" class="form-control" value="'?><?php echo $attempt; ?><?php echo'" min="1" max="5" name="attempts" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Attempts.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="validationServerUsername" class="form-label fw-500">Marklist Certificate <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-12">
                                                <a href="#exampleModal" data-bs-toggle="modal" class="btn btn-danger">View</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-6 text-end">
                                                <a href="st-4.php" class="btn btn-danger fw-500">Back</a>
                                            </div>
                                            <div class="col-6 text-start">
                                                <button type="submit" name="submit" class="btn btn-success fw-500">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>';
                            }else{
                                echo '<form action="../insert/st-5.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                                <div class="row g-2 p-3 bg-light rounded">
                                    <div class="col-md-12 text-center">
                                        <span class="fs-5 fw-bold">
                                            Past Course Details
                                        </span>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Qualification Level <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <select class="form-select" name="qlevel" aria-label="Please select Qualification Level" required>
                                                <option selected disabled value="">--Select--</option>
                                                '?><?php
                                                $select0="SELECT * FROM qlevel";

                                                $result0=mysqli_query($conn, $select0);

                                                if(mysqli_num_rows($result0)>0){
                                                    foreach ($result0 as $row0) {
                                                        ?>
                                                            <option value="<?php echo $row0['qlevel'];?>"><?php echo $row0['qlevel'];?></option>
                                                        <?php
                                                    }
                                                }
                                            ?><?php echo '
                                              </select>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Select your Qualification Level .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Institute State <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="istate" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Institute State.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Institute District <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="idist" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Institute District.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Institute Taluka <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="ital" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Institute Taluka.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Institute City <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="city" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Institute Taluka.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Stream <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <select class="form-select" name="stream" aria-label="Please select Stream" required>
                                                <option selected disabled value="">--Select--</option>
                                                <option value="Arts">Arts</option>
                                                <option value="Science">Science</option>
                                                <option value="Commerce">Commerce</option>
                                                <option value="MCA">MCA</option>
                                                <option value="Nursing">Nursing</option>
                                              </select>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Select your Stream .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">College Name / School Name <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <select class="form-select" name="clgname" aria-label="Please select College Name / School Name" required>
                                                <option selected disabled value="">--Select--</option>
                                                '?>
                                                <?php
                                                    $selecttt="SELECT * FROM collegename";

                                                    $resulttt=mysqli_query($conn, $selecttt);

                                                    if(mysqli_num_rows($resulttt)>0){
                                                        foreach ($resulttt as $rowww) {
                                                            ?>
                                                                <option value="<?php echo $rowww['college'];?>"><?php echo $rowww['college'];?></option>
                                                            <?php
                                                        }
                                                    }
                                                ?><?php echo '
                                              </select>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Select your College Name / School Name .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Course Name <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="coursename" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <select class="form-select" name="coursename" aria-label="Default select example" required>
                                            <option selected disabled>--Select--</option>'?>
                                            <?php
                                                $select111="SELECT * FROM degree";

                                                $result111=mysqli_query($conn, $select111);

                                                if(mysqli_num_rows($result111)>0){
                                                    foreach ($result111 as $row111) {
                                                        ?>
                                                            <option value="<?php echo $row111['course'];?>"><?php echo $row111['course'];?></option>
                                                        <?php
                                                    }
                                                }
                                            ?><?php echo '
                                            </select>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Select your Course Name.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Year Of Study <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="studyyear" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Year Of Study.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Completed Or Continue <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <select class="form-select" name="complete" aria-label="Please select Gender" required>
                                                <option selected disabled value="">--Selet--</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                              </select>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Select Completed Or Continue .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Board/University <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="university" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your University.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Mode <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <select class="form-select" name="mode" aria-label="Please select Gender" required>
                                                <option selected disabled value="">--Selet--</option>
                                                <option value="Resular">Regular</option>
                                                <option value="No">Distance</option>
                                              </select>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Select Mode .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Admission Year <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="adyear" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Admission Year.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Passing Year <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="passyear" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Passing Year.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Result <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <select class="form-select" name="result" aria-label="Please select Gender" required>
                                                <option selected disabled value="">--Selet--</option>
                                                <option value="Passed">Passed</option>
                                                <option value="Failed">Failed</option>
                                              </select>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Select Result .
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Percentage <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="per" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Percentage.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Attempts <span class="text-danger">*</span></label>
                                        <div class="input-group has-validation">
                                            <input type="number" class="form-control" min="1" max="5" name="attempts" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                Please Enter your Attempts.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="validationServerUsername" class="form-label fw-500">Upload MarkList Certificate <span class="text-danger">*</span></label>
                                        <input type="file" name="mark" class="form-control" aria-label="file example" required>
                                        <div class="invalid-feedback">Example invalid form file feedback</div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-6 text-end">
                                                <a href="st-4.php" class="btn btn-danger fw-500">Back</a>
                                            </div>
                                            <div class="col-6 text-start">
                                                <button type="submit" name="submit" class="btn btn-success fw-500">Submit</button>
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