<?php

    session_start();

    include '../conn.php';

    if(isset($_POST['submit'])){
        $schme=$_POST['scheme'];

        $insert="INSERT INTO `department`(`department`) VALUES ('$schme')";

        $query=mysqli_query($conn,$insert);

        if($query){
            header('location:../tables/department.php');
            $_SESSION['deptmsg']="Department Added Successfully";
        }else{
            header('location:../tables/department.php');
            $_SESSION['deptmsg1']="Department Can't Added Successfully";
        }
    }

?>