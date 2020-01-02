<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">

		<section class="user-content">
			<div class="container">
				<div class="row">
					<div class="column two-thirds">
						<section class="user-profile">
							<div class="thumbnail">
								<span class="avatar">
									<img src="images/statics/avatar.png" alt="">
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
												<option value="1">Student</option>
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
							<a href="student-dashboard.php">
								<span class="label">Dashboard</span>
							</a>
						</li>
						<li class="current">
							<a href="student-search-job.php">
								<span class="label">Search Job</span>
							</a>
						</li>
						<li>
							<a href="student-schedule.php">
								<span class="label">Schedule</span>
							</a>
						</li>
						<li>
							<a href="student-profile.php">
								<span class="label">Profile</span>
							</a>
						</li>
						<li>
							<a href="student-31.php">
								<span class="label">3+1</span>
							</a>
						</li>
						<li>
							<a href="student-applied-vacancy.php">
								<span class="label">Applied Vacancy</span>
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
						<h1 class="heading">Search Jobs</h1>
						<form action="#" method="post">
							<div class="area-input">
								<input type="text" name="input[]" placeholder="Type a keyword...">
							</div>
							<div class="area-options">
								<div class="row">
									<div class="column one-half">
										<span class="dropdown-filter textbox has-depth-filter" data-max-item="5" data-default-label="Select Position">
											<span class="selectbox">
												<span class="text-label">Select Position</span>
												<span class="indicator"></span>
											</span>
											<span class="filter-wrap">
												<span class="list-filter">
													<span class="list-item"></span>
													<span class="max-label">(maksimal 5 item)</span>
												</span>
												<span class="filter-items">
													<div class="group-item">
														<div class="item">
															<ul class="custom-scrollbar primary">
																<li>
																	<span class="option">
																		<span class="label">Administration &amp; HRD</span>
																	</span>
																</li>
																<li>
																	<span class="option">
																		<span class="label">Education</span>
																	</span>
																</li>
																<li>
																	<span class="option">
																		<span class="label">Design</span>
																	</span>
																</li>
																<li>
																	<span class="option">
																		<span class="label">Finance</span>
																	</span>
																</li>
																<li>
																	<span class="option">
																		<span class="label">Property</span>
																	</span>
																</li>
															</ul>
														</div>
														<div class="item clone">
															<div class="target-cloning">
																<ul class="custom-scrollbar cloning">
																	<li>
																		<span class="option has-checkbox">
																			<span class="component">
																				<input type="checkbox" name="input[]" value="position_id_1" class="checkbox position_id_1">
																			</span>
																			<span class="label">HR Director / Manager</span>
																		</span>
																	</li>
																	<li>
																		<span class="option has-checkbox">
																			<span class="component">
																				<input type="checkbox" name="input[]" value="position_id_2" class="checkbox position_id_2">
																			</span>
																			<span class="label">Receptionist</span>
																		</span>
																	</li>
																</ul>
															</div>
															<div class="target-cloning">
																<ul class="custom-scrollbar cloning">
																	<li>
																		<span class="option has-checkbox">
																			<span class="component">
																				<input type="checkbox" name="input[]" value="position_id_3" class="checkbox position_id_3">
																			</span>
																			<span class="label">Librarian</span>
																		</span>
																	</li>
																	<li>
																		<span class="option has-checkbox">
																			<span class="component">
																				<input type="checkbox" name="input[]" value="position_id_4" class="checkbox position_id_4">
																			</span>
																			<span class="label">Teacher</span>
																		</span>
																	</li>
																</ul>
															</div>
															<div class="target-cloning">
																<ul class="custom-scrollbar cloning">
																	<li>
																		<span class="option has-checkbox">
																			<span class="component">
																				<input type="checkbox" name="input[]" value="position_id_5" class="checkbox position_id_5">
																			</span>
																			<span class="label">Fashion</span>
																		</span>
																	</li>
																	<li>
																		<span class="option has-checkbox">
																			<span class="component">
																				<input type="checkbox" name="input[]" value="position_id_6" class="checkbox position_id_6">
																			</span>
																			<span class="label">Graphics</span>
																		</span>
																	</li>
																</ul>
															</div>
															<div class="target-cloning">
																<ul class="custom-scrollbar cloning">
																	<li>
																		<span class="option has-checkbox">
																			<span class="component">
																				<input type="checkbox" name="input[]" value="position_id_7" class="checkbox position_id_7">
																			</span>
																			<span class="label">Analyst</span>
																		</span>
																	</li>
																	<li>
																		<span class="option has-checkbox">
																			<span class="component">
																				<input type="checkbox" name="input[]" value="position_id_8" class="checkbox position_id_8">
																			</span>
																			<span class="label">Corporate Banking</span>
																		</span>
																	</li>
																</ul>
															</div>
															<div class="target-cloning">
																<ul class="custom-scrollbar cloning">
																	<li>
																		<span class="option has-checkbox">
																			<span class="component">
																				<input type="checkbox" name="input[]" value="position_id_9" class="checkbox position_id_9">
																			</span>
																			<span class="label">Property Consultancy</span>
																		</span>
																	</li>
																	<li>
																		<span class="option has-checkbox">
																			<span class="component">
																				<input type="checkbox" name="input[]" value="position_id_10" class="checkbox position_id_10">
																			</span>
																			<span class="label">Property Management</span>
																		</span>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</span>
											</span>
										</span>
									</div>
									<div class="column one-half">
										<span class="dropdown-filter textbox" data-default-label="Select Location">
											<span class="selectbox">
												<span class="text-label">BINUS Anggrek</span>
												<span class="indicator"></span>
											</span>
											<span class="filter-wrap">
												<span class="list-filter">
													<span class="list-item">
														<a class="item-selected location_id_1">
															<span class="text">BINUS Anggrek</span>
															<span class="remove" data-target="location_id_1"></span>
														</a>
													</span>
												</span>
												<span class="filter-items">
													<ul class="custom-scrollbar">
														<li>
															<span class="option has-checkbox">
																<span class="component">
																	<input type="checkbox" name="input[]" value="location_id_1" class="checkbox location_id_1" checked="checked">
																</span>
																<span class="label">BINUS Anggrek</span>
															</span>
														</li>
														<li>
															<span class="option has-checkbox">
																<span class="component">
																	<input type="checkbox" name="input[]" value="location_id_2" class="checkbox location_id_2">
																</span>
																<span class="label">BINUS Syahdan</span>
															</span>
														</li>
														<li>
															<span class="option has-checkbox">
																<span class="component">
																	<input type="checkbox" name="input[]" value="location_id_3" class="checkbox location_id_3">
																</span>
																<span class="label">BINUS Kijang</span>
															</span>
														</li>
														<li>
															<span class="option has-checkbox">
																<span class="component">
																	<input type="checkbox" name="input[]" value="location_id_4" class="checkbox location_id_4">
																</span>
																<span class="label">BINUS JWC</span>
															</span>
														</li>
														<li>
															<span class="option has-checkbox">
																<span class="component">
																	<input type="checkbox" name="input[]" value="location_id_5" class="checkbox location_id_5">
																</span>
																<span class="label">BINUS Alam Sutera</span>
															</span>
														</li>
													</ul>
												</span>
											</span>
										</span>
									</div>
									<div class="column one-half">
										<p>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="0">Level</option>
												</select>
											</span>
										</p>
									</div>
									<div class="column one-half">
										<p>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="0">Expected Salary</option>
												</select>
											</span>
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
										<th>Titled</th>
										<th>Location</th>
										<th>Description</th>
										<th>Salary Range</th>
										<th>&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<span class="thumbnail">
												<img src="images/statics/corporate.png" alt="">
											</span>
											<span class="title">Pengajar Komputer</span>
										</td>
										<td>Jakarta</td>
										<td><i class="icon icon-job-internship has-tooltip" title="Internship"></i></td>
										<td>Rp.2.500.000 - Rp.3.500.000</td>
										<td><a href="#" class="icon icon-view-detail"></a></td>
									</tr>
									<tr>
										<td>
											<span class="thumbnail">
												<img src="images/statics/corporate.png" alt="">
											</span>
											<span class="title">Pengajar Komputer</span>
										</td>
										<td>Jakarta</td>
										<td><i class="icon icon-job-internship has-tooltip" title="Internship"></i></td>
										<td>Rp.2.500.000 - Rp.3.500.000</td>
										<td><a href="#" class="icon icon-view-detail"></a></td>
									</tr>
									<tr>
										<td>
											<span class="thumbnail">
												<img src="images/statics/corporate.png" alt="">
											</span>
											<span class="title">Pengajar Komputer</span>
										</td>
										<td>Jakarta</td>
										<td><i class="icon icon-job-internship has-tooltip" title="Internship"></i></td>
										<td>Rp.2.500.000 - Rp.3.500.000</td>
										<td><a href="#" class="icon icon-view-detail"></a></td>
									</tr>
									<tr>
										<td>
											<span class="thumbnail">
												<img src="images/statics/corporate.png" alt="">
											</span>
											<span class="title">Pengajar Komputer</span>
										</td>
										<td>Jakarta</td>
										<td><i class="icon icon-job-internship has-tooltip" title="Internship"></i></td>
										<td>Rp.2.500.000 - Rp.3.500.000</td>
										<td><a href="#" class="icon icon-view-detail"></a></td>
									</tr>
									<tr>
										<td>
											<span class="thumbnail">
												<img src="images/statics/corporate.png" alt="">
											</span>
											<span class="title">Pengajar Komputer</span>
										</td>
										<td>Jakarta</td>
										<td><i class="icon icon-job-internship has-tooltip" title="Internship"></i></td>
										<td>Rp.2.500.000 - Rp.3.500.000</td>
										<td><a href="#" class="icon icon-view-detail"></a></td>
									</tr>
									<tr>
										<td>
											<span class="thumbnail">
												<img src="images/statics/corporate.png" alt="">
											</span>
											<span class="title">Pengajar Komputer</span>
										</td>
										<td>Jakarta</td>
										<td><i class="icon icon-job-internship has-tooltip" title="Internship"></i></td>
										<td>Rp.2.500.000 - Rp.3.500.000</td>
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