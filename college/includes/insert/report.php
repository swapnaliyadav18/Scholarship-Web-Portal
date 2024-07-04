<?php

    session_start();

    include '../conn.php';

    if(isset($_POST['submit'])){
        $schme=$_POST['app'];
        $depart=$_POST['remark'];
        $type=$_POST['rejected'];
        $desi='Collegeclerk';
        $qlevel=$_POST['action'];

        $insert="INSERT INTO `report`(`applications`, `remark`, `rejected`, `designation`, `action`) VALUES 
        ('$schme','$depart','$type','$desi','$qlevel')";

        $query=mysqli_query($conn,$insert);

        if($query){
            header('location:../pages/report.php');
            $_SESSION['msg']="Report Added Successfully";
        }else{
            header('location:../pages/report.php');
            $_SESSION['msg1']="Report Can't Added Successfully";
        }
    }

?>