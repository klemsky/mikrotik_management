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
										<li>Add Background Data</li>
									</ul>
								</div>
							</div>
						</section>
						<section class="page-heading">
							<div class="container">
								<h1>Add Background Data</h1>
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
						<h1 class="heading">Add Formal Education Data</h1>
						<form action="#" method="post" class="has-table-system">
							<p>
								<label>Binusian ID<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<div class="row">
								<div class="column one-half">
									<p>
										<label>Period Start<span class="required">*</span></label>
										<input type="text" name="input[]">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Period End<span class="required">*</span></label>
										<input type="text" name="input[]">
									</p>
								</div>
							</div>
							<p>
								<label>Degree<span class="required">*</span></label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Select Degree</option>
									</select>
								</span>
							</p>
							<p>
								<label>Institution Name<span class="required">*</span></label>
								<span class="group-item no-fixed">
									<span class="rows">
										<span class="item" style="width: 140px;">
											<span class="custom-radiobutton">
												<input type="radio" name="input[]">
												<label class="label">BINUS</label>
											</span>
										</span>
										<span class="item">
											<span class="custom-combobox">
												<select name="input[]">
													<option value="0">Select Institution</option>
												</select>
											</span>
										</span>
									</span>
									<span class="rows">
										<span class="item">
											<span class="custom-radiobutton">
												<input type="radio" name="input[]">
												<label class="label">Other</label>
											</span>
										</span>
										<span class="item">
											<input type="text" name="input[]">
										</span>
									</span>
								</span>
							</p>
							<p>
								<label>Institution Location<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Country<span class="required">*</span></label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Select Country</option>
									</select>
								</span>
							</p>
							<p>
								<label>Major<span class="required">*</span></label>
								<span class="group-item no-fixed">
									<span class="rows">
										<span class="item" style="width: 140px;">
											<span class="custom-radiobutton">
												<input type="radio" name="input[]">
												<label class="label">Regular</label>
											</span>
										</span>
										<span class="item">
											<span class="custom-combobox">
												<select name="input[]">
													<option value="0">Select Major</option>
												</select>
											</span>
										</span>
									</span>
									<span class="rows">
										<span class="item">
											<span class="custom-radiobutton">
												<input type="radio" name="input[]">
												<label class="label">Double Degree</label>
											</span>
										</span>
										<span class="item">
											<span class="custom-combobox">
												<select name="input[]">
													<option value="0">Select Major</option>
												</select>
											</span>
										</span>
									</span>
								</span>
							</p>
							<p>
								<label>Education Score</label>
								<span class="group-item no-fixed">
									<span class="item">
										<input type="text" name="input[]" placeholder="Ex. 3.58">
									</span>
									<span class="item text-center">
										Scale of
									</span>
									<span class="item">
										<input type="text" name="input[]" placeholder="Ex. 4.00">
									</span>
								</span>
							</p>
							<p>
								<label>Certification<span class="required">*</span></label>
								<span class="group-radiobutton">
									<span class="custom-radiobutton">
										<input type="radio" name="input[]">
										<label class="label">Yes</label>
									</span>
									<span class="custom-radiobutton">
										<input type="radio" name="input[]">
										<label class="label">No</label>
									</span>
								</span>
							</p>
							<br/>
							<p align="right" class="action has-border">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>

					<div class="single-content popup-content" id="target-id-2">
						<h1 class="heading">Add Informal Education Data</h1>
						<form action="#" method="post">
							<div class="row">
								<div class="column one-half">
									<p>
										<label>Period Start<span class="required">*</span></label>
										<input type="text" name="input[]">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Period End<span class="required">*</span></label>
										<input type="text" name="input[]">
									</p>
								</div>
							</div>
							<p>
								<label>Type<span class="required">*</span></label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Select Type</option>
									</select>
								</span>
							</p>
							<p>
								<label>Institution Name<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Location<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Country<span class="required">*</span></label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Select Country</option>
									</select>
								</span>
							</p>
							<p>
								<label>Subject<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Certification<span class="required">*</span></label>
								<span class="group-radiobutton">
									<span class="custom-radiobutton">
										<input type="radio" name="input[]">
										<label class="label">Yes</label>
									</span>
									<span class="custom-radiobutton">
										<input type="radio" name="input[]">
										<label class="label">No</label>
									</span>
								</span>
							</p>
							<br/>
							<p align="right" class="action has-border">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>

					<div class="single-content popup-content" id="target-id-3">
						<h1 class="heading">Add Technical Skill Data</h1>
						<form action="#" method="post">
							<p>
								<label>Technical Field<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Level<span class="required">*</span></label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Select Level</option>
									</select>
								</span>
							</p>
							<p>
								<label>Experience Year<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Certification<span class="required">*</span></label>
								<span class="group-radiobutton">
									<span class="custom-radiobutton">
										<input type="radio" name="input[]">
										<label class="label">Yes</label>
									</span>
									<span class="custom-radiobutton">
										<input type="radio" name="input[]">
										<label class="label">No</label>
									</span>
								</span>
							</p>
							<br/>
							<p align="right" class="action has-border">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>

					<div class="single-content popup-content" id="target-id-4">
						<h1 class="heading">Add Language Skill Data</h1>
						<form action="#" method="post">
							<p>
								<label>Choose Language<span class="required">*</span></label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Select Language</option>
									</select>
								</span>
							</p>
							<p>
								<label>Reading Level<span class="required">*</span></label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Select Level</option>
									</select>
								</span>
							</p>
							<p>
								<label>Speaking Level<span class="required">*</span></label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Select Level</option>
									</select>
								</span>
							</p>
							<p>
								<label>Listening Level<span class="required">*</span></label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Select Level</option>
									</select>
								</span>
							</p>
							<p>
								<label>Writing Level<span class="required">*</span></label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Select Level</option>
									</select>
								</span>
							</p>
							<p>
								<label>Certification<span class="required">*</span></label>
								<span class="group-radiobutton">
									<span class="custom-radiobutton">
										<input type="radio" name="input[]">
										<label class="label">Yes</label>
									</span>
									<span class="custom-radiobutton">
										<input type="radio" name="input[]">
										<label class="label">No</label>
									</span>
								</span>
							</p>
							<br/>
							<p align="right" class="action has-border">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>

					<div class="single-content popup-content" id="target-id-5">
						<h1 class="heading">Add Work Experience Data</h1>
						<form action="#" method="post" class="has-table-system">
							<p>
								<label>I Have Work Experience<span class="required">*</span></label>
								<span class="group-radiobutton">
									<span class="custom-radiobutton">
										<input type="radio" name="input[]">
										<label class="label">Yes</label>
									</span>
									<span class="custom-radiobutton">
										<input type="radio" name="input[]">
										<label class="label">No</label>
									</span>
								</span>
							</p>
							<div class="row">
								<div class="column one-half">
									<p>
										<label>Period Start<span class="required">*</span></label>
										<input type="text" name="input[]">
										<span class="custom-checkbox">
											<input type="checkbox" name="input[]">
											<label class="label">I Currently Work Here</label>
										</span>
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Period End<span class="required">*</span></label>
										<input type="text" name="input[]">
									</p>
								</div>
							</div>
							<p>
								<label>Company Name<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Address<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Phone<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Country<span class="required">*</span></label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Select Country</option>
									</select>
								</span>
							</p>
							<p>
								<label>Position<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Job Categories<span class="required">*</span></label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Select Job Categories</option>
									</select>
								</span>
							</p>
							<p>
								<label>Job<span class="required">*</span></label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Select Job</option>
									</select>
								</span>
							</p>
							<p>
								<label>Employement Status<span class="required">*</span></label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Select Employement Status</option>
									</select>
								</span>
							</p>
							<p>
								<label>Salary<span class="required">*</span></label>
								<span class="group-item">
									<span class="rows">
										<span class="item">
											<span class="custom-combobox">
												<select name="input[]">
													<option value="0">Select Salary</option>
												</select>
											</span>
										</span>
									</span>
									<span class="rows">
										<span class="item">
											<input type="text" name="input[]">
										</span>
									</span>
								</span>
							</p>
							<p>
								<label>Responsibilities</label>
								<textarea name="input[]" rows="4"></textarea>
							</p>
							<p>
								<label>Leaving Reason</label>
								<textarea name="input[]" rows="4"></textarea>
							</p>
							<br/>
							<p align="right" class="action has-border">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>

					<div class="single-content popup-content" id="target-id-6">
						<h1 class="heading">Add Organization Experience Data</h1>
						<form action="#" method="post">
							<div class="row">
								<div class="column one-half">
									<p>
										<label>Period Start<span class="required">*</span></label>
										<input type="text" name="input[]">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Period End<span class="required">*</span></label>
										<input type="text" name="input[]">
									</p>
								</div>
							</div>
							<p>
								<label>Organization Name<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Organization Type<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Position<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<br/>
							<p align="right" class="action has-border">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>

					<div class="single-content popup-content" id="target-id-7">
						<h1 class="heading">Add Reference Data</h1>
						<form action="#" method="post">
							<p>
								<label>I Have Preferences<span class="required">*</span></label>
								<span class="group-radiobutton">
									<span class="custom-radiobutton">
										<input type="radio" name="input[]">
										<label class="label">Yes</label>
									</span>
									<span class="custom-radiobutton">
										<input type="radio" name="input[]">
										<label class="label">No</label>
									</span>
								</span>
							</p>
							<p>
								<label>Name<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Company Name<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Position<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Relationship<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Phone<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Email Address<span class="required">*</span></label>
								<input type="text" name="input[]">
							</p>
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

<?php include( 'footer-alumni.php' ); ?>