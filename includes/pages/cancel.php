<?php

    include '../conn.php';

    session_start();

    $cutomer=$_SESSION['student_id'];

    $id=$_GET['id'];

    $select="SELECT * FROM `apply` WHERE app=$id";

    $fetch=mysqli_query($conn,$select);

    if(mysqli_num_rows($fetch)>0){
        foreach ($fetch as $row) {
            $app=$row['app'];
            $scheme=$row['scheme'];
            $department=$row['department'];
        }
    }

    if($app==$id){
        $insert="INSERT INTO `cancel`(`application`, `scheme`, `deprt`,`student_id`) VALUES 
        ('$app','$scheme','$department','$cutomer')";

        $fet=mysqli_query($conn,$insert);

        if($fet){
            $delete="DELETE FROM `apply` WHERE app=$id";

            $result=mysqli_query($conn,$delete);

            header('Location: mycancel.php');
        }else{
            header('Location: mycancel.php');
        }
    }

?>