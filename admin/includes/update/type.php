<?php
session_start();
include '../conn.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    if(isset($_POST['submit'])){
        $depart=$_POST['type'];

        $select ="UPDATE `type` SET `type`='$depart' WHERE id=$id";

        $query = mysqli_query($conn,$select);
        
        if($query){
            header('location:../tables/type.php');
            $_SESSION['typemsg']="Department Updated Successfully";
        }else{
            header('location:../tables/type.php');
            $_SESSION['typemsg1']="Department Can't Updated Successfully";
        }
    }
}

?>