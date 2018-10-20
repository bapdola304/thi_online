
<?php
if(!($_COOKIE["mycookie"])){
  $expiry = time() + 60;
  setcookie("mycookie", "$expiry", $expiry);
}

// get
 ?>


<!DOCTYPE html>
<html lang="en">
    <title>Vào Thi</title>
  
    <!-- <link rel="stylesheet" href="form.css"> -->
  </head>
  <body>
    <input type="hidden" id="thoigian" value="<?php  echo round(($_COOKIE["mycookie"] - time())/60,1); ?>">
    <div class="container" style="width: 1600px;">
          <?php include('menu.html') ?>
        <form action="index.php?a=ketqua" method="POST">
      <div class="content">
        <div class="col-md-8 left">
          <h2>Kỳ thi THPTQG 2018 - Đề thi minh hoạ</h2>
          <?php for($i=1; $i<=20; $i++) {?>
          <div class="motcau" value="<?php echo $i ?>">
            <input type="hidden" id="valcau<?php echo $i ?>" value="<?php echo $i ?>">
            <div class="cau">
              <p style="width: 150px">Câu <?php echo $i ?>: </p>
            </div>
            <div class="dethi">
              <img src="http://onthidaihoc.online/images/Screen_Shot_20180320_at_12332_PM.png" alt="" width="900" height="80">
            </div>
            <div class="traloi">
              <div class="traloi<?php echo $i ?>">
                
                
                <a href="#">
                  <i data-id="valcau<?php echo $i ?>" />
                </a>
                
                
                <label class="radio-inline"  data-id="valcau<?php echo $i ?>">
                  <input type="radio" name="<?php echo $i ?>" id="cau1" data-id="valcau<?php echo $i ?>">A. 20
                </label>
                <label class="radio-inline" data-id="valcau<?php echo $i ?>">
                  <input type="radio" name="<?php echo $i ?>" id="cau1" data-id="valcau<?php echo $i ?>">B. 30
                </label>
                <label class="radio-inline" data-id="valcau<?php echo $i ?>">
                  <input type="radio" name="<?php echo $i ?>" id="cau1" data-id="valcau<?php echo $i ?>">C. 40
                </label>
                <label class="radio-inline" data-id="valcau<?php echo $i ?>">
                  <input type="radio" name="<?php echo $i ?>" id="cau1" data-id="valcau<?php echo $i ?>">D. 50
                </label>
              </div>
            </div>
            
          </div>
          <?php } ?>
        </div>
        <div class="col-md-3 right" style="position: fixed;right: 80px;width: 475px;background: #f5f5f5;">
          <p>Chào Bạn:  Nguyen Van Lanh</p>
          
          <div class="thi">
            
            <div class="content-thi">
              <p>Kiểm Tra Môn:  Toan</p>
              <p>Thời Gian Làm Bài:  60p</p>
              <p>Tổng Số Câu Hỏi: 40 câu</p>
              <div id="countdown">
                <p>Thời Gian</p>
                <h1 id="time">00:00</h1>
              </div>
              <div class="list-cauhoi">
                <ul class="text-center">
                  <?php for($i=1; $i<=20; $i++) {?>
                  <li class="cau<?php echo $i ?>">Câu <?php echo $i ?></li>
                  <?php } ?>
                </ul>
              </div>
              <div class="col-md-12 nopbai">
                <button class="btn btn-primary col-md-6" id="nopbai">Nộp Bài</button>
              </div>
            </div>
          </div>
        </div>

   </form>  
      </div>
    </div>
  </body>
  <script type="text/javascript">
  function tick(){
  // grab the h1
  var timeDisplay = document.getElementById("time");
  // turn the seconds into mm:ss
  var min = Math.floor(secondsRemaining / 60);
  var sec = secondsRemaining - (min * 60);
  //add a leading zero (as a string value) if seconds less than 10
  if (sec < 10) {
  sec = "0" + sec;
  }
   if (min < 10) {
  min = "0" + min;
  }
  // concatenate with colon
  var message = min.toString() + ":" + sec;
  // now change the display
  timeDisplay.innerHTML = message;
  //subtract from seconds remaining
  secondsRemaining--;
  if(min ==0 && sec==0){
    clearInterval(intervalHandle);
  swal({
    title: "Hết Giờ",
    text: "Hệ Thống Tự Động Nộp Bài",
    type: "warning",
    confirmButton: false,
    closeOnConfirm: false
})
  function nopbai() {
   $('#nopbai').click();
}
  setTimeout(nopbai,2000);
  }
  }
  function startCountdown(){
    var thoigian = document.getElementById("thoigian").value;
  var minutes = thoigian;
  secondsRemaining = minutes * 60;
  
  //every second, call the "tick" function
  // have to make it into a variable so that you can stop the interval later!!!
  intervalHandle = setInterval(tick, 1000);
  }
  window.onload = function(){
  startCountdown();
    swal({
      title: "Chú Ý",
      text: "Bạn đang thực hiện bài thi. Vui lòng không bấm F5 hoặc tải lại trình duyệt. Để tránh bị mất kết quả đang thi",
      type: "warning"
    })
  }
  </script>
    
  <script type="text/javascript">
  $(document).ready(function(){
  $('.traloi').mousemove(function(e){
  var id1 = e.target.dataset.id;
  var id = $('#'+id1).val();
  console.log(id);
  
  $('.traloi' + id).click(function(){
  
  console.log(id);
  $('.cau'+id).addClass('active-cauhoi');
  });
  });
  });
  </script>

</html>