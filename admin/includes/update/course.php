<?php
session_start();
include '../conn.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    if(isset($_POST['submit'])){
        $qlevel=$_POST['qlevel'];
        $course=$_POST['course'];
        $fee=$_POST['fee'];

        $select ="UPDATE `degree` SET `qlevel`='$qlevel',`course`='$course',`fee`='$fee' WHERE id=$id";

        $query = mysqli_query($conn,$select);
        
        if($query){
            header('location:../tables/course.php');
            $_SESSION['deptmsg']="Course Updated Successfully";
        }else{
            header('location:../tables/course.php');
            $_SESSION['deptmsg1']="Course Can't Updated Successfully";
        }
    }
}

?>