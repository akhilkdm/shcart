    <?php include 'include/navbar.php';  
    if(isset($_SESSION['cid'])){
        $fromuid = $_SESSION['cid'];
        $fromstmt = $admin -> ret("SELECT * FROM `customer` WHERE `c_id` = '$fromuid'"); 
        $fromrow = $fromstmt -> fetch(PDO::FETCH_ASSOC);

    }
        if(isset($_GET['touid'])){
            $touid = $_GET['touid'];
            
            $tostmt = $admin -> ret("SELECT * FROM `customer` WHERE `c_id` = '$touid'"); 
            $torow = $tostmt -> fetch(PDO::FETCH_ASSOC);
        }
    ?>
    
    <link rel="stylesheet" href="css/vendor/nice-select.min.css">
    <link rel="stylesheet" href="css/vendor/emojionearea.min.css">
    <link rel="stylesheet" href="css/custom/message.css">
    
    <section class="message-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-4">
                    <div class="message-filter">
                        <div class="message-filter-group">
                            <select class="select">
                                <option value="">all message</option>
                                <option value="">read message</option>
                                <option value="">unread message</option>
                            </select>
                            <button class="message-filter-btn"><i class="fas fa-search"></i></button>
                        </div>
                        <form class="message-filter-src">
                            <input type="text" placeholder="Search for Username">
                        </form>
                        <ul class="message-list">

                            <li class="message-item unread">
                                <a href="message.html" class="message-link">
                                    <div class="message-img active"><img src="images/avatar/01.jpg" alt="avatar"></div>
                                    <div class="message-text">
                                        <h6>miron mahmud <span>now</span></h6>
                                        <p>How are you my best frie...</p>
                                    </div><span class="message-count">4</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-8">
                    <div class="message-inbox">
                        <div class="inbox-header">
                            <div class="inbox-header-profile">
                                <a class="inbox-header-img" href="#"><img src="Controller/<?= $torow['profile_pic']?>" alt="avatar"></a>
                                <div class="inbox-header-text">
                                    <h5><a href="#"><?= $torow['cust_name']?></a></h5><span>Chat</span>
                                </div>
                            </div>
                            <ul class="inbox-header-list">
                                <li>
                                    <a href="#" title="Delete" class="fas fa-trash-alt"></a>
                                </li>
                      
                            </ul>
                        </div>
                        <ul class="inbox-chat-list">
                            <?php
                            $mstmt = $admin -> ret("SELECT * FROM `messages` WHERE `sentfrom` = '$fromuid' OR `sentto` = '$fromuid' ");
                            while($mrow = $mstmt -> fetch(PDO::FETCH_ASSOC)){ 
                            ?>


                           <?php
                            if($_SESSION['cid'] != $mrow['sentfrom']){ ?>
                            <li class="inbox-chat-item my-chat">
                           
                                <div class="inbox-chat-img"><img src="Controller/<?= $fromrow['profile_pic']?>" alt="avatar"></div>
                                <div class="inbox-chat-content">
                                    <div class="inbox-chat-text">
                                        <p><?= $mrow['msg']?></p>
                                        <div class="inbox-chat-action">
                                            <a href="#" title="Remove" class="fas fa-trash-alt"></a>
                                        </div>
                                    </div><small class="inbox-chat-time">5 minutes ago!</small>
                                </div>
                            </li>
                          <?php  }if($_SESSION['cid'] == $mrow['sentto']){ ?>
                                 
                        <li class="inbox-chat-item">
                                <div class="inbox-chat-img"><img src="Controller/<?= $torow['profile_pic']?>" alt="avatar"></div>
                                <div class="inbox-chat-content">
                                    <div class="inbox-chat-text">
                                        <p><?= $mrow['msg']?></p>
                                        <div class="inbox-chat-action">
                                            <a href="#" title="Remove" class="fas fa-trash-alt"></a>
                                        </div>
                                    </div><small class="inbox-chat-time">feb 02, 3:15 AM</small>
                                </div>
                            </li>
                        <?php  }
                           ?>
                       
                           

                            <?php } ?>
                            
                  
                    </ul>
                    <form action="Controller/indb.php" method="POST" class="inbox-chat-form">
                        <input type="hidden" name="to" value="<?= $touid?>" id="">
                        <textarea required name="chat" placeholder="Type a Message" id="chat-emoji"></textarea>
                        <button type="submit" name="sendmessage"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/nice-select.min.js"></script>
    <script src="js/vendor/emojionearea.min.js"></script>
    <script src="js/vendor/nicescroll.min.js"></script>
    <script src="js/custom/nice-select.js"></script>
    <script src="js/custom/nicescroll.js"></script>
    <script src="js/custom/emojionearea.js"></script>
    <script src="js/custom/main.js"></script>
</body>
<!-- Mirrored from mironmahmud.com/classicads/assets/ltr/message.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Aug 2021 09:49:57 GMT -->

</html>