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
										<li>Registration Form</li>
									</ul>
								</div>
							</div>
						</section>
						<section class="page-heading">
							<div class="container">
								<h1>Registration Form</h1>
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
					<div class="registration-form">
						<form action="#" method="post">
							<div class="row">
								<div class="column one-third">
									<p>
										<label>Contact Person</label>
										<input type="text" name="input[]" placeholder="Mr. or Mrs.">
									</p>
								</div>
								<div class="column two-thirds">
									<p>
										<label>&nbsp;</label>
										<input type="text" name="input[]">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Position</label>
										<input type="text" name="input[]">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Email Address</label>
										<input type="text" name="input[]">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Cellphone</label>
										<input type="text" name="input[]">
									</p>
								</div>
								<div class="column one-half">
									<div class="row">
										<div class="column two-thirds">
											<p>
												<label>Office Number</label>
												<input type="text" name="input[]">
											</p>
										</div>
										<div class="column one-third">
											<p>
												<label>Ext.</label>
												<input type="text" name="input[]">
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="recruitment-service">
								<h2 class="heading">Recruitment Service Preference Form</h2>
								<div class="service-item">
									<div class="item-title">Online Recruitment Membership</div>
									<div class="item-content">
										<table class="bordered zebra">
											<thead>
												<tr>
													<th>Product</th>
													<th>Detail</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<span class="custom-checkbox">
															<input type="checkbox" name="input[]">
															<label class="label">Diamond Membership</label>
														</span>
													</td>
													<td>12 Months Membership</td>
													<td>Rp.2.000.000,-</td>
												</tr>
												<tr>
													<td>
														<span class="custom-checkbox">
															<input type="checkbox" name="input[]">
															<label class="label">Platinum Membership</label>
														</span>
													</td>
													<td>6 Months Membership</td>
													<td>Rp.1.200.000,-</td>
												</tr>
												<tr>
													<td>
														<span class="custom-checkbox">
															<input type="checkbox" name="input[]">
															<label class="label">Gold Membership</label>
														</span>
													</td>
													<td>3 Months Membership</td>
													<td>Rp.600.000,-</td>
												</tr>
												<tr>
													<td>
														<span class="custom-checkbox">
															<input type="checkbox" name="input[]">
															<label class="label">Silver Membership</label>
														</span>
													</td>
													<td>1 Month Membership</td>
													<td>Rp.300.000,-</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="service-item">
									<div class="item-title">Student Assessment</div>
									<div class="item-content">
										<table class="bordered zebra">
											<thead>
												<tr>
													<th>Product</th>
													<th>Detail</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Personality Assessment</td>
													<td>Price per Student</td>
													<td>Rp.150.000,-</td>
												</tr>
												<tr>
													<td>DISC</td>
													<td>Price per Student</td>
													<td>Rp.50.000,-</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="service-item">
									<div class="item-title">Other Service</div>
									<div class="item-content">
										<table class="bordered zebra">
											<thead>
												<tr>
													<th>Product</th>
													<th>Detail</th>
													<th>Price</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Campus Hiring</td>
													<td>Price per Day</td>
													<td>Rp.1.000.000,-</td>
												</tr>
												<tr>
													<td>Internship Announcement</td>
													<td>Post for 1 Week (board)</td>
													<td>Free</td>
												</tr>
												<tr>
													<td>Job Board Posting</td>
													<td>Post for 1 Week (board &amp; online)</td>
													<td>Rp.75.000,-</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="service-item">
									<div class="item-title">Beneficiary</div>
									<div class="item-content">
										<p>BINUS CAREER | BCA - KCP BINA NUSANTARA 527 027 3388</p>
										<p>
											<label>Upload Payment Receipt</label>
											<span class="custom-uploader">
												<input type="text" readonly="readonly" class="field-temporary">
												<input type="file" name="input[]" class="upload-area">
												<span class="icon-area"></span>
											</span>
										</p>
										<p align="center">
											<a href="#" class="button button-secondary">Cancel</a>
											<a href="#" class="button button-primary">Submit</a>
										</p>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>