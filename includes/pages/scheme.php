<?php
  include '../conn.php';

  session_start();
  
 
?>
<?php
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
            <div class="col-md-6">
                <div class="row">
                <div class="col-md-12 table-responsive">
                        <table class="table table-bordered text-center">
                            <thead class="bg-table fw-bold">
                                <?php
                                    $select
                                ?>
                                <tr>
                                    <td>Scheme Name</td>
                                    <td>Department Name</td>
                                    <td>Scheme type</td>
                                    <td>Scheme Opening Date</td>
                                    <td>Scheme Closing Date</td>
                                </tr>
                            </thead>
                            <tbody class="bg-light">
                                <?php
                            $select ="SELECT * FROM `addscheme`";

                            $fetch=mysqli_query($conn,$select);

                            if(mysqli_num_rows($fetch)>0){
                                foreach($fetch as $row){
                                    ?>
                                    
                            <tr class="fs-10">
                                <td><?php echo $row['scheme']; ?></td>
                                <td><?php echo $row['deprt']; ?></td>
                                <td><?php echo $row['type']; ?></td>
                                <td><?php echo $row['sdate']; ?></td>
                                <td><?php echo $row['edate']; ?></td>
                            </tr>
                            <?php
                                }
                            }
?>
                            </tbody>
                        </table>
                    </div>
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