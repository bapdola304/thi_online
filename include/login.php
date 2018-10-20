
<?php
	include "checklogin.php";

?>
<!-- <div class="login-dark">
        <form method="post" action="#">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="user" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" name="pass" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="login">Log In</button></div>
        </form>
    </div> -->
    <?php
    include('head.html');
    include('menu.html');
    ?>

        <div class="container">
               <?php
                if(isset($_POST['registe'])){
                include "checkregister.php";
                }
            ?>
        <form class="form-horizontal" action="#" method="post">
            <h1 class="text-center">Đăng Nhập</h1>


 
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Tài Khoản:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="user">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Mật Khẩu:</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="pass">
                </div>
       </div>
            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-6">
                    <button type="submit" class="btn btn-primary" name="login" style="font-size: 23px">Đăng Nhập</button>
                </div>
            </div>
        </form>
</div>