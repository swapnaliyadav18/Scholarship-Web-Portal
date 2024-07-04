<?php

session_start();

include 'conn.php';

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $select="SELECT * FROM `clgprinciple` WHERE username='$username'";
    $query=mysqli_query($conn,$select);

    if(mysqli_num_rows($query)>0){
        while($row=mysqli_fetch_assoc($query)){
                if($password==$row['password']){
                    $_SESSION['username']=$username;
                    $_SESSION['students']=$row['p_id'];
                    $_SESSION['id']=$row['clgid'];
                    header('Location: pages/home.php');
                }
        }
    }

}
?>


<?php

// session_start();

//     include './conn.php';

//     if(isset($_POST['login'])){
//         $username=$_POST['username'];
//         $password=$_POST['password'];

//         $select="SELECT * FROM `clgclerk` WHERE username='$username' AND password='$password'";
//         $query=mysqli_query($conn,$select);

//         if(mysqli_num_rows($query)==1){
//             while($row=mysqli_fetch_assoc($query)){
//             $_SESSION['colls']=$row['collegename'];
//             $_SESSION['username']=$username;
//             header('Location: pages/home.php');
//             }
            
//         }else{
//             die('Connection Failed');
//         }

//     }
?>