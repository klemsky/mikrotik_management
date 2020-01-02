<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<div class="page-sub-heading">
						<h2>Create Thread</h2>
					</div>
					<div class="single-content popup-content" id="target-id">
						<h1 class="heading new-layout">New Thread</h1>
						<form action="#" method="post">
							<p>
								<label>Title</label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Body</label>
								<textarea class="editor" id="editor" rows="12"></textarea>
							</p>
							<p>
								<label>Upload File</label>
								<span class="custom-uploader">
									<input type="text" readonly="readonly" class="field-temporary">
									<input type="file" class="upload-area">
									<span class="icon-area"></span>
								</span>
								<small>
									*Maksimum jumlah upload 5 file dan maksimum besar file 1024000 bytes.<br/>
									*Ekstensi file yang diperbolehkan: .doc, .docx, .xls, .xlsx, .ppt, .pptx, .pps, .vsd, .txt, .pdf, .swf, .rtf, .bmp, .jpg, .jpeg, .gif, .png.
								</small>
							</p>
							<p class="action has-border" align="right">
								<input type="submit" class="button button-primary" value="Create Thread">
							</p>
						</form>
					</div>
				</div>
			</div>
		</div><!-- #main-content -->
	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>