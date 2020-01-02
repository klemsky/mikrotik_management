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
							<a href="courseview-dashboard.php">
								<span class="label">Course</span>
							</a>
						</li>
						<li class="current">
							<a href="courseview-schedule.php">
								<span class="label">Schedule</span>
							</a>
						</li>
						<li>
							<a href="courseview-forum.php">
								<span class="label">Forum</span>
							</a>
						</li>
						<li>
							<a href="courseview-finance.php">
								<span class="label">Finance</span>
							</a>
						</li>
						<li>
							<a href="courseview-profile.php">
								<span class="label">Profile</span>
							</a>
						</li>
						<li>
							<a href="courseview-message.php">
								<span class="label">Message</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section><!-- .body-navigation -->

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="tabulation page-tab">
					<div class="tab-head">
						<ul class="container">
							<li>
								<a href="#">
									<i class="icon icon-course-view"></i>
									<span class="label">Course View</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon icon-list-view"></i>
									<span class="label">List View</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="icon icon-grid-view"></i>
									<span class="label">Grid View</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="tab-body">
						<div class="tab-body-item">
							<div class="box-container">
								<div class="courseview-container">
									<div class="courseview">
										<div class="courseview-head">
											Akuntansi Nirlaba dan Pemerintahan
										</div>
										<div class="courseview-body">
											<div class="information">
												<span class="group-item">
													<span class="item">
														<span class="label">Kdmtk</span>
														<span class="value">1122F</span>
													</span>
													<span class="item">
														<span class="label">Kelas</span>
														<span class="value">LA1F</span>
													</span>
													<span class="item">
														<span class="label">Dosen</span>
														<span class="value">Stefanus Ariyanto, SE., M.Ak</span>
													</span>
												</span>
											</div>
											<div class="schedule-information">
												<h3 class="sub-title">Jadwal Kuliah Tatap Muka</h3>
												<div class="group-item parent">
													<div class="item left-side">
														<div class="schedule-item has-border">
															<span class="group-item child">
																<span class="item status">
																	<span class="label">OS</span>
																</span>
																<span class="item details">
																	<span class="date">20 Juni 2014</span>
																	<span class="location">
																		<a href="#">Syahdan</a> - M2CD
																	</span>
																</span>
																<span class="item time">
																	<span class="time-text">19:00 - 21:00</span>
																</span>
															</span>
														</div>
														<div class="schedule-item has-border">
															<span class="group-item child">
																<span class="item status">
																	<span class="label">OS</span>
																</span>
																<span class="item details">
																	<span class="date">20 Juni 2014</span>
																	<span class="location">
																		<a href="#">Syahdan</a> - M2CD
																	</span>
																</span>
																<span class="item time">
																	<span class="time-text">19:00 - 21:00</span>
																</span>
															</span>
														</div>
													</div>
													<div class="item right-side">
														<div class="schedule-item has-border">
															<span class="group-item child">
																<span class="item status">
																	<span class="label active">OS</span>
																</span>
																<span class="item details">
																	<span class="date">20 Juni 2014</span>
																</span>
																<span class="item time">
																	<span class="time-text">19:00 - 21:00</span>
																</span>
															</span>
														</div>
														<div class="schedule-item has-border">
															<span class="group-item child">
																<span class="item status">
																	<span class="label active">OS</span>
																</span>
																<span class="item details">
																	<span class="date">20 Juni 2014</span>
																</span>
																<span class="item time">
																	<span class="time-text">19:00 - 21:00</span>
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
											<div class="schedule-information">
												<h3 class="sub-title">Jadwal Kuliah Online</h3>
												<div class="group-item parent">
													<div class="item left-side">
														<div class="schedule-item has-border">
															<span class="group-item child">
																<span class="item status">
																	<span class="label">1</span>
																</span>
																<span class="item details">
																	<span class="date">20 Juni 2014</span>
																</span>
															</span>
														</div>
														<div class="schedule-item">
															<span class="group-item child">
																<span class="item status">
																	<span class="label">2</span>
																</span>
																<span class="item details">
																	<span class="date">20 Juni 2014</span>
																</span>
															</span>
														</div>
													</div>
													<div class="item right-side">
														<div class="schedule-item">
															<span class="group-item child">
																<span class="item status">
																	<span class="label">3</span>
																</span>
																<span class="item details">
																	<span class="date">20 Juni 2014</span>
																</span>
															</span>
														</div>
														<div class="schedule-item">
															<span class="group-item child">
																<span class="item status">
																	<span class="label">4</span>
																</span>
																<span class="item details">
																	<span class="date">20 Juni 2014</span>
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="courseview">
										<div class="courseview-head">
											Akuntansi Nirlaba dan Pemerintahan
										</div>
										<div class="courseview-body">
											<div class="information">
												<span class="group-item">
													<span class="item">
														<span class="label">Kdmtk</span>
														<span class="value">1122F</span>
													</span>
													<span class="item">
														<span class="label">Kelas</span>
														<span class="value">LA1F</span>
													</span>
													<span class="item">
														<span class="label">Dosen</span>
														<span class="value">Stefanus Ariyanto, SE., M.Ak</span>
													</span>
												</span>
											</div>
											<div class="schedule-information">
												<h3 class="sub-title">Jadwal Kuliah Tatap Muka</h3>
												<div class="group-item parent">
													<div class="item left-side">
														<div class="schedule-item has-border">
															<span class="group-item child">
																<span class="item status">
																	<span class="label">OS</span>
																</span>
																<span class="item details">
																	<span class="date">20 Juni 2014</span>
																	<span class="location">
																		<a href="#">Syahdan</a> - M2CD
																	</span>
																</span>
																<span class="item time">
																	<span class="time-text">19:00 - 21:00</span>
																</span>
															</span>
														</div>
														<div class="schedule-item has-border">
															<span class="group-item child">
																<span class="item status">
																	<span class="label">OS</span>
																</span>
																<span class="item details">
																	<span class="date">20 Juni 2014</span>
																	<span class="location">
																		<a href="#">Syahdan</a> - M2CD
																	</span>
																</span>
																<span class="item time">
																	<span class="time-text">19:00 - 21:00</span>
																</span>
															</span>
														</div>
													</div>
													<div class="item right-side">
														<div class="schedule-item has-border">
															<span class="group-item child">
																<span class="item status">
																	<span class="label active">OS</span>
																</span>
																<span class="item details">
																	<span class="date">20 Juni 2014</span>
																</span>
																<span class="item time">
																	<span class="time-text">19:00 - 21:00</span>
																</span>
															</span>
														</div>
														<div class="schedule-item has-border">
															<span class="group-item child">
																<span class="item status">
																	<span class="label active">OS</span>
																</span>
																<span class="item details">
																	<span class="date">20 Juni 2014</span>
																</span>
																<span class="item time">
																	<span class="time-text">19:00 - 21:00</span>
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
											<div class="schedule-information">
												<h3 class="sub-title">Jadwal Kuliah Online</h3>
												<div class="group-item parent">
													<div class="item left-side">
														<div class="schedule-item has-border">
															<span class="group-item child">
																<span class="item status">
																	<span class="label">1</span>
																</span>
																<span class="item details">
																	<span class="date">20 Juni 2014</span>
																</span>
															</span>
														</div>
														<div class="schedule-item">
															<span class="group-item child">
																<span class="item status">
																	<span class="label">2</span>
																</span>
																<span class="item details">
																	<span class="date">20 Juni 2014</span>
																</span>
															</span>
														</div>
													</div>
													<div class="item right-side">
														<div class="schedule-item">
															<span class="group-item child">
																<span class="item status">
																	<span class="label">3</span>
																</span>
																<span class="item details">
																	<span class="date">20 Juni 2014</span>
																</span>
															</span>
														</div>
														<div class="schedule-item">
															<span class="group-item child">
																<span class="item status">
																	<span class="label">4</span>
																</span>
																<span class="item details">
																	<span class="date">20 Juni 2014</span>
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-body-item">
							<div class="box-container">
								<div class="schedule-agenda">
									<div class="agenda">
										<div class="agenda-head">
											Today Schedule
										</div>
										<div class="agenda-body">
											<div class="group-item parent">
												<div class="item date">
													<span class="day">12</span>
													<span class="month">Jan</span>
												</div>
												<div class="item details">
													<div class="agenda-item">
														<div class="group-item child">
															<div class="item time">
																<span class="time-text">09.20</span>
															</div>
															<div class="item description">
																<span class="title">Pengantar Teknologi Informasi</span>
																<span class="meta-data">
																	<i class="icon icon-lms-marker"></i>
																	Onsite Class - Anggrek Campus, 212
																</span>
															</div>
														</div>
													</div>
													<div class="agenda-item">
														<div class="group-item child">
															<div class="item time">
																<span class="time-text">09.20</span>
															</div>
															<div class="item description">
																<span class="title">Pengantar Teknologi Informasi</span>
																<span class="meta-data">
																	<i class="icon icon-lms-marker"></i>
																	Onsite Class - Anggrek Campus, 212
																</span>
															</div>
														</div>
													</div>
													<div class="agenda-item">
														<div class="group-item child">
															<div class="item time">
																<span class="time-text">09.20</span>
															</div>
															<div class="item description">
																<span class="title">Pengantar Teknologi Informasi</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="agenda">
										<div class="agenda-head">
											Today Schedule
										</div>
										<div class="agenda-body">
											<div class="group-item parent">
												<div class="item date">
													<span class="day">12</span>
													<span class="month">Jan</span>
												</div>
												<div class="item details">
													<div class="agenda-item">
														<div class="group-item child">
															<div class="item time">
																<span class="time-text">09.20</span>
															</div>
															<div class="item description">
																<span class="title">Pengantar Teknologi Informasi</span>
																<span class="meta-data">
																	<i class="icon icon-lms-camera"></i>
																	Video Conference
																</span>
															</div>
														</div>
													</div>
													<div class="agenda-item">
														<div class="group-item child">
															<div class="item time">
																<span class="time-text">09.20</span>
															</div>
															<div class="item description">
																<span class="title">Pengantar Teknologi Informasi</span>
																<span class="meta-data">
																	<i class="icon icon-lms-assignment"></i>
																	<a href="#">More Info</a>
																</span>
															</div>
														</div>
													</div>
													<div class="agenda-item">
														<div class="group-item child">
															<div class="item time">
																<span class="time-text">09.20</span>
															</div>
															<div class="item description">
																<span class="title">Pengantar Teknologi Informasi</span>
																<span class="meta-data">
																	<i class="icon icon-lms-assignment"></i>
																	<a href="#">More Info</a>
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-body-item">
							<div class="box-container">
								<div class="calendar-container">
									<div class="filter">
										<form action="#" method="get">
											<p><label>Calendar Filter:</label></p>
											<div class="row">
												<div class="column one-third">
													<span class="custom-combobox">
														<select name="input[]">
															<option value="0">All Event Type</option>
														</select>
													</span>
												</div>
												<div class="column one-third">
													<span class="custom-combobox">
														<select name="input[]">
															<option value="0">All Job Type</option>
														</select>
													</span>
												</div>
												<div class="column one-third">
													<span class="custom-search">
														<input type="text" name="input[]" placeholder="Search event">
														<span class="icon-area"></span>
													</span>
												</div>
											</div>
										</form>
									</div>
									<div class="calendar-wrapper">
										<div class="fullcalendar calendar has-button-create-event">
											<a href="courseview-schedule-create-event.php #target-id" class="button-create-event button button-primary fancybox-trigger fancybox.ajax">Create Event</a>
										</div>
										<div class="legend new-layout">
											<div class="header">Legends</div>
											<div class="group-item">
												<div class="rows">
													<div class="item">
														<span class="bullet" style="background-color: #68bdee;"></span>
														<span class="label">: Lecturing</span>
													</div>
													<div class="item">
														<span class="bullet" style="background-color: #ee68a7;"></span>
														<span class="label">: Administrative Payment</span>
													</div>
													<div class="item">
														<span class="bullet" style="background-color: #f07273;"></span>
														<span class="label">: Assignment Deadline</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- #main-content -->
	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>