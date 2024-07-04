<?php
    include '../header.php';
?>

<?php
    include '../navbar.php';
?>


<!--Main Start-->
    <div class="container">
        <div class="row g-3">
        <div class="col-md-12 text-end">
                <button class="btn btn-warning" onclick="generatePDF();">Generate Pdf</button>
            </div>
            <div class="col-md-12 table-responsive">
                <table id="content" class="table table-bordered">
                    <thead class="table-dark text-center">
                        <tr>
                            <td>Action</td>
                            <td>Student Id</td>
                            <td>Fullname</td>
                            <td>Account No</td>
                            <td>IFSC</td>
                            <td>Amount</td>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                $select="SELECT * FROM `st_info`";

                                $result=mysqli_query($conn,$select);

                                if(mysqli_num_rows($result)>0){
                                    foreach ($result as $row) {
                                        $customer=$row['student_id'];
                                        ?>
                                        <tr class="text-center">
                                            <td><a class="btn btn-success" href="../insert/fund.php?id=<?php echo $row['id'];?>">Transfer <i class="fa fa-paper-plane"></i></a></td>
                                            <td><?php echo $row['student_id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['account_no']; ?></td>
                                            <td><?php echo $row['ifsc']; ?></td>
                                            <?php
                                                $select1="SELECT * FROM `st_crt_c` WHERE student_id=$customer";

                                                $result1=mysqli_query($conn,$select1);

                                                if(mysqli_num_rows($result1)>0){
                                                    foreach ($result1 as $row1) {
                                                        $cours=$row1['course'];
                                                    }
                                                }

                                                $select2="SELECT * FROM `degree` WHERE course='$cours' ";

                                                $result2=mysqli_query($conn,$select2);

                                                if(mysqli_num_rows($result2)>0){
                                                    foreach ($result2 as $row2) {
                                                        ?>
                                                            <td><?php echo $row2['fee']; ?></td>
                                                        <?php
                                                    }
                                                }
                                            ?>
                                            
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