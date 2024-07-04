<?php

    session_start();

    include '../conn.php';

    if(isset($_POST['submit'])){
        $schme=$_POST['scheme'];
        $depart=$_POST['department'];
        $type=$_POST['type'];
        $qlevel=$_POST['qlevel'];
        $date=$_POST['date'];
        $course=$_POST['course'];

        $insert="INSERT INTO `addscheme`(`deprt`, `type`, `qlevel`, `course`, `scheme`, `edate`) VALUES 
        ('$depart','$type','$qlevel','$course','$schme','$date')";

        $query=mysqli_query($conn,$insert);

        if($query){
            header('location:../tables/scheme.php');
            $_SESSION['deptmsg']="Scheme Added Successfully";
        }else{
            header('location:../tables/scheme.php');
            $_SESSION['deptmsg1']="Scheme Can't Added Successfully";
        }
    }

?>