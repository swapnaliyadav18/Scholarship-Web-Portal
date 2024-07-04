<?php
    include '../conn.php';
    session_start();

    $cutomer=$_SESSION['student_id'];

    if(isset($_POST['submit'])){
        $address=$_POST['address'];
        $state=$_POST['state'];
        $dist=$_POST['dist'];
        $tal=$_POST['tal'];
        $village=$_POST['village'];
        $pincode=$_POST['pincode'];
        $student_id=$_SESSION['student_id'];

        $select="SELECT * FROM `st_add` WHERE student_id=$cutomer";

        $query=mysqli_query($conn,$select);
        
        if (mysqli_num_rows($query)>0) {
            foreach ($query as $row) {
                $stud=$row['student_id'];
            }
        }

        if($cutomer==$stud){

            $update="UPDATE `st_add` SET `Address`='$address',`state`='$state',`dist`='$dist',`tal`='$tal',`village`='$village',`pincode`='$pincode' WHERE student_id=$cutomer";

            $result1=mysqli_query($conn,$update);

            if ($result1) {
                $_SESSION['st_3']="Hey! Your Student Address Information has been Updated Successfully";
                header('Location: ../pages/st-3.php?#st_3');
            }else{
                $_SESSION['st_22']="Your Student Address Information Can't Updated Successfully";
                header('Location: ../pages/st-2.php');

            }
        }else{
            $insert="INSERT INTO `st_add`(`student_id`, `Address`, `state`, `dist`, `tal`, `village`, `pincode`) VALUES 
        ('$student_id','$address','$state','$dist','$tal','$village','$pincode')";

        $result=mysqli_query($conn,$insert);

            if ($result) {
                $_SESSION['st_3']="Hey! Your Student Address Information has been Inserted Successfully";
                header('Location: ../pages/st-3.php?#st_3');
            }else{
                $_SESSION['st_22']="Your Student Address Information Can`t Inserted Successfully";
                header('Location: ../pages/st-2.php');
            }
        }
    }
?>