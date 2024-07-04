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
                <a class="btn btn-primary" href="../addata/addscheme.php"><i class="fa fa-paper-plane"></i> Add Scheme</a>
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
                        <th scope="col">College Name</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">Start End</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                    include '../conn.php';

                    $select = "SELECT * FROM `addscheme` ORDER BY id DESC";

                    $query=mysqli_query($conn,$select);

                    if(mysqli_num_rows($query)>0){
                        foreach($query as $row){

                ?>
                    <tr>
                        <td class="d-flex" ><a class="btn btn-danger" href="includes/schedelete.php?id=<?php echo $row['id'];?>"><i class="ti ti-trash"></i></a> &nbsp; <a class="btn btn-success" href="editscheme.php?id=<?php echo $row['id'];?>"><i class="fa-solid fa-pen"></i></a></td>
                        <th scope="row"><?php echo $row['id']; ?></th>
                        <td><?php echo $row['scheme'];?></td>
                        <td><?php echo $row['sdate']; ?></td>
                        <td><?php echo $row['edate']; ?></td>
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