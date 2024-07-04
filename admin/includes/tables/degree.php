<?php

    include '../header.php';

    include '../navbar.php';
?>

<!--Main Start-->

<div class="container bg-light p-3 rounded">
    <div class="row g-3">
    <div id="st_2" class="col-md-12 text-center">
                                    <?php
                                        if(isset($_SESSION['deptmsg'])){
                                    ?>
                                    <div class="alert alert-success fw-bold" role="alert">
                                        <?php echo $_SESSION['deptmsg']; ?>
                                    </div>
                                    <?php
                                        unset($_SESSION['deptmsg']);
                                        }
                                    ?>
                                    <?php
                                        if(isset($_SESSION['deptmsg1'])){
                                    ?>
                                    <div class="alert alert-danger fw-bold" role="alert">
                                        <?php echo $_SESSION['deptmsg1']; ?>
                                    </div>
                                    <?php
                                        unset($_SESSION['deptmsg1']);
                                        }
                                    ?>
            </div>
        <div class="col-md-6">
            <a class="btn btn-primary" href="../pages/degree.php"><i class="fa fa-plus"></i> Add Degree</a>
        </div>
        <div class="col-md-6 text-end">
            <button class="btn btn-warning" onclick="generatePDF();">Generate Pdf</button>
        </div>
        <table id="content" class="table table-responsive table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Action</th>
                    <th>ID</th>
                    <th>Degree</th>
                    <th>Fee</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include '../conn.php';

                $select = "SELECT * FROM `degree` ORDER BY id DESC";

                $query=mysqli_query($conn,$select);

                if(mysqli_num_rows($query)>0){
                    foreach($query as $row){
                // while(mysqli_fetch_assoc($query))
                    
            ?>
                <tr>
                    <td>
                    <a class="btn btn-danger" onclick="validation();" href="../delete/degree.php?id=<?php echo $row['id'];?>"><i class="ti ti-trash"></i></a> &nbsp; <a class="btn btn-success" href="../edit/degree.php?id=<?php echo $row['id'];?>"><i class="fa-solid fa-pen"></i></a>
                    </td>
                    <td>
                        <?php echo $row['id'];?>
                    </td>
                    <td>
                        <?php echo $row['course'];?>
                    </td>
                    <td>
                        <?php echo $row['fee'];?>
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