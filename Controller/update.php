<?php
    include '../config.php';
    $admin = new Admin();
    $cid = $_SESSION['cid'];

    if(isset($_POST['updateprodet'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $add = $_POST['add'];
        $stmt = $admin -> cud("UPDATE `customer` SET `cust_name` = '$name',
        `phone_no` = '$phone',
        `email_id` = '$email',
        `address` = '$add' 
        WHERE `customer`.`c_id` = '$cid'","updated");
        if($stmt){
            $_SESSION['up'] = "Profile Details Are Updated Succussfully.";
            $admin -> redirect('../myprofile');
        }else{
            echo "<script>alert('Somthing Went Wrong Please Try Again');
                window.location.href='../myprofile.php';
                </script>";
        }

    }

      if(isset($_POST['updatepass'])){
        $op =$_POST['curpass'];
        $pass =$_POST['npass'];
        $cpass =$_POST['cpass'];
        $stmt = $admin -> ret("SELECT `password` FROM `customer` WHERE `c_id` = '$cid'");
        $row = $stmt -> fetch(PDO::FETCH_ASSOC);
        $dbpass = $row['password'];
        if(password_verify($op , $dbpass)){
            if($pass == $cpass){
                if(password_verify($pass , $dbpass)){
                     $_SESSION['up'] = "Your Password is same as old password Please Try Again.";
                        echo "<script>
                               window.location.href='../myprofile.php';
                            </script>";
                }else{
                    $pass = password_hash($pass , PASSWORD_BCRYPT);
                    $stmt = $admin -> cud("UPDATE `customer` SET `password` = '$pass'  WHERE `c_id` = '$cid'","updated");
                    if($stmt){
                     $_SESSION['up'] = "Your Password is Changed.";
                        echo "<script>
                           window.location.href='../myprofile.php';
                            </script>";
                    }else{
                         $_SESSION['up'] = "Something is wrong Please Try Again.";
                        echo "<script>
                    window.location.href='../myprofile.php';
                   </script>";
                    }
                }
            }else{
                 $_SESSION['up'] = "Your Password is not matching Please Try Again.";
                echo "<script>
                   window.location.href='../myprofile.php';
                   </script>";
            }
        }else{
            $_SESSION['up'] = "Your Current Password is Wrong Please Try again.";
                echo "<script>
                   window.location.href='../myprofile.php';
                   </script>";
        }
    }

      if(isset($_POST['changepadmin'])){
      

        $op =$_POST['curpass'];
        $pass =$_POST['npass'];
        $cpass =$_POST['cpass'];
        $stmt = $admin -> ret("SELECT `password` FROM `admin` WHERE `a_id` = '1'");
        $row = $stmt -> fetch(PDO::FETCH_ASSOC);
        $dbpass = $row['password'];
        if($op == $dbpass){
            if($pass == $cpass){
                if($pass == $dbpass){
                         echo "<script>alert('Your Password is same as old password Please Try Again.');
                window.location.href='../admin/index.php';
                </script>";
                }else{
                    $stmt = $admin -> cud("UPDATE `admin` SET `password` = '$pass'  WHERE `a_id` = '1'","updated");
                    if($stmt){
                         echo "<script>alert('Your Password is Changed.');
                window.location.href='../admin/index.php';
                </script>";
                    }else{
                          echo "<script>alert('Something is wrong Please Try Again.');
                window.location.href='../admin/index.php';
                </script>";
                    }
                }
            }else{
                 echo "<script>alert('Your Password is not matching Please Try Again.');
                window.location.href='../admin/index.php';
                </script>";
            }
        }else{
                    echo "<script>alert('Your Current Password is Wrong Please Try again.');
                window.location.href='../admin/index.php';
                </script>";
        }
    }

    if(isset($_POST['updatepropic'])){
        $dltpro = $_POST['dltpro'];
        unlink($dltpro);
        $td = "files/";
        $filePath = $td . basename($_FILES['propic']['name']);
        move_uploaded_file($_FILES['propic']['tmp_name'],$filePath);

         $stmt = $admin -> cud("UPDATE `customer` SET `profile_pic` = '$filePath'
        WHERE `customer`.`c_id` = '$cid'","updated");
        if($stmt){
            $_SESSION['up'] = "Profile Picture Update Succussfully.";
            $admin -> redirect('../myprofile');
        }else{
            echo "<script>alert('Somthing Went Wrong Please Try Again');
                window.location.href='../myprofile.php';
                </script>";
        }
    }
    if(isset($_GET['soldid'])){
        $soldid = $_GET['soldid'];
      
         $stmt = $admin -> cud("UPDATE `products` SET `stutus` = 'sold'
        WHERE `products`.`p_id` = '$soldid'","updated");
        if($stmt){
      
            echo "<script>alert('Stutus Changed Succussfully');
                window.location.href='../my-ads.php';
                </script>";
        }else{
            echo "<script>alert('Somthing Went Wrong Please Try Again');
                window.location.href='../my-ads.php';
                </script>";
        }
    }


?>