<?php include 'include/navbar.php'; ?>

    <section class="single-banner dashboard-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h2>my ads</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">my-ads</li>
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
                                <li><a class="active" href="my-ads.php">My ads</a></li>
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
    <section class="myads-part">
        <div class="container">
          <br>
            <div class="row">
                 <?php 
                            $pstmt = $admin -> ret("SELECT * FROM `products` WHERE `c_id` = '$cid' ORDER BY `p_id` DESC");
                            while($prow = $pstmt -> fetch(PDO::FETCH_ASSOC)){ 
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
                                            <?php
                                                if($prow['stutus'] == "notsold"){ ?>
                                                   <a href="Controller/update.php?soldid=<?= $prow['p_id']?>" class="" style="color:red">SOLD</a>

                                               <?php }else{ ?>
                                                    <span>SOLDED</span>
                                             <?php  }
                                            ?>
                                            <a href="Controller/indb.php?bookmark=true&pid=<?= $prow['p_id']?>" title="Wishlist" class="far fa-heart"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>


            </div>
           
        </div>
    </section>
      <?php include 'include/footer.php'; ?>