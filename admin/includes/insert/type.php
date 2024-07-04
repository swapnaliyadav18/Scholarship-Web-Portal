<?php

    session_start();

    include '../conn.php';

    if(isset($_POST['submit'])){
        $type=$_POST['type'];

        $insert="INSERT INTO `type`(`type`) VALUES ('$type')";

        $query=mysqli_query($conn,$insert);

        if($query){
            header('location:../tables/type.php');
            $_SESSION['typemsg']="Type Added Successfully";
        }else{
            header('location:../tables/type.php');
            $_SESSION['typemsg1']="Type Can't Added Successfully";
        }
    }

?>