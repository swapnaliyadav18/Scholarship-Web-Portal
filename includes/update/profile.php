<?php

    include '../conn.php';

    session_start();

    $student=$_SESSION['student_id'];

    if(isset($_POST['update'])){

        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['mobile'];
        $username=$_POST['username'];

        $fetch="UPDATE `student` SET `fname`='$fname',`mname`='$mname',`lname`='$lname',`email`='$email',`phone`='$phone',`username`='$username' WHERE student_id=$student";

        $result=mysqli_query($conn,$fetch);

        if($result){
            $_SESSION['fetch']="Your Data has been changed successfully";
            header('Location: ../pages/profile.php?#successful');
        }else{
            $_SESSION['fetch1']="Your Can't Data updated Successfully";
            header('Location: ../pages/profile.php?#successful');
        }

    }


?>