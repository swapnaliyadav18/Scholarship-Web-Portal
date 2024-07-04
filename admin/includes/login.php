<?php

session_start();

    include './conn.php';

    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        $select1="SELECT * FROM `admin` WHERE username='$username'";
        $query1=mysqli_query($conn,$select1);

        if(mysqli_num_rows($query1)>0){
            foreach ($query as $key) {
                $id=$key['a_id'];
            }
        }
        

        $select="SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
        $query=mysqli_query($conn,$select);

        if(mysqli_num_rows($query)==1){
            $_SESSION['username']=$username;
            header('Location: pages/home.php');
        }else{
            die('Connection Failed');
        }

    }
?>