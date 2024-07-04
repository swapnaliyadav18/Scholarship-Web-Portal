<?php
    session_start();

    include '../conn.php';

    $id=$_GET['id'];


    $cutomer=$_SESSION['student_id'];

    $select="SELECT * FROM `addscheme` WHERE id=$id";

    $fetch=mysqli_query($conn,$select);

    if (mysqli_num_rows($fetch)>0) {
        foreach($fetch as $row){
            $scheme=$row['qlevel'];
            $shme=$row['scheme'];
            $deprt=$row['deprt'];
            $course=$row['course'];
            $rand=rand(100000000000,999999999999);
        }
    }


    $select1="SELECT * FROM `st_crt_c` WHERE student_id=$cutomer";

    $fetch1=mysqli_query($conn,$select1);

    if (mysqli_num_rows($fetch1)>0) {
        foreach($fetch1 as $row1){
            $scheme1=$row1['qlevel'];
            $course1=$row1['course'];
            $clg=$row1['clgname'];
            $clgid=$row1['clgid'];
        }
    }


    $select2="SELECT * FROM `apply` WHERE student_id=$cutomer";

    $fetch2=mysqli_query($conn,$select2);

    if (mysqli_num_rows($fetch2)>0) {
        foreach($fetch2 as $row2){
            $stid=$row2['student_id'];
        }
    }


    if($scheme==$scheme1 && $course==$course1){
        
        if($stid==$cutomer){
            header('Location: ../pages/shem.php?#wrong');
            $_SESSION['st_51']="This Scheme already Applied...";
        }else{
                $insert="INSERT INTO `apply`(`student_id`,`clgname`, `scheme`,`app`, `department`, `clgapro`, `papro`, `depapro`,`clgid`) VALUES 
            ('$cutomer','$clg','$shme','$rand','$deprt','0','0','0','$clgid')";

            $result=mysqli_query($conn,$insert);

            if($result){
                $_SESSION['st_5']="This Scheme Applied Successfully..";
                header('Location: ../pages/shem.php?#wrong');
            }
        }

    }else{
        $_SESSION['st_51']="This Scheme Not Applicable for you Please Try Another...";
        header('Location: ../pages/shem.php?#wrong');
    }
?>