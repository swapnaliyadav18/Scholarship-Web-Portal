<?php 
    include '../header.php';
?>

<?php 
    include '../navbar.php';
?>


<!--Main Start-->
    <div class="container table-responsive p-3 bg-light rounded">
        <div class="row my-2">
            <div class="col-md-6">
                <a class="btn btn-primary" href="../pages/deptclerk.php"><i class="fa-solid fa-plus"></i> Add Department Clerk</a>
            </div>
            <div class="col-md-6 text-end">
                <button class="btn btn-warning" onclick="generatePDF();">Generate Pdf</button>
            </div>
        </div>
            <table id="content" class="table table-responsive table-bordered">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">Action</th>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">College Name</th>
                        <th scope="col">Mobile No</th>
                        <th scope="col">Email</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Joined Date</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    include '../conn.php';

                    $select = "SELECT * FROM `deptclerk` ORDER BY dc_id DESC";

                    $query=mysqli_query($conn,$select);

                    if(mysqli_num_rows($query)>0){
                        foreach($query as $row){

                ?>
                    <tr>
                        <td class="d-flex" ><a class="btn btn-danger" href="../delete/ddelete.php?id=<?php echo $row['dc_id'];?>"><i class="ti ti-trash"></i></a> &nbsp; <a class="btn btn-success" href="../edit/deptclerkedit.php?id=<?php echo $row['dc_id'];?>"><i class="fa-solid fa-pen"></i></a></td>
                        <th scope="row"><?php echo $row['dc_id']; ?></th>
                        <td><?php echo $row['fname'];echo" "; echo $row['lname'] ; ?></td>
                        <td><?php echo $row['collegename']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                    </tr>
                    <?php

                            }
                        }

                        ?>
                </tbody>
                </table>
            </div>
<!--Main End-->


<?php 
    include '../footer.php';
?>