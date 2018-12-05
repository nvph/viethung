<?php
$error = '';
if (isset($_POST['submit'])){
  $msv = isset($_POST["msv"]) ? $_POST["msv"] : '';
  $mk = isset($_POST["mk"]) ? $_POST["mk"] : '';
  $data = Checklog::checkuser();
  array('data' => $data);
  foreach ($data as $value) {
    if (($msv == $value->msv || $msv == $value->email) && password_verify($mk,$value->mk)) {
      $_SESSION['account_user'] = $_POST["msv"];
      echo "<script type='text/javascript'>alert('" . $_SESSION["account_user"] . "');</script>";
      header('Location: index.php?controller=pages&action=home');
    }
  }
  if ($_POST["msv"] == "" || $_POST["mk"]=="") {
    $error = '<div class="alert alert-warning alert-dismissible">' . 
    '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">' . '&times;' . '</button>'
    . '<h4>' . '<i class="icon fa fa-warning">' . '</i>' . 'Alert!' . '</h4>' 
    . 'Bạn nhập thiếu'
    . '</div>';
  }else{
    $error = '<div class="alert alert-danger alert-dismissible">' . 
    '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">' . '&times;' . '</button>'
    . '<h4>' . '<i class="icon fa fa-ban">' . '</i>' . 'Alert!' . '</h4>' 
    . 'Tài Khoản hoặc Mật Khẩu Sai'
    . '</div>';
  }
}
?>
<section class="content">
  <div class="login-box">
    <div class="login-logo">
      <a href="index.php?controller=pages&action=home"><img src="assets/image/vh.png" width="100%" height="100%"></a>
    </div>
    <div class="login-box-body">
      <p class="login-box-msg">Đăng nhập với mã sinh viên</p>
      <form action="" method="post">
        <div class="form-group has-feedback">
          <input type="msv" name="msv" class="form-control" placeholder="Mã Sinh Viên">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="mk" class="form-control" placeholder="Mật Khẩu">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div>
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat" name="submit">Sign In</button>
          </div>
        </div>
        <?php if($error != ''){ ?>
          <?php echo $error; ?>
        <?php } ?>
      </form>
      <a href="#">I forgot my password</a><br>
      <a href="index.php?controller=log&action=loginadmin" style="color: red">Đăng nhập với ADMIN</a><br>
    </div>
  </div>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' 
      });
    });
  </script>
</section>
