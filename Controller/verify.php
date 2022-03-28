<?php
    include '../config.php';
    $admin = new Admin();

    if(isset($_POST['loginBtn'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $stmt = $admin -> ret("SELECT * FROM `customer` WHERE `email_id` = '$email'
             OR `phone_no` = '$email' ");		
        $num = $stmt ->rowCount();
        $row = $stmt ->fetch(PDO::FETCH_ASSOC); 
		if($num>0){
        $dbpass = $row['password'];
        if(password_verify($pass,$dbpass)){
            $_SESSION['cid'] = $row['c_id'];
            $admin -> redirect('../index');
        }else{
              $_SESSION['reg'] = "Your Password is Not Matching Please Try Again.";
            echo "<script>
            window.location.href='../user-form.php';
            </script>";
        }
    }else{
         $_SESSION['reg'] = "Your are not a Valid User Please Register Befor Login.";
        echo "<script>
        window.location.href='../user-form.php';
        </script>";
    }

    }
    if(isset($_POST['adminlog'])){
        $email = $_POST['email'];
        $pass = $_POST['pwd'];
        
        $stmt = $admin -> ret("SELECT * FROM `admin` WHERE `email` = '$email'");		
        $num = $stmt ->rowCount();
        $row = $stmt ->fetch(PDO::FETCH_ASSOC); 
		if($num>0){
        $dbpass = $row['password'];
        if($pass==$dbpass){
            $_SESSION['cid'] = $row['a_id'];
            $admin -> redirect('../admin/index');
        }else{
              $_SESSION['reg'] = "Your Password is Not Matching Please Try Again.";
            echo "<script>
            window.location.href='../admin/login.php';
            </script>";
        }
    }else{
         $_SESSION['reg'] = "Your are not a Valid User Please Register Befor Login.";
        echo "<script>
            window.location.href='../admin/login.php';
        </script>";
    }

    }
    
    if(isset($_POST['register'])){
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $stmt = $admin -> ret("SELECT * FROM `customer` WHERE `email_id` = '$email'
             OR `phone_no` = '$phone' ");
        $num = $stmt -> rowCount();
        if($num > 0){
             $_SESSION['reg'] = "Email or Phone Number is Already Used Please Sign In";
            $admin -> redirect('../user-form');
        }else{
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $pass = password_hash($pass,PASSWORD_BCRYPT);
            $td = "files/";
            $filePath = $td . basename($_FILES['propic']['name']);
            move_uploaded_file($_FILES['propic']['tmp_name'],$filePath);
            $stmt = $admin -> cud("INSERT INTO `customer` ( `cust_name`, `email_id`, 
            `password`, `phone_no`,`profile_pic`, `c_date`) 
            VALUES ('".$name."','".$email."','".$pass."','".$phone."','".$filePath."',NOW())","saved");
            if($stmt){
                $_SESSION['reg'] = "Registration Successfull Now You Can Login";
                $admin -> redirect('../user-form');
                
            }else{
                echo "<script>alert('Somthing Went Wrong Please Try Again');
                window.location.href='../index.php';
                </script>";
            }

        }
    }

    if(isset($_GET['custlogout'])){
        session_destroy();
        unset($_SESSION['cid']);
        $admin ->redirect('../index');
    }
    
    if(isset($_GET['adminlogout'])){
        session_destroy();
        unset($_SESSION['cid']);
        $admin ->redirect('../admin/login');
    }
    
?>