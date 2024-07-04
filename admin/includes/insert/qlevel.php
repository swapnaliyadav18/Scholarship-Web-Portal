<?php

    session_start();

    include '../conn.php';

    if(isset($_POST['submit'])){
        $course=$_POST['qlevel'];

        $insert="INSERT INTO `qlevel`( `qlevel`) VALUES ('$course')";

        $query=mysqli_query($conn,$insert);

        if($query){
            header('location:../tables/qlevel.php');
            $_SESSION['deptmsg']="qlevel Added Successfully";
        }else{
            header('location:../tables/qlevel.php');
            $_SESSION['deptmsg1']="qlevel Can't Added Successfully";
        }
    }

?>