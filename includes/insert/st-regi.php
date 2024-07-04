<?php
    include '../conn.php';

    session_start();

    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $username=$_POST['username'];
        $pwd=$_POST['pwd'];
        $active="1";
        $student_id=rand(1000000000,9000000000);
        $pass = md5($pwd);

        $select="SELECT * FROM `student`";

        $query=mysqli_query($conn,$select);

        if(mysqli_num_rows($query)>0){
            foreach($query as $row){
                $vali=$row['email'];
                $ur=$row['username'];
                $pho=$row['phone'];
            }
        }

        if($vali==$email){
            $_SESSION['already']="This email address already Exists";
            header('Location: ../pages/st-regi.php');
        }else{
            if ($ur==$username) {
                $_SESSION['already']="This username already Exists";
                header('Location: ../pages/st-regi.php');
            }elseif ($pho==$mobile) {
                $_SESSION['already']="This Mobile Number already Exists";
                header('Location: ../pages/st-regi.php');
            }else{
                $insert="INSERT INTO `student`(`fname`, `mname`, `lname`, `email`, `phone`, `username`, `password`, `student_id`, `apro`) VALUES 
                ('$fname','$mname','$lname','$email','$mobile','$username','$pass','$student_id','$active')";

                $result=mysqli_query($conn,$insert);

                if ($result) {
                    header('Location: ../pages/login.php');
                }else{
                    header('Location: ../pages/st-regi.php');
                }
            }
        }
    }
?>