<?php
    include '../config.php';
    $admin = new Admin();
    $cid = $_SESSION['cid'];

    $protit = $_POST['protit'];
    $procat = $_POST['procat'];
    $price = $_POST['price'];
    $pricecon = $_POST['pricecon'];
    $addcat = $_POST['addcat'];
    $procondi = $_POST['procondi'];
    $desc = $_POST['desc'];

    $td = "files/";
    $filePath1 = $td . basename($_FILES['img1']['name']);
    move_uploaded_file($_FILES['img1']['tmp_name'],$filePath1);

    $filePath2 = $td . basename($_FILES['img2']['name']);
    move_uploaded_file($_FILES['img2']['tmp_name'],$filePath2);

    $filePath3 = $td . basename($_FILES['img3']['name']);
    move_uploaded_file($_FILES['img3']['tmp_name'],$filePath3);
    
    $filePath4 = $td . basename($_FILES['img4']['name']);
    move_uploaded_file($_FILES['img4']['tmp_name'],$filePath4);

    $stmt = $admin -> cud("INSERT INTO `products` ( `c_id`, `title`,
     `image1`, `image2`, `image3`, `image4`, `discription`, `pro_cat`, `price`, 
     `price_condition`, `addcat`, `pro_condition`,`stutus`,`time`)
     VALUES ('".$cid."','".$protit."','".$filePath1."','".$filePath2."','".$filePath3."',
     '".$filePath4."','".$desc."','".$procat."','".$price."','".$pricecon."','".$addcat."',
     '".$procondi."','notsold',NOW())","saved");

     if($stmt){
        $_SESSION['reg'] = "Ad Posted Successfully.";
        $admin -> redirect('../ad-post');
     }else{
        $_SESSION['reg'] = "Something Went Wrong...!";
        $admin -> redirect('../ad-post');
     }



    
?>





