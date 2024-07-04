<?php

include '../conn.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    if(isset($_POST['submit'])){
        $scheme=$_POST['scheme'];
        $department=$_POST['department'];
        $type=$_POST['type'];
        $qlevel=$_POST['qlevel'];
        $course=$_POST['course'];
        $edate=$_POST['date'];

        $select ="UPDATE `addscheme` SET `deprt`='$department',`type`='$type',`qlevel`='$qlevel',`course`='$course',`scheme`='$scheme',`edate`='$edate' WHERE id=$id";

        $query = mysqli_query($conn,$select);
        
        if($query){
            header('location: ../tables/scheme.php');
        }
    }
}

?>