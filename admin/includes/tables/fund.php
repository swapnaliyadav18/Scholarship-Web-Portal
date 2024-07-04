<?php
    include '../header.php';
?>

<?php
    include '../navbar.php';
?>


<!--Main Start-->
    <div class="container">
        <div class="row g-3">
            <div class="col-md-12 text-center">
                <span class="h3 text-danger">Fund Transfered</span>
            </div>
            <div class="col-md-12 text-end">
                <button class="btn btn-warning" onclick="generatePDF();">Generate Pdf</button>
            </div>
            <div class="col-md-12 table-responsive">
                <table id="content" class="table table-bordered">
                    <thead class="table-dark text-center">
                        <tr>
                            <td>Student Id</td>
                            <td>Fullname</td>
                            <td>Account No</td>
                            <td>IFSC</td>
                            <td>Amount</td>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                $select="SELECT * FROM `fund`";

                                $result=mysqli_query($conn,$select);

                                if(mysqli_num_rows($result)>0){
                                    foreach ($result as $row) {
                                        $customer=$row['student_id'];
                                        ?>
                                        <tr class="text-center">
                                            <td><?php echo $row['student_id']; ?></td>
                                            <td><?php echo $row['fname']; ?></td>
                                            <td><?php echo $row['account_no']; ?></td>
                                            <td><?php echo $row['ifsc']; ?></td>
                                            <td><?php echo $row['amount']; ?></td>
                                            
                                            
                                        </tr>
                                        <?php
                                    }
                                }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
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