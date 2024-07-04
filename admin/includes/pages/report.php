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
                            <td>Application No</td>
                            <td>Scheme Name</td>
                            <td>Department</td>
                        </tr>
                    </thead>
                    <tbody>
                            <?php                             

                               

                                $select="SELECT * FROM `apply`";

                                $result=mysqli_query($conn,$select);

                                if(mysqli_num_rows($result)>0){
                                    foreach ($result as $row) {
                                        $cal=$row['total'];
                                        
                                        ?>
                                        <tr class="text-center">
                                            
                                            <td class="text-danger fw-bold" ><?php if($cal==3){ echo 'Approved';}else if($cal==9){ echo 'Rejected';}else{ echo 'Pending';} ?></td>
                                            <td><?php echo $row['student_id']; ?></td>
                                            <td><?php echo $row['app']; ?></td>
                                            <td><?php echo $row['scheme']; ?></td>
                                            <td><?php echo $row['department']; ?></td>
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