<style type="text/css">
#blah{
  max-width: 100%;
  max-height: 100%;
  object-fit: contain;
}
  </style>
  <section class="content">
    <div class="row">
      <div class="col-md-12" style="margin-top: 50px;">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Tạo Tài Khoản</h3>
            <div class="pull-right box-tools">
              <a href="index.php?controller=user&action=dsuser" class="btn btn-primary">Quay lại</a>
            </div>
          </div>
          <form role="form" method="post" action="index.php?controller=user&action=updateuser"  enctype="multipart/form-data">
            <div class="box-body">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" name="id" value="<?php echo $posts->id ?>" style="display: none;">
                  <input type="text" name="image" value="<?php echo $posts->image ?>" style="display: none;">
                  <label for="exampleInputEmail1">Họ Tên</label>
                  <input required="" type="text" name="name" id="hoten" value="<?php echo $posts->hoten ?>" class="form-control" autofocus>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input required="" type="email" name="email" id="email" value="<?php echo $posts->email ?>" class="form-control" autocomplete="nope" readonly onfocus="this.removeAttribute('readonly');">
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputEmail1">Ảnh Đại Diện</label>
                  <input type='file' onchange="readURL(this);" class="form-control" name="image" style="border: none;outline:none;" />
                  <img id="blah" src="<?php //echo 'assets/image/'. $posts->image ?>" alt="Chọn ảnh đại diện" width="150" height="150" />
                </div> -->
                <div class="form-group">
                  <label for="exampleInputEmail1">Mã Sinh Viên</label>
                  <input required="" type="text" name="msv" id="msv" value="<?php echo $posts->msv ?>" class="form-control" maxlength="7">
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputPassword1">Mật Khẩu</label>
                  <input required="" type="password" name="mk" id="mk" value="<?php //echo $posts->mk ?>" class="form-control">
                </div> -->
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Số Điện Thoại</label>
                  <input required="" type="text" name="sdt" id="sdt" value="<?php echo $posts->sdt ?>" class="form-control" maxlength="11">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Địa Chỉ</label>
                  <input required="" type="text" name="diachi" id="diachi" value="<?php echo $posts->diachi ?>" class="form-control">
                </div>
              </div>
            </div>
            <div class="box-footer">
              <input type="submit" name="submit" class="btn btn-primary" value="Sửa" />
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