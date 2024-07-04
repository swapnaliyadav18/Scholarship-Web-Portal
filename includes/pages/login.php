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
                                    <img src="../../assets/img/PostBank.jpg" class="w-100" alt="">
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
            <div class="col-md-6 mt-2 mb-2">
                <div class="row g-3">
                    <form class="row needs-validation g-3 bg-light p-3" action="../login.php" method="post" novalidate>
                        <div class="col-md-12 text-center">
                            <span class="fs-5 fw-bold">Applicant Login Here</span>
                        </div>
                        <div class="col-md-12 text-center">
                        <?php
                            if(isset($_SESSION['msg'])){
                        ?>
                        <div class="alert alert-danger fw-bold" role="alert">
                            <?php echo $_SESSION['msg']; ?>
                        </div>
                        <?php
                            unset($_SESSION['msg']);
                            }
                        ?>
                        </div>
                        <div class="col-md-12">
                            <label for="validationServerUsername" class="form-label fw-500">Username</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" pattern="[A-Za-z]{6-15}" name="username" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Please Enter your Username.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="validationServerUsername1" class="form-label fw-500">Password</label>
                            <div class="input-group has-validation">
                                <input type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" name="pwd" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <a class="fw-500 text-decoration-none text-skip" href="">Forget Password ?</a>
                        </div>
                        <div class="col-md-12">
                          <button class="btn btn-dark fw-bold w-50" type="submit" name="login">Login <i class="fa fa-paper-plane"></i></button>
                        </div>
                        <div class="col-md-12">
                            <div class="row g-2">
                                <div class="col-md-12">
                                    <span class="text-decoration-none text-skip text-dark" href="">Don't Have an anccount ?</span>
                                </div>
                                <div class="col-md-12">
                                    <a class="btn btn-dark w-50 fw-bold" href="st-regi.php">Registration</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
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