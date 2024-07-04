<?php

    include '../header.php';

    include '../navbar.php';
?>

<!--Main Start-->

<?php

    include '../conn.php';

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $select ="SELECT * FROM `degree` WHERE id=$id";

        $query=mysqli_query($conn,$select);

        if(mysqli_num_rows($query)>0){
            foreach($query as $row){
        ?>


<!--Main Start-->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="../update/degree.php?id=<?php echo $row['id'];?>" class="row g-3 needs-validation" method="post" novalidate>
                            <div class="row g-3">
                                <div class="col-md-12 text-center">
                                    <span class="fs-5">Add Degree</span>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Qualification Level</label>
                                    <input class="form-control" name="course" type="text" value="<?php echo $row['course'];?>" required>
                                    <div class="invalid-feedback">
                                        Please Enter your Degree.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Fee</label>
                                    <input type="text" class="form-control" name="fee" value="<?php echo $row['fee'];?>" id="validationCustom01" required>
                                    <div class="invalid-feedback">
                                        Please Enter Fee.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit" name="submit">Add Degree</button>
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
    <?php
            }
        }
    }

?>
<!--Main End-->

<?php
    include '../footer.php';
?>