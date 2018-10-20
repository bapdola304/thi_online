
<?php 
if(!isset($_SESSION["username"])){
  header("Location: index.php?a=login");
}

?>


<!DOCTYPE html>
<html lang="en">
    <title>Chọn Môn</title>
  <body>
             <?php include('menu.html') ?>
    <div class="container" style="width: 1600px;">
     


      <div class="content">
        <div class="col-md-8 left">
          <div class="col-md-4 item">
            <a href="index.php?a=chonde">
            <img src="http://onthidaihoc.online//media/com_vquiz/vquiz/images/photoupload/thumbs/thumb_1521529921_mon-toan.png" width="300">
            <p>Môn Toán</p>
            </a>
          </div>
          <div class="col-md-4 item">
            <img src="http://onthidaihoc.online//media/com_vquiz/vquiz/images/photoupload/thumbs/thumb_1521529921_mon-toan.png" width="300">
            <p>Môn Toán</p>
          </div>
          <div class="col-md-4 item">
            <img src="http://onthidaihoc.online//media/com_vquiz/vquiz/images/photoupload/thumbs/thumb_1521529921_mon-toan.png" width="300">
            <p>Môn Toán</p>
          </div>
          <div class="col-md-4 item">
            <img src="http://onthidaihoc.online//media/com_vquiz/vquiz/images/photoupload/thumbs/thumb_1521529921_mon-toan.png" width="300">
            <p>Môn Toán</p>
          </div>
          <div class="col-md-4 item">
            <img src="http://onthidaihoc.online//media/com_vquiz/vquiz/images/photoupload/thumbs/thumb_1521529921_mon-toan.png" width="300">
            <p>Môn Toán</p>
          </div>
          <div class="col-md-4 item">
            <img src="http://onthidaihoc.online//media/com_vquiz/vquiz/images/photoupload/thumbs/thumb_1521529921_mon-toan.png" width="300">
            <p>Môn Toán</p>
          </div>
          <div class="col-md-4 item">
            <img src="http://onthidaihoc.online//media/com_vquiz/vquiz/images/photoupload/thumbs/thumb_1521529921_mon-toan.png" width="300">
            <p>Môn Toán</p>
          </div>
          <div class="col-md-4 item">
            <img src="http://onthidaihoc.online//media/com_vquiz/vquiz/images/photoupload/thumbs/thumb_1521529921_mon-toan.png" width="300">
            <p>Môn Toán</p>
          </div>
        </div>
        <div class="col-md-3 right">
          <p>Thông Tin Thí Sinh</p>
            <p>Chào Bạn: <?php echo $_SESSION["username"]; ?></p>
          <div class="tintuc">
    
            <div class="content-tintuc">
                <p>BÀI THI PHỔ BIẾN MÔN TOÁN</p>
              <div class="tin">
                <a href="#"><p>Kỳ thi THPTQG 2018 - Đề thi minh hoạ lần 1 (Bộ GD&DT) - môn Toán</p></a>
              </div>

                <div class="tin">
                <a href="#"><p>Kỳ thi THPTQG 2018 - Đề thi minh hoạ lần 1 (Bộ GD&DT) - môn Toán</p></a>
              </div>

                <div class="tin">
                <a href="#"><p>Kỳ thi THPTQG 2018 - Đề thi minh hoạ lần 1 (Bộ GD&DT) - môn Toán</p></a>
              </div>




            </div>
        </div>

          </div>
          
    
      </div>
    </div>
  </body>
</html>