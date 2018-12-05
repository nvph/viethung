<header class="main-header">
  <nav class="navbar navbar-static-top navbar-fixed-top">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown messages-menu">
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
        </li>
        <li class="dropdown messages-menu">
            <a href="index.php?controller=log&action=login">
              <i class="fa fa-sign-in"></i>
              <!-- <p class="btn btn-danger btn-sm">Đăng Nhập</p> -->
            </a>
        </li>
        <li class="dropdown messages-menu">
            <a href="index.php?controller=admin&action=dangky">
              <i class="fa fa-user-plus"></i>
              <!-- <p class="btn btn-warning btn-sm">Đăng Ký</p> -->
            </a>
        </li>
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>
