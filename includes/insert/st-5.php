<?php
    include '../conn.php';
    session_start();

    $cutomer=$_SESSION['student_id'];

    if(isset($_POST['submit'])){
        $istate=$_POST['istate'];
        $idist=$_POST['idist'];
        $ital=$_POST['ital'];
        $city=$_POST['city'];
        $qlevel=$_POST['qlevel'];
        $stream=$_POST['stream'];
        $clgname=$_POST['clgname'];
        $coursename=$_POST['coursename'];
        $studyear=$_POST['studyyear'];
        $complete=$_POST['complete'];
        $university=$_POST['university'];
        $mode=$_POST['mode'];
        $adyear=$_POST['adyear'];
        $passyear=$_POST['passyear'];
        $result=$_POST['result'];
        $per=$_POST['per'];
        $attempts=$_POST['attempts'];
        $student_id=$_SESSION['student_id'];

        $filename=$_FILES['mark']['name'];
        $filetemp=$_FILES['mark']['tmp_name'];
        $folder="../../assets/img/pastmark/".$filename;

        $select="SELECT * FROM `st_pastq` WHERE student_id=$cutomer";

        $query=mysqli_query($conn,$select);
        
        if (mysqli_num_rows($query)>0) {
            foreach ($query as $row) {
                $stud=$row['student_id'];
            }
        }

        if($stud==$cutomer){
            $update="UPDATE `st_pastq` SET `universiy`='$university',`state`='$istate',`dist`='$idist',`tal`='$ital',`city`='$city',`qualification`='$qlevel',`stream`='$stream',`clgname`='$clgname',`course`='$coursename',`yoss`='$studyear',`c&com`='$complete',`mode`='$mode',`adyear`='$adyear',`passyear`='$passyear',`result`='$result',`percentage`='$per',`attempt`='$attempts' WHERE student_id=$cutomer";

            $result1=mysqli_query($conn,$update);

            if ($result1) {
                $_SESSION['st_5']="Hey! Your Student Past Qualification Information has been Updated Successfully";
                header('Location: ../pages/home.php?#st_5');
            }else{
                $_SESSION['st_44']="Your Student Past Qualification Information Can't Updated Successfully";
                header('Location: ../pages/st-4.php');
            }
        }else{

            $insert="INSERT INTO `st_pastq`(`student_id`, `universiy`, `state`, `dist`,`city`, `tal`, `qualification`, `stream`, `clgname`, `course`, `yoss`, `c&com`, `mode`, `adyear`, `passyear`, `result`, `percentage`, `attempt`,`mark`) VALUES 
            ('$student_id','$university','$istate','$idist','$ital','$city','$qlevel','$stream','$clgname','$coursename','$studyear','$complete','$mode','$adyear','$passyear','$result','$per','$attempts','$folder')";

            $result=mysqli_query($conn,$insert);

            if ($result) {
                $_SESSION['st_4']="Hey! Your Student Past Qualification Information has been Inserted Successfully";
                header('Location: ../pages/home.php?#st_5');
            }else{
                $_SESSION['st_44']="Your Student Past Qualification Information Can`t Inserted Successfully";
                header('Location: ../pages/st-4.php');
            }
        }
    }
?>