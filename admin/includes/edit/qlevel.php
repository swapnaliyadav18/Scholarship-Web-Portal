<?php

    include '../header.php';

    include '../navbar.php';
?>

<!--Main Start-->

<?php

    include '../conn.php';

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $select ="SELECT * FROM `qlevel` WHERE id=$id";

        $query=mysqli_query($conn,$select);

        if(mysqli_num_rows($query)>0){
            foreach($query as $row){
?>

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="../update/qlevel.php?id=<?php echo $row['id'];?>" class="row g-3 needs-validation" method="post" novalidate>
                            <div class="row g-3">
                                <div class="col-md-12 text-center">
                                    <span class="fs-5">Add Qualification</span>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Qualification Level</label>
                                    <input class="form-control" name="qlevel" type="text" value="<?php echo $row['qlevel'];?>" required>
                                    <div class="invalid-feedback">
                                        Please Enter your Degree.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit" name="submit">Update Qualification</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
            }
        }
    }

?>


<!--Main End-->

<?php
    include '../footer.php';
?>
   