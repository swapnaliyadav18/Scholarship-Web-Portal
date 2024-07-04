<?php
session_start();
include '../conn.php';

if(isset($_GET['id'])){
    $id=$_GET['id'];

    if(isset($_POST['submit'])){
        $course=$_POST['course'];
        $fee=$_POST['fee'];

        $select ="UPDATE `degree` SET `course`='$course',`fee`='$fee' WHERE id=$id";

        $query = mysqli_query($conn,$select);
        
        if($query){
            header('location:../tables/degree.php');
            $_SESSION['deptmsg']="Course Updated Successfully";
        }else{
            header('location:../tables/degree.php');
            $_SESSION['deptmsg1']="Course Can't Updated Successfully";
        }
    }
}

?>