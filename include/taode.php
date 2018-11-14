
<?php 
ob_start();
require('connect/connect.php');
require('Classes/PHPExcel.php');

if (isset($_POST['btnGui'])) {
  $mon = $_POST['mon'];

  $file = $_FILES['file']['tmp_name'];
  $objReader  = PHPExcel_IOFactory::createReaderForFile($file);
  $listWorkSheets = $objReader->ListWorksheetNames($file);
  foreach ($listWorkSheets as $name) {

  $objReader->setLoadSheetsOnly($name);
  $objExcel = $objReader->load($file);
  $sheetData = $objExcel->getActiveSheet()->toArray('null',true,true,true);

  $hightestRow = $objExcel->setActiveSheetIndex()->getHighestRow();



  for($row=2; $row<=$hightestRow ; $row++) { 
    $mach = $sheetData[$row]['A'];
    $cauhoi = $sheetData[$row]['B'];
    $hinhch = $sheetData[$row]['C'];
    $A = $sheetData[$row]['D'];
    $AH = $sheetData[$row]['E'];
    $B = $sheetData[$row]['F'];
    $BH = $sheetData[$row]['G'];
    $C = $sheetData[$row]['H'];
    $CH = $sheetData[$row]['I'];
    $D = $sheetData[$row]['J'];
    $DH = $sheetData[$row]['K'];
    $DA = $sheetData[$row]['L'];
    $DAH = $sheetData[$row]['M'];
    $sql = "INSERT INTO $mon(mach,cauhoi,hinhch,A,AH,B,BH,C,CH,D,DH,DA,DAH) VALUES ('$mach','$cauhoi','$hinhch','$A','$AH','$B','$BH','$C','$CH','$D','$DH','$DA','$DAH')";
    $sqlkq = mysqli_query($connect,$sql); 
  }
    
  }
  echo "Thanh cong";
  }

?>



<!DOCTYPE html>
<html lang="en">
  <title>Chọn Đề</title>
  <body>
    <div class="banner">
      <img src="" alt="">
    </div>
    <div class="container" >
      <?php include('menu.html') ?>
      <div class="content">
 
          <div class="col-md-2"></div>
          <div class="col-md-6" style="margin-top: 100px;">
            <div class="chontg">
          <form class="form-inline" method="POST" enctype="multipart/form-data">
              <button class="btn btn-primary">Môn</button>
              <select id="inputState" class="form-control" style="width: 50%;display: inline;" name="mon">
                <option selected value="sinhhoc">Sinh</option>
                <option>Toán</option>
                <option>Lý</option>
              </select>
              <div class="napde col-md-12">
                   
                      <div class="form-group">
                        <button class="btn btn-primary col-sm-3" name="btnGui">Thêm Đề</button>
                        <div class="col-sm-4">
                          <input type="file" class="form-control" name="file">
                        </div>
                      </div>
                  </form>
              </div>
            </div>
          </div>
          
      </div>
     </div> 
    </body>
  </html>