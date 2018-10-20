

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
        <form action="index.php?a=vaothi" method="POST">
        <div class="col-md-2"></div>
        <div class="col-md-6" style="margin-top: 100px;">
          <div class="chontg">
            <button class="btn btn-primary">Thời Gian</button>
            <select id="inputState" class="form-control" style="width: 50%;display: inline;">
              <option selected>30p</option>
              <option>60p</option>
              <option>90p</option>
            </select>
            <div class="table1 col-md-12">
              <h3>Chọn Chương</h3>
              <table class="table table-bordered">
                <tbody>
                   <tr>
                    <td> <input type="radio" name="ex" checked="checked"></td>
                    <td>Work</td>
                    
                  </tr>
                  <tr>
                    <td> <input type="radio" name="ex"></td>
                    <td>Excel</td>
                    
                  </tr>
                  <tr>
                    <td> <input type="radio" name="ex"></td>
                    <td>Powerpoint</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="margin-top: 200px;">

            <button class="btn btn-primary btn-lg" name="kiemtra">Kiểm Tra Ngay</button>
        
        </div>
           </form>
      </div>
 
    </body>
  </html>