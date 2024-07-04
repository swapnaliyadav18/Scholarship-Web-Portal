<?php

session_start();

include '../conn.php';

    if(isset($_POST['submit'])){
        $application=$_POST['application'];
        $zero=$_POST['select'];

        $select="SELECT * FROM `apply` WHERE app=$application";

        $result=mysqli_query($conn,$select);

        if(mysqli_num_rows($result)>0){
            foreach($result as $row){
                $total=$row['total'];
                $clg=$row['clgapro'];
            }
        }

        

        if($zero==3){
            $cal=$total+$zero;
            $update="UPDATE `apply` SET `clgapro`='$zero',`total`='$cal' WHERE app=$application ";
            $result=mysqli_query($conn,$update);
            $_SESSION['msg']="This Application Is Updated Succssfully..";
            header('Location: ../pages/appro.php');
        }elseif($zero==1){
            $cal=$total+$zero;
            $update="UPDATE `apply` SET `clgapro`='$zero',`total`='$cal' WHERE app=$application ";
            $result=mysqli_query($conn,$update);
            $_SESSION['msg']="This Application Is Updated Succssfully..";
            header('Location: ../pages/appro.php');
        }elseif($zero==0){
            $cal=$total-$clg;
            $update="UPDATE `apply` SET `clgapro`='$zero',`total`='$cal' WHERE app=$application ";
            $result=mysqli_query($conn,$update);
            $_SESSION['msg']="This Application Is Updated Succssfully..";
            header('Location: ../pages/appro.php');
            
        }
    }
    

?>