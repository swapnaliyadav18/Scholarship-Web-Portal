<?php

    session_start();

    $cutomer=$_SESSION['student_id'];

    include '../conn.php';

    if(isset($_POST['submit'])){
        $fullname=$_POST['appname'];;
        $adhar=$_POST['adhar'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $bdate=$_POST['bdate'];
        $age=$_POST['age'];
        $pmobile=$_POST['pmobile'];
        $gender=$_POST['gender'];
        $marital=$_POST['marital'];
        $religion=$_POST['religion'];
        $castecat=$_POST['castecat'];
        $caste=$_POST['caste'];
        $fincome=$_POST['fincome'];
        $type=$_POST['type'];
        $account=$_POST['account'];
        $ifsc=$_POST['ifsc'];
        $branch=$_POST['branchname'];
        $student_id=$_SESSION['student_id'];

        $filename=$_FILES['aphoto']['name'];
        $filetemp=$_FILES['aphoto']['tmp_name'];
        $folder="../../assets/img/adhars/".$filename;

        move_uploaded_file($filetemp,$folder);

        $filename1=$_FILES['bphoto']['name'];
        $filetemp1=$_FILES['bphoto']['tmp_name'];
        $folder1="../../assets/img/adhars/".$filename1;

        move_uploaded_file($filetemp1,$folder1);

        $filename1=$_FILES['profile']['name'];
        $filetemp1=$_FILES['profile']['tmp_name'];
        $profile="../../assets/img/profile/".$filename1;

        move_uploaded_file($filetemp1,$profile);

        $filename1=$_FILES['castphoto']['name'];
        $filetemp1=$_FILES['castphoto']['tmp_name'];
        $certificate="../../assets/img/cast/".$filename1;

        move_uploaded_file($filetemp1,$certificate);

        $select="SELECT * FROM `st_info` WHERE student_id=$cutomer";

        $query=mysqli_query($conn,$select);
        
        if (mysqli_num_rows($query)>0) {
            foreach ($query as $row) {
                $stud=$row['student_id'];
            }
        }

        if($cutomer==$stud){
            $update="UPDATE `st_info` SET `name`='$fullname',`adhar`='$adhar',`email`='$email',`mobile`='$mobile',`bod`='$bdate',`age`='$age',`perentmobile`='$pmobile',`gender`='$gender',`mstatus`='$marital',`religion`='$religion',`castecat`='$castecat',`casste`='$caste',`fincome`='$fincome',`distype`='$type',`account_no`='$account',`ifsc`='$ifsc',`bname`='$branch' WHERE student_id=$cutomer";

            $result1=mysqli_query($conn,$update);

            if ($result1) {
                $_SESSION['st_2']="Hey! Your Student Information has been Updated Successfully";
                header('Location: ../pages/st-2.php?#st_2');
            }else{
                $_SESSION['st_22']="Your Student Information Can't Updated Successfully";
                header('Location: ../pages/st-1.php');

            }

        }else{
            $insert="INSERT INTO `st_info`(`student_id`, `name`, `profile`, `adhar`,`adharf`,`adharb`, `email`, `mobile`, `bod`, `age`, `perentmobile`, `gender`, `mstatus`, `religion`, `castecat`, `casste`,`castcer`, `fincome`, `distype`, `account_no`, `ifsc`, `bname`) VALUES 
            ('$student_id','$fullname','$profile','$adhar','$folder','$folder1','$email','$mobile','$bdate','$age','$pmobile','$gender','$marital','$religion','$castecat','$caste','$certificate','$fincome','$type','$account','$ifsc','$branch')";

            $result=mysqli_query($conn,$insert);

            if ($result) {
                $_SESSION['st_2']="Hey! Your Student Information has been Inserted Successfully";
                header('Location: ../pages/st-2.php?#st_2');
            }else{
                $_SESSION['st_22']="Your Student Information Can`t Inserted Successfully";
                header('Location: ../pages/st-1.php');
            }
        }
    }
?>