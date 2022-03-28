<?php

 define('DIR', '');
require_once DIR . 'config.php';

$admin = new Admin();

$searchq = $_GET['q'];
$data="SELECT * FROM `products` WHERE `title` LIKE '".$searchq."%' 
OR `pro_cat` LIKE '".$searchq."%' OR `price` LIKE '".$searchq."%' 
OR `addcat` LIKE '".$searchq."%' 
OR `pro_condition` LIKE '".$searchq."%'" ;
$val=$admin->ret($data);   
$num = $val -> rowCount();
 
if($num>0){

    while($prow = $val->fetch(PDO::FETCH_ASSOC))
    { 
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
 <?php  }
        }else{
    echo '<br><b><center>No Result Found..!</center></b>';
	}
 ?>



    

