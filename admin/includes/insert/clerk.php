<?php

include '../conn.php';

session_start();

if (isset($_POST['submit'])) {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $cname=$_POST['cname'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $user=$_POST['username'];
    $pass=$_POST['password'];

    $select="SELECT * FROM `collegename` where college='$cname' ";

    $query=mysqli_query($conn,$select);

    if(mysqli_num_rows($query)>0){
        foreach($query as $row) {
            $clgname=$row['college'];
            
        }
    }

    if($clgname=$cname){

        $select1="SELECT * FROM `collegename` where college='$cname' ";

        $query1=mysqli_query($conn,$select1);

        if(mysqli_num_rows($query1)>0){
            foreach($query1 as $row1) {
                    $clgid= $row1['clgid'];
            }
        }

        $insert = "INSERT INTO `clgclerk`(`fname`, `lname`, `collegename`, `mobile`, `email`, `username`, `password`, `clgid`) VALUES 
    ('$fname','$lname','$cname','$mobile','$email','$user','$pass','$clgid')";

        $query = mysqli_query($conn, $insert);

        if ($query) {

            
            $_SESSION['msg']= "Account Created Successfully";
            header("Location: ../tables/clgclerkdata.php");

        }else{
            $_SESSION['msg1']= "Account Can't Created Successfully";
            header("Location: ../tables/clgclerkdata.php");
        
        }
    }
}

?>

