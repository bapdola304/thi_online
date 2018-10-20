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
            <h1 class="text-center">Đăng Ký</h1>


            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Họ Tên:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control"  name="hoten">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Tài Khoản:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="username">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Mật Khẩu:</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Nhập Lại Mật Khẩu:</label>
                <div class="col-sm-6">
                    <input type="password" class="form-control"  name="rppassword">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Ngày Sinh:</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control"  name="ngaysinh">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Email:</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-6">
                    <button type="submit" class="btn btn-primary" name="registe" style="font-size: 23px">Đăng Ký</button>
                </div>
            </div>
        </form>
</div>