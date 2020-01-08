<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">

		<section class="user-content">
			<div class="container">
				<div class="row">
					<div class="column two-thirds">
						<section class="user-profile">
							<div class="thumbnail">
								<span class="avatar">
									<img src="images/statics/avatar-corporate.png" alt="">
								</span>
							</div>
							<div class="details">
								<div class="field">
									<h2 class="student-name">User Nicename</h2>
									<span class="position">Lorem ipsum dolor sit amet.</span>
								</div>
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

		<section class="body-navigation on-pre-content">
			<div class="nav-head">
				<div class="container">
					<ul>
						<li>
							<a href="employeer-dashboard.php">
								<span class="label">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="employeer-search-jobseeker.php">
								<span class="label">Search Jobseeker</span>
							</a>
						</li>
						<li>
							<a href="employeer-schedule.php">
								<span class="label">Schedule</span>
							</a>
						</li>
						<li class="current">
							<a href="employeer-job-posting.php">
								<span class="label">Job Posting</span>
							</a>
						</li>
						<li>
							<a href="employeer-profile.php">
								<span class="label">Profile</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="label">3+1</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="label">Academic Collaboration</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="label">CSR</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section><!-- .body-navigation -->

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<form action="#" method="post">
						<p>
							<label>Job Category</label>
							<span class="custom-combobox">
								<select name="input[]">
									<option value="0">Select Category</option>
								</select>
							</span>
						</p>
						<p>
							<label>Job Keyword</label>
							<input type="text" name="input[]">
						</p>
						<div class="row">
							<div class="column two-thirds">
								<p>
									<label>Position Name</label>
									<input type="text" name="input[]">
								</p>
							</div>
							<div class="column one-third">
								<p>
									<label>Kuota</label>
									<input type="text" name="input[]">
								</p>
							</div>
						</div>
						<p>
							<label>Position Level</label>
							<span class="custom-combobox">
								<select name="input[]">
									<option value="0">Select Position Level</option>
								</select>
							</span>
						</p>
						<p>
							<label>Location</label>
							<span class="custom-combobox">
								<select name="input[]">
									<option value="0">Select Location</option>
								</select>
							</span>
						</p>
						<div class="row">
							<div class="column one-third">
								<p>
									<label>Work Exp.</label>
									<input type="text" name="input[]">
								</p>
							</div>
							<div class="column two-thirds">
								<p>
									<label>In</label>
									<span class="custom-combobox">
										<select name="input[]">
											<option value="0">Select</option>
										</select>
									</span>
								</p>
							</div>
						</div>
						<div class="row">
							<div class="column one-third">
								<p>
									<label>Degree</label>
									<span class="custom-combobox">
										<select name="input[]">
											<option value="0">Select Degree</option>
										</select>
									</span>
								</p>
							</div>
							<div class="column two-thirds">
								<p>
									<label>Major</label>
									<span class="custom-combobox">
										<select name="input[]">
											<option value="0">Select Major</option>
										</select>
									</span>
								</p>
							</div>
						</div>
						<div class="row">
							<div class="column one-half">
								<p>
									<label>Open Period</label>
									<span class="custom-datepicker">
										<input type="text" name="input[]" class="datepicker">
										<span class="icon-area"></span>
									</span>
								</p>
							</div>
							<div class="column one-half">
								<p>
									<label>Closed</label>
									<span class="custom-datepicker">
										<input type="text" name="input[]" class="datepicker">
										<span class="icon-area"></span>
									</span>
								</p>
							</div>
						</div>
						<p>
							<label>Requirements</label>
							<textarea name="input[]" rows="5"></textarea>
						</p>
						<p>
							<label>Responsibilities</label>
							<textarea name="input[]" rows="5"></textarea>
						</p>
						<div class="row">
							<div class="column one-half">
								<p>
									<label>Technical Skill</label>
									<span class="custom-combobox">
										<select name="input[]">
											<option value="0">Select Skill</option>
										</select>
									</span>
								</p>
							</div>
							<div class="column one-half">
								<p>
									<label>Level</label>
									<span class="custom-combobox">
										<select name="input[]">
											<option value="0">Select Level</option>
										</select>
									</span>
								</p>
							</div>
						</div>
						<div class="multiple-component">
							<label>Language Skill</label>
							<div class="component-items">
								<div class="row">
									<div class="column one-fourth">
										<p>
											<label>Language Name</label>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Language</option>
												</select>
											</span>
										</p>
									</div>
									<div class="column one-fourth">
										<p>
											<label>Writing Ability</label>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Ability</option>
												</select>
											</span>
										</p>
									</div>
									<div class="column one-fourth">
										<p>
											<label>Speaking Ability</label>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Ability</option>
												</select>
											</span>
										</p>
									</div>
									<div class="column one-fourth">
										<p>
											<label>Listening Ability</label>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Ability</option>
												</select>
											</span>
										</p>
									</div>
								</div>
								<div class="row">
									<div class="column one-fourth">
										<p>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Language</option>
												</select>
											</span>
										</p>
									</div>
									<div class="column one-fourth">
										<p>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Ability</option>
												</select>
											</span>
										</p>
									</div>
									<div class="column one-fourth">
										<p>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Ability</option>
												</select>
											</span>
										</p>
									</div>
									<div class="column one-fourth">
										<p>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Ability</option>
												</select>
											</span>
											<a href="#" class="remove-item"></a>
										</p>
									</div>
								</div>
							</div>
							<div class="component-trigger">
								<a href="#">+ Add More</a>
							</div>
						</div>
						<p class="action has-border" align="right">
							<input type="reset" class="button button-secondary" value="Cancel">
							<input type="submit" class="button button-primary" value="Submit">
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>