<?php
    include '../conn.php';

    if(isset($_POST['submit'])){
        $student_id=$_POST['student_id'];
        $fname=$_POST['fname'];
        $account=$_POST['account'];
        $ifsc=$_POST['ifsc'];
        $amount=$_POST['amount'];
        
        $insert="INSERT INTO `fund`(`fname`,`account_no`, `ifsc`, `student_id`, `amount`) VALUES 
        ('$fname','$account','$ifsc','$student_id','$amount')";

        $result=mysqli_query($conn,$insert);

        if($result){
            header('Location: ../tables/fund.php');
        }else{
            header('Location: ../tables/fund.php');
        }
    }
?>