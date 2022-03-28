    <?php include 'include/navbar.php'; 
        $pid = $_GET['pid'];
        $pstmt = $admin -> ret("SELECT * FROM `products` WHERE `p_id` = '$pid'");
        $prow = $pstmt -> fetch(PDO::FETCH_ASSOC);
        $pcid = $prow['c_id'];
        $pcstmt = $admin -> ret("SELECT * FROM `customer` WHERE `c_id` = '$pcid'"); 
        $pcrow = $pcstmt -> fetch(PDO::FETCH_ASSOC);
    ?>
    <link rel="stylesheet" href="css/custom/ad-details.css">

    <section class="single-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-content">
                        <h2>ad details</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ad-details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="inner-section ad-details-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="common-card">
                        <ol class="breadcrumb ad-details-breadcrumb">
                            <li><span class="flat-badge sale"><?= $prow['addcat']?></span></li>
                            <li class="breadcrumb-item"><a href="#"><?= $prow['pro_cat']?></a></li>
                         
                        </ol>
                        <h3 class="ad-details-title"><?= $prow['title']?></h3>
                        <div
                        class="ad-details-slider-group">
                            <div class="ad-details-slider slider-arrow">
                                <div><img src="Controller/<?= $prow['image1']?>" alt="details"></div>
                                <div><img src="Controller/<?= $prow['image2']?>" alt="details"></div>
                                <div><img src="Controller/<?= $prow['image3']?>" alt="details"></div>
                                <div><img src="Controller/<?= $prow['image4']?>" alt="details"></div>
                            </div>
                            <div class="cross-vertical-badge ad-details-badge"><i class="fas fa-clipboard-check"></i><span>recommend</span></div>
                    </div>
                    <div class="ad-thumb-slider">
                        <div><img src="Controller/<?= $prow['image1']?>" alt="details"></div>
                        <div><img src="Controller/<?= $prow['image2']?>" alt="details"></div>
                        <div><img src="Controller/<?= $prow['image3']?>" alt="details"></div>
                        <div><img src="Controller/<?= $prow['image4']?>" alt="details"></div>
                    </div>
                    <div class="ad-details-action">
                        <button type="button" class="wish"><i class="fas fa-heart"></i>bookmark</button>
                        <button type="button"><i class="fas fa-exclamation-triangle"></i>report</button>
                    </div>
                </div>
                <div class="common-card">
                    <div class="card-header">
                        <h5 class="card-title">Specification</h5></div>
                    <ul class="ad-details-specific">
                        <li>
                            <h6>price:</h6>
                            <p>₹ <?= $prow['price']?> /-</p>
                        </li>
                        <li>
                            <h6>seller type:</h6>
                            <p>personal</p>
                        </li>
                        <li>
                            <h6>published:</h6>
                            <p><?= $prow['time']?></p>
                        </li>
                        <li>
                            <h6>location:</h6>
                            <p><?= $pcrow['address']?></p>
                        </li>
                        <li>
                            <h6>category:</h6>
                            <p><?= $prow['pro_cat']?></p>
                        </li>
                        <li>
                            <h6>condition:</h6>
                            <p><?= $prow['pro_condition']?></p>
                        </li>
                        <li>
                            <h6>price type:</h6>
                            <p><?= $prow['price_condition']?></p>
                        </li>
                        <li>
                            <h6>ad type:</h6>
                            <p><?= $prow['addcat']?></p>
                        </li>
                    </ul>
                </div>
                <div class="common-card">
                    <div class="card-header">
                        <h5 class="card-title">description</h5></div>
                    <p class="ad-details-desc"><?= $prow['discription']?></p>
                </div>
                <!-- <div class="common-card" id="review">
                    <div class="card-header">
                        <h5 class="card-title">reviews (2)</h5></div>
                    <div class="ad-details-review">
                        <ul class="review-list">
                            <li class="review-item">
                                <div class="review-user">
                                    <div class="review-head">
                                        <div class="review-profile">
                                            <a href="#" class="review-avatar"><img src="images/avatar/03.jpg" alt="review"></a>
                                            <div class="review-meta">
                                                <h6><a href="#">miron mahmud -</a><span>June 02, 2020</span></h6>
                                                <ul>
                                                    <li><i class="fas fa-star active"></i></li>
                                                    <li><i class="fas fa-star active"></i></li>
                                                    <li><i class="fas fa-star active"></i></li>
                                                    <li><i class="fas fa-star active"></i></li>
                                                    <li><i class="fas fa-star active"></i></li>
                                                    <li>
                                                        <h5>- for delivery system</h5></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="review-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit Non quibusdam harum ipsum dolor cumque quas magni voluptatibus cupiditate minima quis.</p>
                                </div>
                            </li>
                            <li class="review-item">
                                <div class="review-user">
                                    <div class="review-head">
                                        <div class="review-profile">
                                            <a href="#" class="review-avatar"><img src="images/avatar/02.jpg" alt="review"></a>
                                            <div class="review-meta">
                                                <h6><a href="#">labonno khan -</a><span>June 02, 2020</span></h6>
                                                <ul>
                                                    <li><i class="fas fa-star active"></i></li>
                                                    <li><i class="fas fa-star active"></i></li>
                                                    <li><i class="fas fa-star active"></i></li>
                                                    <li><i class="fas fa-star active"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li>
                                                        <h5>- for product quality</h5></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="review-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit Non quibusdam harum ipsum dolor cumque quas magni voluptatibus cupiditate minima quis.</p>
                                </div>
                                <div class="review-author">
                                    <div class="review-head">
                                        <div class="review-profile">
                                            <a href="#" class="review-avatar"><img src="images/avatar/04.jpg" alt="review"></a>
                                            <div class="review-meta">
                                                <h6><a href="#">Miron Mahmud</a></h6>
                                                <h6>Author - <span>June 02, 2020</span></h6></div>
                                        </div>
                                    </div>
                                    <p class="review-desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit Non quibusdam harum ipsum dolor cumque quas magni voluptatibus cupiditate minima.</p>
                                </div>
                            </li>
                        </ul>
                        <form class="review-form">
                            <div class="star-rating">
                                <input type="radio" name="rating" id="star-1">
                                <label for="star-1"></label>
                                <input type="radio" name="rating" id="star-2">
                                <label for="star-2"></label>
                                <input type="radio" name="rating" id="star-3">
                                <label for="star-3"></label>
                                <input type="radio" name="rating" id="star-4">
                                <label for="star-4"></label>
                                <input type="radio" name="rating" id="star-5">
                                <label for="star-5"></label>
                            </div>
                            <div class="review-form-grid">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <select class="form-control custom-select">
                                        <option selected>Qoute</option>
                                        <option value="1">delivery system</option>
                                        <option value="2">product quality</option>
                                        <option value="3">payment issue</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Describe"></textarea>
                            </div>
                            <button type="submit" class="btn btn-inline review-submit"><i class="fas fa-tint"></i><span>drop your review</span></button>
                        </form>
                    </div>
                </div> -->
            </div>
            <div class="col-lg-4">
                <div class="common-card price">
                    <h3>₹ <?= $prow['price']?> /-<span>/ <?= $prow['price_condition']?></span></h3><i class="fas fa-tag"></i></div>
                <button type="button" class="common-card number" data-toggle="modal" data-target="#number">
                    <h3>  <?= $pcrow['phone_no']?><span>Click to show</span></h3><i class="fas fa-phone"></i></button>
                <div class="common-card">
                    <div class="card-header">
                       
                        <h5 class="card-title">Add Owner info</h5></div>
                    <div class="ad-details-author">
                        <a href="#" class="author-img active"><img src="Controller/<?= $pcrow['profile_pic']?>" alt="avatar"></a>
                        <div class="author-meta">
                            <h4><a href="#"><?= $pcrow['cust_name']?></a></h4>
                            <h5>joined: <?= $pcrow['c_date']?></h5>
                        </div>
                        <div class="author-widget">
                            <?php
                                if(isset($_SESSION['cid'])){ ?>
                            <a href="" data-toggle="modal" data-target="#msg" title="Message" class="fas fa-envelope"></a>

                                <?php }else{ ?>
                            <a href="user-form.php"  title="Message" class="fas fa-envelope"></a>

                              <?php  }
                            ?>
                             <button type="button" title="Number" class="fas fa-phone" data-toggle="modal" data-target="#number"></button>
                         </div>
                        <ul class="author-list">
                            <li>
                                <h6>total ads</h6>
                                <p><?php 
                                    $tstmt = $admin -> ret("SELECT * FROM `products` WHERE `c_id` = '$pcid'");
                                    echo $num = $tstmt -> rowCount();
                                ?></p>
                            </li>
                            <li>
                                <h6>total sold</h6>
                                <p><?php 
                                    $tstmt = $admin -> ret("SELECT * FROM `products` WHERE `stutus` = 'sold' AND `c_id` = '$pcid'");
                                    echo $num = $tstmt -> rowCount();
                                ?></p>
                            </li>
                        </ul>
                    </div>
                </div>
               
                <div class="common-card">
                    <div class="card-header">
                        <h5 class="card-title">safety tips</h5></div>
                    <div class="ad-details-safety">
                        <p>Check the item before you buy</p>
                        <p>Pay only after collecting item</p>
                        <p>Beware of unrealistic offers</p>
                        <p>Meet seller at a safe location</p>
                        <p>Do not make an abrupt decision</p>
                        <p>Be honest with the ad you post</p>
                    </div>
                </div>
              
            </div>
        </div>
        </div>
    </section>
 
   
<div class="modal fade" id="number">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Contact this Number</h4>
                    <button class="fas fa-times" data-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <h3 class="modal-number">(91) <?= $pcrow['phone_no']?></h3></div>
            </div>
        </div>
    </div>


<div class="modal fade" id="msg">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Send Notification this User</h4>
                    <button class="fas fa-times" data-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="Controller/indb.php" method="post">
                        <textarea placeholder="Send Message" type="text" class="form-control"  name="noti" id=""></textarea>
                        <br>
                        <input type="hidden" name="to" value="<?= $pcid?>" id="">
                        <input type="hidden" name="pid" value="<?= $pid?>" id="">
                        <center>
                            <input type="submit" value="Send" class="btn btn-primary" name="message" id="">
                        </center>
                    </form>
                <br>
                </div>
        </div>
    </div>

    <?php include 'include/footer.php'; ?>