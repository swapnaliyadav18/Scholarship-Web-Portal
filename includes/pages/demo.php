
<?php

if($stud==$cutomer){
    echo '<form action="../insert/st-4.php" method="post" class="needs-validation" novalidate>
    <div class="row g-2 p-3 bg-light rounded">
        <div class="col-md-12 text-center">
            <span class="fs-5 fw-bold">
                Current Course Details
            </span>
        </div>
        <div class="col-md-12">
            <label for="validationServerUsername" class="form-label fw-500">Admission Year In Current Course <span class="text-danger">*</span></label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" name="curryear" id="validationServerUsername" value="'?><?php echo $adyear ?><?php echo'" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please Enter your father admission Year.
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationServerUsername" class="form-label fw-500">Institute State <span class="text-danger">*</span></label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" name="istate" id="validationServerUsername" value="'?><?php echo $instate ?><?php echo'" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please Enter your Institute State.
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationServerUsername" class="form-label fw-500">Institute District <span class="text-danger">*</span></label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" name="idist" id="validationServerUsername" value="'?><?php echo $indist ?><?php echo'" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please Enter your Institute District.
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationServerUsername" class="form-label fw-500">Institute Taluka <span class="text-danger">*</span></label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" name="ital" id="validationServerUsername" value="'?><?php echo $intal ?><?php echo'" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please Enter your Institute Taluka.
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationServerUsername" class="form-label fw-500">Institute City <span class="text-danger">*</span></label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" name="city" id="validationServerUsername" value="'?><?php echo $icity ?><?php echo'" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please Enter your Institute City.
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationServerUsername" class="form-label fw-500">Qualification Level <span class="text-danger">*</span></label>
            <div class="input-group has-validation">
                <select class="form-select" name="qlevel" aria-label="Please select Qualification Level" required>
                    <option selected disabled>'?><?php echo $qlevel ?><?php echo'</option>
                    <option value="Certificate Course">Certificate Course</option>
                    <option value="Diploma Course">Diploma Course</option>
                    <option value="Post Graduate Certificate">Post Graduate Certificate</option>
                    <option value="Post Graduate Course">Post Graduate Course</option>
                    <option value="Under Graduate Course">Under Graduate Course</option>
                    <option value="Vocational Course">Vocational Course</option>
                  </select>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please Select your Qualification Level .
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationServerUsername" class="form-label fw-500">Stream <span class="text-danger">*</span></label>
            <div class="input-group has-validation">
                <select class="form-select" name="stream" aria-label="Please select Stream" required>
                    <option selected disabled>'?><?php echo $stream ?><?php echo'</option>
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
                    <option selected disabled>'?><?php echo $clgname ?><?php echo'</option>
                    <option value="Arts">Arts</option>
                  </select>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please Select your College Name / School Name .
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationServerUsername" class="form-label fw-500">Course Name <span class="text-danger">*</span></label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" value="'?><?php echo $course ?><?php echo'" name="coursename" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please Enter your Course Name.
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationServerUsername" class="form-label fw-500">Year Of Study <span class="text-danger">*</span></label>
            <div class="input-group has-validation">
                <input type="text" class="form-control" name="studyear" value="'?><?php echo $yos ?><?php echo'" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please Enter your Year Of Study.
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationServerUsername" class="form-label fw-500">Completed Or Continue <span class="text-danger">*</span></label>
            <div class="input-group has-validation">
                <select class="form-select" name="complete" aria-label="Please select Gender" required>
                    <option selected disabled>'?><?php echo $complte ?><?php echo'</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please Select Completed Or Continue .
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationServerUsername" class="form-label fw-500">Mode <span class="text-danger">*</span></label>
            <div class="input-group has-validation">
                <select class="form-select" name="mode" aria-label="Please select Gender" required>
                    <option selected disabled>'?><?php echo $mode ?><?php echo'</option>
                    <option value="Resular">Regular</option>
                    <option value="No">Distance</option>
                  </select>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please Select Mode .
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-6 text-end">
                    <a href="st-3.php" class="btn btn-danger fw-500">Back</a>
                </div>
                <div class="col-6 text-start">
                    <button type="submit" name="submit" class="btn btn-success fw-500">Next</button>
                </div>
            </div>
        </div>
    </div>
</form>';?> <?php
}else{
    echo '