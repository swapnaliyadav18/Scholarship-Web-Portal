<?php

include '../conn.php';

if (isset($_POST['submit'])) {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $cname=$_POST['cname'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $user=$_POST['username'];
    $pass=$_POST['password'];


    $crud = array(
        'fname' => "'" . $fname  . "'",
        'lname' => "'" . $lname . "'",
        'collegename' => "'" . $cname . "'",
        'mobile' => "'" . $mobile . "'",
        'email' => "'" . $email . "'",
        'username' => "'" . $user . "'",
        'password' => "'" . $pass . "'"
    );

    $columns = implode(',', array_keys($crud));
    $values = implode(',', array_values($crud));

    include_once('conn.php');

    $insert = "INSERT INTO `deptclerk` ($columns) VALUES ($values)";

    $query = mysqli_query($conn, $insert);


    if ($query) {

        $mg= '
            <div class="alert alert-success text-center" role="alert">
                Account Created Successfully.
            </div>
        ';
        $demo="Account Created Successfully";

        header('location:../deptdata.php');

    }else{

        $mg= "
            <div class='alert alert-danger' role='alert'>
                Account Can't created Successfully.
            </div>
        "; 
        $demo="Account Can't created Successfully";
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
