<?php

    include '../header.php';

    include '../navbar.php';
?>

<!--Main Start-->



    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                     <?php
                        if(isset($_SESSION['msg'])){
                    ?>
                    <div class="alert alert-success" role="alert">
                    <?php echo  $_SESSION['msg'];?>
                    </div>
                    <?php
                        unset($_SESSION['msg']);
                        }
                    ?>
            </div>
            <div class="col-md-12 text-center">
                     <?php
                        if(isset($_SESSION['msg1'])){
                    ?>
                    <div class="alert alert-danger" role="alert">
                    <?php echo  $_SESSION['msg1'];?>
                    </div>
                    <?php
                        unset($_SESSION['msg1']);
                        }
                    ?>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="../insert/appro.php" method="post">
                            <div class="row g-2">
                                <div class="col-md-12">
                                    <label class="form-label" for="collegename">Application No</label>
                                    <input class="form-control" name="application" id="collegename" type="text" required>
                                </div>
                                <div class="col-md-12">
                                <label class="form-label" for="collegename">Approved/not Approved</label>
                                <select class="form-select" name="select" aria-label="Default select example">
                                    <option selected>--Select--</option>
                                    <option value="1">Approved</option>
                                    <option value="0">UnApprved</option>
                                    <option value="3">Rejected</option>
                                </select>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
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