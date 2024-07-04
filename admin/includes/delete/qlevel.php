<?php 

    session_start();

    include '../conn.php';

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $update="DELETE FROM `qlevel` WHERE id=$id";

        $query=mysqli_query($conn,$update);

        if($query){
            header('location:../tables/qlevel.php');
            $_SESSION['deptmsg']="Course Delete Successfully";
        }else{
            header('location:../tables/qlevel.php');
            $_SESSION['deptmsg1']="Course can't Delete Successfully";
        }

    }

?>