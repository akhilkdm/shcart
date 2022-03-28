<?php include 'include/navbar.php'; ?>

    <nav class="mobile-nav">
        <div class="container">
            <div class="mobile-group"><a href="index.html" class="mobile-widget"><i class="fas fa-home"></i><span>home</span></a><a href="user-form.html" class="mobile-widget"><i class="fas fa-user"></i><span>join me</span></a>
                <a href="ad-post.html" class="mobile-widget plus-btn"><i class="fas fa-plus"></i><span>Ad Post</span></a><a href="notification.html" class="mobile-widget"><i class="fas fa-bell"></i><span>notify</span><sup>0</sup></a><a href="message.html" class="mobile-widget"><i class="fas fa-envelope"></i><span>message</span><sup>0</sup></a></div>
        </div>
    </nav>
    <section class="single-banner dashboard-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h2>bookmark</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">bookmark</li>
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
                                <li><a href="ad-post.php">My Ad Post</a></li>
                                <li><a  href="my-ads.php">My ads</a></li>
                                <li><a class="active" href="bookmark.php">bookmarks</a></li>
                                
                                <li><a href="notification.php">notification</a></li>
                                <li><a href="Controller/verify.php?custlogout=true">logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bookmark-part">
        <div class="container">
           <br>
           <br>
            <div class="row">
                <?php 
                            $bstmt = $admin -> ret("SELECT * FROM `bookmark` WHERE `c_id` = '$cid'");
                            while($brow = $bstmt -> fetch(PDO::FETCH_ASSOC)){ 
                                $pid = $brow['p_id'];

                            $pstmt = $admin -> ret("SELECT * FROM `products` WHERE `p_id` = '$pid' ORDER BY `p_id` DESC");
                                $prow = $pstmt -> fetch(PDO::FETCH_ASSOC);
                                $pcid = $prow['c_id'];
                                $pcstmt = $admin -> ret("SELECT * FROM `customer` WHERE `c_id` = '$pcid'"); 
                                $pcrow = $pcstmt -> fetch(PDO::FETCH_ASSOC);
                        ?>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-img"><img src="Controller/<?= $prow['image1']?>" alt="product"></div>
                                    <div class="cross-vertical-badge product-badge"><i class="fas fa-clipboard-check"></i><span>recommend</span></div>
                                    <div class="product-type"><span class="flat-badge booking"><?= $prow['addcat']?></span></div>
                                    <ul class="product-action">
                                        <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                        <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                        <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <ol class="breadcrumb product-category">
                                        <li><i class="fas fa-tags"></i></li>
                                        <li class="breadcrumb-item"><a href="#"><?= $prow['pro_cat']?></a></li>
                                    </ol>
                                    <h5 class="product-title"><a href="ad-details.php?pid=<?= $prow['p_id']?>"><?= $prow['title']?></a></h5>
                                    <div class="product-meta"><span><i class="fas fa-map-marker-alt"></i><?= $pcrow['address']?></span><span><i class="fas fa-clock"></i><?= $prow['time']?></span></div>
                                    <div class="product-info">
                                        <h5 class="product-price">₹ <?= $prow['price']?><span>/<?= $prow['price_condition']?></span></h5>
                                        <div class="product-btn">
                                            <a href="Controller/indb.php?dltbookmark=true&bid=<?= $brow['b_id']?>" title="Wishlist" class="fas fa-heart"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>


                
            </div>
           
        </div>
    </section>
    <footer class="footer-part">
        <div class="container">
            <div class="row newsletter">
                <div class="col-lg-6">
                    <div class="news-content">
                        <h2>Subscribe for Latest Offers</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laboriosam, aliquid reiciendis! Exercitationem soluta provident non.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="news-form">
                        <input type="text" placeholder="Enter Your Email Address">
                        <button class="btn btn-inline"><i class="fas fa-envelope"></i><span>Subscribe</span></button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-content">
                        <h3>Contact Us</h3>
                        <ul class="footer-address">
                            <li><i class="fas fa-map-marker-alt"></i>
                                <p>1420 West Jalkuri Fatullah, <span>Narayanganj, BD</span></p>
                            </li>
                            <li><i class="fas fa-envelope"></i>
                                <p>support@classicads.com <span>info@classicads.com</span></p>
                            </li>
                            <li><i class="fas fa-phone-alt"></i>
                                <p>+8801838288389 <span>+8801941101915</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-content">
                        <h3>Quick Links</h3>
                        <ul class="footer-widget">
                            <li><a href="#">Store Location</a></li>
                            <li><a href="#">Orders Tracking</a></li>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Size Guide</a></li>
                            <li><a href="#">Faq</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-content">
                        <h3>Information</h3>
                        <ul class="footer-widget">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery System</a></li>
                            <li><a href="#">Secure Payment</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-info">
                        <a href="#"><img src="images/logo.png" alt="logo"></a>
                        <ul class="footer-count">
                            <li>
                                <h5>929,238</h5>
                                <p>Registered Users</p>
                            </li>
                            <li>
                                <h5>242,789</h5>
                                <p>Community Ads</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-card-content">
                        <div class="footer-payment">
                            <a href="#"><img src="images/pay-card/01.jpg" alt="01"></a>
                            <a href="#"><img src="images/pay-card/02.jpg" alt="02"></a>
                            <a href="#"><img src="images/pay-card/03.jpg" alt="03"></a>
                            <a href="#"><img src="images/pay-card/04.jpg" alt="04"></a>
                        </div>
                        <div class="footer-option">
                            <button type="button" data-toggle="modal" data-target="#language"><i class="fas fa-globe"></i>English</button>
                            <button type="button" data-toggle="modal" data-target="#currency"><i class="fas fa-dollar-sign"></i>USD</button>
                        </div>
                        <div class="footer-app">
                            <a href="#"><img src="images/play-store.png" alt="play-store"></a>
                            <a href="#"><img src="images/app-store.png" alt="app-store"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-end">
            <div class="container">
                <div class="footer-end-content">
                    <p>All Copyrights Reserved &copy; 2021 - Developed by <a href="#">Mironcoder</a></p>
                    <ul class="footer-social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade" id="currency">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Choose a Currency</h4>
                    <button class="fas fa-times" data-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <button class="modal-link active">United States Doller (USD) - $</button>
                    <button class="modal-link">Euro (EUR) - €</button>
                    <button class="modal-link">British Pound (GBP) - £</button>
                    <button class="modal-link">Australian Dollar (AUD) - A$</button>
                    <button class="modal-link">Canadian Dollar (CAD) - C$</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="language">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Choose a Language</h4>
                    <button class="fas fa-times" data-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <button class="modal-link active">English</button>
                    <button class="modal-link">bangali</button>
                    <button class="modal-link">arabic</button>
                    <button class="modal-link">germany</button>
                    <button class="modal-link">spanish</button>
                </div>
            </div>
        </div>
    </div>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/custom/main.js"></script>
</body>
<!-- Mirrored from mironmahmud.com/classicads/assets/ltr/bookmark.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Aug 2021 09:49:55 GMT -->

</html>