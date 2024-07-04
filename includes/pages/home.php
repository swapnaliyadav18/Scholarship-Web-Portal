<?php
  include '../conn.php';

  session_start();
  
  if(!isset($_SESSION['username'])){
      header('Location: ../../index.php');
  }
?>
<?php
    include '../header.php';

    include '../navbar.php';
?>

<?php
    include '../main1.php';
?>

<?php

    $cutomer=$_SESSION['student_id'];
    $select="SELECT COUNT(*) AS ct FROM `st_info` WHERE student_id=$cutomer";

    $query=mysqli_query($conn,$select);

    if(mysqli_num_rows($query)>0){
        foreach ($query as $row) {
            $f=$row['ct'];
        }
    }

    $select1="SELECT COUNT(*) AS ct1 FROM `st_add` WHERE student_id=$cutomer";

    $query1=mysqli_query($conn,$select1);

    if(mysqli_num_rows($query1)>0){
        foreach ($query1 as $row1) {
            $f1=$row1['ct1'];
        }
    }

    $select2="SELECT COUNT(*) AS ct2 FROM `st_otr` WHERE student_id=$cutomer";

    $query2=mysqli_query($conn,$select2);

    if(mysqli_num_rows($query2)>0){
        foreach ($query2 as $row2) {
            $f2=$row2['ct2'];
        }
    }
    $select3="SELECT COUNT(*) AS ct3 FROM `st_crt_c` WHERE student_id=$cutomer";

    $query3=mysqli_query($conn,$select3);

    if(mysqli_num_rows($query3)>0){
        foreach ($query3 as $row3) {
            $f3=$row3['ct3'];
        }
    }
    $select4="SELECT COUNT(*) AS ct4 FROM `st_pastq` WHERE student_id=$cutomer";

    $query4=mysqli_query($conn,$select4);

    if(mysqli_num_rows($query4)>0){
        foreach ($query4 as $row4) {
            $f4=$row4['ct4'];
        }
    }

    $total=$f+$f1+$f2+$f3+$f4;

    $multi=$total*20;

?>

<!--Main Start-->

<div id="st_5" class="col-md-12 text-center">
                        <?php
                            if(isset($_SESSION['st_5'])){
                        ?>
                        <div class="alert alert-success fw-bold" role="alert">
                            <?php echo $_SESSION['st_5']; ?>
                        </div>
                        <?php
                            unset($_SESSION['st_5']);
                            }
                        ?>
                        <?php
                            if(isset($_SESSION['st_5'])){
                        ?>
                        <div class="alert alert-danger fw-bold" role="alert">
                            <?php echo $_SESSION['st_5']; ?>
                        </div>
                        <?php
                            unset($_SESSION['st_5']);
                            }
                        ?>
                    </div>
                    <div class="col-md-12">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $multi; ?>%"><span class="fw-bold"><?php echo $multi; ?>% Completed</span></div>
                        </div>
                    </div>
                    <div class="col-md-12 table-responsive">
                        <table class="table table-bordered text-center">
                            <thead class="bg-table fw-bold">
                                <tr>
                                    <td colspan="2">Scheme Name</td>
                                    <td>Department Name</td>
                                    <td>Scheme type</td>
                                    <td>Opening Date</td>
                                    <td>Closing Date</td>
                                    <td>Take Action</td>
                                </tr>
                            </thead>
                            <tbody class="bg-light">
                            <?php
                                $select ="SELECT * FROM `addscheme`";

                                $fetch=mysqli_query($conn,$select);

                                if(mysqli_num_rows($fetch)>0){
                                    foreach($fetch as $row){
                                        ?>
                                        
                                <tr class="fs-10 fw-500">
                                    <td colspan="2"><?php echo $row['scheme']; ?></td>
                                    <td><?php echo $row['deprt']; ?></td>
                                    <td><?php echo $row['type']; ?></td>
                                    <td><?php echo $row['sdate']; ?></td>
                                    <td><?php echo $row['edate']; ?></td>
                                    <td><a class="text-decoration-none" href="../insert/apply.php?id=<?php echo $row['id']; ?>">Apply</a></td>
                                </tr>
                                <?php
                                    }
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>

<!--Main End-->

<?php
    include '../main2.php';
?>

<?php
    include '../footer.php';
?>