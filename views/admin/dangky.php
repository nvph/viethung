<style type="text/css">
#blah{
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
}
.error {color: #FF0000;}
  </style>
  <section class="content">
    <div class="row">
      <div class="col-md-12" style="margin-top: 50px;">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Đăng Ký Tài Khoản</h3>
            <div class="pull-right box-tools">
              <a href="index.php?controller=pages&action=home" class="btn btn-primary">Quay lại</a>
            </div>
          </div>
          <form role="form" method="post" action="index.php?controller=admin&action=dktk"  enctype="multipart/form-data">
            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Ảnh Đại Diện</label>
                  <input type='file' onchange="readURL(this);" class="form-control" name="image" style="border: none;outline:none;" />
                  <img id="blah" src="assets/image/user.png" alt="Chọn ảnh đại diện" width="150" height="150" />
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Họ Tên</label>
                  <input required="" type="text" name="hoten" id="hoten" class="form-control" autofocus>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Số Điện Thoại</label>
                  <input required="" type="text" name="sdt" id="sdt" class="form-control" maxlength="11">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Địa Chỉ</label>
                  <input required="" type="text" name="diachi" id="diachi" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input required="" type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mật Khẩu</label>
                  <input required="" type="password" name="mk" id="mk" class="form-control">
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