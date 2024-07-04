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
                        <form action="../insert/type.php" class="row g-3 needs-validation" method="post" novalidate>
                            <div class="row g-3">
                                <div class="col-md-12 text-center">
                                    <span class="fs-5">Add Type</span>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Type Name</label>
                                    <input type="text" class="form-control" name="type" id="validationCustom01" required>
                                    <div class="invalid-feedback">
                                        Please Enter Type name.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit" name="submit">Add Type</button>
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