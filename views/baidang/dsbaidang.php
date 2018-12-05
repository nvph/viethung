<style type="text/css">
i{cursor: pointer;}
</style>
<section class="content-header">
  <h1>
    Bài Đăng
    <small>Danh sách</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Data tables</li>
  </ol>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary" style="background-color: #e6e6e6;">
        <div class="box-header">
          <h3 class="box-title">Bài Đăng</h3>
          <?php if (isset($_SESSION["account_admin"])){ ?>
            <div class="pull-right box-tools">
              <a href="<?php echo 'index.php?controller=baidang&action=taobaidang'; ?>"><button type="button" class="btn btn-warning">Thêm Bài Đăng</button></a>
            </div>
          <?php } ?>
        </div>
        <div class="box-body">
          <table id="example2" class="table table-hover">
            <thead>
              <tr>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($posts as $value) { ?>
                <tr>
                  <td class="col-xs-1"></td>
                  <td class="col-xs-8" style="vertical-align: middle;">
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
                  </td>
                  <td class="col-xs-3" style="vertical-align: middle;text-align: center;">
                    <?php if (isset($_SESSION["account_admin"])) { ?>
                      <a href="<?php echo 'index.php?controller=baidang&action=editbaidang&id=' . $value->id ?>" class="btn bg-teal btn-sm"><i class="fa fa-edit"></i>
                      </a>
                      <a class="btn bg-teal btn-sm removeItem" data-id="<?php echo $value->id; ?>"><i class="fa fa-times"></i>
                      </a>
                    <?php } ?>
                  </td>
                </tr>
              <?php } ?>
              <div class="modal modal-danger fade" id="modal-danger">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Warning</h4>
                      </div>
                      <div class="modal-body">
                        <p>Bạn có chắc chắn muốn xoá mục này ?</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Huỷ</button>
                        <input type="hidden" id="idBaidang" />
                        <a href="javascript:;" name="remove" class="btn btn-outline removeIdBtn">Xoá</a>
                      </div>
                    </div>
                  </div>
                </div>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-body">
          <div class="col-md-7">
            <div class="fb-comments" data-href="<?php echo 'https://www.facebook.com/dsmon/baidang'; ?>https://www.facebook.com/itnvp/" data-numposts="5" style="width: 800px;"></div>
          </div>
          <div class="col-md-5">
            <div class="fb-like" data-href="https://www.facebook.com/itnvp/" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true" style="right: 0"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <script>
    $(function () {
      $('.removeItem').on('click', function(){
        var id = $(this).attr('data-id');
        $('#modal-danger #idBaidang').empty().val(id);
        $('#modal-danger').modal('show');
      })
      $('#modal-danger').on('click','.removeIdBtn', function(){
        var id = $('#modal-danger #idBaidang').empty().val();
        window.location.href = 'index.php?controller=baidang&action=deletebaidang&id='+ id;
      } )
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
</body>
</html>
