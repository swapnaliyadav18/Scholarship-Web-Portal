<?php

    include '../conn.php';

    if(isset($_POST['submit'])){
        $college=$_POST['cname'];
        $clgid=rand(10000000000,90000000000);

        $insert="INSERT INTO `collegename`(`college`,`clgid`) VALUES ('$college','$clgid')";

        $query=mysqli_query($conn,$insert);

        if($query){
            header('location:../tables/addclgs.php');
        }
    }

?>