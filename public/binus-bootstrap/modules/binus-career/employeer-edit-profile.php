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
												<option value="1">Employeer</option>
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
						<h1 class="heading">Edit Company Information</h1>
						<form action="#" method="post">
							<p>
								<label>Founded<span class="required">*</span></label>
								<input type="text" name="input[]" value="Kansas, 15 June 1958">
							</p>
							<p>
								<label>Specialties<span class="required">*</span></label>
								<input type="text" name="input[]" value="Italian - American Food">
							</p>
							<p>
								<label>Industri<span class="required">*</span></label>
								<input type="text" name="input[]" value="Restaurant">
							</p>
							<p>
								<label>Type<span class="required">*</span></label>
								<input type="text" name="input[]" value="Public Company / Franchise">
							</p>
							<p>
								<label>Company Size<span class="required">*</span></label>
								<input type="text" name="input[]" value=">10.000 Employees">
							</p>
							<br/>
							<p align="right" class="action has-border">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>

					<div class="single-content popup-content" id="target-id-2">
						<h1 class="heading">Edit Company Contact</h1>
						<form action="#" method="post">
							<p>
								<label>Website<span class="required">*</span></label>
								<input type="text" name="input[]" value="http://pizzahut.co.id">
							</p>
							<p>
								<label>Consumer Service<span class="required">*</span></label>
								<input type="text" name="input[]" value="500 008">
							</p>
							<p>
								<label>Facebook<span class="required">*</span></label>
								<input type="text" name="input[]" value="http://facebook.com/pizzahutindonesiaofficial">
							</p>
							<p>
								<label>Twitter<span class="required">*</span></label>
								<input type="text" name="input[]" value="http://twitter.com/Piza_HutID">
							</p>
							<p>
								<label>LinkedIn<span class="required">*</span></label>
								<input type="text" name="input[]" value="http://linkedin.com/company/pizzahut">
							</p>
							<div class="multiple-data">
								<p>
									<label>Headquarter<span class="required">*</span></label>
									<span class="list-item">
										<span class="group-item">
											<span class="item one-third">
												<input type="text" name="input[]" value="Indonesia">
											</span>
											<span class="item two-thirds">
												<input type="text" name="input[]" value="Jalan Jenderal Gatot Subroto Graha Mustika Ratu 8th floor DKI Jakarta 12870">
											</span>
										</span>
										<span class="group-item">
											<span class="item one-third">
												<input type="text" name="input[]" placeholder="Insert location">
											</span>
											<span class="item two-thirds">
												<input type="text" name="input[]" placeholder="Insert address">
											</span>
											<a href="#" class="remove-field"></a>
										</span>
									</span>
									<span class="action">
										<a href="#" class="add-more-field">Add More +</a>
									</span>
								</p>
							</div>
							<br/>
							<p align="right" class="action has-border">
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