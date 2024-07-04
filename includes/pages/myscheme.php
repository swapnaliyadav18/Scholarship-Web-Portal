<?php
  include '../conn.php';

  session_start();

  error_reporting(0);
  
  if(!isset($_SESSION['username'])){
      header('Location: ../../index.php');
  }
?>
<?php
    include '../header.php';

    include '../navbar.php';

    $cutomer=$_SESSION['student_id'];
?>

<?php
    include '../main1.php';
     
?>

<!--Main Start-->

                    <div class="col-md-12 bg-scheme border">
                        <div class="row g-2">
                            <div class="col-md-12">
                                <div class="row d-flex align-items-center">
                                    <div class="col-1 text-center">
                                        <i class="fa-regular fa-newspaper text-danger"></i>
                                    </div>
                                    <div class="col-11">
                                        <span class="fs-10">
                                            Cancel option is only for cancelling the Scheme Application. One can cancel the scheme application only if it is pending for scrutiny at Institute Clerk or if it has been sent back to him for modifcation.
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row d-flex align-items-center">
                                    <div class="col-1 text-center">
                                        <i class="fa-regular fa-newspaper text-danger"></i>
                                    </div>
                                    <div class="col-11">
                                        <span class="fs-10">
                                            According to Scheme(s) cancellation , scheme Preference will get changed automatically.
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row d-flex align-items-center">
                                    <div class="col-1 text-center">
                                        <i class="fa-regular fa-newspaper text-danger"></i>
                                    </div>
                                    <div class="col-11">
                                        <span class="fs-10">
                                            Kindly click on Application ID to view scrutiny status and details.
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row d-flex align-items-center">
                                    <div class="col-1 text-center">
                                        <i class="fa-regular fa-newspaper text-danger"></i>
                                    </div>
                                    <div class="col-11">
                                        <span class="fs-10">
                                            OTP verification of registered mobile number is mandatory to cancel scheme.
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row d-flex align-items-center">
                                    <div class="col-1 text-center">
                                        <i class="fa-regular fa-newspaper text-danger"></i>
                                    </div>
                                    <div class="col-11">
                                        <span class="fs-10">
                                            Note for Other fees - Benefits arising from the components of “Other Fees” of 1st installment cycle shall be disbursed in / with the 2nd installment cycle.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="row g-1">
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <a class="btn btn-danger w-100" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Under Scrutiny Applications
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <a class="btn btn-primary w-100" data-bs-toggle="collapse" href="#collapseExample11" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Pending Applications
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <a class="btn btn-primary w-100" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Approved Applications
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <a class="btn btn-primary w-100" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Rejected Applications
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3">
                                        <a class="btn btn-primary w-100" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Fund Disbursed
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="collapse mb-2" id="collapseExample">
                                    <div class="card card-body">
                                      <div class="card-header">
                                        <span class="card-title fw-500">
                                            Under Scrutiny Applications
                                        </span>
                                      </div>
                                      <div class="card-footer table-responsive">
                                        <table class="table table-bordered">
                                            <thead class="bg-table text-center fw-bold">
                                                <tr>
                                                    <td>Application ID</td>
                                                    <td>Action</td>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white text-center">
                                            <tr class="fs-10 text-center">
                                                <?php 
                                                    $select23="SELECT * FROM `apply` WHERE student_id=$cutomer";

                                                    $result23=mysqli_query($conn,$select23);

                                                    if(mysqli_num_rows($result23)>0){
                                                        foreach ($result23 as $key23) {
                                                            $appp2=$key23['app'];
                                                        }
                                                    }
                                                ?>
                                                <td><?php echo $appp2; ?></td> 
                                                <td>
                                                <a class="fw-bold fs-7 text-decoration-none" data-bs-toggle="modal" href="#exampleModal">View</a>
                                                <?php

                                                    if($match12==$cutomer){
                                                        echo '<a class="fw-bold fs-7 text-decoration-none" data-bs-toggle="modal" href="#exampleModal">View</a>';
                                                    }
                                                ?>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--Start Model-->
                                        <div class="modal fade text-center" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Scrutiny Applications</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body table-responsive">
                                                        <table class="table table-bordered">
                                                            <thead class="bg-table fw-bold">
                                                                <tr>
                                                                    <td>Scrutiny Remark</td>
                                                                    <td>Rejacted Remark</td>
                                                                    <td>Send Applicant</td>
                                                                    <td>Designation</td>
                                                                    <td>Date</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                    <?php

                                                                    $select22="SELECT * FROM `apply` WHERE student_id=$cutomer";

                                                                    $result22=mysqli_query($conn,$select22);

                                                                    if(mysqli_num_rows($result22)>0){
                                                                        foreach ($result22 as $key22) {
                                                                            $appp=$key22['app'];
                                                                        }
                                                                    }

                                                                    if($appp){

                                                                    $dsele="SELECT * FROM `report` WHERE applications=$appp";

                                                                    $dfetch=mysqli_query($conn,$dsele);

                                                                    if(mysqli_num_rows($dfetch)>1){
                                                                        foreach ($dfetch as $rr) {
                                                                            $match12=$rr['student_id'];
                                                                            ?>
                                                                            <tr>
                                                                                <td><?php echo $rr['remark']; ?></td>
                                                                                <td><?php echo $rr['rejected']; ?></td>
                                                                                <td><?php echo $rr['action']; ?></td>
                                                                                <td><?php echo $rr['designation']; ?></td>
                                                                                <td><?php echo $rr['date']; ?></td>
                                                                            </tr>
                                                                    <?php
                                                                        }
                                                                    }
                                                                }
                                                                    ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end-->
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse mb-2" id="collapseExample1">
                                    <div class="card card-body">
                                      <div class="card-header">
                                        <span class="card-title fw-500">
                                            Approved Applications
                                        </span>
                                      </div>
                                      <div class="card-footer table-responsive">
                                        <table class="table table-bordered">
                                            <thead class="bg-table text-center fw-bold">
                                                <tr>
                                                    <td>Application ID</td>
                                                    <td>Department Name</td>
                                                    <td>Scheme Name</td>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white">
                                            <?php
                                                    $select2="SELECT * FROM `apply` WHERE student_id=$cutomer";

                                                    $result2=mysqli_query($conn,$select2);

                                                    $total1=3;

                                                

                                                    if(mysqli_num_rows($result2)>0){
                                                        foreach ($result2 as $key2) {
                                                            $c1=$key2['clgapro'];
                                                            $p1=$key2['papro'];
                                                            $d1=$key2['depapro'];

                                                            $cl1=$c1+$p1+$d1;

                                                            if($total1==$cl1){

                                                            
                                                            ?>
                                                            <tr class="fs-10 text-center">
                                                                <td><?php echo $key2['app']; ?></td>
                                                                <td><?php echo $key2['scheme']; ?></td>
                                                                <td><?php echo $key2['department']; ?></td> 
                                                            </tr>
                                                            <?php
                                                            }
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                </div>

                                <div class="collapse mb-2" id="collapseExample11">
                                    <div class="card card-body">
                                      <div class="card-header">
                                        <span class="card-title fw-500">
                                            Pending Applications
                                        </span>
                                      </div>
                                      <div class="card-footer table-responsive">
                                        <table class="table table-bordered">
                                            <thead class="bg-table text-center fw-bold">
                                                <tr>
                                                    <td>Application ID</td>
                                                    <td>Department Name</td>
                                                    <td>Scheme Name</td>
                                                    <td>Action</td>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white">
                                                <?php
                                                    $select="SELECT * FROM `apply` WHERE student_id=$cutomer";

                                                    $result=mysqli_query($conn,$select);

                                                    $total10=0;
                                                    $total11=1;
                                                    $total12=2;
                                                    $total13=4;
                                                    $total14=5;
                                                    $total15=7;
                                                    $total16=8;
                                                    $total200=20;

                                                    if(mysqli_num_rows($result)>0){
                                                        foreach ($result as $key) {
                                                            $c11=$key['clgapro'];
                                                            $p11=$key['papro'];
                                                            $d11=$key['depapro'];
                                                            $f11=$key['cancel'];

                                                            $cl11=$c11+$p11+$d11;
                                                            
                                                            if($total10==$cl11){
                                                            ?>
                                                            <tr class="fs-10 text-center">
                                                                <td><?php echo $key['app']; ?></td>
                                                                <td><?php echo $key['scheme']; ?></td>
                                                                <td><?php echo $key['department']; ?></td> 
                                                                <td><a class="text-decoration-none" href="cancel.php?id=<?php echo $key['app'];?>">Cancel</a></td>
                                                            </tr>
                                                            <?php
                                                            }elseif($total11==$cl11){
                                                                ?>
                                                            <tr class="fs-10 text-center">
                                                                <td><?php echo $key['app']; ?></td>
                                                                <td><?php echo $key['scheme']; ?></td>
                                                                <td><?php echo $key['department']; ?></td> 
                                                                <td><a class="text-decoration-none" href="cancel.php?id=<?php echo $key['app'];?>">Cancel</a></td>
                                                            </tr>
                                                            <?php
                                                            }elseif($total12==$cl11){
                                                                ?>
                                                            <tr class="fs-10 text-center">
                                                                <td><?php echo $key['app']; ?></td>
                                                                <td><?php echo $key['scheme']; ?></td>
                                                                <td><?php echo $key['department']; ?></td> 
                                                                <td><a class="text-decoration-none" href="cancel.php?id=<?php echo $key['app'];?>">Cancel</a></td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            elseif($total13==$cl11){
                                                                ?>
                                                            <tr class="fs-10 text-center">
                                                                <td><?php echo $key['app']; ?></td>
                                                                <td><?php echo $key['scheme']; ?></td>
                                                                <td><?php echo $key['department']; ?></td> 
                                                                <td><a class="text-decoration-none" href="cancel.php?id=<?php echo $key['app'];?>">Cancel</a></td>
                                                            </tr>
                                                            <?php
                                                            }elseif($total14==$cl11){
                                                                ?>
                                                            <tr class="fs-10 text-center">
                                                                <td><?php echo $key['app']; ?></td>
                                                                <td><?php echo $key['scheme']; ?></td>
                                                                <td><?php echo $key['department']; ?></td> 
                                                                <td><a class="text-decoration-none" href="cancel.php?id=<?php echo $key['app'];?>">Cancel</a></td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            elseif($total14==$cl11){
                                                                ?>
                                                            <tr class="fs-10 text-center">
                                                                <td><?php echo $key['app']; ?></td>
                                                                <td><?php echo $key['scheme']; ?></td>
                                                                <td><?php echo $key['department']; ?></td> 
                                                                <td><a class="text-decoration-none" href="cancel.php?id=<?php echo $key['app'];?>">Cancel</a></td>
                                                            </tr>
                                                            <?php
                                                            }
                                                            elseif($total15==$cl11){
                                                                ?>
                                                            <tr class="fs-10 text-center">
                                                                <td><?php echo $key['app']; ?></td>
                                                                <td><?php echo $key['scheme']; ?></td>
                                                                <td><?php echo $key['department']; ?></td> 
                                                                <td><a class="text-decoration-none" href="cancel.php?id=<?php echo $key['app'];?>">Cancel</a></td>
                                                            </tr>
                                                            <?php
                                                            }
                                                        }
                                                    }
                                                ?>
                                                            
                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                </div>

                                <div class="collapse mb-2" id="collapseExample2">
                                    <div class="card card-body">
                                      <div class="card-header">
                                        <span class="card-title fw-500">
                                            Rejected Applications
                                        </span>
                                      </div>
                                      <div class="card-footer table-responsive">
                                        <table class="table table-bordered">
                                            <thead class="bg-table text-center fw-bold">
                                                <tr>
                                                    <td>Application ID</td>
                                                    <td>Department Name</td>
                                                    <td>Scheme Name</td>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white">
                                            <?php
                                                    $select1="SELECT * FROM `apply` WHERE student_id=$cutomer";

                                                    $result1=mysqli_query($conn,$select1);

                                                    $total=9;

                                                

                                                    if(mysqli_num_rows($result1)>0){
                                                        foreach ($result1 as $key1) {
                                                            $c=$key['clgapro'];
                                                            $p=$key['papro'];
                                                            $d=$key['depapro'];

                                                            $cl=$c+$p+$d;

                                                            if($total==$cl){

                                                            
                                                            ?>
                                                            <tr class="fs-10 text-center">
                                                                <td><?php echo $key1['app']; ?></td>
                                                                <td><?php echo $key1['scheme']; ?></td>
                                                                <td><?php echo $key1['department']; ?></td> 
                                                            </tr>
                                                            <?php
                                                            }
                                                        }
                                                    }
                                                ?>
                                            </tbody>
                                        </table>
                                      </div>
                                    </div>
                                </div>
                                <div class="collapse mb-2" id="collapseExample3">
                                    <div class="card card-body">
                                      <div class="card-header">
                                        <span class="card-title fw-500">
                                            Fund Disbursed
                                        </span>
                                      </div>
                                      <div class="card-footer table-responsive">
                                        <table class="table table-bordered">
                                            <thead class="bg-table text-center fw-bold">
                                                <tr>
                                                    <td>Application ID</td>
                                                    <td>Student Id</td>
                                                    <td>Account No</td>
                                                    <td>IFSC CODE</td>
                                                    <td>Amount</td>
                                                    <td>Date</td>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white">
                                                <?php
                                                    $select100="SELECT * FROM `fund` WHERE student_id=$cutomer";

                                                    $result100=mysqli_query($conn,$select100);

                                                    if(mysqli_num_rows($result100)>0){
                                                        foreach ($result100 as $key100) {
                                                            ?>
                                                            <tr class="text-center">
                                                                <?php
                                                                    $select222="SELECT * FROM `apply` WHERE student_id=$cutomer";

                                                                    $result222=mysqli_query($conn,$select222);

                                                                    if(mysqli_num_rows($result222)>0){
                                                                        foreach ($result222 as $key222) {
                                                                            ?>

                                                                                <td><?php echo $key222['app'];?></td>

                                                                            <?php
                                                                        }
                                                                    }
                                                                ?>
                                                                
                                                                <td><?php echo $key100['student_id'];?></td>
                                                                <td><?php echo $key100['account_no'];?> </td>
                                                                <td><?php echo $key100['ifsc'];?></td>
                                                                <td><?php echo $key100['amount'];?></td>
                                                                <td><?php echo $key100['date'];?></td>
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
                            </div>
                        </div>
                    </div>

<!--Main End-->

<?php
    include '../main2.php';
?>

<?php
    include '../footer.php';
?>