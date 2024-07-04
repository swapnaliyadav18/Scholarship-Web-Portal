<?php

    session_start();

    include '../header.php';

    include '../navbar.php';

   
?>

<?php
    include '../main1.php';
?>

<!--Main Start-->

                <div class="mt-2" class="row">
                    <div class="col-md-12 mt-4">
                        <form action="../insert/contact.php" method="post" class="needs-validation" novalidate>
                            <div class="row g-3 p-3 bg-light rounded">
                                <div id="st_2" class="col-md-12 text-center">
                                    <?php
                                        if(isset($_SESSION['contact'])){
                                    ?>
                                    <div class="alert alert-success fw-bold" role="alert">
                                        <?php echo $_SESSION['contact']; ?>
                                    </div>
                                    <?php
                                        unset($_SESSION['contact']);
                                        }
                                    ?>
                                    <?php
                                        if(isset($_SESSION['contact'])){
                                    ?>
                                    <div class="alert alert-danger fw-bold" role="alert">
                                        <?php echo $_SESSION['contact']; ?>
                                    </div>
                                    <?php
                                        unset($_SESSION['contact']);
                                        }
                                    ?>
                                </div>
                                <div class="col-md-12 text-center">
                                    <span class="fs-5 fw-bold">
                                        Contact us
                                    </span>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationServerUsername" class="form-label fw-500">First Name <span class="text-danger">*</span></label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" name="fname" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            Please Enter your First Name.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationServerUsername" class="form-label fw-500">Middle Name <span class="text-danger">*</span></label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" name="mnane" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            Please Enter your Middle Name.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationServerUsername" class="form-label fw-500">Last Name <span class="text-danger">*</span></label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" name="lname" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            Please Enter your Last Name.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationServerUsername" class="form-label fw-500">Mobile No <span class="text-danger">*</span></label>
                                    <div class="input-group has-validation">
                                        <input type="tel" pattern="[0-9]{10}" class="form-control" name="mobile" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            Please Enter your Mobile No.
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
                                    <label for="validationServerUsername" class="form-label fw-500">Message <span class="text-danger">*</span></label>
                                    <div class="input-group has-validation">
                                        <textarea type="text" class="form-control" pattern="[A-Za-z]{20,}" name="message" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required></textarea>
                                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                            Please Enter your Message.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" name="submit" class="btn btn-dark">Send &nbsp;<i class="fa fa-paper-plane"></i></button>
                                </div>
                            </div>
                        </form>
                    </div> 
                </div> 
                    
<!--Main End-->

<?php
    include '../main2.php';
?>

<?php
    include '../footer.php';
?>