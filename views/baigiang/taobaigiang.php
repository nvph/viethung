<style type="text/css">
.error {color: #FF0000;}

#upload-button {
	width: 150px;
	display: block;
	margin: 20px auto;
}
#file-to-upload {
	display: none;
}
#pdf-main-container {
	width: 400px;
	margin: 20px auto;
}
#pdf-loader {
	display: none;
	text-align: center;
	color: #999999;
	font-size: 13px;
	line-height: 100px;
	height: 100px;
}
#pdf-contents {
	display: none;
}
#pdf-meta {
	overflow: hidden;
	margin: 0 0 20px 0;
}
#pdf-buttons {
	float: left;
}
#page-count-container {
	float: right;
}
#pdf-current-page {
	display: inline;
}
#pdf-total-pages {
	display: inline;
}
#pdf-canvas {
	border: 1px solid rgba(0,0,0,0.2);
	box-sizing: border-box;
}
#page-loader {
	height: 100px;
	line-height: 100px;
	text-align: center;
	display: none;
	color: #999999;
	font-size: 13px;
}
#blah{object-fit: contain;}
</style>
<section class="content">
	<div class="row">
		<div class="col-md-12" style="margin-top: 50px;">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Tạo Bài Giảng</h3>
					<div class="pull-right box-tools">
						<a href="<?php echo 'index.php?controller=baigiang&action=show&mon='. $_GET["getmon"]; ?>" class="btn btn-primary">Quay lại</a>
					</div>
				</div>
				<form role="form" method="post" action="index.php?controller=baigiang&action=insert"  enctype="multipart/form-data">
					<div class="box-body">
						<div class="col-md-6">
							<div class="form-group" style="display: none;">
								<label for="exampleInputEmail1">Mã bài giảng</label><span class="error"><?php //echo $err;?></span>
								<input type="text" name="code" value="<?php echo $_GET["getmon"]; ?>" class="form-control" id="exampleInputEmail1" placeholder="Mã bài giảng" readonly autofocus>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Tên bài giảng</label>
								<input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Tên bài giảng" required="" autofocus>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Ảnh Bìa Giới Thiệu</label><span class="error"></span>
								<input type='file' accept="image/*" onchange="readURL(this);" class="form-control" name="image" style="border: none;outline:none;" />
							</div>
							<div class="form-group">
								<img id="blah" src="assets/image/default.png" alt="Chọn ảnh đại diện" width="135" height="135" />
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="exampleInputEmail1">Tài liệu đính kèm</label><span class="error"></span>
								<input type='file' class="form-control" name="file" style="border: none;"/>
							</div>
							<div class="form-group">
								<label for="exampleInputFile">Tài liệu PDF</label>
								<!-- <button id="upload-button">Select PDF</button>  -->
								<input type="file" class="form-control" accept="application/pdf" name="pdf" style="border: none;"/>
								<!-- <div id="pdf-main-container">
									<div id="pdf-loader">Loading document ...</div>
									<div id="pdf-contents">
										<div id="pdf-meta">
											<div id="pdf-buttons">
												<button id="pdf-prev">Previous</button>
												<button id="pdf-next">Next</button>
											</div>
											<div id="page-count-container">Page <div id="pdf-current-page"></div> of <div id="pdf-total-pages"></div></div>
										</div>
										<canvas id="pdf-canvas" width="400"></canvas>
										<div id="page-loader">Loading page ...</div>
									</div>
								</div> -->
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="exampleInputFile">Mô Tả</label>
								<div class="box box-info">
									<div class="box-body pad">
										<textarea class="textarea" name="mota" placeholder="Place some text here"
										style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer">
						<input type="submit" name="submit" class="btn btn-primary" value="Tạo" />
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<script>
var __PDF_DOC,
	__CURRENT_PAGE,
	__TOTAL_PAGES,
	__PAGE_RENDERING_IN_PROGRESS = 0,
	__CANVAS = $('#pdf-canvas').get(0),
	__CANVAS_CTX = __CANVAS.getContext('2d');
function showPDF(pdf_url) {
	$("#pdf-loader").show();
	PDFJS.getDocument({ url: pdf_url }).then(function(pdf_doc) {
		__PDF_DOC = pdf_doc;
		__TOTAL_PAGES = __PDF_DOC.numPages;
		$("#pdf-loader").hide();
		$("#pdf-contents").show();
		$("#pdf-total-pages").text(__TOTAL_PAGES);
		showPage(1);
	}).catch(function(error) {
		$("#pdf-loader").hide();
		$("#upload-button").show();
		alert(error.message);
	});;
}
function showPage(page_no) {
	__PAGE_RENDERING_IN_PROGRESS = 1;
	__CURRENT_PAGE = page_no;
	$("#pdf-next, #pdf-prev").attr('disabled', 'disabled');
	$("#pdf-canvas").hide();
	$("#page-loader").show();
	$("#pdf-current-page").text(page_no);
	__PDF_DOC.getPage(page_no).then(function(page) {
		var scale_required = __CANVAS.width / page.getViewport(1).width;
		var viewport = page.getViewport(scale_required);
		__CANVAS.height = viewport.height;
		var renderContext = {
			canvasContext: __CANVAS_CTX,
			viewport: viewport
		};
		page.render(renderContext).then(function() {
			__PAGE_RENDERING_IN_PROGRESS = 0;
			$("#pdf-next, #pdf-prev").removeAttr('disabled');
			$("#pdf-canvas").show();
			$("#page-loader").hide();
		});
	});
}
$("#upload-button").on('click', function() {
	$("#file-to-upload").trigger('click');
});
$("#file-to-upload").on('change', function() {
    if(['application/pdf'].indexOf($("#file-to-upload").get(0).files[0].type) == -1) {
        alert('Error : Not a PDF');
        return;
    }
	$("#upload-button").hide();
	showPDF(URL.createObjectURL($("#file-to-upload").get(0).files[0]));
});
$("#pdf-prev").on('click', function() {
	if(__CURRENT_PAGE != 1)
		showPage(--__CURRENT_PAGE);
});
$("#pdf-next").on('click', function() {
	if(__CURRENT_PAGE != __TOTAL_PAGES)
		showPage(++__CURRENT_PAGE);
});
</script>
<script type="text/javascript">
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#blah')
				.attr('src', e.target.result)
				.width(135)
				.height(135);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}
</script>