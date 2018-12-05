<?php 
require_once('models/account.php');
$user = "";
if (isset($_SESSION["account_user"])) {
  $user = Account::find_user();
  array('user' => $user);
}elseif (isset($_SESSION["account_admin"])) {
  $user = Account::find_admin();
  array('user' => $user);
}
?>
<style type="text/css">
  #avatar{object-fit: contain;}
</style>
<header class="main-header">
  <nav class="navbar navbar-static-top navbar-fixed-top">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <script type="text/javascript">
            var now = new Date(<?php echo time() * 1000 ?>);
            function startInterval(){  
              setInterval('updateTime();', 1000);  
            }
              startInterval();//start it right away
              function updateTime(){
                var thoigian = new Date();
                var amOrPm = (thoigian.getHours() < 12) ? "AM" : "PM";
                var gio = thoigian.getHours();
                var phut = thoigian.getMinutes();
                var giay = thoigian.getSeconds();
                document.getElementById("dongho").innerHTML= gio+" : "+phut+" : "+giay + " * " + amOrPm;
              } 
            </script>
            <a id="dongho" class="dropdown-toggle"></a>
            <span class="hidden-xs" id="dongho"></a>
          </li>
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
  <li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <img src="<?php echo 'assets/image/' . $user->image; ?>" class="user-image" id="avatar" alt="User Image">
      <span class="hidden-xs"><?php echo $user->hoten; ?></span>
    </a>
    <ul class="dropdown-menu">
      <li class="user-header">
        <img src="<?php echo 'assets/image/' . $user->image ?>" class="img-circle" id="avatar" alt="User Image">
        <p><?php echo $user->hoten; ?></p>
      </li>
      <li class="user-footer">
        <div class="pull-left">
          <a href="#" class="btn btn-default btn-flat">Profile</a>
        </div>
        <div class="pull-right">
          <a href="index.php?controller=log&action=logout" class="btn btn-default btn-flat">Sign out</a>
        </div>
      </li>
    </ul>
  </li>
  <li>
    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
  </li>
</ul>
</div>
</nav>
</header>
