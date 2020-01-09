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
						<li class="current">
							<a href="employeer-search-jobseeker.php">
								<span class="label">Search Jobseeker</span>
							</a>
						</li>
						<li>
							<a href="employeer-schedule.php">
								<span class="label">Schedule</span>
							</a>
						</li>
						<li>
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
				<div class="advanced-search">
					<div class="search-box container w-640px">
						<h1 class="heading">Search Applicant</h1>
						<form action="#" method="post">
							<div class="area-input">
								<input type="text" name="input[]" placeholder="Type a keyword...">
							</div>
							<div class="area-options">
								<div class="row">
									<div class="column one-half">
										<p>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="">Select Degree</option>
												</select>
											</span>
										</p>
										<p>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="">Select Program</option>
												</select>
											</span>
										</p>
									</div>
									<div class="column one-half">
										<p>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="">Select GPA</option>
												</select>
											</span>
										</p>
										<p>
											<input type="text" name="input[]" placeholder="Input Name">
										</p>
									</div>
								</div>
							</div>
							<div class="area-submit">
								<a href="#" class="more-option">
									More Option
									<i class="indicator"></i>
								</a>
								<input type="submit" class="button button-orange" value="Search">
							</div>
						</form>
					</div>
				</div>
				<div class="box-container">
					<div class="search-result">
						<h1 class="heading">Latest Jobs</h1>
						<div class="single-content">
							<table>
								<thead>
									<tr>
										<th>Name</th>
										<th>Availability</th>
										<th>Expected Salary</th>
										<th>Working Experience</th>
										<th>&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<span class="profile-info">
												<span class="photo">
													<span class="thumbnail">
														<img src="images/statics/avatar.png" alt="">
													</span>
												</span>
												<span class="details">
													<span class="name">
														<a href="employeer-profile-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Rebecca Setiadi</a>
													</span>
													<span class="meta-data">
														Female, 25 y.o<br/>
														S1 - DKV (3,58)
													</span>
												</span>
											</span>
										</td>
										<td>
											<i class="icon icon-job-fulltime has-tooltip" title="Fulltime"></i>
											<i class="icon icon-job-parttime has-tooltip" title="Parttime"></i>
											<i class="icon icon-job-internship has-tooltip" title="Internship"></i>
										</td>
										<td>Rp.2.500.000 - Rp.3.500.000</td>
										<td>
											Graphic Desainer<br/>
											Less than a year
										</td>
										<td><a href="#" class="icon icon-view-detail"></a></td>
									</tr>
									<tr>
										<td>
											<span class="profile-info">
												<span class="photo">
													<span class="thumbnail">
														<img src="images/statics/avatar.png" alt="">
													</span>
												</span>
												<span class="details">
													<span class="name">
														<a href="employeer-profile-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Rebecca Setiadi</a>
													</span>
													<span class="meta-data">
														Female, 25 y.o<br/>
														S1 - DKV (3,58)
													</span>
												</span>
											</span>
										</td>
										<td>
											<i class="icon icon-job-fulltime has-tooltip" title="Fulltime"></i>
											<i class="icon icon-job-parttime has-tooltip" title="Parttime"></i>
											<i class="icon icon-job-internship has-tooltip" title="Internship"></i>
										</td>
										<td>Rp.2.500.000 - Rp.3.500.000</td>
										<td>
											Graphic Desainer<br/>
											Less than a year
										</td>
										<td><a href="#" class="icon icon-view-detail"></a></td>
									</tr>
									<tr>
										<td>
											<span class="profile-info">
												<span class="photo">
													<span class="thumbnail">
														<img src="images/statics/avatar.png" alt="">
													</span>
												</span>
												<span class="details">
													<span class="name">
														<a href="employeer-profile-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Rebecca Setiadi</a>
													</span>
													<span class="meta-data">
														Female, 25 y.o<br/>
														S1 - DKV (3,58)
													</span>
												</span>
											</span>
										</td>
										<td>
											<i class="icon icon-job-fulltime has-tooltip" title="Fulltime"></i>
											<i class="icon icon-job-parttime has-tooltip" title="Parttime"></i>
											<i class="icon icon-job-internship has-tooltip" title="Internship"></i>
										</td>
										<td>Rp.2.500.000 - Rp.3.500.000</td>
										<td>
											Graphic Desainer<br/>
											Less than a year
										</td>
										<td><a href="#" class="icon icon-view-detail"></a></td>
									</tr>
								</tbody>
							</table>
							<div class="pagination">
								<span class="page-display">Page 7 of 10</span>
								<span class="page-number">
									<a href="#" class="item">1</a>
									<a href="#" class="item">&laquo;</a>
									<a href="#" class="item">5</a>
									<a href="#" class="item">6</a>
									<span class="item current">7</span>
									<a href="#" class="item">8</a>
									<a href="#" class="item">9</a>
									<a href="#" class="item">&raquo;</a>
									<a href="#" class="item">10</a>
								</span>
								<span class="page-button">
									<a href="#" class="prev"></a>
									<a href="#" class="next"></a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>