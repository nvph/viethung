<style type="text/css">
#blah{
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
}
.error {color: #FF0000;}
  /*input {
    text-security:disc;
    -webkit-text-security:disc;
    -mox-text-security:disc;
    }*/
  </style>
  <section class="content">
    <div class="row">
      <div class="col-md-12" style="margin-top: 50px;">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Tạo Tài Khoản</h3>
            <div class="pull-right box-tools">
              <a href="index.php?controller=pages&action=home" class="btn btn-primary">Quay lại</a>
            </div>
          </div>
          <form role="form" method="post" action="index.php?controller=admin&action=insertaccount"  enctype="multipart/form-data">
            <div class="box-body">
              <div class="col-md-6">
                <?php 
                // $string = 'helloworld';
                // echo $string . "<br>";
                // $md5 = md5($string);
                // echo $md5;
                // if(password_verify($string,$md5)){
                //   echo "valid"  . "<br>";
                // }else{
                //   echo "invalid" . "<br>";
                // }
                // echo "////////////////////////////" ."<br>";
                // $default = password_hash($string,PASSWORD_DEFAULT);
                // echo $default ."<br>";
                // if(password_verify($string,$default)){
                //   echo "valid"  . "<br>";
                // }else{
                //   echo "invalid" . "<br>";
                // }
                // echo password_hash($string,PASSWORD_BCRYPT) . "<br>";
                // echo password_hash($string,PASSWORD_ARGON2I) . "<br>";
                 ?>
                <div class="form-group">
                  <label for="exampleInputEmail1">Ảnh Đại Diện</label>
                  <input type='file' onchange="readURL(this);" class="form-control" name="image" style="border: none;outline:none;" />
                  <img id="blah" src="assets/image/user.png" alt="Chọn ảnh đại diện" width="150" height="150" />
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Mã Sinh Viên</label>
                  <input required="" type="text" name="msv" id="msv" value="" class="form-control" maxlength="7">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mật Khẩu</label>
                  <input required="" type="password" name="mk" id="mk" value="" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Họ Tên</label>
                  <input required="" type="text" name="hoten" id="hoten" value="" class="form-control" autofocus>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input required="" type="email" name="email" id="email" value="" class="form-control" autocomplete="nope" readonly onfocus="this.removeAttribute('readonly');">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Số Điện Thoại</label>
                  <input required="" type="text" name="sdt" id="sdt" value="" class="form-control" maxlength="11">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Địa Chỉ</label>
                  <input required="" type="text" name="diachi" id="diachi" value="" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Quyền</label>
                  <select name="group" class="form-control">
                    <option value="user">USER</option>
                    <option value="admin">ADMIN</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="box-footer">
              <input type="submit" name="submit" class="btn btn-primary" value="Tạo" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript">
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
          $('#blah')
          .attr('src', e.target.result)
          .width(150)
          .height(150);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>