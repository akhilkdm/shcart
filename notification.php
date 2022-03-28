<?php include 'include/navbar.php'; ?>

    <link rel="stylesheet" href="css/custom/notification.css">
    <section class="notify-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="notify-body">
                        <div class="notify-filter">
                            <select class="select notify-select">
                            </select>
                            <div class="notify-action">
                                <a href="myprofile.php" title="Back To Dashboard" class="fa fa-dashboard"></a>
                                <a href="Controller/indb.php?deletenoti=true" title="Delete All Notification" class="fas fa-trash-alt"></a>
                            </div>
                        </div>
                        <ul class="notify-list notify-scroll">
   <?php
                                        $nstmt = $admin -> ret("SELECT * FROM `notifications` WHERE  `nc_id` = '$cid'");
                                        while($nrow = $nstmt -> fetch(PDO::FETCH_ASSOC)){ 
                                            $ncid = $nrow['c_id'];
                                            $ncstmt = $admin -> ret("SELECT * FROM `customer` WHERE `c_id` = '$ncid'");
                                            $ncrow = $ncstmt -> fetch(PDO::FETCH_ASSOC);
                                    ?>
                            <li class="notify-item">
                                <a href="#" class="notify-link">
                                    <div class="notify-img"><img src="Controller/<?= $ncrow['profile_pic']?>" alt="avatar"></div>
                                    <div class="notify-content">
                                        <p class="notify-text"><span><?= $nrow['notification']?></span></p><span class="notify-time"><?= $nrow['time']?></span></div>
                                </a>
                            </li>
                            <?php } ?>
                     
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/nice-select.min.js"></script>
    <script src="js/vendor/nicescroll.min.js"></script>
    <script src="js/custom/nice-select.js"></script>
    <script src="js/custom/nicescroll.js"></script>
    <script src="js/custom/main.js"></script>
</body>
<!-- Mirrored from mironmahmud.com/classicads/assets/ltr/notification.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Aug 2021 09:49:58 GMT -->

</html>