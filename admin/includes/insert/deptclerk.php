<?php
    include 'includes/header.php';
?>

<?php
    include 'includes/navbar.php';
?>


<!--Main Start-->
<div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Department Clerk form</h5>
              <div class="card">
                <div class="card-body">
                  <form onsubmit="return validate()" action="includes/dclerk.php" method="post">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" name="fname" class="form-control" id="fname" aria-describedby="emailHelp" required>
                        </div>
                        <div class="col-md-12">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lname" id="lname" aria-describedby="emailHelp" required>
                        </div>
                        <div class="col-md-12">
                            <label for="cname" class="form-label">College Name</label>
                            <input type="text" class="form-control" name="cname" id="cname" aria-describedby="emailHelp" required>
                        </div>
                        <div class="col-md-12">
                            <label for="mobile" class="form-label">Mobile No</label>
                            <input type="number" class="form-control" name="mobile" id="mobile" aria-describedby="emailHelp" required>
                        </div>
                        <div class="col-md-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
                        </div>
                        <div class="col-md-12">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" required>
                        </div>
                        <div class="col-md-12">
                            <label for="Password1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="Password1" required>
                        </div>
                        <div class="col-md-12">
                            <label for="assword2" class="form-label">Confirm Password</label>
                            <input type="password" name="cpassword" class="form-control" id="password2" required>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button onclick="validate();" class="btn btn-primary" name="submit" type="submit">Submit form</button>
                        </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
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
    include 'includes/footer.php';
?>