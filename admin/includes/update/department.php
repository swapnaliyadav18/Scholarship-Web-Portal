<?php
session_start();
include '../conn.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    if(isset($_POST['submit'])){
        $depart=$_POST['department'];

        $select ="UPDATE `department` SET `department`='$depart' WHERE id=$id";

        $query = mysqli_query($conn,$select);
        
        if($query){
            header('location:../tables/department.php');
            $_SESSION['deptmsg']="Department Updated Successfully";
        }else{
            header('location:../tables/department.php');
            $_SESSION['deptmsg1']="Department Can't Updated Successfully";
        }
    }
}

?>