<?php include 'include/navbar.php'; ?>
    <section class="single-banner dashboard-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h2>Dashboard</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dash-header-part">
        <div class="container">
            <div class="dash-header-card">
               <?php include 'include/myprofile.php'; ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dash-header-alert alert fade show">
                            <p>From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and Edit your password and account details.</p>
                            <button data-dismiss="alert"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dash-menu-list">
                            <ul>
                                <li><a class="active" href="myprofile.php">My Profile</a></li>
                                <li><a href="ad-post.php">My Ad Post</a></li>
                                <li><a href="my-ads.php">My ads</a></li>
                                <li><a href="bookmark.php">bookmarks</a></li>
                                
                                <li><a href="notification.php">notification</a></li>
                                <li><a href="Controller/verify.php?custlogout=true">logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="setting-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="account-card alert fade show">
                         <?php
                if(isset($_SESSION['up'])){ ?>
                    <div class="alert alert-success" style="height:40px;" role="alert">
                        <center><b><?php echo $_SESSION['up'];
                            unset($_SESSION['up']);
                        ?></b></center>
                    </div>
               <?php }
                ?>
                        <div class="account-title">
                            <h3>Edit Profile</h3>
                            <button data-dismiss="alert">close</button>
                        </div>
                        <form method="POST" action="Controller/update.php" class="setting-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Full Name</label>
                                        <input name="name" value="<?= $crow['cust_name']?>" type="text" class="form-control" placeholder="Mahmudul">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone Number</label>
                                        <input name="phone" value="<?= $crow['phone_no']?>" type="text" class="form-control" placeholder="Hasan">
                                    </div>
                                </div> 
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Email-ID</label>
                                        <input name="email" value="<?= $crow['email_id']?>" type="text" class="form-control" placeholder="Hasan">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Address</label>
                                        <input name="add" value="<?= $crow['address']?>" type="text" class="form-control" placeholder="Classicads Advertising LID.">
                                    </div>
                                </div>
                              
                                <div class="col-lg-12">
                                    <button name="updateprodet" class="btn btn-inline"><i class="fas fa-user-check"></i><span>update profile</span></button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <hr>
                        <div class="row">
                        <form method="POST" action="Controller/update.php" class="setting-form col-md-4">
                            <center><h4>Change Password</h4></center>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Old Password</label>
                                        <input type="password" name="curpass" placeholder="Enter Your Old Password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">New Password</label>
                                        <input type="password" name="npass" placeholder="Enter New Password" class="form-control">
                                    </div>
                                </div> 
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Conform Password</label>
                                        <input type="password" name="cpass" placeholder="Conform New Password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button name="updatepass" class="btn btn-inline"><i class="fas fa-user-check"></i><span>Change Password</span></button>
                                </div>
                            </div>
                        </form> 
                        <form enctype="multipart/form-data" action="Controller/update.php" method="POST" class="setting-form col-md-6">
                            <center><h4>Change Profile Picture</h4></center>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Profile Picture</label>
                                        <input type="hidden" name="dltpro" value="<?= $crow['profile_pic']?>" id="">
                                        <input type="file" required name="propic" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button name="updatepropic" class="btn btn-inline"><i class="fas fa-user-check"></i><span>update profile picture</span></button>
                                </div>
                            </div>
                        </form>
                        </div>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php include 'include/footer.php'; ?>