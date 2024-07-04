<?php

include '../conn.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $cname=$_POST['cname'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $user=$_POST['username'];
        $pass=$_POST['password'];

        $update="UPDATE `clgclerk` SET `fname`='$fname',`lname`='$lname',`collegename`='$cname',`mobile`='$mobile',`email`='$email',`username`='$user',`password`='$pass' WHERE c_id=$id";

        $query = mysqli_query($conn,$update);

            if ($query) {
                echo '
                
                <div class="alert alert-success" role="alert">
                Account Updated Successfully
                </div>
                
                ';
                header('location:../clgclerkdata.php');
            } else {
                die(mysqli_error($conn));
            }
    }
    

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>
        <?php 
        echo $demo;
        ?>
    </title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="position-absolute top-50 start-0">
                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6">
                    <?php 
                        echo $mg;
                    ?>
                    </div>
                    <div class="col-md-3">

                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
