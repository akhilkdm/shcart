<?php include 'include/navbar.php'; ?>
    <nav class="mobile-nav">
        <div class="container">
            <div class="mobile-group"><a href="index.html" class="mobile-widget"><i class="fas fa-home"></i><span>home</span></a><a href="user-form.html" class="mobile-widget"><i class="fas fa-user"></i><span>join me</span></a>
                <a href="ad-post.html" class="mobile-widget plus-btn"><i class="fas fa-plus"></i><span>Ad Post</span></a><a href="notification.html" class="mobile-widget"><i class="fas fa-bell"></i><span>notify</span><sup>0</sup></a><a href="message.html" class="mobile-widget"><i class="fas fa-envelope"></i><span>message</span><sup>0</sup></a></div>
        </div>
    </nav>
    <section class="inner-section single-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h2>All Ads</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ads</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="inner-section ad-list-part">
        <div class="container">
            <div class="row content-reverse">
                <div class="col-lg-4 col-xl-3">
                    <div class="row">
                    
                        <div class="col-md-6 col-lg-12">
                            <div class="product-widget">
                                <h6 class="product-widget-title">filter by category</h6>
                                <form class="product-widget-form">












                                    <ul class="product-widget-list product-widget-scroll">
                                       
                                        <li class="product-widget-dropitem">
                                            <a href="ad-lists.php?cat=Automobile" class="product-widget-link"><i class="fas fa-tags"></i>Automobile </a>
                                        </li>
                                        <li class="product-widget-dropitem">
                                            <a href="ad-lists.php?cat=Animals" class="product-widget-link"><i class="fas fa-tags"></i>Animals </a>
                                        </li>
                                        <li class="product-widget-dropitem">
                                            <a href="ad-lists.php?cat=Electronics" class="product-widget-link"><i class="fas fa-tags"></i>Electronics </a>
                                        </li>
                                        <li class="product-widget-dropitem">
                                            <a href="ad-lists.php?cat=Education" class="product-widget-link"><i class="fas fa-tags"></i>Education </a>
                                        </li>
                                        <li class="product-widget-dropitem">
                                            <a href="ad-lists.php?cat=Fashion" class="product-widget-link"><i class="fas fa-tags"></i>Fashion </a>
                                        </li>
                                        <li class="product-widget-dropitem">
                                            <a href="ad-lists.php?cat=Food" class="product-widget-link"><i class="fas fa-tags"></i>Food </a>
                                        </li>
                                        <li class="product-widget-dropitem">
                                            <a href="ad-lists.php?cat=Furniture" class="product-widget-link"><i class="fas fa-tags"></i>Furniture </a>
                                        </li>
                                        <li class="product-widget-dropitem">
                                            <a href="ad-lists.php?cat=Gadgets" class="product-widget-link"><i class="fas fa-tags"></i>Gadgets </a>
                                        </li>
                                        <li class="product-widget-dropitem">
                                            <a href="ad-lists.php?cat=Hospitality" class="product-widget-link"><i class="fas fa-tags"></i>Hospitality </a>
                                        </li>
                                        <li class="product-widget-dropitem">
                                            <a href="ad-lists.php?cat=Properties" class="product-widget-link"><i class="fas fa-tags"></i>Properties </a>
                                        </li>
                                        <li class="product-widget-dropitem">
                                            <a href="ad-lists.php?cat=Software" class="product-widget-link"><i class="fas fa-tags"></i>Software </a>
                                        </li>
                                        <li class="product-widget-dropitem">
                                            <a href="ad-lists.php?cat=Services" class="product-widget-link"><i class="fas fa-tags"></i>Services </a>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-filter">

                                 <form class="header-form">
                    <div class="header-search">
                        <button type="submit" title="Search Submit "><i class="fas fa-search"></i></button>
                        <input type="text" onkeyup="searchproducts(this.value)" placeholder="Search, Whatever you needs...">
                        <button type="button" title="Search Option" class="option-btn"><i
                                class="fas fa-sliders-h"></i></button>
                    </div>
                   
                </form>
                            
                            </div>
                        </div>
                    </div>
                 
                    <div id="product" class="row">
                        <?php 
                        $i = 0;
                        if(isset($_GET['cat'])){
                            $cat = $_GET['cat'];
                            $pstmt = $admin -> ret("SELECT * FROM `products` WHERE `pro_cat` = '$cat' AND `stutus` = 'notsold' ORDER BY `p_id` DESC");

                        }else{
                            $pstmt = $admin -> ret("SELECT * FROM `products` WHERE `stutus` = 'notsold' ORDER BY `p_id` DESC");

                        }
                            while($prow = $pstmt -> fetch(PDO::FETCH_ASSOC)){
                                ++$i; 
                                $pcid = $prow['c_id'];
                                $pcstmt = $admin -> ret("SELECT * FROM `customer` WHERE `c_id` = '$pcid'"); 
                                $pcrow = $pcstmt -> fetch(PDO::FETCH_ASSOC);
                        ?>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4">
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
                                            <a href="Controller/indb.php?bookmark=true&pid=<?= $prow['p_id']?>" title="Wishlist" class="far fa-heart"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }if($i == 0){ ?>
                            <div style="position:relative;left:50%" class="alert alert-primary" role="alert">
                                <b>No Records Found!!!</b>
                                </div>
                       <?php } ?>
                            <script>
                                function searchproducts(alm){

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("product").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "getproductsearchresult.php?q=" + alm, true);
            xmlhttp.send();
        }
                            </script>


                       
                      
                    </div>
                    <!-- <div class="row">
                        <div class="col-lg-12">
                            <div class="footer-pagection">
                                <p class="page-info"></p>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-left"></i></a></li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">...</li>
                                    <li class="page-item"><a class="page-link" href="#">67</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-long-arrow-alt-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
   <?php include 'include/footer.php'; ?>