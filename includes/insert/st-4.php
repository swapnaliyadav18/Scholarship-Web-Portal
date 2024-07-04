<?php
    include '../conn.php';
    session_start();

    $cutomer=$_SESSION['student_id'];

    if(isset($_POST['submit'])){
        $curryear=$_POST['curryear'];
        $istate=$_POST['istate'];
        $idist=$_POST['idist'];
        $ital=$_POST['ital'];
        $city=$_POST['city'];
        $qlevel=$_POST['qlevel'];
        $stream=$_POST['stream'];
        $clgname=$_POST['clgname'];
        $coursename=$_POST['coursename'];
        $studyear=$_POST['studyear'];
        $complete=$_POST['complete'];
        $mode=$_POST['mode'];
        $student_id=$_SESSION['student_id'];

        $filename=$_FILES['mark']['name'];
        $filetemp=$_FILES['mark']['tmp_name'];
        $folder="../../assets/img/newmark/".$filename;

        move_uploaded_file($filetemp,$folder);

        $select1="SELECT * FROM `collegename` WHERE college='$clgname'";

        $query1=mysqli_query($conn,$select1);
        
        if (mysqli_num_rows($query1)>0) {
            foreach ($query1 as $row1) {
                $clgid=$row1['clgid'];
                $colll=$row1['college'];
            }
        }

        $select="SELECT * FROM `st_crt_c` WHERE student_id=$cutomer";

        $query=mysqli_query($conn,$select);
        
        if (mysqli_num_rows($query)>0) {
            foreach ($query as $row) {
                $stud=$row['student_id'];
            }
        }

        echo $cutomer;

        if($cutomer==$stud){

            $update="UPDATE `st_crt_c` SET `adyear`='$curryear',`instate`='$istate',`indist`='$idist',`intal`='$idist',`icity`='$city',`qlevel`='$qlevel',`stream`='$stream',`clgname`='$clgname',`course`='$coursename',`yos`='$studyear',`c&cti`='$complete',`mode`='$mode' WHERE student_id=$cutomer";

            $result1=mysqli_query($conn,$update);

            if ($result1) {
                $_SESSION['st_5']="Hey! Your Student Current Course Information has been Updated Successfully";
                header('Location: ../pages/st-5.php?#st_5');
            }else{
                $_SESSION['st_44']="Your Student Current Course Information Can't Updated Successfully";
                header('Location: ../pages/st-4.php');

            }
            
        }else{

            $insert="INSERT INTO `st_crt_c`(`student_id`, `adyear`, `instate`, `indist`, `intal`,`icity`, `qlevel`, `stream`, `clgname`, `course`, `yos`, `c&cti`, `mode`,`mark`,`clgid`) VALUES 
            ('$student_id','$curryear','$istate','$idist','$ital','$city','$qlevel','$stream','$clgname','$coursename','$studyear','$complete','$mode','$folder','$clgid')";

            $result=mysqli_query($conn,$insert);

            if ($result) {
                $_SESSION['st_4']="Hey! Your Student Current Course Information has been Inserted Successfully";
                header('Location: ../pages/st-5.php?#st_5');
            }else{
                $_SESSION['st_44']="Your Student Current Course Information Can`t Inserted Successfully";
                header('Location: ../pages/st-4.php');
            }
        }
    }
?>