<!DOCTYPE html>
<html lang="en">
  <title>Vào Thi</title>
  
  <!-- <link rel="stylesheet" href="form.css"> -->
</head>
<body>
  <input type="hidden" id="thoigian" value="<?php
  if(!isset($_COOKIE['mycookie'])){
  echo 60;
  
  }else{
  echo round(($_COOKIE['mycookie'] - time())/60 - 1,1);
  }
  ?>">
  <?php $mangcauhoi = $_SESSION["mangcauhoi"];
  $i=0;

   ?>
  <div class="container" style="width: 1390px;">
    <?php include('menu.html') ?>
    <div class="content">
      <div class="col-md-8 left">
        <h2>Kỳ thi THPTQG 2018 - Đề thi minh hoạ</h2>
        <?php
            foreach ($mangcauhoi as $row) {
              
            
              $i++;
      ?>
          <div class="row">
        <div class="motcau" value="<?php echo $i ?>">
          <input type="hidden" id="valcau<?php echo $i ?>" value="<?php echo $i ?>">
          <div class="cau">
            <p style="width: 150px">Câu <?php echo $i ?>: </p>
            <h3><b>Dap An Dung: <?php echo $row['DA'] ?></b></h3>
          </div>
          <form action="index.php?a=ketqua" method="POST">
            <div class="dethi col-md-12">
              <div class="decauhoi col-md-5"><?php echo $row['cauhoi']; ?></div>
              <div class="dehinh col-md-7">
                <img src="../hinh/<?php echo $row['hinhch']; ?>" alt="" width="100%" height="100%">
              </div>
            </div>
            <div class="traloi">
              <div class="traloi<?php echo $i ?>">               
                <a href="#">
                  <i data-id="valcau<?php echo $i ?>" />
                </a>
                
                <div class="item-traloi col-md-3" style="padding:0">
                  <label class="radio-inline"  data-id="valcau<?php echo $i ?>">
                    <input type="radio" name="<?php echo $row['id_sinhhoc'] ?>" id="cau1" data-id="valcau<?php echo $i ?>" value="A" class="option-input radio">A
                  </label>
                  <div class="text-traloi col-md-6" style="padding:0">
                   <?php echo $row['A']; ?>
                  </div>
                  <div class="img-traloi col-md-6 " style="padding:0">
                    <img src="../hinh/<?php echo $row['AH']; ?>" alt="" width="100%" height="100%">
                  </div>
                </div>

                 <div class="item-traloi col-md-3" style="padding:0">
                  <label class="radio-inline"  data-id="valcau<?php echo $i ?>">
                    <input type="radio" name="<?php echo $row['id_sinhhoc'] ?>" id="cau1" data-id="valcau<?php echo $i ?>" value="B" class="option-input radio">B
                  </label>
                  <div class="text-traloi col-md-6" style="padding:0">
                    <?php echo $row['B']; ?>
                  </div>
                  <div class="img-traloi col-md-6 " style="padding:0">
                    <img src="../hinh/<?php echo $row['AH']; ?>" alt="" width="100%" height="100%">
                  </div>
                </div>

                 <div class="item-traloi col-md-3" style="padding:0">
                  <label class="radio-inline"  data-id="valcau<?php echo $i ?>">
                    <input type="radio" name="<?php echo $row['id_sinhhoc'] ?>" id="cau1" data-id="valcau<?php echo $i ?>" value="C" class="option-input radio">C
                  </label>
                  <div class="text-traloi col-md-6" style="padding:0">
                    <?php echo $row['C']; ?>
                  </div>
                  <div class="img-traloi col-md-6 " style="padding:0">
                    <img src="../hinh/<?php echo $row['AH']; ?>" alt="" width="100%" height="100%">
                  </div>
                </div>

                 <div class="item-traloi col-md-3" style="padding:0">
                    <label class="radio-inline"  data-id="valcau<?php echo $i ?>">
                      <input type="radio" name="<?php echo $row['id_sinhhoc'] ?>" id="cau1" data-id="valcau<?php echo $i ?>" value="C" class="option-input radio">D
                    </label>
                    <div class="text-traloi col-md-6" style="padding:0">
                     <?php echo $row['D']; ?>
                    </div>
                    <div class="img-traloi col-md-6 " style="padding:0">
                     <img src="../hinh/<?php echo $row['AH']; ?>" alt="" width="100%" height="100%">
                    </div>
                  </div>
              </div>



</div>
              
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="col-md-3 right" style="position: fixed;right: 84px;width: 400px;background: #f5f5f5;">
          <p>Chào Bạn:  Nguyen Van Lanh</p>
          
          <div class="thi">
            
            <div class="content-thi">
              <p>Kiểm Tra Môn:  Toan</p>
              <p>Thời Gian Làm Bài:  60p</p>
              <p>Tổng Số Câu Hỏi: 25</p>
              <div id="countdown">
                <p>Thời Gian</p>
                <h1 id="time">00:00</h1>
              </div>
              <div class="list-cauhoi">
                <ul class="text-center">
                  <?php for($i=1; $i<=$socau; $i++) {?>
                  <li class="cau<?php echo $i ?>">Câu <?php echo $i ?></li>
                  <?php } ?>
                </ul>
              </div>
              <div class="col-md-12 nopbai" style="opacity: 0">
                <button class="btn btn-primary col-md-6" type="submit" id="nopbai" name="nopbai" value="Nộp Bài">
                
                
              </div>
            </form>
             <div class="col-md-12 nopbai">
                <button class="btn btn-primary col-md-6" id="kt">Nộp Bài</button>
              </div>
          </div>
        </div>
      </div>
      
    </div>
    
  </div>
</body>