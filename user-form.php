<?php
include 'config.php';
$admin = new Admin();
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Mironcoder">
    <meta name="email" content="mironcoder@gmail.com">
    <meta name="profile" content="https://themeforest.net/user/mironcoder">
    <meta name="name" content="Classicads">
    <meta name="type" content="Classified Advertising">
    <meta name="title" content="Classicads - Classified Ads HTML Template">
    <meta name="keywords" content="classicads, classified, ads, classified ads, listing, business, directory, jobs, marketing, portal, advertising, local, posting, ad listing, ad posting,">
    <title>Classicads - User Form</title>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="fonts/font-awesome/fontawesome.css">
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom/main.css">
    <link rel="stylesheet" href="css/custom/user-form.css">
</head>

<body>
    <section class="user-form-part">
        <div class="user-form-banner">
            <div class="user-form-content">
                <a href="#"><img src="images/logo.png" alt="logo"></a>
                <h1>Advertise your assets <span>Buy what are you needs.</span></h1>
                <p>Biggest Online Advertising Marketplace in the World.</p>
            </div>
        </div>
        <div class="user-form-category">
            <div class="user-form-header">
                <a href="#"><img src="images/logo.png" alt="logo"></a><a href="index.php"><i class="fas fa-arrow-left"></i></a></div>
            <div class="user-form-category-btn">
                <ul class="nav nav-tabs">
                    <li><a href="#login-tab" class="nav-link active" data-toggle="tab">sign in</a></li>
                    <li><a href="#register-tab" class="nav-link" data-toggle="tab">sign up</a></li>
                </ul>
            </div>
            <div class="tab-pane active" id="login-tab">
                <div class="user-form-title">
                    <h2>Welcome!</h2>
                    <p>Use credentials to access your account.</p>
                </div>

                <?php
                if(isset($_SESSION['reg'])){ ?>
                    <div class="alert alert-success" style="height:40px;" role="alert">
                        <center><b><?php echo $_SESSION['reg'];
                            unset($_SESSION['reg']);
                        ?></b></center>
                    </div>
               <?php }
                ?>
                    
                <form action="Controller/verify.php" method="POST">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input type="email" name="email" required class="form-control" placeholder="Email-ID or Phone Number"><small class="form-alert">Please follow this example - abc@abc.abc</small></div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input type="password" name="pass" required class="form-control" id="pass" placeholder="Password">
                                <button type="button" class="form-icon"><i class="eye fas fa-eye"></i></button><small class="form-alert">Password must be 6 characters</small></div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <!-- <input type="checkbox" class="custom-control-input" id="signin-check"> -->
                                    <!-- <label class="custom-control-label" for="signin-check">Remember me</label> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group text-right"><a href="#" class="form-forgot">Forgot password?</a></div>
                        </div>
                        <div class="col-12">
                            <div class="form-group"> 
                                <button type="submit" name="loginBtn" class="btn btn-inline"><i class="fas fa-unlock"></i><span>Enter your account</span></button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="user-form-direction">
                    <p>Don't have an account? click on the <span>( sign up )</span>button above.</p>
                </div>
            </div>
            <div class="tab-pane" id="register-tab">
                <div class="user-form-title">
                    <h2>Register</h2>
                    <p>Setup a new account in a minute.</p>
                </div>
               
                <form action="Controller/verify.php" enctype="multipart/form-data" autocomplete="on" method="POST">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <input required type="text" name="name" class="form-control" placeholder="Name"><small class="form-alert">Please Enter Name</small></div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input required type="text" name="email" class="form-control" placeholder="Email-ID"><small class="form-alert">Please Enter Email-ID</small></div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input required type="text" name="phone" class="form-control" placeholder="Phone number"><small class="form-alert">Please Enter Phone Number</small></div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input required type="password" name="pass" class="form-control" placeholder="Password">
                                <button class="form-icon"><i class="eye fas fa-eye"></i></button><small class="form-alert">Password must be 6 characters</small></div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input required type="password" class="form-control" placeholder="Repeat Password">
                                <button class="form-icon"><i class="eye fas fa-eye"></i></button><small class="form-alert">Please Conform Password</small></div>
                        </div> 
                        <div class="col-12">
                            <div class="form-group">
                                <input required type="file" class="form-control" name="propic" placeholder="Repeat Password">
                                <small class="form-alert">Please Choose Your Profile Picture</small></div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input required type="checkbox" class="custom-control-input" id="signup-check">
                                    <label class="custom-control-label" for="signup-check">I agree to the all <a href="#">terms & consitions</a>of bebostha.</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" name="register" class="btn btn-inline"><i class="fas fa-user-check"></i><span>Create new account</span></button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="user-form-direction">
                    <p>Already have an account? click on the <span>( sign in )</span>button above.</p>
                </div>
            </div>
        </div>
    </section>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/custom/main.js"></script>
</body>
</html>