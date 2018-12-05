<style type="text/css">
.error {color: #FF0000;}
</style>
<section class="content">
	<div class="row">
		<div class="col-md-12" style="margin-top: 50px;">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Sửa Học Phần</h3>
					<div class="pull-right box-tools">
						<a href="index.php?controller=hocphan&action=dshocphan"><button type="button" class="btn btn-warning">Quay lại</button></a>
					</div>
				</div>
				<form role="form" method="post" action="index.php?controller=hocphan&action=updatethocphan"  enctype="multipart/form-data">
					<div class="box-body">
						<div class="col-md-6">
							<div class="form-group" style="display: none;">
								<input type="text" name="id" value="<?php echo $_GET["idhocphan"]; ?>">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Tên Học Phần (Đợt)</label>
								<input type="text" name="name" value="<?php echo $posts->name ?>" class="form-control" id="exampleInputPassword1" placeholder="Tên Đợt" required="">
							</div>
						</div>
					</div>
					<div class="box-footer">
						<input type="submit" class="btn btn-primary" value="Cập Nhập" />
					</div>
				</form>
			</div>
		</div>
	</div>
</section>