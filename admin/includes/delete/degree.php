<?php 

    session_start();

    include '../conn.php';

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $update="DELETE FROM `degree` WHERE id=$id";

        $query=mysqli_query($conn,$update);

        if($query){
            header('location:../tables/degree.php');
            $_SESSION['deptmsg']="Course Delete Successfully";
        }else{
            header('location:../tables/degree.php');
            $_SESSION['deptmsg1']="Course can't Delete Successfully";
        }

    }

?>