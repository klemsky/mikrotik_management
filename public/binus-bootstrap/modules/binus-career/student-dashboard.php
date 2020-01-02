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
						<li class="current">
							<a href="student-dashboard.php">
								<span class="label">Dashboard</span>
							</a>
						</li>
						<li>
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
				<div class="widget-parent" id="widget-parent">
					<div class="row">
						<div class="column one-half">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Available 3+1</span>
										</span>
										<span class="opposite-link">
											<a href="student-31-available.php">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-tables">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th>Title</th>
													<th>Kuota</th>
													<th>Open</th>
													<th>Closed</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<i class="icon icon-program-industri has-tooltip" title="Industri"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Accenture</a>
													</td>
													<td>5</td>
													<td>01/03/2015</td>
													<td>31/03/2015</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-program-cd has-tooltip" title="Community Development"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Accenture</a>
													</td>
													<td>5</td>
													<td>01/03/2015</td>
													<td>31/03/2015</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-program-research has-tooltip" title="Research"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Accenture</a>
													</td>
													<td>5</td>
													<td>01/03/2015</td>
													<td>31/03/2015</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="column one-half">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Applied 3+1</span>
										</span>
										<span class="opposite-link">
											<a href="student-31-applied.php">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-tables">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th>Title</th>
													<th>Kuota</th>
													<th>Applied</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<i class="icon icon-program-startup has-tooltip" title="Start Up"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Accenture</a>
													</td>
													<td>5</td>
													<td>01/03/2015</td>
													<td>Interview I</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-program-se has-tooltip" title="Student Exchange"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Accenture</a>
													</td>
													<td>5</td>
													<td>01/03/2015</td>
													<td>Psikotes</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-program-research has-tooltip" title="Research"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Accenture</a>
													</td>
													<td>5</td>
													<td>01/03/2015</td>
													<td>Final Psikotes</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="column one-half">
							<div class="widget remove-overflow">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Desired position</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-desired-position">
										<div class="group-item">
											<div class="rows">
												<div class="item one-third">
													<span class="filter-label">Position</span>
												</div>
												<div class="item two-thirds">
													<span class="dropdown-filter has-depth-filter" data-max-item="5" data-default-label="Select Position">
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
											</div>
											<div class="rows">
												<div class="item one-third">
													<span class="filter-label">Location</span>
												</div>
												<div class="item two-thirds">
													<span class="dropdown-filter" data-default-label="Select Location">
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
											</div>
											<div class="rows">
												<div class="item one-third">
													<span class="filter-label">Expected Salary</span>
												</div>
												<div class="item two-thirds">
													<span class="dropdown-filter">
														<span class="selectbox">
															<span class="text-label">Rp.4.000.000 - Rp.6.000.000</span>
															<span class="indicator"></span>
														</span>
														<span class="filter-wrap">
															<span class="filter-items">
																<ul class="custom-scrollbar">
																	<li>
																		<span class="option">
																			<span class="label">Rp.3.000.000 - Rp.4.000.000</span>
																		</span>
																	</li>
																	<li class="current">
																		<span class="option">
																			<span class="label">Rp.4.000.000 - Rp.6.000.000</span>
																		</span>
																	</li>
																	<li>
																		<span class="option">
																			<span class="label">Rp.6.000.000 - Rp.10.000.000</span>
																		</span>
																	</li>
																	<li>
																		<span class="option">
																			<span class="label">Rp.10.000.000 - Rp.15.000.000</span>
																		</span>
																	</li>
																	<li>
																		<span class="option">
																			<span class="label">Rp.15.000.000 - Rp.30.000.000</span>
																		</span>
																	</li>
																</ul>
															</span>
														</span>
													</span>
												</div>
											</div>
											<div class="rows">
												<div class="item one-third">
													<span class="filter-label">Willing to Travel</span>
												</div>
												<div class="item two-thirds">
													<span class="dropdown-filter">
														<span class="selectbox">
															<span class="text-label">No</span>
															<span class="indicator"></span>
														</span>
														<span class="filter-wrap">
															<span class="filter-items">
																<ul class="custom-scrollbar">
																	<li>
																		<span class="option">
																			<span class="label">Yes</span>
																		</span>
																	</li>
																	<li class="current">
																		<span class="option">
																			<span class="label">No</span>
																		</span>
																	</li>
																</ul>
															</span>
														</span>
													</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="column one-half">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Job Matched</span>
										</span>
										<span class="opposite-link">
											<a href="student-job-matched.php">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-tables">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th>Title</th>
													<th>Kuota</th>
													<th>Open</th>
													<th>Closed</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<i class="icon icon-job-fulltime has-tooltip" title="Fulltime"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">HR Represen...</a>
													</td>
													<td>20</td>
													<td>01/03/2015</td>
													<td>30/03/2015</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-job-fulltime has-tooltip" title="Fulltime"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">HR Represen...</a>
													</td>
													<td>20</td>
													<td>01/03/2015</td>
													<td>30/03/2015</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-job-fulltime has-tooltip" title="Fulltime"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">HR Represen...</a>
													</td>
													<td>20</td>
													<td>01/03/2015</td>
													<td>30/03/2015</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
                        <div class="column">
                            <div class="widget auto-height">
                                <div class="advertising">
                                    <div class="group-item">
                                        <div class="item auto-width has-padding-right">
                                            <span class="advertising-thumbnail">
                                                <img src="../../images/statics/corporate.png" alt="Advertising">
                                            </span>
                                        </div>
                                        <div class="item auto-width has-padding-right">
                                            <h3 class="advertising-title">Accenture</h3>
                                            <span class="advertising-meta">
                                                <a href="#">View All News &gt;</a>
                                            </span>
                                        </div>
                                        <div class="item has-divider has-padding-left">
                                            <div class="advertising-meta">
                                                Technology, Informations, Computer<br>
                                                <small>The Avengers team like youve never seen them before. Veil. Will they be the next generation.</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="column one-half">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Pro Hiring</span>
										</span>
										<span class="opposite-link">
											<a href="student-31-available.php">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-tables">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th>Title</th>
													<th>Kuota</th>
													<th>Open</th>
													<th>Closed</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<i class="icon icon-program-industri has-tooltip" title="Industri"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Accenture</a>
													</td>
													<td>5</td>
													<td>01/03/2015</td>
													<td>31/03/2015</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-program-cd has-tooltip" title="Community Development"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Accenture</a>
													</td>
													<td>5</td>
													<td>01/03/2015</td>
													<td>31/03/2015</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-program-research has-tooltip" title="Research"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Accenture</a>
													</td>
													<td>5</td>
													<td>01/03/2015</td>
													<td>31/03/2015</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="column one-half">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Applied Pro Hiring</span>
										</span>
										<span class="opposite-link">
											<a href="student-31-applied.php">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-tables">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th>Title</th>
													<th>Kuota</th>
													<th>Applied</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<i class="icon icon-program-startup has-tooltip" title="Start Up"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Accenture</a>
													</td>
													<td>5</td>
													<td>01/03/2015</td>
													<td>Interview I</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-program-se has-tooltip" title="Student Exchange"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Accenture</a>
													</td>
													<td>5</td>
													<td>01/03/2015</td>
													<td>Psikotes</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-program-research has-tooltip" title="Research"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Accenture</a>
													</td>
													<td>5</td>
													<td>01/03/2015</td>
													<td>Final Psikotes</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="column two-thirds">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Applied Vacancy List</span>
										</span>
										<span class="opposite-link">
											<a href="student-applied-vacancy.php">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-list-applicant">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th>Position</th>
													<th>Kuota</th>
													<th>Applied Date</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<i class="icon icon-job-fulltime has-tooltip" title="Fulltime"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">HR Representative (HR-JD)</a>
													</td>
													<td>20</td>
													<td>02/03/2015</td>
													<td>Interview</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-job-parttime has-tooltip" title="Parttime"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">HR Representative (HR-JD)</a>
													</td>
													<td>20</td>
													<td>02/03/2015</td>
													<td>Interview</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-job-internship has-tooltip" title="Internship"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">HR Representative (HR-JD)</a>
													</td>
													<td>20</td>
													<td>02/03/2015</td>
													<td>Interview</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="column one-third">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Your Statistics</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-your-statistic">
										<table>
											<tbody>
												<tr>
													<td align="right">
														<span class="value">220</span>
													</td>
													<td>
														<span class="label">Vacancy Applicant</span>
													</td>
												</tr>
												<tr>
													<td align="right">
														<span class="value">8</span>
													</td>
													<td>
														<span class="label">Vacancy Created</span>
													</td>
												</tr>
												<tr>
													<td align="right">
														<span class="value">1.210</span>
													</td>
													<td>
														<span class="label">Vacancy Viewed</span>
													</td>
												</tr>
												<tr>
													<td align="right">
														<span class="value">9</span>
													</td>
													<td>
														<span class="label">Event Created</span>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
                        <div class="column">
                            <div class="widget auto-height">
                                <div class="advertising">
                                    <div class="group-item">
                                        <div class="item auto-width has-padding-right">
                                            <span class="advertising-thumbnail">
                                                <img src="../../images/statics/corporate.png" alt="Advertising">
                                            </span>
                                        </div>
                                        <div class="item">
                                            <h3 class="advertising-title">Accenture</h3>
                                            <span class="advertising-meta">
                                                Technology, Informations, Compute
                                            </span>
                                        </div>
                                        <div class="item auto-width has-padding-left">
                                            <a href="#" class="button button-primary">Company Profile</a>
                                        </div>
                                        <div class="item auto-width has-padding-left">
                                            <a href="#" class="button button-primary">Go To Website</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="column">
							<div class="widget auto-height">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Saved Vacancy</span>
										</span>
										<span class="opposite-link">
											<a href="student-saved-vacancy.php">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-tables">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th>Title</th>
													<th>Kuota</th>
													<th>Open</th>
													<th>Closed</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<i class="icon icon-job-fulltime has-tooltip" title="Fulltime"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">HR Represen...</a>
													</td>
													<td>20</td>
													<td>01/03/2015</td>
													<td>30/03/2015</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-job-fulltime has-tooltip" title="Fulltime"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">HR Represen...</a>
													</td>
													<td>20</td>
													<td>01/03/2015</td>
													<td>30/03/2015</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-job-fulltime has-tooltip" title="Fulltime"></i>
														<a href="student-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">HR Represen...</a>
													</td>
													<td>20</td>
													<td>01/03/2015</td>
													<td>30/03/2015</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="column">
							<div class="widget auto-height">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Other Info</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-global">
										<div class="tabulation">
											<div class="tab-head">
												<ul class="container">
													<li>
														<a href="#">CSR</a>
													</li>
													<li>
														<a href="#">Campaign</a>
													</li>
													<li>
														<a href="#">Endowment</a>
													</li>
													<li>
														<a href="#">Endowment</a>
													</li>
													<li>
														<a href="#">Endowment</a>
													</li>
												</ul>
											</div>
											<div class="tab-body">
												<div class="tab-body-item">
													<div class="single-content">
														<ul>
															<li><a href="student-csr-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
															<li><a href="student-csr-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
															<li><a href="student-csr-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
															<li><a href="student-csr-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
														</ul>
														<p class="view-all text-center">
															<a href="student-csr-archive.php">View All CSR &gt;</a>
														</p>
													</div>
												</div>
												<div class="tab-body-item">
													<div class="single-content">
														<ul>
															<li><a href="student-campaign-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
															<li><a href="student-campaign-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
															<li><a href="student-campaign-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
															<li><a href="student-campaign-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
														</ul>
														<p class="view-all text-center">
															<a href="student-campaign-archive.php">View All Campaign &gt;</a>
														</p>
													</div>
												</div>
												<div class="tab-body-item">
													<div class="single-content">
														<ul>
															<li><a href="student-endowment-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
															<li><a href="student-endowment-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
															<li><a href="student-endowment-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
															<li><a href="student-endowment-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
														</ul>
														<p class="view-all text-center">
															<a href="student-endowment-archive.php">View All Endowment &gt;</a>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- #widget-parent -->
			</div>
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>