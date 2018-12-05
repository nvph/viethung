<style type="text/css">
#anhgt{
  width: 150px;
  height: 150px;
  object-fit: contain;
}
th,td{text-align: center;}
#mid{line-height:35px;}
i{cursor: pointer;}
</style>
<section class="content-header">
  <h1>
    Bài Giảng
    <small>Danh sách</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Data tables</li>
  </ol>
</section>
<?php $hp = $_GET["idhocphan"]; ?>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Môn học</h3>
          <?php if (isset($_SESSION["account_admin"])){ ?>
            <div class="pull-right box-tools">
              <a href="<?php echo 'index.php?controller=monhoc&action=taomonhoc&hp=' . $hp; ?>"><button type="button" class="btn btn-warning">Thêm Môn Học</button></a>
            </div>
          <?php } ?>
        </div>
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>Mã Môn Học</th>
                <th>Tên Môn Học</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($posts as $post) { ?>
                <tr> 
                  <td class="col-xs-2" style="max-width: 100px;vertical-align: middle;"><p id="mid"><?php echo $post->code; ?>  </p></td>
                  <td class="col-xs-6" style="max-width: 100px;vertical-align: middle;"><p id="mid"><?php echo $post->name; ?>  </p></td>
                  <td class="col-xs-3" style="max-width: 50px;vertical-align: middle;">
                    <p id="mid">
                      <a href="<?php echo 'index.php?controller=baigiang&action=show&mon='. $post->code; ?>">Bài Giảng</a>
                    </p>
                    <?php if (isset($_SESSION["account_admin"])) { ?>
                      <div class="tools" style="margin-top: -10px;">
                        <a href="<?php echo 'index.php?controller=monhoc&action=editmonhoc&idmonhoc='. $post->id . '&hocphan=' . $hp; ?>"><i class="fa fa-edit"></i></a>
                        <i class="fa fa-trash-o removeItem" data-id="<?php echo $post->id; ?>" style="margin-left: 15px" ></i>
                      </div>
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
                        <input type="hidden" id="idBaigiang" />
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
              <div class="fb-comments" data-href="<?php echo 'https://www.facebook.com/dsmon/' . $hp ?>https://www.facebook.com/itnvp/" data-numposts="5" style="width: 800px;"></div>
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
        $('#modal-danger #idBaigiang').empty().val(id);
        $('#modal-danger').modal('show');
      })
      $('#modal-danger').on('click','.removeIdBtn', function(){
        var id = $('#modal-danger #idBaigiang').empty().val();
        window.location.href = 'index.php?controller=monhoc&action=deletemonhoc&idmonhoc='+ id;
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
