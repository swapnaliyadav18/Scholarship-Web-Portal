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

    error_reporting(0);
    include '../main1.php';
?>

<!--Main Start-->

<div id="wrong" class="col-md-12">
    <div class="card card-body">
        <div class="card-header">
            <span class="card-title fw-500">
                Schemes
            </span>
        </div>
    </div>
</div>
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
                            if(isset($_SESSION['st_51'])){
                        ?>
                        <div class="alert alert-danger fw-bold" role="alert">
                            <?php echo $_SESSION['st_51']; ?>
                        </div>
                        <?php
                            unset($_SESSION['st_51']);
                            }
                        ?>
                    </div>
<div class="col-md-12">
    <form action="shem.php?<?php if(isset($_GET['find'])){echo $_GET['find'];}?>" method="GET">
        <div class="row g-3">
            <div class="col-md-12">
                <select class="form-select" name="find" aria-label="Default select example" required>
                    <option selected disabled value="">--Select Department--</option>
                    <?php

                        $sele="SELECT * FROM `department`";

                        $fetc=mysqli_query($conn,$sele);

                        if (mysqli_num_rows($fetc)>0) {
                            foreach ($fetc as $key) {
                                ?>
                                    <option value="<?php echo $key['department']; ?>"><?php echo $key['department']; ?></option>
                                <?php
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="col-md-12">
                <button type="submit" name="submit" class="btn btn-success">Search</button>
            </div>
            <div class="col-md-12 table-responsive">
            <table class="table table-bordered">
                <thead class="bg-table text-center fw-bold">
                    <tr>
                        <td>Scheme Name</td>
                        <td>Department Name</td>
                        <td>Type</td>
                        <td>Opening Date</td>
                        <td>Closing Date</td>
                        <td>Take Action</td>
                    </tr>
                </thead>
                <tbody class="bg-white text-center">

            

                <?php

                    $idd=$_GET['find'];

                    $select ="SELECT * FROM `addscheme` WHERE CONCAT(deprt) LIKE '%$idd%'";

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
                        <td><a class="text-decoration-none" href="../insert/apply.php?id=<?php echo $row['id']; ?>">Apply</a></td>
                    </tr>
                    <?php
                        }
                    }
                ?>
                </tbody>
            </table>
            </div>
        </div>
    </form>
</div>

<!--Main End-->

<?php
    include '../main2.php';
?>

<?php
    include '../footer.php';
?>