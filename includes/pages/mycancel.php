<?php
  include '../conn.php';

  session_start();
  
  if(!isset($_SESSION['username'])){
      header('Location: ../../index.php');
  }
  $cutomer=$_SESSION['student_id'];
?>
<?php
    include '../header.php';

    include '../navbar.php';
?>

<?php
    include '../main1.php';
?>

<!--Main Start-->

<div class="col-md-12">
                        <div class="card card-body">
                            <div class="card-header">
                              <span class="card-title fw-500">
                                Cancelled Scheme
                              </span>
                            </div>
                            <div class="card-footer table-responsive">
                                <table class="table table-bordered">
                                    <thead class="bg-table text-center fw-bold">
                                        <tr>
                                            <td>Application ID</td>
                                            <td>Scheme Name</td>
                                            <td>Department Name</td>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        <?php

                                            $select1="SELECT * FROM `cancel` WHERE student_id=$cutomer";

                                            $result1=mysqli_query($conn,$select1);

                                            $total=20;



                                            if(mysqli_num_rows($result1)>0){
                                                foreach ($result1 as $key1) {

        
   

                                        ?>
                                    <tr class="fs-10 text-center">
                                        <td><?php echo $key1['application']; ?></td>
                                        <td><?php echo $key1['scheme']; ?></td>
                                        <td><?php echo $key1['deprt']; ?></td>
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

<!--Main End-->

<?php
    include '../main2.php';
?>

<?php
    include '../footer.php';
?>