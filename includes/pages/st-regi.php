<?php

session_start();

    include '../header.php';

    include '../navbar.php';

?>

<!--Main Start-->

<div class="container mt-2">
        <div class="row">
            <div class="col-md-3 order-md-first order-last">
                <div class="row g-2">
                    <div class="col-md-12">
                        <div class="card-card shadow">
                            <div class="row g-2">
                                <div class="col-md-12">
                                    <img src="assets/img/PostBank.jpg" class="w-100" alt="">
                                </div>
                                <div class="col-md-12 p-3 py-1">
                                    <span class="fs-6 fw-bold text-danger text-center">
                                        Guidelines for Aadhaar linking to bank account
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card-card shadow">
                            <div class="row g-2">
                                <div class="col-md-12 text-center py-2 border-bottom">
                                    <span class="fw-bold fs-6">Notice</span>
                                </div>
                                <div class="col-md-12 p-3 py-1">
                                    <p class="text-justify fs-10">
                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum placeat alias rem earum. In magni veniam debitis sit officia nisi molestias! Quaerat molestiae quisquam repudiandae veritatis, distinctio itaque illo est.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card-card shadow">
                            <div class="row g-2">
                                <div class="col-md-12 text-center py-2">
                                    <span class="fw-bold fs-6"> <i class="fa fa-phone"></i> &nbsp; Helpline Number</span>
                                </div>
                                <div class="col-md-12 p-3 py-1 text-center">
                                    <a class="text-decoration-none fw-500" href="">022-49150800</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-3 mb-3">
                <form class="needs-validation" action="../insert/st-regi.php" method="post" novalidate>
                    <div class="row g-3 bg-light border p-3 rounded-3">
                        <div class="col-md-12 text-center">
                            <span class="fs-5 fw-bold">Student Registration</span>
                        </div>
                        <div class="col-md-12">
                            <?php
                                if(isset($_SESSION['already'])){
                            ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_SESSION['already']; ?>
                                <br>
                            </div>
                            <?php
                                unset($_SESSION['already']);
                                }
                            ?>
                        </div>
                        <div class="col-md-12">
                            <label for="validationServerUsername" class="form-label fw-500">First Name <span class="text-danger">*</span></label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" pattern="[A-Za-z]{2-30}" name="fname" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Please Enter your First Name.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="validationServerUsername" class="form-label fw-500">Middle Name <span class="text-danger">*</span></label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" pattern="[A-Za-z]{2-30}" name="mname" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Please Enter your Middle Name.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="validationServerUsername" class="form-label fw-500">Last Name <span class="text-danger">*</span></label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" pattern="[A-Za-z]{2-30}" name="lname" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Please Enter your Last Name.
                                </div>
                            </div>
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
                            <label for="validationServerUsername" class="form-label fw-500">Phone No <span class="text-danger">*</span></label>
                            <div class="input-group has-validation">
                                <input type="tel" class="form-control" pattern="[0-9]{10}" name="mobile" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Please Enter your Phone No.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="validationServerUsername" class="form-label fw-500">Username <span class="text-danger">*</span></label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" pattern="[A-Za-z]{6-15}" name="username" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Please Enter your Username.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="validationServerUsername" class="form-label fw-500">Password <span class="text-danger">*</span></label>
                            <div class="input-group has-validation">
                                <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="pwd" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters.
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                                <div class="invalid-feedback">
                                    You must agree before submitting.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="submit" class="btn btn-dark fw-500">Registration</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 order-md-last order-first">
                <div class="row g-2 py-2">
                    <div class="col-md-12">
                        <a class="text-decoration-none" href="">
                            <div class="card-client shadow-sm border">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <i class="fa-solid fa-graduation-cap fw-bold"></i>
                                    </div>
                                    <div class="col-9">
                                        <span class="fw-bold">
                                            Student Corner
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a class="text-decoration-none" href="">
                            <div class="card-client shadow-sm border">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <i class="fa-solid fa-school fw-bold"></i>
                                    </div>
                                    <div class="col-9">
                                        <span class="fw-bold">
                                            College Corner
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a class="text-decoration-none" href="">
                            <div class="card-client shadow-sm border">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <i class="fa-brands fa-google-scholar fw-bold"></i>
                                    </div>
                                    <div class="col-9">
                                        <span class="fw-bold">
                                            Principle Corner
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a class="text-decoration-none" href="">
                            <div class="card-client shadow-sm border">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <i class="fa-solid fa-building fw-bold"></i>
                                    </div>
                                    <div class="col-9">
                                        <span class="fw-bold">
                                            Department Corner
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a class="text-decoration-none" href="">
                            <div class="card-client shadow-sm border">
                                <div class="row">
                                    <div class="col-3 text-center">
                                        <i class="fa-solid fa-lock fw-bold"></i>
                                    </div>
                                    <div class="col-9">
                                        <span class="fw-bold">
                                            Admin Corner
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--Main End-->

<?php
    include '../footer.php';
?>