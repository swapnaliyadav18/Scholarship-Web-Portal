<?php

    include '../header.php';

    include '../navbar.php';

    
?>

<!--Main Start-->

<div class="container bg-light p-3 rounded">
    <div class="row g-3">
        <div class="col-md-6">
            <a class="btn btn-primary" href="../pages/addclg.php"><i class="fa fa-plus"></i> Add College</a>
        </div>
        <div class="col-md-6 text-end">
            <button class="btn btn-warning" onclick="generatePDF();">Generate Pdf</button>
        </div>
        <table id="content" class="table table-responsive table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Action</th>
                    <th>Student Id</th>
                    <th>Application No</th>
                    <th>Scheme Name</th>
                    <th>Department</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>

        

            
            <?php
            // $printt= $_SESSION['username'];

            // $fill="SELECT * FROM `clgclerk` WHERE username=$printt";
          
            // $fill2=mysqli_query($conn,$fill);
          
            // if(mysqli_num_rows($fill2)>0){
            //   foreach ($fill2 as $fill3) {
            //     $col=$fill3['collegename'];
            //   }
            // }
                $select = "SELECT * FROM `apply`";

                $query=mysqli_query($conn,$select);

                if(mysqli_num_rows($query)>0){
                    foreach($query as $row){
                        $ct=$row['depapro'];

                    
            ?>
                <tr>
                    <td>
                        <?php if($ct==0){ echo 'Pending';}else if($ct==1){echo 'Approved';}else{echo 'Rejected';} ?>
                    </td>
                    <td>
                        <?php echo $row['student_id'];?>
                    </td>
                    <td>
                        <?php echo $row['app'];?>
                    </td>
                    <td>
                        <?php echo $row['scheme'];?>
                    </td>
                    <td>
                        <?php echo $row['department'];?>
                    </td>
                    <td>
                        <?php echo $row['date'];?>
                    </td>
                </tr>
                <?php
                    }
                }
            ?>
            </tbody>
        </table>
    </div>
</div>

<!--Main End-->

<script>
   function validation(){
        Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!"
    }).then((result) => {
    if (result.isConfirmed) {
        Swal.fire({
        title: "Deleted!",
        text: "Your file has been deleted.",
        icon: "success"
        });
    }
});
   }
</script>

<?php
    include '../footer.php';
?>