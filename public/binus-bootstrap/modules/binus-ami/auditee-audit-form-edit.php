<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">

		<section class="user-content single-page">
			<div class="container">
				<div class="row">
					<div class="column two-thirds">
						<section class="breadcrumb">
							<div class="container">
								<div class="wrap">
									<ul>
										<li><a href="#">Dashboard</a></li>
										<li>Edit Audit Data</li>
									</ul>
								</div>
							</div>
						</section>
						<section class="page-heading">
							<div class="container">
								<h1>Edit Audit Data</h1>
							</div>
						</section>
					</div>
					<div class="column one-third opposite">
						<section class="user-role">
							<div class="wrap">
								<div class="field">
									<span class="label">Login As</span>
									<span class="component">
										<span class="login-role" id="login-role">
											<select name="login-role">
												<option value="1">Auditee</option>
											</select>
										</span>
									</span>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section><!-- .user-content -->

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<div class="single-content popup-content" id="target-id">
						<h1 class="heading new-layout">Edit Data</h1>
						<form action="#" method="post">
							<p>
								<label>Rencana Tenggat Perbaikan</label>
								<span class="custom-datepicker">
									<input type="text" name="input[]" class="datepicker">
									<span class="icon-area"></span>
								</span>
							</p>
							<p align="right" class="action">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>

					<div class="single-content popup-content" id="target-id-2">
						<h1 class="heading new-layout">Edit Data</h1>
						<form action="#" method="post">
							<p>
								<label>Perbaikan</label>
								<textarea name="input[]" rows="5"></textarea>
							</p>
							<p align="right" class="action">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>

					<div class="single-content popup-content" id="target-id-3">
						<h1 class="heading new-layout">Edit Data</h1>
						<form action="#" method="post">
							<div class="multiple-component">
								<label>Dokumen</label>
								<div class="component-items">
									<p>
										<span class="custom-uploader">
											<input type="text" readonly="readonly" class="field-temporary">
											<input type="file" name="input[]" class="upload-area">
											<span class="icon-area"></span>
										</span>
									</p>
									<p>
										<span class="custom-uploader">
											<input type="text" readonly="readonly" class="field-temporary">
											<input type="file" name="input[]" class="upload-area">
											<span class="icon-area"></span>
										</span>
										<a href="#" class="remove-item"></a>
									</p>
								</div>
								<div class="component-trigger">
									<a href="#">+ Add More</a>
								</div>
							</div>
							<p align="right" class="action has-border">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>

					<div class="single-content popup-content" id="target-id-4">
						<h1 class="heading new-layout">Edit Data</h1>
						<form action="#" method="post">
							<p>
								<label>Auditee Notes</label>
								<textarea name="input[]" rows="5"></textarea>
							</p>
							<p align="right" class="action">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>