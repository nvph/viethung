<?php require_once('models/baidang.php');
$dsbd = Baidang::dsbaidang();
array('dsbd' => $dsbd);
?>
<style type="text/css">
  #zxc{width: 100%;height: 100%;}
  @media screen and (max-width: 400px) {
    #zxc{width: 0%;height: 0%;}
}
</style>
<section class="content-header">
  <h1>
    Tin Tức
    <small>NEW</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>_</h3>
          <p>Xem Lịch Học</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">Chi tiết <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-green">
        <div class="inner">
          <h3>_</h3>
          <p>Xem Lịch Thi</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">Chi tiết <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>_</h3>
          <p>Kết Quả Học Tập</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">Chi tiết <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-xs-6">
      <div class="small-box bg-red">
        <div class="inner">
          <h3>_</h3>
          <p>Công Nợ Sinh Viên</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">Chi tiết <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
  <div class="row">
    <section class="col-lg-6 connectedSortable">
      <div class="nav-tabs-custom">
        <ul class="nav nav-tabs pull-right">
          <li class="active"><a href="#revenue-chart" data-toggle="tab">Ngày đăng: 27-01-2013</a></li>
          <!-- <li><a href="#sales-chart" data-toggle="tab">Donut</a></li> -->
          <li class="pull-left header"><i class="fa fa-inbox"></i> Các địa chỉ website chính thức của Trường ĐHCN Việt - Hung </li>
        </ul>
        <div class="tab-content no-padding" style="height: 250px;">
          <div class="box-footer text-black">
            <div class="row">
              <div class="col-sm-1">
                <div class="clearfix">
                </div>
              </div>
              <div class="col-sm-2">
                <div class="clearfix">
                  <p>Trường ĐHCN Việt - Hung</p>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="clearfix">
                  <p>Tra cứu điểm thi Đại học</p>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="clearfix">
                  <p>Dành cho sinh viên</p>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="clearfix">
                  <p>Giảng viên</p>
                </div>
              </div>
              <div class="col-sm-2">
                <div class="clearfix">
                  <p>Hành chính điện tử</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-1">
                <div class="clearfix">
                </div>
              </div>
              <div class="col-sm-2">
                <div class="clearfix">
                  <img id="zxc" src="assets/image/icon_vh.png">
                </div>
              </div>
              <div class="col-sm-2">
                <div class="clearfix">
                  <img id="zxc" src="assets/image/icon_tk.png">
                </div>
              </div>
              <div class="col-sm-2">
                <div class="clearfix">
                  <img id="zxc" src="assets/image/icon_hs.png">
                </div>
              </div>
              <div class="col-sm-2">
                <div class="clearfix">
                  <img id="zxc" src="assets/image/icon_gv.png">
                </div>
              </div>
              <div class="col-sm-2">
                <div class="clearfix">
                  <img id="zxc" src="assets/image/icon_egov.png">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-2">
                <div class="clearfix">
                </div>
              </div>
              <div class="col-sm-2">
                <div class="clearfix">
                  <img id="zxc" src="assets/image/google1_60.jpg">
                </div>
              </div>
              <div class="col-sm-2">
                <div class="clearfix">
                  <img id="zxc" src="assets/image/fb60.png">
                </div>
              </div>
              <div class="col-sm-2">
                <div class="clearfix">
                  <img id="zxc" src="assets/image/missVH_60.png">
                </div>
              </div>
              <div class="col-sm-2">
                <div class="clearfix">
                  <img id="zxc" src="assets/image/youtube_60.png">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- .-->
      <div class="box box-primary">
        <div class="box-header">
          <i class="ion ion-clipboard"></i>
          <h3 class="box-title">Tin Tức</h3>
          <div class="box-tools pull-right">
            <ul class="pagination pagination-sm inline">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
        <div class="box-body">
          <ul class="todo-list">
            <li>
              <span class="handle">
                <i class="fa fa-ellipsis-v"></i>
                <i class="fa fa-ellipsis-v"></i>
              </span>
              <span class="text">Thông báo kế hoạch học GDQP - AN đợt 1 </span>
              <small class="label label-danger"><i class="fa fa-clock-o"></i>Ngày đăng: 01-10-2018</small>
              <div class="tools">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash-o"></i>
              </div>
            </li>
            <li>
              <span class="handle">
                <i class="fa fa-ellipsis-v"></i>
                <i class="fa fa-ellipsis-v"></i>
              </span>
              <!-- <input type="checkbox" value=""> -->
              <span class="text">QĐ cảnh báo học tập và buộc thôi học học kỳ 2 năm học 2017-2018 </span>
              <small class="label label-info"><i class="fa fa-clock-o"></i>Ngày đăng: 27-09-2018</small>
              <div class="tools">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash-o"></i>
              </div>
            </li>
            <li>
              <span class="handle">
                <i class="fa fa-ellipsis-v"></i>
                <i class="fa fa-ellipsis-v"></i>
              </span>
              <!-- <input type="checkbox" value=""> -->
              <span class="text">Thông báo thời gian phát bằng tốt nghiệp đợt 2 năm 2018 </span>
              <small class="label label-warning"><i class="fa fa-clock-o"></i>Ngày đăng: 27-09-2018</small>
              <div class="tools">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash-o"></i>
              </div>
            </li>
            <li>
              <span class="handle">
                <i class="fa fa-ellipsis-v"></i>
                <i class="fa fa-ellipsis-v"></i>
              </span>
              <!-- <input type="checkbox" value=""> -->
              <span class="text">HƯỚNG DẪN THU HỌC PHÍ QUA NGÂN HÀNG AGRIBANK . . . </span>
              <small class="label label-success"><i class="fa fa-clock-o"></i>Ngày đăng: 05-09-2018</small>
              <div class="tools">
                <i class="fa fa-edit"></i>
                <i class="fa fa-trash-o"></i>
              </div>
            </li>
          </ul>
        </div>
        <div class="box-footer clearfix no-border">
          <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>
        </div>
      </div>
      <!-- . -->
      <div class="box box-info">
        <div class="box-header">
          <i class="fa fa-envelope"></i>
          <h3 class="box-title">DANH SÁCH SINH VIÊN ĐẠT DANH HIỆU KHÁ, GIỎI, XUẤT SẮC - CẤP HỌC BỔNG HỌC KỲ 1(2017-2018) </h3>
          <div class="pull-right box-tools">
            <p>Ngày đăng: 03-04-2018</p>
          </div>
        </div>
        <div class="box-body">
          <ul>              
            <li><a href="">Quyết định danh hiệu khá, giỏi, xuất sắc</a></li>
            <li><a href="">Quyết định cấp học bổng khuyến khích học tập</a></li>
            <li><a href="">DANH SÁCH SV ĐẠT DANH HIỆU KHOA CƠ KHÍ</a></li>
            <li><a href="">DANH SÁCH SV ĐẠT HỌC BỔNG KHOA CƠ KHÍ</a></li>
            <li><a href="">DANH SÁCH SV ĐẠT DANH HIỆU KHOA ĐIỆN, ĐT</a></li>
            <li><a href="">DANH SÁCH SV ĐẠT HỌC BỔNG KHOA ĐIỆN, ĐT</a></li>
            <li><a href="">DANH SÁCH SV ĐẠT DANH HIỆU KHOA TIN</a></li>
            <li><a href="">DANH SÁCH SV ĐẠT HỌC BỔNG KHOA TIN</a></li>
            <li><a href="">DANH SÁCH SV ĐẠT DANH HIỆU KHOA KINH TẾ&QL </a></li>
            <li><a href="">DANH SÁCH SV ĐẠT HỌC BỔNG KHOA KINH TẾ&Q</a></li>
            <li><a href="">DANH SÁCH SV ĐẠT DANH HIỆU KHOA Ô TÔ</a></li>
            <li><a href="">DANH SÁCH SV ĐẠT HỌC BỔNG KHOA Ô TÔ</a></li>
            <li><a href="">DANH SÁCH SV ĐẠT DANH HIỆU KHOA XÂY DỰNG</a></li>
          </ul>
        </div>
        <div class="box-footer clearfix">
          <button type="button" class="pull-right btn btn-default" id="sendEmail"> XEM CHI TIẾT TẠI ĐÂY
            <i class="fa fa-arrow-circle-right"></i></button>
          </div>
        </div>
      </section>
<!-- =================================================================================================== -->
<!-- =================================================================================================== -->
<!-- =================================================================================================== -->
<!-- =================================================================================================== -->
<!-- =================================================================================================== -->
      <section class="col-lg-6 connectedSortable">
        <?php foreach ($dsbd as $value) { ?>
          <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <div class="pull-right box-tools">
                <p><?php echo $value->date; ?></p>
              </div>
              <br>
              <i class="fa fa-th"></i>
              <h3 class="box-title">
                <?php echo $value->title; ?>
              </h3>
            </div>
            <div class="box-body">
              <div class="box-footer no-border">
                <a><?php echo $value->content; ?></a>
              </div>
            </div>
          </div>
        <?php } ?>
        <div class="box box-solid bg-light-blue-gradient">
          <div class="box-header">
            <div class="pull-right box-tools">
              <p>Ngày đăng: 05-09-2018</p>
            </div>
            <i class="fa fa-map-marker"></i>
            <h3 class="box-title">
              DANH SÁCH HSSV ĐẠT DANH HIỆU KHÁ, GIỎI, XUẤT SẮC - CẤP HỌC BỔNG KHUYẾN KHÍCH HỌC TẬP KỲ 2 (2017-2018) 
            </h3>
          </div>
          <div class="box-body">
            <p>Hiện nay nhà trường đã phát tiền danh hiệu khá, giỏi, xuất sắc - cấp học bổng khuyến khích học tập cho HSSV khóa 38,39,40,41. Đối với HSSV đạt danh hiệu - học bổng khóa 39,40,41 nhận tiền trực tiếp từ giáo viên chủ nhiệm hoặc thư ký khoa. Đối với HSSV khóa 38 nhận tiền trực tiếp tại phòng TC-KT
            (chú ý: khi nhận tiền phải xuất trình CMTND) </p>
          </div>
          <div class="box-footer no-border">
            <div class="row">
              <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                <a href=""> Xem danh sách tại đây</a>
              </div>
            </div>
          </div>
        </div>
        <div class="box box-solid bg-teal-gradient">
          <div class="box-header">
            <div class="pull-right box-tools">
              <p>Ngày đăng: 24-08-2018</p>
            </div>
            <br>
            <i class="fa fa-th"></i>
            <h3 class="box-title">
              KẾ HOẠCH KHÁM SỨC KHỎE SINH VIÊN KHÓA 42 - NĂM 2018 
            </h3>
          </div>
          <div class="box-body border-radius-none">
          </div>
          <div class="box-footer no-border">
            <div class="row">
              <div class="col-xs-6 text-center" style="border-right: 1px solid #f4f4f4">
                <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                data-fgColor="#39CCCC">
                <div class="knob-label"><a href="">Xem chi tiết 1</a></div>
              </div>
              <div class="col-xs-6 text-center" style="border-right: 1px solid #f4f4f4">
                <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                data-fgColor="#39CCCC">
                <div class="knob-label"><a href="">Xem chi tiết 2</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="box box-solid bg-green-gradient">
          <div class="box-header">
            <div class="pull-right box-tools">
              <div class="btn-group">
                <p>Ngày đăng: 06-08-2018</p>
              </div>
            </div>
            <br>
            <i class="fa fa-calendar"></i>
            <h3 class="box-title">THÔNG BÁO NHẬN TIỀN HỖ TRỢ CHI PHÍ HỌC TẬP NĂM 2017 </h3>
          </div>
          <div class="box-body">
            <p>1, Đối tượng: Sinh viên là dân tộc thiểu số thuộc hộ nghèo, cận nghèo năm 2017 được cấp tiền hỗ trợ chi phí học tập năm 2017 (Có danh sách kèm theo) đến phòng Tài chính - kế toán nhận tiền. 
            Khi đến nhận tiền tại phòng TC-KT cần mang theo:<br>
            - Chứng minh thư nhân dân hoặc thẻ căn cước. <br>
            - Thẻ sinh viên. <br>
            2, Địa điểm nhận tiền: Phòng TC-KT, nhà 5 tầng (mới) - Khu A - Số 16, Đường Hữu Nghị, Phường Xuân Khanh, Thị Xã Sơn Tây, TP. Hà Nôi. Điện thoại: 0975.809.358 - 0975.304.388</p>
          </div>
        </div>
        <div class="box box-solid bg-light-blue-gradient">
          <div class="box-header">
            <div class="pull-right box-tools">
              <p>Ngày đăng: 27-07-2018</p>
            </div>
            <i class="fa fa-map-marker"></i>
            <h3 class="box-title">
              Thông báo về việc lấy giấy chứng nhận tốt nghiệp tạm thời và kết quả học tập toàn khóa 
            </h3>
          </div>
          <div class="box-body">
            <p>1. Đối tượng:
              Học sinh, sinh viên khóa 38 ĐHCQ, 39 TCCN 36 tháng, 40 TCCN 24 tháng, và các khóa cũ đủ điều kiện tốt nghiệp đợt 2 năm 2018.
              <br>
              2. Địa điểm:
              Phòng Đào tạo - Khoa học Công nghệ , Nhà 5 tầng ( mới) - Khu A - Số 16, Đường Hữu Nghị, Phường Xuân Khanh, Thị Xã Sơn Tây, TP. Hà Nôi.
            SĐT: 0243.3838063</p>
          </div>
        </div>
      </section>
  </div>
</section>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-body">
          <div class="col-md-7">
            <div class="fb-comments" data-href="https://www.facebook.com/" data-numposts="5" style="width: 800px;"></div>
          </div>
          <div class="col-md-5">
            <div class="fb-like" data-href="https://www.facebook.com/itnvp/" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true" style="right: 0"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>