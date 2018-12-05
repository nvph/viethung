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
                <i class="fa fa-circle-o"></i><?php echo $value->name; ?></a>
              </li>
            <?php } ?>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Thông Tin Sinh Viên</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Xem Lịch Theo Tuần</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-indent"></i>
            <span>Thông Tin Điểm Danh</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Kết Quả Học Tập</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Công Nợ Sinh Viên</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Xem Lịch Thi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Đăng Ký Thi Lại</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-blue">2</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Đề Xuất Biểu Mẫu</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Danh sách phiếu khảo sát</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li><a href="#"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <?php if (isset($_SESSION["account_admin"])){ ?>
          <li><a href="index.php?controller=hocphan&action=dshocphan"><i class="fa fa-circle-o text-red"></i> <span>Danh Sách Học Phần</span></a></li>
          <li><a href="index.php?controller=monhoc&action=showall"><i class="fa fa-circle-o text-yellow"></i> <span>Danh Sách Môn Học</span></a></li>
          <li><a href="index.php?controller=user&action=dsuser"><i class="fa fa-circle-o text-aqua"></i> <span>Quản lý sinh viên</span></a></li>
          <li><a href="index.php?controller=baidang&action=dsbaidang"><i class="fa fa-circle-o text-yellow"></i> <span>Quản lý bài đăng</span></a></li>
        <?php } ?>
        <!-- <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
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