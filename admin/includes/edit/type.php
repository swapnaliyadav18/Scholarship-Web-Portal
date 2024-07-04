<?php

    include '../header.php';

    include '../navbar.php';
?>

<!--Main Start-->

<?php

    include '../conn.php';

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $select ="SELECT * FROM `type` WHERE id=$id";

        $query=mysqli_query($conn,$select);

        if(mysqli_num_rows($query)>0){
            foreach($query as $row){
        ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="../update/type.php?id=<?php echo $row['id'];?>" class="row g-3 needs-validation" method="post" novalidate>
                            <div class="row g-3">
                                <div class="col-md-12 text-center">
                                    <span class="fs-5">Add Department</span>
                                </div>
                                <div class="col-md-12">
                                    <label for="validationCustom01" class="form-label">Department Name</label>
                                    <input type="text" class="form-control" value="<?php echo $row['type'];?>" name="type" id="validationCustom01" required>
                                    <div class="invalid-feedback">
                                        Please Enter Department name.
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit" name="submit">Add Type</button>
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