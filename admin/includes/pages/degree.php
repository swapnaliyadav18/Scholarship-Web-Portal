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
                        <form action="../insert/degree.php" class="row g-3 needs-validation" method="post" novalidate>
                            <div class="row g-3">
                                <div class="col-md-12 text-center">
                                    <span class="fs-5">Add Degree</span>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Degree</label>
                                    <input class="form-control" name="course" type="text" required>
                                    <div class="invalid-feedback">
                                        Please Enter your Degree.
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
                                    <button class="btn btn-primary" type="submit" name="submit">Add Degree</button>
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