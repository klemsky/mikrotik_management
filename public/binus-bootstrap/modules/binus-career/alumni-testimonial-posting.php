<?php include( 'header-alumni.php' ); ?>

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
										<li>Edit Profile</li>
									</ul>
								</div>
							</div>
						</section>
						<section class="page-heading">
							<div class="container">
								<h1>Edit Profile</h1>
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
												<option value="1">Alumni</option>
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
						<h1 class="heading new-layout">Testimonial Posting</h1>
						<form action="#" method="post">
							<p>
								<label>Title</label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Body</label>
								<textarea class="editor" id="editor"></textarea>
							</p>
							<p>
								<label>Upload File</label>
								<span class="custom-uploader">
									<input type="text" readonly="readonly" class="field-temporary">
									<input type="file" name="input[]" class="upload-area">
									<span class="icon-area"></span>
								</span>
							</p>
							<p align="right">
								<input type="submit" class="button button-primary" value="Submit">
							</p>
						</form>
					</div>
				</div>
			</div>
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer-alumni.php' ); ?>