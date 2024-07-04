<?php 
    include '../header.php';
?>

<?php 
    include '../navbar.php';
?>


<!--Main Start-->
    <div class="container table-responsive p-3 bg-light rounded">
        <div class="row my-2 ">
            <div class="col-md-12 text-end mb-3">
                <button class="btn btn-warning" onclick="generatePDF();">Generate Pdf</button>
            </div>
            <table id="content" class="table table-responsive table-bordered text-center">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col">Action</th>
                        <th scope="col">Id</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile No</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Student Id</th>
                        <th scope="col">Joined Date</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    include '../conn.php';

                    $select = "SELECT * FROM `student` ORDER BY id DESC";

                    $query=mysqli_query($conn,$select);

                    if(mysqli_num_rows($query)>0){
                        foreach($query as $row){

                ?>
                    <tr>
                        <td class="d-flex" ><a class="btn btn-danger" href="../stdelete.php?id=<?php echo $row['id'];?>"><i class="ti ti-trash"></i></a> &nbsp;</td>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['fname'];echo" "; echo $row['mname'] ;echo" "; echo $row['lname'] ; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['student_id']; ?></td>
                        <td><?php echo $row['date']; ?></td>
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


<?php 
    include '../footer.php';
?>