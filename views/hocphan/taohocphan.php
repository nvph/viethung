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
						<a href="index.php?controller=monhoc&action=dsmonhoc"><button type="button" class="btn btn-warning">Quay lại</button></a>
					</div>
				</div>
				<form role="form" method="post" action="index.php?controller=hocphan&action=inserthocphan"  enctype="multipart/form-data">
					<div class="box-body">
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputPassword1">Tên Học Phần (Đợt)</label>
								<input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Tên Đợt" required="">
							</div>
						</div>
					</div>
					<div class="box-footer">
						<input type="submit" class="btn btn-primary" value="Tạo" />
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