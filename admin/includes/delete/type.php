<?php 

    session_start();

    include '../conn.php';

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $update="DELETE FROM `type` WHERE id=$id";

        $query=mysqli_query($conn,$update);

        if($query){
            header('location:../tables/type.php');
            $_SESSION['typemsg']="Department Delete Successfully";
        }else{
            header('location:../tables/type.php');
            $_SESSION['typemsg1']="Department can't Delete Successfully";
        }

    }

?>