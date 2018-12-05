<style type="text/css">
.error {color: #FF0000;}
.blue{color: blue;}
#myImg {
	border-radius: 5px;
	cursor: pointer;
	transition: 0.3s;
	object-fit: contain;
}
#myImg:hover {opacity: 0.7;}
.modall {
	display: none; /* Hidden by default */
	position: fixed; /* Stay in place */
	z-index: 1; /* Sit on top */
	padding-top: 100px; /* Location of the box */
	left: 0;
	top: 0;
	width: 100%; /* Full width */
	height: 100%; /* Full height */
	overflow: auto; /* Enable scroll if needed */
	background-color: rgb(0,0,0); /* Fallback color */
	background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}
.modall-contentt {
	margin: auto;
	display: block;
	width: 80%;
	max-width: 700px;
}
#caption {
	margin: auto;
	display: block;
	width: 80%;
	max-width: 700px;
	text-align: center;
	color: #ccc;
	padding: 10px 0;
	height: 150px;
}
.modall-contentt, #caption {    
	-webkit-animation-name: zoom;
	-webkit-animation-duration: 0.6s;
	animation-name: zoom;
	animation-duration: 0.6s;
}
@-webkit-keyframes zoom {
	from {-webkit-transform: scale(0)} 
	to {-webkit-transform: scale(1)}
}
@keyframes zoom {
	from {transform: scale(0.1)} 
	to {transform: scale(1)}
}
.closee {
	position: absolute;
	top: 100px;
	right: 200px;
	color: white;
	font-size: 40px;
	font-weight: bold;
	transition: 0.3s;
}
.closee:hover,
.closee:focus {
	color: #66ff33;
	text-decoration: none;
	cursor: pointer;
}
@media only screen and (max-width: 700px){
	.modall-contentt {
		width: 100%;
	}
}
.mg{margin:20px 30px;}
</style>
<?php 
$toolbar = "#toolbar=0";
if (isset($_SESSION["account_user"]) || isset($_SESSION["account_admin"])) {
	$toolbar = "";
}
 ?>
<section class="content">
	<div class="row">
		<div class="col-md-12" style="margin-top: 50px;">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Chi tiết</h3>
					<div class="pull-right box-tools">
						<a href="<?php echo 'index.php?controller=baigiang&action=show&mon='. $post->code ?>" class="btn btn-primary">Quay lại</a>
					</div>
				</div>
				<form role="form" method="post" action="index.php?controller=taobaigiang"  enctype="multipart/form-data">
					<div class="box-body">
						<div class="col-md-5">
							<div class="form-group" style="margin:auto;">
								<img id="myImg" src="<?php echo './assets/image/' . $post->image; ?>" alt="Ảnh bìa" width="200" height="200" />
							</div>
							<div id="myModal" class="modall">
								<span class="closee">×</span>
								<img class="modall-contentt" id="img01">
								<div id="caption"></div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Tên bài giảng</label>
								<p id="blue"><?php echo $post->name; ?></p>
							</div>
							<div class="form-group" style="overflow: auto;">
								<label for="exampleInputFile">Mô tả</label>
								<p id="blue"><?php echo $post->mota; ?></p>
							</div>
							<div class="form-group">
								<label for="exampleInputFile">File đính kèm <span style="color: red"> ( Download <i class="fa fa-download"></i> )</span></label>
								<?php if($post->file != ""){ ?>
									<?php if (isset($_SESSION["account_user"]) || isset($_SESSION["account_admin"])) { ?>
										<p><a href="<?php echo './assets/image/'. $post->file;?>" download>
											<?php echo $post->file; ?></a></p>
									<?php }else{ ?>
										<p><a href="" data-toggle="modal" data-target="#modal-default"><?php echo $post->file; ?></a></p>
									<?php } ?>
								<?php }else{
									echo '<div class="callout callout-info">
									<h4>Note!</h4>
									<p>Không có File đính kèm</p>
									</div>';
								} ?>
							</div>
							<div class="modal fade" id="modal-default">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title">Note !</h4>
											</div>
											<div class="modal-body">
												<p>Bạn phải đăng nhập để tải tài liệu </p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Đóng</button>
												<a href="index.php?controller=log&action=login" type="button" class="btn btn-primary">Đăng nhập</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-7">
								<div class="form-group">
									<label for="exampleInputFile">Document</label>
									<?php if($post->pdf != ""){ ?>
										<iframe src="<?php echo 'assets/image/' .$post->pdf . $toolbar ?>" width="100%" height="500"></iframe>
									<?php }else{
										echo '<div class="callout callout-info">
										<h4>Note!</h4>
										<p>Không có tài liệu pdf</p>
										</div>';
									} ?>
								</div>
							</div>
						</div>
						<div class="box-footer">
							_
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<script>
// Zoom image
var modal = document.getElementById('myModal');
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
	modal.style.display = "block";
	modalImg.src = this.src;
	captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("closee")[0];
span.onclick = function() { 
	modal.style.display = "none";
}
</script>