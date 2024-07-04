<?php

    include '../header.php';

    include '../navbar.php';
?>

<!--Main Start-->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="../insert/course.php" class="row g-3 needs-validation" method="post" novalidate>
                            <div class="row g-3">
                                <div class="col-md-12 text-center">
                                    <span class="fs-5">Add Course</span>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Qualification Level</label>
                                    <select class="form-select" name="qlevel" aria-label="Default select example">
                                        <option selected>--Select Qualification Level--</option>
                                        <option value="Certificate Course">Certificate Course</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="Dual Degree">Dual Degree</option>
                                        <option value="Ph.D">Ph.D</option>
                                        <option value="Post Graduate Certificate">Post Graduate Certificate</option>
                                        <option value="Post Graduate Course">Post Graduate Course</option>
                                        <option value="Post Graduate Diploma Course">Post Graduate Diploma Course</option>
                                        <option value="Under Graduate Course">Under Graduate Course</option>
                                        <option value="Vocational Course">Vocational Course</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please Enter Qualification Level.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Course Name</label>
                                    <select class="form-select" name="course" aria-label="Default select example">
                                        <option selected>--Select Course--</option>
                                        <option value="B,sc (Computer Science)">B,sc (Computer Science)</option>
                                        <option value="M,Sc (Computer Science)">M,Sc (Computer Science)</option>
                                        <option value="MCA">MCA</option>
                                        <option value="BCA">BCA</option>
                                        <option value="B,Sc Chemistry">B,Sc Chemistry</option>
                                        <option value="M,Sc Chemistry">M,Sc Chemistry</option>
                                        <option value="B,Sc Static">B,Sc Static</option>
                                        <option value="M,Sc Static">M,Sc Static</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please Enter Course Name.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Fee</label>
                                    <input type="text" class="form-control" name="fee" id="validationCustom01" required>
                                    <div class="invalid-feedback">
                                        Please Enter Fee.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit" name="submit">Add Course</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Main End-->

<?php
    include '../footer.php';
?>