<?php 

    include '../conn.php';

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $update="DELETE FROM `clgclerk` WHERE c_id=$id";

        $query=mysqli_query($conn,$update);

        if($query){
            header('location:../clgclerkdata.php');
        }

    }

?>