<?php
$error = '';
if (isset($_POST['submit'])){
  $name = isset($_POST["name"]) ? $_POST["name"] : '';
  $pass = isset($_POST["pass"]) ? $_POST["pass"] : '';
  $data = Checklog::checkadmin();
  array('data' => $data);
  foreach ($data as $value) {
    if ($name == $value->msv && $pass == $value->mk) {
      $_SESSION['account_admin'] = $name;
      header('Location: index.php?controller=pages&action=home');
    }
  }
  if ($_POST["name"] == "" || $_POST["pass"]=="") {
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
<body class="hold-transition lockscreen">
  <div class="lockscreen-wrapper">
    <div class="lockscreen-logo">
      <a href="index.php?controller=pages&action=home"><b>Admin</b></a>
    </div>
    <div class="lockscreen-name">
    </div>
    <div class="lockscreen-item">
      <form class="lockscreen-credentials" action="" method="post">
        <div class="input-group">
          <input type="text" name="name" class="form-control" placeholder="username" readonly onfocus="this.removeAttribute('readonly');">
          <br>
          <input type="password" name="pass" class="form-control" placeholder="password" readonly onfocus="this.removeAttribute('readonly');">
          <div class="input-group-btn">
            <button type="submit" name="submit" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
          </div>
        </div>
        <a href="index.php?controller=log&action=login" style="color: red">Đăng nhập với USER</a>
      </form>
      <?php if($error != ''){ ?>
        <?php echo $error; ?>
      <?php } ?>
    </div>
  </div>
</body>
</html>
