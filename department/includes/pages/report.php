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
                        <form action="../insert/report.php" method="post">
                            <div class="row g-2">
                                <div class="col-md-12 text-center">
                                    <span class="h2">Scrutity</span>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="collegename">Application No</label>
                                    <input class="form-control" name="app" id="collegename" type="text" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="collegename">Scrutity Remark</label>
                                    <input class="form-control" name="remark" id="collegename" type="text" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="collegename">Rejected Remark</label>
                                    <input class="form-control" name="rejected" id="collegename" type="text" required>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="collegename">Action</label>
                                    <input class="form-control" name="action" id="collegename" type="text" required>
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