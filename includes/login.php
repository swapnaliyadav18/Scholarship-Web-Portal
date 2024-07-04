<?php

session_start();

include 'conn.php';

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['pwd'];

    $select="SELECT * FROM `student` WHERE username='$username'";
    $query=mysqli_query($conn,$select);

    if(mysqli_num_rows($query)>0){
        while($row=mysqli_fetch_assoc($query)){
            if($row['apro']==1){
                if(md5($password)==$row['password']){
                    $_SESSION['username']=$username;
                    $_SESSION['student_id']=$row['student_id'];
                    header('Location: pages/home.php');
                }else{
                    header('Location: pages/login.php'); 
                    $_SESSION['msg']='Your Passward Is wrong.';
                }
            }else{
                header('Location: pages/login.php'); 
                $_SESSION['msg']='Your account is Deactived please contact to College.';
            }
        }
    }else{
        header('Location: pages/login.php'); 
        $_SESSION['msg']='Student doesn`t exist.';
    }

}
?>
