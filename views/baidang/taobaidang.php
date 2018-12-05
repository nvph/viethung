<style type="text/css">
.input {
  position: relative;
  /*font-size: 1.5em;*/
  background: linear-gradient(21deg, #10abff, #1beabd);
  padding: 3px;
  display: inline-block;
  border-radius: 9999em;
}
.input *:not(span) {
  position: relative;
  display: inherit;
  border-radius: inherit;
  margin: 0;
  border: none;
  outline: none;
  padding: 0 0.325em;
  z-index: 1;
}
.input *:not(span):focus + span {
  opacity: 1;
  transform: scale(1);
}
.input span {
  transform: scale(0.993, 0.94);
  transition: transform 0.5s, opacity 0.25s;
  opacity: 0;
  position: absolute;
  z-index: 0;
  margin: 4px;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  border-radius: inherit;
  pointer-events: none;
  box-shadow: inset 0 0 0 3px #fff, 0 0 0 4px #fff, 3px -3px 30px #1beabd, -3px 3px 30px #10abff;
}
input {
  font-family: inherit;
  line-height: inherit;
  color: #2e3750;
  min-width: 12em;
}
::placeholder {
  color: #cbd0d5;
}
</style>
<section class="content">
	<div class="row">
		<div class="col-md-12" style="margin-top: 50px;">
			<div class="box box-primary" style="background-color: #e6e6e6;">
				<div class="box-header with-border">
					<h3 class="box-title">Tạo Bài Viết</h3>
					<div class="pull-right box-tools">
						<a href="index.php?controller=baidang&action=dsbaidang"><button type="button" class="btn btn-warning">Quay lại</button></a>
					</div>
				</div>
				<div class="row">­<h5>.</h5></div>
				<div class="col-md-1">
				</div>
				<div class="col-md-10">
					<form role="form" method="post" action="index.php?controller=baidang&action=insertbaidang"  enctype="multipart/form-data">
						<div class="box box-primary">
					        <div class="box-header">
					          <div class="box-tools pull-right">
					          	<span class="input">
					            	<input type="text" name="date" value=" Ngày đăng : <?php echo date('d-m-Y'); ?>" readonly>
					            </span>
					          </div>
					          <br>
					          <i class="ion ion-clipboard"></i>
					          <h3 class="box-title">
					          	<span class="input">
					          		<input type="text" name="title" style="min-width: 30em" placeholder="Tiêu đề . . . ">
					          	</span>
				          	  </h3>	
					        </div>
					        <div class="box-body">
					          <div class="form-group">
									<label for="exampleInputFile">Nội dung</label>
									<div class="box box-info">
										<div class="box-body pad">
											<textarea class="textarea" name="content" placeholder="Place some text here"
											style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
										</div>
									</div>
								</div>
					        </div>
					      </div>
						<div class="box-footer">
							<input type="submit" class="btn btn-primary" value="Tạo" />
						</div>
					</form>
				</div>
				<div class="col-md-1">
				</div>
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