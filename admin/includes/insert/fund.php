<?php
    include '../header.php';
?>

<?php
    include '../navbar.php';
?>

<?php

$id=$_GET['id'];

$select ="SELECT * FROM `st_info` WHERE id=$id";

$result=mysqli_query($conn,$select);

if (mysqli_num_rows($result)>0) {
    foreach ($result as $row) {
        $fname=$row['name'];
        $acccount=$row['account_no'];
        $ifsc=$row['ifsc'];
        $st_id=$row['student_id'];
    }
}

?>


<!--Main Start-->

<div class="container">
    <form action="fund1.php" method="post">
        <div class="row g-3">
            <div class="col-md-12 text-center">
                <span class="h3">Fund transfer</span>
            </div>
            <div class="col-md-12">
                <label for="" class="form-label">Student Id</label>
                <input class="form-control" name="student_id" value="<?php echo $st_id; ?>" type="text" required>
            </div>
            <div class="col-md-12">
                <label for="" class="form-label">Full Name</label>
                <input class="form-control" name="fname" value="<?php echo $fname; ?>" type="text" required>
            </div>
            <div class="col-md-12">
                <label for="" class="form-label">Account No</label>
                <input class="form-control" name="account" value="<?php echo $acccount; ?>" type="text" required>
            </div>
            <div class="col-md-12">
                <label for="" class="form-label">IFSC Code</label>
                <input class="form-control" name="ifsc" value="<?php echo $ifsc; ?>" type="text" required>
            </div>
            <div class="col-md-12">
                <label for="" class="form-label">Amount</label>
                <input class="form-control" name="amount" type="text" required>
            </div>
            <div class="col-md-12">
                <button class="btn btn-success" type="submit" name="submit">Fund Transfer</button>
            </div>
        </div>
    </form>
</div>


<!--Main End-->


<script>
    function validate(){
        var fname=document.getElementById('fname');
        var lname=document.getElementById('lname');
        var cname=document.getElementById('cname');
        var mobile=document.getElementById('mobile');
        var email=document.getElementById('email');
        var username=document.getElementById('username');
        var password=document.getElementById('password1');
        var cpassword=document.getElementById('cpassword');

        if(fname.value=="" || lname.value=="" || cname=="" || mobile=="" || email=="" || username=="" || password=="" || cpassword==""){
            Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "No Blank values allowed!",
                });
                return flase;
        }else{
            return true;
        }

    }
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                
<?php
    include '../footer.php';
?>