<?php
    include '../header.php';

    include '../navbar.php';
?>

<!--Main Start-->

<?php

    include '../conn.php';

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $select ="SELECT `id`, `college` FROM `collegename` WHERE id=$id";

        $query=mysqli_query($conn,$select);

        if(mysqli_num_rows($query)>0){
            foreach($query as $row){
        ?>
            

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="../clgadds.php?id=<?php echo $row['id'];?>" method="post">
                            <div class="row g-2">
                                <div class="col-md-12">
                                    <label class="form-label" for="collegename">College Name</label>
                                    <input class="form-control" name="cname" id="collegename" type="text" value="<?php echo $row['college'];?>" required>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit" name="submit">Add College</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
            }
        }
    }

?>
<!--Main End-->

<?php
    include '../footer.php';
?>