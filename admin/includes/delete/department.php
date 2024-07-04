<?php 

    session_start();

    include '../conn.php';

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $update="DELETE FROM `department` WHERE id=$id";

        $query=mysqli_query($conn,$update);

        if($query){
            header('location:../tables/department.php');
            $_SESSION['deptmsg']="Department Delete Successfully";
        }else{
            header('location:../tables/department.php');
            $_SESSION['deptmsg1']="Department can't Delete Successfully";
        }

    }

?>