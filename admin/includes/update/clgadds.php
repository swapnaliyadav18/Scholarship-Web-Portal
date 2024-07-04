<?php

include '../conn.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    if(isset($_POST['submit'])){
        $clg=$_POST['cname'];

        $select ="UPDATE `collegename` SET `college`='$clg' WHERE id=$id";

        $query = mysqli_query($conn,$select);
        
        if($query){
            header('location:../tables/addclgs.php');
        }
    }
}

?>