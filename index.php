<?php include 'include/navbar.php'; ?>
    <section class="banner-part">
        <div class="container">
            <div class="banner-content">
                <h1>You can #Buy, #Rent, #Booking anything from here.</h1>
                <p>Buy and sell everything from used cars to mobile phones and computers, or search for property, jobs
                    and more in the world.</p><a href="ad-lists.php" class="btn btn-outline"><i
                        class="fas fa-eye"></i><span>Show all ads</span></a>
            </div>
        </div>
    </section>
    <section class="suggest-part">
        <div class="container">
            <div class="suggest-slider slider-arrow">
                <a href="ad-list-column3.html" class="suggest-card"><img src="images/suggest/automobile.png" alt="car">
                    <h6>automobile</h6>
                    <p></p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card"><img src="images/suggest/furniture.png"
                        alt="furniture">
                    <h6>furniture</h6>
                    <p></p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card"><img src="images/suggest/properties.png"
                        alt="house">
                    <h6>properties</h6>
                    <p></p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card"><img src="images/suggest/fashion.png" alt="food">
                    <h6>fashion</h6>
                    <p></p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card"><img src="images/suggest/electronics.png"
                        alt="cycle">
                    <h6>electronics</h6>
                    <p></p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card"><img src="images/suggest/hospitality.png"
                        alt="clothes">
                    <h6>hospitality</h6>
                    <p></p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card"><img src="images/suggest/gadgets.png"
                        alt="computer">
                    <h6>gadgets</h6>
                    <p></p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card"><img src="images/suggest/education.png" alt="phone">
                    <h6>education</h6>
                    <p></p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card"><img src="images/suggest/software.png"
                            alt="scooter">
                        <h6>software</h6>
                        <p></p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card"><img src="images/suggest/food.png" alt="television">
                    <h6>food</h6>
                    <p></p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card"><img src="images/suggest/services.png" alt="truck">
                    <h6>services</h6>
                    <p></p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card"><img src="images/suggest/animals.png" alt="pet">
                    <h6>animals</h6>
                    <p></p>
                </a>
            </div>
        </div>
    </section>
   
   
    <section class="section trend-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Newly Posted <span>Ads</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
          <?php 
                     $pstmt = $admin -> ret("SELECT * FROM `products` WHERE `stutus` = 'notsold' ORDER BY `p_id` DESC LIMIT 10");
                     while($prow = $pstmt -> fetch(PDO::FETCH_ASSOC)){ 
                         $pcid = $prow['c_id'];
                         $pcstmt = $admin -> ret("SELECT * FROM `customer` WHERE `c_id` = '$pcid'"); 
                         $pcrow = $pcstmt -> fetch(PDO::FETCH_ASSOC);
                 ?>
        
        <div class="col-md-11 col-lg-8 col-xl-6">
            <div class="product-card standard">
                <div class="product-media">
                    <div class="product-img"><img src="Controller/<?= $prow['image1']?>" alt="product"></div>
                    <div class="cross-vertical-badge product-badge"><i class="fas fa-bolt"></i><span><?= $prow['addcat']?></span>
                    </div>
                    <div class="product-type"><span class="flat-badge rent"><?= $prow['addcat']?></span></div>
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
                            <div class="product-meta"><span><i class="fas fa-map-marker-alt"></i></i><?= $pcrow['address']?>
                        </span><span><i class="fas fa-clock"></i><?= $prow['time']?></span>
                </div>
                <div class="product-info">
                    <h5 class="product-price">₹ <?= $prow['price']?><span>/<?= $prow['price_condition']?></span></h5>
                    <div class="product-btn">
                                            <a href="Controller/indb.php?bookmark=true&pid=<?= $prow['p_id']?>" title="Wishlist" class="far fa-heart"></a>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <?php } ?>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="center-20"><a href="ad-lists.php" class="btn btn-inline"><i
                            class="fas fa-eye"></i><span>View All Ads</span></a></div>
            </div>
        </div>
        </div>
    </section>
<br>
   <?php include 'include/footer.php'; ?>