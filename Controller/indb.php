<?php
    include '../config.php';
    $admin = new Admin();

    if(isset($_SESSION['cid'])){
        $cid = $_SESSION['cid'];
    }

    if(isset($_GET['bookmark'])){
        $pid = $_GET['pid'];
        
        $stmt = $admin -> ret("SELECT * FROM `bookmark` WHERE `p_id` = '$pid' AND `c_id` = '$cid'");
        $num = $stmt -> rowCount();
        if($num > 0){
            echo "<script>
                alert('Already Bookmarked');
                window.location.href='../bookmark.php';
            </script>";
        }else{
            $stmt = $admin -> cud("INSERT INTO `bookmark`(`p_id`, `c_id`, `d_date`) 
            VALUES ('$pid','$cid',NOW())","saved");
             echo "<script>
                alert('Product Bookmarked Successfully');
                window.location.href='../bookmark.php';
            </script>";

        }

    }

    if(isset($_GET['deletenoti'])){
        $stmt = $admin -> cud("DELETE FROM `notifications` WHERE `notifications`.`nc_id` = '$cid'","dlt");
echo "<script>
                window.location.href='../notification.php';
            </script>";
    }

    if(isset($_POST['message'])){
        $noti = $_POST['noti'];
        $to = $_POST['to'];
        $pid = $_POST['pid'];

        
        $stmt = $admin -> cud("INSERT INTO `notifications`( `c_id`, 
        `notification`, `nc_id`, `time`, `stutus`) VALUES 
         ('$cid','$noti','$to',NOW(),'Sent')","sav");
            echo "<script>
            alert('Message Sent Succussfully');
                window.location.href='../ad-details.php?pid=$pid';
            </script>";

    }

    if(isset($_GET['dltbookmark'])){
        $id = $_GET['bid'];
        
        $stmt = $admin -> cud("DELETE FROM `bookmark` WHERE `bookmark`.`b_id` = '$id'","dlt");
        echo "<script>
                alert('Bookmark Removed Successfully');
                window.location.href='../bookmark.php';
            </script>";
        
    }
