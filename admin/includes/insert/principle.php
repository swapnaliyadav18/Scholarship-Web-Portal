<?php

include '../conn.php';

session_start();

if (isset($_POST['submit'])) {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $cname=$_POST['cname'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $user=$_POST['username'];
    $pass=$_POST['password'];


    $select="SELECT * FROM `collegename` where college='$cname' ";

    $query=mysqli_query($conn,$select);

    if(mysqli_num_rows($query)>0){
        foreach($query as $row) {
            $clgname=$row['college'];
            
        }
    }

    if($clgname=$cname){

        $select1="SELECT * FROM `collegename` where college='$cname' ";

        $query1=mysqli_query($conn,$select1);

        if(mysqli_num_rows($query1)>0){
            foreach($query1 as $row1) {
                    $clgid= $row1['clgid'];
            }
        }

        $insert = "INSERT INTO `clgprinciple`(`fname`, `lname`, `collegename`, `mobile`, `email`, `username`, `password`, `clgid`) VALUES 
    ('$fname','$lname','$cname','$mobile','$email','$user','$pass','$clgid')";

        $query = mysqli_query($conn, $insert);


        if ($query) {

            
            $_SESSION['msg']= "Account Created Successfully";
            header("Location: ../tables/principledata.php");

        }else{
            $_SESSION['msg1']= "Account Can't Created Successfully";
            header("Location: ../tables/principledata.php");
        
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
