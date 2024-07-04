<?php
session_start();
include '../conn.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    if(isset($_POST['submit'])){
        $course=$_POST['qlevel'];

        $select ="UPDATE `qlevel` SET `qlevel`='$course' WHERE id=$id";

        $query = mysqli_query($conn,$select);
        
        if($query){
            header('location:../tables/qlevel.php');
            $_SESSION['deptmsg']="Qualification Level Updated Successfully";
        }else{
            header('location:../tables/qlevel.php');
            $_SESSION['deptmsg1']="Qualification Level Can't Updated Successfully";
        }
    }
}

?>