<?php
    include '../conn.php';
    session_start();

    $cutomer=$_SESSION['student_id'];

    if(isset($_POST['submit'])){
        $father=$_POST['father'];
        $fissal=$_POST['fissal'];
        $focc=$_POST['focc'];
        $mother=$_POST['mother'];
        $missal=$_POST['missal'];
        $mocc=$_POST['mocc'];
        $student_id=$_SESSION['student_id'];

        $select="SELECT * FROM `st_otr` WHERE student_id=$cutomer";

        $query=mysqli_query($conn,$select);
        
        if (mysqli_num_rows($query)>0) {
            foreach ($query as $row) {
                $stud=$row['student_id'];
            }
        }

        if($stud==$cutomer){
            $update="UPDATE `st_otr` SET `faname`='$father',`occ`='$fissal',`salari`='$focc',`maname`='$mother',`occs`='$mocc',`salaris`='$missal' WHERE student_id=$cutomer";

            $result1=mysqli_query($conn,$update);

            if ($result1) {
                $_SESSION['st_4']="Hey! Your Student Other Information has been Updated Successfully";
                header('Location: ../pages/st-4.php?#st_4');
            }else{
                $_SESSION['st_33']="Your Student Other Information Can't Updated Successfully";
                header('Location: ../pages/st-3.php');

            }
        }else{

            $insert="INSERT INTO `st_otr`(`student_id`, `faname`, `occ`, `salari`, `maname`, `occs`, `salaris`) VALUES 
            ('$student_id','$father','$fissal','$focc','$mother','$mocc','$missal')";

            $result=mysqli_query($conn,$insert);

            if ($result) {
                $_SESSION['st_3']="Hey! Your Student Other Information has been Inserted Successfully";
                header('Location: ../pages/st-4.php?#st_4');
            }else{
                $_SESSION['st_22']="Your Student Other Information Can`t Inserted Successfully";
                header('Location: ../pages/st-3.php');
            }
        }
    }
?>