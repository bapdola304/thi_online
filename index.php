<?php
    ob_start();
    session_start();
    include "connect/connect.php";
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ</title>
    <!-- <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css"> -->
     <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./bs/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./bs/js/bootstrap.min.js"></script>


      <link rel='stylesheet' href='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.css'>
    <script src='https://cdn.rawgit.com/t4t5/sweetalert/v0.2.0/lib/sweet-alert.min.js'></script>
    <link rel="stylesheet" href="include/style.css">
    <!-- <link rel="stylesheet" href="assets/css/user.css"> -->

</head>

<body>
    <?php
    if(isset($_GET['a']) && $_GET['a']=='login'){
            include "include/login.php";    
    }else if(isset($_GET['a']) && $_GET['a']=='register'){
         include "include/registe.php";
            include "include/footer.html";
    }
    else if(isset($_GET['a']) && $_GET['a']=='chonmon'){
         include "include/chonmon.php";
            include "include/footer.html";
    }
     else if(isset($_GET['a']) && $_GET['a']=='chonde'){
         include "include/chonde.php";
    }

      else if(isset($_GET['a']) && $_GET['a']=='vaothi'){
         include "include/vaothi.php";
    }
      else if(isset($_GET['a']) && $_GET['a']=='ketqua'){
         include "include/ketqua.php";
         include "include/footer.html";
    }
      else if(isset($_GET['a']) && $_GET['a']=='taode'){
         include "include/taode.php";
    }
      else if(isset($_GET['a']) && $_GET['a']=='xemdapan'){
         include "include/xemdapan.php";
    }
    else{
         include "include/header.php";

    }
        // if(isset($_GET['account']) && $_GET['account']=='login')
        // 
                //     include "assets/include/header.php";
        //     include "assets/include/login.php";
        // }
        // else if(isset($_GET['account']) && $_GET['account']=='registe')
        // {
        //     include "assets/include/header.php";
        //     include "assets/include/registe.php";
        // }
        // else if(isset($_GET['user']) && $_GET['user']=='chonmon')
        // {
        //     include "assets/include/chonmon.php";
        // }
        // else if(isset($_GET['user']) && $_GET['user']=='chonde')
        // {
        //     include "assets/include/chonde.php";
        // }
        // else if(isset($_GET['user']) && $_GET['user']=='vaothi')
        // {
        //     include "assets/include/vaothi.php";
        // }
        // else{
        //     include "assets/include/header.php";;
        // }

    ?>
    
  <!--   <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script> -->
</body>

</html>