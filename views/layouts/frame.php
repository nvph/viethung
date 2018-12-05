<!DOCTYPE html>
<html>
<head>
  <title><?= @$title ?></title>
  <?php include_once 'default/head.php'; ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2&appId=1758043161184653&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <div class="wrapper">
    <?php 
    if (isset($_SESSION["account_user"]) || isset($_SESSION["account_admin"])){
      include_once 'loged/menu.php';
      include_once 'loged/menutab.php';
    }else{
      include_once 'default/menu.php';
      include_once 'default/menutab.php';
    }
    ?>
    <div class="content-wrapper">
    	<?= @$content ?>
    </div>
    <?php include_once 'default/footer.php' ?>
  </div>
</body>
</html>