<?php
    
    include '../header.php';
?>

<?php
    include '../navbar.php';
?>


<!--Main Start-->
<div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">College Clerk form</h5>
              <div class="card">
                <div class="card-body">
                    <?php

                    include '../conn.php';

                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                        }

                        $select = "SELECT * FROM `clgclerk` WHERE c_id=$id";

                        $query=mysqli_query($conn,$select);

                        if(mysqli_num_rows($query)>0){
                            foreach($query as $row){

                        ?>
                        
                  <form action="../update/cupdate.php?id=<?php echo $row['c_id'];?>" method="post">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" name="fname" class="form-control" id="fname" aria-describedby="emailHelp" value="<?php echo $row['fname']; ?>" required>
                        </div>
                        <div class="col-md-12">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lname" id="lname" aria-describedby="emailHelp" value="<?php echo $row['lname']; ?>" required>
                        </div>
                        <div class="col-md-12">
                            <label for="cname" class="form-label">College Name</label>
                            <select name="cname" id="cname" class="form-select" required>
                                <option value="<?php echo $row['collegename']; ?>" selected><?php echo $row['collegename']; ?></option>
                                <?php
                                    $select1="SELECT * FROM `collegename`";

                                    $result1=mysqli_query($conn, $select1);

                                    if(mysqli_num_rows($result1)>0){
                                        foreach ($result1 as $row1) {
                                            ?>
                                                <option value="<?php echo $row1['college'];?>"><?php echo $row1['college'];?></option>
                                            <?php
                                        }
                                    }
                                ?>
                                
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="mobile" class="form-label">Mobile No</label>
                            <input type="number" class="form-control" name="mobile" id="mobile" aria-describedby="emailHelp" value="<?php echo $row['mobile']; ?>" required>
                        </div>
                        <div class="col-md-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="<?php echo $row['email']; ?>" required>
                        </div>
                        <div class="col-md-12">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" value="<?php echo $row['username']; ?>" required>
                        </div>
                        <div class="col-md-12">
                            <label for="Password1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="Password1" value="<?php echo $row['password']; ?>" required>
                        </div>
                        <div class="col-md-12">
                            <label for="assword2" class="form-label">Confirm Password</label>
                            <input type="password" name="cpassword" class="form-control" id="password2" value="<?php echo $row['password']; ?>" required>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                        </div>
                    </div>
                  </form>
                  <?php

                            }
                        }
                    ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<!--Main End-->



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                
<?php
    include '../footer.php';
?>