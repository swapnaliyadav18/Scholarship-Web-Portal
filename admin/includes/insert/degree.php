<?php

    session_start();

    include '../conn.php';

    if(isset($_POST['submit'])){
        $course=$_POST['course'];
        $fee=$_POST['fee'];

        $insert="INSERT INTO `degree`( `course`, `fee`) VALUES ('$course','$fee')";

        $query=mysqli_query($conn,$insert);

        if($query){
            header('location:../tables/degree.php');
            $_SESSION['deptmsg']="Degree Added Successfully";
        }else{
            header('location:../tables/degree.php');
            $_SESSION['deptmsg1']="Degree Can't Added Successfully";
        }
    }

?>