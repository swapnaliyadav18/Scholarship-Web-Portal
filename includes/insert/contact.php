<?php

    session_start();

    $cutomer=$_SESSION['student_id'];

    include '../conn.php';

    if (isset($_POST['submit'])) {
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $lname=$_POST['lname'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        $ticket=rand(1,1000);

        $insert="INSERT INTO `st_contact`(`student_id`, `fname`, `mname`, `lname`, `mobile`, `email`, `message`, `ticket`) VALUES 
        ('$cutomer','$fname','$mname','$lname','$mobile','$email','$message','$ticket')";

        $result=mysqli_query($conn,$insert);

        if($result){
            $_SESSION['contact']="Thank You For Contact us.. Your College will contact you soon...";
            header('Location: ../pages/contact.php');
        }else{
            $_SESSION['contact']="Oops...";
            header('Location: ../pages/contact.php');
        }
    }

?>