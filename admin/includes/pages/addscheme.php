<?php

    include '../header.php';

    include '../navbar.php';

    include '../conn.php';
?>

<!--Main Start-->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="../insert/adscheme.php" class="row g-3 needs-validation" method="post" novalidate>
                            <div class="row g-3">
                                <div class="col-md-12 text-center">
                                    <span class="fs-5">Add Scheme</span>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Scheme name</label>
                                    <input type="text" class="form-control" name="scheme" id="validationCustom01" required>
                                    <div class="invalid-feedback">
                                        Please Enter Scheme Name.
                                    </div>
                                </div>
                                <div class="col-mf-12">
                                    <label for="validationCustom01" class="form-label">Department Name</label>
                                    <div class="input-group has-validation">
                                        <select class="form-select" name="department" aria-label="Default select example" required>
                                            <option selected disabled vlaue="">--Select Department--</option>
                                            <?php
                                                $fetch="SELECT * FROM `department`";

                                                $res=mysqli_query($conn,$fetch);

                                                if(mysqli_num_rows($res)>0){
                                                    foreach ($res as $r) {
                                                        ?>

                                                        <option value="<?php echo $r['department'];?>"><?php echo $r['department'];?></option>

                                                        <?php
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="invalid-feedback">
                                        Please Select Department Name.
                                    </div>
                                </div>
                                <div class="col-mf-12">
                                    <label for="validationCustom01" class="form-label">Type Name</label>
                                    <select class="form-select" name="type" aria-label="Default select example" required>
                                        <option selected disabled vlaue="">--Select Type--</option>
                                        <?php
                                            $fetch1="SELECT * FROM `type`";

                                            $res1=mysqli_query($conn,$fetch1);

                                            if(mysqli_num_rows($res1)>0){
                                                foreach ($res1 as $r1) {
                                                    ?>

                                                    <option value="<?php echo $r1['type'];?>"><?php echo $r1['type'];?></option>

                                                    <?php
                                                }
                                            }
                                        ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please Select type Name.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <label for="validationCustom01" class="form-label">Qualification Level</label>
                                    <select class="form-select" name="qlevel" aria-label="Default select example">
                                        <option selected>--Select Qualification Level--</option>
                                        <?php 
                                        $selecttt="SELECT * FROM `qlevel`";

                                        $fetchh=mysqli_query($conn,$selecttt);

                                        if(mysqli_num_rows($fetchh)>0){
                                            foreach($fetchh as $value){
                                                ?>
                                                    <option value="<?php echo $value['qlevel']; ?>"><?php echo $value['qlevel']; ?></option>
                                                <?php
                                            }
                                        }
                                        
                                        ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please Select Qualification Level.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Course</label>
                                    <select class="form-select" name="course" aria-label="Default select example">
                                        <option selected>--Select Course--</option>
                                        <?php 
                                        $selecttt="SELECT * FROM `degree`";

                                        $fetchh=mysqli_query($conn,$selecttt);

                                        if(mysqli_num_rows($fetchh)>0){
                                            foreach($fetchh as $value){
                                                ?>
                                                    <option value="<?php echo $value['course']; ?>"><?php echo $value['course']; ?></option>
                                                <?php
                                            }
                                        }
                                        
                                        ?>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please Enter Course Name.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">End Date</label>
                                    <input type="date" class="form-control" name="date" id="validationCustom01" value="Mark" required>
                                    <div class="invalid-feedback">
                                        Please Enter End Date.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit" name="submit">Add Scheme</button>
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