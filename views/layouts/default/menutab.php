<?php require_once('models/hocphan.php');
$dshp = Hocphan::dshocphan();
array('dshp' => $dshp);
?>
<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <a href="index.php?controller=pages&action=home"><img src="assets/image/logo-2.png" width="100%" height="48"></a>
    </div>
    <form action="index.php?controller=baigiang&action=timkiem" method="post" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="timkiem" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="">
        <a href="index.php?controller=pages&action=home">
          <i class="fa fa-home"></i> <span>Trang Chủ</span>
          <span class="pull-right-container">
            <small class="label pull-right bg-green">new</small>
          </span>
        </a>
      </li>
      <li class="active treeview menu-open">
        <a href="#">
          <i class="fa fa-calendar"></i>
          <span>Học phần</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <?php foreach ($dshp as $value) { ?>
            <li><a href="index.php?controller=monhoc&action=dsmonhoc&idhocphan=<?php echo $value->id; ?>">
              <i class="fa fa-circle-o"></i><?php echo $value->name ?></a>
            </li>
          <?php } ?>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-th"></i> <span>Tin tức - Thông báo</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-indent"></i>
          <span>Văn bản pháp quy</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>CT Đào Tạo</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-folder"></i> <span>Dành cho phụ huynh</span>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i>Tra cứu thông tin</a></li>
        </ul>
      </li>

      <li class="header">LABELS</li>
      <!-- <li><a href="index.php?controller=monhoc&action=taomonhoc"><i class="fa fa-circle-o text-aqua"></i> <span>Tạo Môn Học</span></a></li>
      <li><a href="index.php?controller=admin&action=createuser"><i class="fa fa-circle-o text-yellow"></i> <span>Tạo Tài Khoản</span></a></li> -->
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Danger</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
    </ul>
  </section>
</aside>

<aside class="control-sidebar control-sidebar-dark">
  <div class="tab-content">
    <div class="tab-pane active" id="control-sidebar-home-tab">
    </div>
    <div class="tab-pane" id="control-sidebar-settings-tab">

    </div>
  </div>
</aside>