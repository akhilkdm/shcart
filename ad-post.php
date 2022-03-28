<?php include 'include/navbar.php'; ?>
    <link rel="stylesheet" href="css/custom/ad-post.css">

    <section class="single-banner dashboard-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h2>ad post</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ad-post</li>
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
                                <li><a  href="myprofile.php">My Profile</a></li>
                                <li><a class="active" href="ad-post.php">Ad Post</a></li>
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
    <section class="adpost-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form action="Controller/postadds.php" enctype="multipart/form-data" method="POST" class="adpost-form">
                        <div class="adpost-card">
                            <div class="adpost-title">
                                 <?php
                if(isset($_SESSION['reg'])){ ?>
                    <div class="alert alert-success" style="height:40px;" role="alert">
                        <center><b><?php echo $_SESSION['reg'];
                            unset($_SESSION['reg']);
                        ?></b></center>
                    </div>
               <?php }
                ?>
                                <h3>Ad Information</h3></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">Product Title</label>
                                        <input required type="text" name="protit" class="form-control" placeholder="Type your product title here">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                   <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="form-label">product image 1</label>
                                            <input required name="img1" type="file" class="form-control">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="form-label">product image 2</label>
                                            <input required name="img2" type="file" class="form-control">
                                        </div>
                                   </div>  
                                   <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label class="form-label">product image 3</label>
                                            <input required name="img3" type="file" class="form-control">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label class="form-label">product image 4</label>
                                            <input required name="img4" type="file" class="form-control">
                                        </div>
                                   </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Product Category</label>
                                        <select name="procat" required class="form-control custom-select">
                                            <option selected>Select Category</option>
                                            <option value="Automobile">Automobile</option>
                                            <option value="Animals">Animals</option>
                                            <option value="Electronics">Electronics</option>
                                            <option value="Education">Education</option>
                                            <option value="Fashion">Fashion</option>
                                            <option value="Food">Food</option>
                                            <option value="Furniture">Furniture</option>
                                            <option value="Gadgets">Gadgets</option>
                                            <option value="Hospitality">Hospitality</option>
                                            <option value="Properties">Properties</option>
                                            <option value="Software">Software</option>
                                            <option value="Services">Services</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-label">Price</label>
                                        <input required type="number" name="price" class="form-control" placeholder="Enter your pricing amount">
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <ul class="form-check-list">
                                            <li>
                                                <label class="form-label">price condition</label>
                                            </li>
                                            <li>
                                                <input required type="radio" name="pricecon" value="Fixed" class="form-check" id="fix-check">
                                                <label for="fix-check" class="form-check-text">fixed</label>
                                            </li>
                                            <li>
                                                <input  type="radio" name="pricecon" value="Negotiable" class="form-check" id="nego-check">
                                                <label for="nego-check" class="form-check-text">negotiable</label>
                                            </li>
                                      
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <ul class="form-check-list">
                                            <li>
                                                <label class="form-label">ad category</label>
                                            </li>
                                            <li>
                                                <input required type="radio" name="addcat" value="Sale" class="form-check" id="sale-check">
                                                <label for="sale-check" class="flat-badge sale">Sale</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="addcat" value="Rent" class="form-check" id="rent-check">
                                                <label for="rent-check" class="flat-badge rent">Rent</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="addcat" value="Booking" class="form-check" id="book-check">
                                                <label for="book-check" class="flat-badge booking">Booking</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <ul class="form-check-list">
                                            <li>
                                                <label class="form-label">product condition</label>
                                            </li>
                                            <li>
                                                <input required type="radio" name="procondi" value="Used" class="form-check" id="use-check">
                                                <label for="use-check" class="form-check-text">used</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="procondi" value="New" class="form-check" id="new-check">
                                                <label for="new-check" class="form-check-text">new</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-label">ad description</label>
                                        <textarea name="desc" required class="form-control" placeholder="Describe your message"></textarea>
                                    </div>
                                </div>
                                
                            
                            </div>
                        </div>
                       <div class="form-group text-left">
                                <button type="submit" name="postadd" class="btn btn-inline"><i class="fas fa-check-circle"></i><span>published your ad</span></button>
                            </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="account-card alert fade show">
                        <div class="account-title">
                            <h3>Safety Tips</h3>
                            <button data-dismiss="alert">close</button>
                        </div>
                        <ul class="account-card-text ">
                            <li>
                                <p>Check the item before you buy.</p>
                            </li>
                            <li>
                                <p>Pay only after collecting item.</p>
                            </li>
                            <li>
                                <p>Beware of unrealistic offers.</p>
                            </li>
                            <li>
                                <p>Meet seller at a safe location.</p>
                            </li>
                            <li>
                                <p>Do not make an abrupt decision.</p>
                            </li>
                            <li>
                                <p>Be honest with the ad you post.</p>
                            </li>
                        </ul>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>
   <?php include 'include/footer.php'; ?>