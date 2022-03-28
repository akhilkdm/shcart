<?php include 'include/header.php'; ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
            <?php include 'include/sidebar.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                    <?php include 'include/navbar.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Change Password
                                </button>
                    </div>
                    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="../Controller/update.php" method="post">
                 <div class="form-group">
            <label for="name" class="control-label">Current Password :</label>
             <input type="text" required class="form-control" name="curpass" id="">
          </div>
            <div class="form-group">
            <label for="name" class="control-label">New Password :</label>
             <input type="text" required class="form-control" name="npass" id="">
          </div>
           <div class="form-group">
            <label for="name" class="control-label">Confirm Password :</label>
             <input type="text" required class="form-control" name="cpass" id="">
          </div>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="changepadmin" class="btn btn-primary">Change Password</button>
      </div>
      </form>
    </div>
  </div>
</div>
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                <h6>Users</h6></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                                            $astmt = $admin -> ret("SELECT COUNT(*) FROM `customer`");
                                            $arow = $astmt -> fetch(PDO::FETCH_ASSOC);
                                            echo implode($arow);
                                            ?></div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h6>Total Adds</h6></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                                            $astmt = $admin -> ret("SELECT COUNT(*) FROM `products`");
                                            $arow = $astmt -> fetch(PDO::FETCH_ASSOC);
                                            echo implode($arow);
                                            ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h6>Solded Products</h6></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                                            $astmt = $admin -> ret("SELECT COUNT(*) FROM `products` WHERE `stutus` = 'sold'");
                                            $arow = $astmt -> fetch(PDO::FETCH_ASSOC);
                                            echo implode($arow);
                                            ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h6>Rented Items</h6></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                                            $astmt = $admin -> ret("SELECT COUNT(*) FROM `products` WHERE `addcat` = 'rent'");
                                            $arow = $astmt -> fetch(PDO::FETCH_ASSOC);
                                            echo implode($arow);
                                            ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h6>Sale Items</h6></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                                            $astmt = $admin -> ret("SELECT COUNT(*) FROM `products` WHERE `addcat` = 'sale'");
                                            $arow = $astmt -> fetch(PDO::FETCH_ASSOC);
                                            echo implode($arow);
                                            ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                <h6>Booking Items</h6></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php 
                                            $astmt = $admin -> ret("SELECT COUNT(*) FROM `products` WHERE `addcat` = 'Booking'");
                                            $arow = $astmt -> fetch(PDO::FETCH_ASSOC);
                                            echo implode($arow);
                                            ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                  
                    </div>

                

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
        <?php include 'include/footer.php'; ?>