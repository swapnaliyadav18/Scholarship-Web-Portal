<?php
  include '../conn.php';

  session_start();
  
  if(!isset($_SESSION['username'])){
      header('Location: ../../index.php');
  }

  $student=$_SESSION['student_id'];

  
?>
<?php
    include '../header.php';

    include '../navbar.php';
?>

<?php
    include '../main1.php';

    $select="SELECT * FROM `student` WHERE student_id=$student";

    $result=mysqli_query($conn,$select);

    if(mysqli_num_rows($result)>0){
        foreach ($result as $row) {
            $fname=$row['fname'];
            $mname=$row['mname'];
            $lname=$row['lname'];
            $email=$row['email'];
            $phone=$row['phone'];
            $username=$row['username'];
            $password=$row['password'];
        }
    }
?>



    <!--Main Start-->
    <div class="container mt-3">
        <div class="row g-3">
            <div class="col-md-12 text-center" id="successful">
                <span class="fw-bold fs-4">Profile</span>
            </div>
            <div class="col-md-12 text-center">

                    <?php
                        if(isset($_SESSION['fetch'])){
                    ?>
                    <div class="alert alert-success fw-bold" role="alert">
                        <?php echo $_SESSION['fetch']; ?>
                    </div>
                    <?php
                        unset($_SESSION['fetch']);
                        }
                    ?>
                    <?php
                        if(isset($_SESSION['fetch1'])){
                    ?>
                    <div class="alert alert-danger fw-bold" role="alert">
                        <?php echo $_SESSION['fetch1']; ?>
                    </div>
                    <?php
                        unset($_SESSION['fetch1']);
                        }
                    ?>
            </div>
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered table-light table-striped table-hover">
                  <tbody>
                    <tr>
                      <th scope="row">First Name <span class="text-danger">*</span> </th>
                      <td scope="row"><?php echo $fname; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Middle Name <span class="text-danger">*</span></th>
                        <td scope="row"><?php echo $mname; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Last Name <span class="text-danger">*</span></th>
                        <td scope="row"><?php echo $lname; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Email <span class="text-danger">*</span></th>
                        <td scope="row"><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Mobile No <span class="text-danger">*</span></th>
                        <td scope="row"><?php echo $phone; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Username <span class="text-danger">*</span></th>
                        <td scope="row"><?php echo $username; ?></td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="2">
                            <a href="#exampleModal" data-bs-toggle="modal" class="btn btn-dark fw-bold">Edit Profile <i class="fa fa-paper-plane"></i></a>
                        </td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Profile Edit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="../update/profile.php" method="post">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label class="form-label fw-500" for="">First Name</label>
                            <input type="text" class="form-control" value="<?php echo $fname; ?>" name="fname">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fw-500" for="">Middle Name</label>
                            <input type="text"  class="form-control" value="<?php echo $mname; ?>" name="mname" >
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fw-500" for="">Last Name</label>
                            <input type="text" class="form-control" value="<?php echo $lname; ?>" name="lname">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fw-500" for="">Email</label>
                            <input type="email" class="form-control" value="<?php echo $email; ?>" name="email">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fw-500" for="">Mobile No</label>
                            <input type="tel" value="<?php echo $phone; ?>" class="form-control" name="mobile">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label fw-500" for="">Username</label>
                            <input type="text" value="<?php echo $username; ?>" class="form-control" name="username">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger fw-500" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="update" class="btn btn-primary fw-500">Save changes</button>
                </div>
            </form>
        </div>
    </div>
  </div>
<!--Main End-->

<?php
    include '../main2.php';
?>

<?php
    include '../footer.php';
?>

    