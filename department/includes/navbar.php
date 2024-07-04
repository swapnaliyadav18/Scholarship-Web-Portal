<aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <span class="fs-5 fw-bold">SWP</span>
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="../../index.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">FORMS</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="../tables/application.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Application</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="../pages/appro.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Approve/UnApprove</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="../pages/report.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Report</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <div class="body-wrapper">
    <!--  Header Start -->
    <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <?php
                  $loginname=$_SESSION['username'];

                  error_reporting(0);
                  $select11="SELECT * FROM `deptclerk` WHERE dc_id=$col";
        
                  
        
                  $result11=mysqli_query($conn,$select11);
        
                  if(mysqli_num_rows($result11)>0){
                    foreach ($result11 as $value) {
                      $img=$value['img'];
                    }
                  }
                  ?>
                  <img src="<?php echo $img; ?>" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="../logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>

      <?php
       $loginname=$_SESSION['username'];

       
          $select11="SELECT * FROM `deptclerk` WHERE dc_id=$col";

          

          $result11=mysqli_query($conn,$select11);

          if(mysqli_num_rows($result11)>0){
            foreach ($result11 as $value) {
              $img=$value['img'];
              $idd=$value['dc_id'];
              ?>
              
              

              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Admin Profile Edit</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form action="../insert/profile.php?id=<?php echo $idd;?>" method="post" enctype="multipart/form-data" >
                      <div class="row g-3">
                          <div class="col-md-12">
                            <label class="form-label" for="">First name</label>
                            <input class="form-control" value="<?php echo $value['fname']; ?> " required name="fname" type="text">
                          </div>
                          <div class="col-md-12">
                            <label class="form-label" for="">Last name</label>
                            <input class="form-control" value="<?php echo $value['lname']; ?>" required name="lname" type="text">
                          </div>
                          <div class="col-md-12">
                            <label class="form-label" for="">Email</label>
                            <input class="form-control" value="<?php echo $value['email']; ?> " required name="email" type="email">
                          </div>
                          <div class="col-md-12">
                            <label class="form-label" for="">Mobile</label>
                            <input class="form-control" required name="mobile" value="<?php echo $value['mobile']; ?> " type="tel">
                          </div>
                          <?php echo $id; ?>
                          <div class="col-md-12">
                            <label class="form-label" for="">Username</label>
                            <input class="form-control" required name="username" value="<?php echo $value['username']; ?> " type="text">
                          </div>
                          <div class="col-md-12">
                            <label class="form-label" for="">Password</label>
                            <input class="form-control" required name="Password" value="<?php echo $value['password']; ?> " type="password">
                          </div>

                          <div class="col-md-12">
                            <label class="form-label" for="">Profile Picture</label>
                            <input type="file" class="form-control" name="profile" accept="image/png, image/gif, image/jpeg" />
                          </div>
                        </div>
                      <div class="modal-footer">
                      <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
                      <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                    </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }
          }
       ?>
      <!--  Header End -->
    <div class="container-fluid">