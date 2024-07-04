<?php 

    include '../conn.php';

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $update="DELETE FROM `collegename` WHERE id=$id";

        $query=mysqli_query($conn,$update);

        if($query){
            header('location:../addclgs.php');
        }

    }

?>