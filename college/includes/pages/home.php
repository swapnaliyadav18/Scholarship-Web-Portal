
<?php 


include '../header.php';
    include '../navbar.php';
    include '../conn.php';

    $id=$_SESSION['students'];
?>

<!--Main Start-->

<?php
                $select1 ="SELECT COUNT(*) AS ct FROM `st_pastq` WHERE id";
                $result1 = mysqli_query($conn,$select1);

                if(mysqli_num_rows($result1)>0){
                    foreach($result1 as $row1){
                        $ct1=$row1['ct'];
                    }
                }
            ?>
            <?php
                $select2 ="SELECT COUNT(*) AS ct FROM `apply` WHERE id";
                $result2 = mysqli_query($conn,$select2);

                if(mysqli_num_rows($result2)>0){
                    foreach($result2 as $row2){
                        $ct2=$row2['ct'];
                    }
                }
            ?>
            <?php
                $select3 ="SELECT COUNT(*) AS ct FROM `apply` WHERE total=3";
                $result3 = mysqli_query($conn,$select3);

                if(mysqli_num_rows($result3)>0){
                    foreach($result3 as $row3){
                        $ct3=$row3['ct'];
                    }
                }
            ?>
            <?php
                $select4 ="SELECT COUNT(*) AS ct FROM `apply` WHERE total=9";
                $result4 = mysqli_query($conn,$select4);

                if(mysqli_num_rows($result4)>0){
                    foreach($result4 as $row4){
                        $ct4=$row4['ct'];
                    }
                }
            ?>
            <?php
                $select5 ="SELECT COUNT(*) AS ct FROM `apply` WHERE depapro";
                $result5 = mysqli_query($conn,$select5);

                if(mysqli_num_rows($result5)>0){
                    foreach($result5 as $row5){
                        $ct5=$row5['ct'];
                    }
                }
            ?>
            <?php
                $select6 ="SELECT COUNT(*) AS ct FROM `fund` WHERE id";
                $result6 = mysqli_query($conn,$select6);

                if(mysqli_num_rows($result6)>0){
                    foreach($result6 as $row6){
                        $ct6=$row6['ct'];
                    }
                }
            ?>

        

    <div class="container">
        <div class="row">
        <div id="st_2" class="col-md-12 text-center">
                        <?php
                            if(isset($_SESSION['st_2'])){
                        ?>
                        <div class="alert alert-success fw-bold" role="alert">
                            <?php echo $_SESSION['st_2']; ?>
                        </div>
                        <?php
                            unset($_SESSION['st_2']);
                            }
                        ?>
                        <?php
                            if(isset($_SESSION['st_22'])){
                        ?>
                        <div class="alert alert-danger fw-bold" role="alert">
                            <?php echo $_SESSION['st_22']; ?>
                        </div>
                        <?php
                            unset($_SESSION['st_22']);
                            }
                        ?>
                    </div>
            <div class="col-md-4 col-sm-6">
                <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-9 fw-semibold">Apply Scholarship</h5>
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="fw-semibold mb-3"><?php echo $ct2; ?></h4>
                                    <div class="d-flex align-items-center mb-3">
                                        <span
                                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-arrow-up-left text-success"></i>
                                        </span>
                                        <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                        <p class="fs-3 mb-0">Daily</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                                            <a href="">View Details</a>
                                        </div>  
                                    </div>
                                </div>   
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-9 fw-semibold">Approved Scholarship</h5>
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="fw-semibold mb-3"><?php if($ct3==0){ echo '0';}else{echo $ct3;}?></h4>
                                    <div class="d-flex align-items-center mb-3">
                                        <span
                                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-arrow-up-left text-success"></i>
                                        </span>
                                        <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                        <p class="fs-3 mb-0">Daily</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                                            <a href="">View Details</a>
                                        </div>  
                                    </div>
                                </div>   
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-9 fw-semibold">Disbursed Scholarship</h5>
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="fw-semibold mb-3"><?php if($ct6==0){ echo '0';}else{echo $ct6;}?></h4>
                                    <div class="d-flex align-items-center mb-3">
                                        <span
                                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-arrow-up-left text-success"></i>
                                        </span>
                                        <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                        <p class="fs-3 mb-0">Daily</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                                            <a href="">View Details</a>
                                        </div>  
                                    </div>
                                </div>   
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-9 fw-semibold">Rejected Scholarship</h5>
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="fw-semibold mb-3"><?php if($ct4==0){ echo '0';}else{echo $ct4;}?></h4>
                                    <div class="d-flex align-items-center mb-3">
                                        <span
                                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-arrow-up-left text-success"></i>
                                        </span>
                                        <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                        <p class="fs-3 mb-0">Daily</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                                            <a href="">View Details</a>
                                        </div>  
                                    </div>
                                </div>   
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-9 fw-semibold">Total Application</h5>
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="fw-semibold mb-3"><?php echo $ct1; ?></h4>
                                    <div class="d-flex align-items-center mb-3">
                                        <span
                                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-arrow-up-left text-success"></i>
                                        </span>
                                        <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                        <p class="fs-3 mb-0">Daily</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                                            <a href="">View Details</a>
                                        </div>  
                                    </div>
                                </div>   
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                $select ="SELECT COUNT(*) AS ct FROM `student` WHERE id";
                $result = mysqli_query($conn,$select);

                if(mysqli_num_rows($result)>0){
                    foreach($result as $row){
                        $ct=$row['ct'];
                    }
                }
            ?>
            <div class="col-md-4 col-sm-6">
                <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-9 fw-semibold">Total Student</h5>
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h4 class="fw-semibold mb-3"><?php echo $ct; ?></h4>
                                    <div class="d-flex align-items-center mb-3">
                                        <span
                                            class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-arrow-up-left text-success"></i>
                                        </span>
                                        <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                        <p class="fs-3 mb-0">Daily</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                                            <a href="">View Details</a>
                                        </div>  
                                    </div>
                                </div>   
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
<!--Main Start-->

<?php 
    include '../footer.php';
?>

     