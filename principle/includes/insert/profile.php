<?php

include '../conn.php';

  session_start();
  

  $id=$_SESSION['username'];


$id=$_GET['id'];

    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $username=$_POST['username'];
        $password=$_POST['Password'];
        
        $filename=$_FILES['profile']['name'];
        $filetemp=$_FILES['profile']['tmp_name'];
        $folder="../../assets/images/profile/".$filename;

        echo $id;


        move_uploaded_file($filetemp,$folder);

        $insert="UPDATE `clgprinciple` SET `username`='$username',`password`='$password',`fname`='$fname',`lname`='$lname',`email`='$email',`mobile`='$mobile',`img`='$folder' WHERE p_id=$id";

        $result=mysqli_query($conn,$insert);

        if($result){
            if ($result) {
                $_SESSION['st_2']="Hey! Your Student Information has been Inserted Successfully";
                header('Location: ../pages/home.php?#st_2');
            }else{
                $_SESSION['st_22']="Your Student Information Can`t Inserted Successfully";
                header('Location: ../pages/home.php');
            }
        }


    }
?>