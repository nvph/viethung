<style type="text/css">
.error {color: #FF0000;}
</style>
<section class="content">
	<div class="row">
		<div class="col-md-12" style="margin-top: 50px;">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Tạo Môn Học</h3>
					<div class="pull-right box-tools">
						<a href="<?php echo 'index.php?controller=monhoc&action=dsmonhoc&idhocphan=' . $_GET["hocphan"]; ?>"><button type="button" class="btn btn-warning">Quay lại</button></a>
					</div>
				</div>
				<form role="form" method="post" action="<?php echo 'index.php?controller=monhoc&action=updatemonhoc&idhocphan=' . $_GET["hocphan"] ?>" enctype="multipart/form-data">
					<div class="box-body">
						<input type="text" name="idmonhoc" value="<?php echo $_GET["idmonhoc"]; ?>" style="display: none;">
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Mã Môn Học</label><span class="error"></span>
								<input type="text" name="code" class="form-control" value="<?php echo $posts->code ?>" id="exampleInputEmail1" placeholder="Mã bài giảng" required="" autofocus>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputPassword1">Tên Môn Học</label>
								<input type="text" name="name" class="form-control" value="<?php echo $posts->name ?>" id="exampleInputPassword1" placeholder="Tên bài giảng" required="">
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
<script>
	function myFunction(selTag) {
		var e = document.getElementById("ddlViewBy");
		var strUser = e.options[e.selectedIndex].value;
		switch (strUser){
			case '1' : document.getElementById("giatien").value  = 1 * 293 + " VNĐ"; break;
			case '2' : document.getElementById("giatien").value  = 2 * 293 + " VNĐ"; break;
			case '3' : document.getElementById("giatien").value  = 3 * 293 + " VNĐ"; break;
			case '4' : document.getElementById("giatien").value  = 4 * 293 + " VNĐ"; break;
			case '5' : document.getElementById("giatien").value  = 5 * 293 + " VNĐ"; break;
		}
	}
</script>