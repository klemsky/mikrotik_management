<?php include( 'header-alumni.php' ); ?>

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

		<section class="body-navigation on-pre-content">
			<div class="nav-head">
				<div class="container">
					<ul>
						<li class="current">
							<a href="alumni-dashboard.php">
								<span class="label">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="alumni-search-job.php">
								<span class="label">Search Job</span>
							</a>
						</li>
						<li>
							<a href="alumni-schedule.php">
								<span class="label">Schedule</span>
							</a>
						</li>
						<li>
							<a href="alumni-profile.php">
								<span class="label">Profile</span>
							</a>
						</li>
						<li>
							<a href="alumni-applied-vacancy.php">
								<span class="label">Applied Vacancy</span>
							</a>
						</li>
						<li>
							<a href="alumni-friend.php">
								<span class="label">Friend</span>
							</a>
						</li>
						<li>
							<a href="alumni-search-friend.php">
								<span class="label">Search Friend</span>
							</a>
						</li>
						<li>
							<a href="alumni-business-network.php">
								<span class="label">Business Network</span>
							</a>
						</li>
						<li>
							<a href="alumni-campaign.php">
								<span class="label">Campaign</span>
							</a>
						</li>
						<li>
							<a href="alumni-endowment.php">
								<span class="label">Endowment</span>
							</a>
						</li>
						<li>
							<a href="alumni-message.php">
								<span class="label">Message</span>
							</a>
						</li>
						<li>
							<a href="alumni-merchandise.php">
								<span class="label">Merchandise</span>
							</a>
						</li>
						<li>
							<a href="alumni-magazine.php">
								<span class="label">E-Mags</span>
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
											<span class="title">Search Friend</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-search-friend">
										<form action="#" method="post">
											<p>
												<span class="group-item">
													<span class="item labelling">
														<span class="text-label">Search By</span>
													</span>
													<span class="item component">
														<span class="custom-combobox">
															<select name="input[]">
																<option value="0">Angkatan</option>
																<option value="1">2015</option>
															</select>
														</span>
													</span>
												</span>
											</p>
											<p>
												<input type="text" name="input" placeholder="Search your friend here..">
											</p>
											<p align="right">
												<input type="submit" value="Search" class="button button-primary">
											</p>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="column one-half">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Recommended Friend</span>
										</span>
										<span class="opposite-link">
											<a href="#">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-recommended-friend">
										<div class="friend">
											<span class="group-item">
												<span class="item photo">
													<span class="thumbnail">
														<img src="images/statics/avatar.png" alt="">
													</span>
												</span>
												<span class="item details">
													<span class="title">
														<a href="alumni-friend-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Billie Devin</a>
													</span>
												</span>
												<span class="item action">
													<a href="#" class="button button-primary">Add Friend</a>
												</span>
											</span>
										</div>
										<div class="friend">
											<span class="group-item">
												<span class="item photo">
													<span class="thumbnail">
														<img src="images/statics/avatar.png" alt="">
													</span>
												</span>
												<span class="item details">
													<span class="title">
														<a href="alumni-friend-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Billie Devin</a>
													</span>
												</span>
												<span class="item action">
													<a href="#" class="button button-primary">Add Friend</a>
												</span>
											</span>
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
											<span class="title">Alumni Sharing</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-global widget-alumni-sharing">
										<div class="tabulation">
											<div class="tab-head">
												<ul class="container">
													<li><a href="#">Vacancy</a></li>
													<li><a href="#">Story Sharing</a></li>
													<li><a href="#">Testimonial</a></li>
												</ul>
											</div>
											<div class="tab-body">
												<div class="tab-body-item">
                                                    <p>If you have vacancy for Binusian, please feel free to share with us.</p>
													<span class="group-item">
														<span class="item">
															<a href="#" class="button button-primary wide">Internship Vacancy</a>
														</span>
														<span class="item">
															<a href="#" class="button button-primary wide">Job Vacancy</a>
														</span>
													</span>
												</div>
												<div class="tab-body-item">
                                                    <p>If you have vacancy for Binusian, please feel free to share with us.</p>
													<span class="group-item">
														<span class="item">
															<a href="#" class="button button-primary wide">News</a>
														</span>
														<span class="item">
															<a href="#" class="button button-primary wide">Article</a>
														</span>
													</span>
												</div>
												<div class="tab-body-item">
                                                    <p>If you have vacancy for Binusian, please feel free to share with us.</p>
													<span class="group-item">
														<span class="item">
															<a href="alumni-testimonial-posting.php #target-id" class="button button-primary wide fancybox-trigger fancybox.ajax">Testimonial</a>
														</span>
														<span class="item">
															<a href="#" class="button button-primary wide">Success Stories</a>
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
											<span class="title">News</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-global">
                                        <div class="widget-list-posts widget-list-news">
                                            <div class="post">
                                                <div class="group-item">
                                                    <div class="item auto-width">
                                                        <span class="image-container">
                                                            <img src="../../images/statics/post-thumbnail.jpg" alt="Post Thumbnail">
                                                        </span>
                                                    </div>
                                                    <div class="item">
                                                        <h3 class="post-title">
                                                            <a href="#">BINUS Meraih Peringkat 1 di Indonesia</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post">
                                                <div class="group-item">
                                                    <div class="item auto-width">
                                                        <span class="image-container">
                                                            <img src="../../images/statics/post-thumbnail.jpg" alt="Post Thumbnail">
                                                        </span>
                                                    </div>
                                                    <div class="item">
                                                        <h3 class="post-title">
                                                            <a href="#">Kembangkanlah Prestasimu</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="view-all-link">
                                                <a href="http://achievement.binus.ac.id/achievement/">View All News &gt;</a>
                                            </div>
                                        </div>
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
											<span class="title">Alumni Event</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-global">
                                        <div class="widget-list-posts widget-list-news">
                                            <div class="post">
                                                <div class="group-item">
                                                    <div class="item auto-width">
                                                        <span class="image-container">
                                                            <img src="../../images/statics/post-thumbnail.jpg" alt="Post Thumbnail">
                                                        </span>
                                                    </div>
                                                    <div class="item">
                                                        <h3 class="post-title">
                                                            <a href="#">BINUS Meraih Peringkat 1 di Indonesia</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post">
                                                <div class="group-item">
                                                    <div class="item auto-width">
                                                        <span class="image-container">
                                                            <img src="../../images/statics/post-thumbnail.jpg" alt="Post Thumbnail">
                                                        </span>
                                                    </div>
                                                    <div class="item">
                                                        <h3 class="post-title">
                                                            <a href="#">Kembangkanlah Prestasimu</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="view-all-link">
                                                <a href="http://achievement.binus.ac.id/achievement/">View All News &gt;</a>
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
											<span class="title">Event Joined</span>
										</span>
										<span class="opposite-link">
											<a href="employeer-schedule.php">View Calendar</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-list-events">
										<table>
											<body>
												<tr>
													<td class="for-title">
														<a href="employeer-campus-hiring.php #target-id" class="fancybox-trigger fancybox.ajax">Campus Hiring - HR Reps.....</a>
													</td>
													<td>30/05/2015</td>
													<td class="for-candidate">5 Candidate</td>
												</tr>
												<tr>
													<td class="for-title">
														<a href="employeer-campus-hiring.php #target-id" class="fancybox-trigger fancybox.ajax">Campus Hiring - HR Reps.....</a>
													</td>
													<td>30/05/2015</td>
													<td class="for-candidate">5 Candidate</td>
												</tr>
												<tr>
													<td class="for-title">
														<a href="employeer-campus-hiring.php #target-id" class="fancybox-trigger fancybox.ajax">Campus Hiring - HR Reps.....</a>
													</td>
													<td>30/05/2015</td>
													<td class="for-candidate">5 Candidate</td>
												</tr>
												<tr>
													<td class="for-title">
														<a href="employeer-campus-hiring.php #target-id" class="fancybox-trigger fancybox.ajax">Campus Hiring - HR Reps.....</a>
													</td>
													<td>30/05/2015</td>
													<td class="for-candidate">5 Candidate</td>
												</tr>
												<tr>
													<td class="for-title">
														<a href="employeer-campus-hiring.php #target-id" class="fancybox-trigger fancybox.ajax">Campus Hiring - HR Reps.....</a>
													</td>
													<td>30/05/2015</td>
													<td class="for-candidate">5 Candidate</td>
												</tr>
											</body>
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
											<span class="title">Endowment History</span>
										</span>
										<span class="opposite-link">
											<a href="#">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-table">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th>Program</th>
													<th>Your Endowment</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Program Didik Asuh</td>
													<td>Rp.1.000.000</td>
												</tr>
												<tr>
													<td>Program Didik Asuh</td>
													<td>Rp.1.000.000</td>
												</tr>
												<tr>
													<td>Program Didik Asuh</td>
													<td>Rp.1.000.000</td>
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
											<span class="title">Other Info</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-global">
										<div class="tabulation">
											<div class="tab-head">
												<ul class="container">
													<li><a href="#">CSR</a></li>
													<li><a href="#">Campaign</a></li>
													<li><a href="#">Endowment</a></li>
												</ul>
											</div>
											<div class="tab-body">
												<div class="tab-body-item">
													<div class="single-content">
														<ul>
															<li><a href="alumni-csr-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
															<li><a href="alumni-csr-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
															<li><a href="alumni-csr-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
															<li><a href="alumni-csr-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
														</ul>
														<p class="view-all text-center">
															<a href="alumni-csr-archive.php">View All CSR &gt;</a>
														</p>
													</div>
												</div>
												<div class="tab-body-item">
													<div class="single-content">
														<ul>
															<li><a href="alumni-campaign-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
															<li><a href="alumni-campaign-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
															<li><a href="alumni-campaign-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
															<li><a href="alumni-campaign-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
														</ul>
														<p class="view-all text-center">
															<a href="alumni-campaign-archive.php">View All Campaign &gt;</a>
														</p>
													</div>
												</div>
												<div class="tab-body-item">
													<div class="single-content">
														<ul>
															<li><a href="alumni-endowment-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
															<li><a href="alumni-endowment-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
															<li><a href="alumni-endowment-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
															<li><a href="alumni-endowment-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Pengumpulan Buku untuk ...</a></li>
														</ul>
														<p class="view-all text-center">
															<a href="alumni-endowment-archive.php">View All Endowment &gt;</a>
														</p>
													</div>
												</div>
											</div>
										</div>
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
											<a href="alumni-job-matched.php">View All</a>
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
														<a href="alumni-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">HR Represen...</a>
													</td>
													<td>20</td>
													<td>01/03/2015</td>
													<td>30/03/2015</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-job-fulltime has-tooltip" title="Fulltime"></i>
														<a href="alumni-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">HR Represen...</a>
													</td>
													<td>20</td>
													<td>01/03/2015</td>
													<td>30/03/2015</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-job-fulltime has-tooltip" title="Fulltime"></i>
														<a href="alumni-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">HR Represen...</a>
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
						<div class="column two-thirds">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Applied Vacancy List</span>
										</span>
										<span class="opposite-link">
											<a href="alumni-applied-vacancy.php">View All</a>
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
														<a href="alumni-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">HR Representative (HR-JD)</a>
													</td>
													<td>20</td>
													<td>02/03/2015</td>
													<td>Interview</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-job-parttime has-tooltip" title="Parttime"></i>
														<a href="alumni-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">HR Representative (HR-JD)</a>
													</td>
													<td>20</td>
													<td>02/03/2015</td>
													<td>Interview</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-job-internship has-tooltip" title="Internship"></i>
														<a href="alumni-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">HR Representative (HR-JD)</a>
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
						<div class="column one-half">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Saved Vacancy</span>
										</span>
										<span class="opposite-link">
											<a href="alumni-saved-vacancy.php">View All</a>
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
														<a href="alumni-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">HR Represen...</a>
													</td>
													<td>20</td>
													<td>01/03/2015</td>
													<td>30/03/2015</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-job-fulltime has-tooltip" title="Fulltime"></i>
														<a href="alumni-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">HR Represen...</a>
													</td>
													<td>20</td>
													<td>01/03/2015</td>
													<td>30/03/2015</td>
												</tr>
												<tr>
													<td>
														<i class="icon icon-job-fulltime has-tooltip" title="Fulltime"></i>
														<a href="alumni-job-detail.php #target-id" class="fancybox-trigger fancybox.ajax">HR Represen...</a>
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
						<div class="column one-half">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Membership</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-table">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th>Type</th>
													<th>Apply Date</th>
													<th>Expired Date</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Library Membership</td>
													<td>31/05/2015</td>
													<td>31/08/2016</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- #widget-parent -->
			</div>
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer-alumni.php' ); ?>