<header>
    <div class="wallpaper" style="height: 883px; background-image: url(./img/ne.png);">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand" href="index.php"><i class="glyphicon glyphicon-camera"></i><span class="text-title">LUYỆN THI TRỰC TUYẾN&nbsp;</span></a><button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li role="presentation"><a href="#">Giới Thiệu</a></li>
                        <li role="presentation"><a href="#">Hướng Dẫn</a></li>
                        <li role="presentation"><a href="#">Tin Tức</a></li>
                        <?php
                        if(isset($_SESSION['username'])){
                        ?>
                        <li role="presentation"><a href="#"><?php echo $_SESSION['username']?></a></li>
                        <li role="presentation"><a href="include/logout.php">Logout</a></li>
                        <?php
                        }
                        else
                        {
                        ?>
                        <li role="presentation"><a href="index.php?a=login">Đăng Nhập</a></li>
                        <li role="presentation"><a href="index.php?a=register">Đăng Ký Tài Khoản</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="title text-center col-md-12">
                <h1>Hệ Thống Luyện Thi Trực Tuyến</h1>
            </div>
            <div class="col-md-2"></div>
            <div class="thi">
                <a href="index.php?a=chonmon"><button class="btn btn-primary">Vào Thi Ngay</button></a>
            </div>
        </div>
    </div>
</header>