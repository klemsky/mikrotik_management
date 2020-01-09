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
						<li>
							<a href="alumni-dashboard.php">
								<span class="label">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="alumni-search-job.php">
								<span class="label">Search Job</span>
							</a>
						</li>
						<li class="current">
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
				<div class="calendar-container">
					<div class="wrap-head">
						<ul>
							<li class="current">
								<a href="#" class="type-grid">
									<i class="icon icon-grid-view"></i>
									<span class="label">Grid View</span>
								</a>
							</li>
							<li>
								<a href="#" class="type-list">
									<i class="icon icon-list-view"></i>
									<span class="label">List View</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="wrap-body">
						<div class="filter">
							<form action="#" method="get">
								<p>
									<label>Calendar Filter:</label>
								</p>
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
							<div class="fullcalendar calendar"></div>
							<div class="legend new-layout">
								<div class="header">Legends</div>
								<div class="group-item">
									<div class="rows">
										<div class="item">
											<span class="bullet" style="background-color: #68bdee;"></span>
											<span class="label">: Psikotes</span>
										</div>
										<div class="item">
											<span class="bullet" style="background-color: #ee68a7;"></span>
											<span class="label">: Interview</span>
										</div>
										<div class="item">
											<span class="bullet" style="background-color: #f07273;"></span>
											<span class="label">: Final Interview</span>
										</div>
									</div>
									<div class="rows">
										<div class="item">
											<span class="bullet" style="background-color: #456f5b;"></span>
											<span class="label">: Campus Hiring</span>
										</div>
										<div class="item">
											<span class="bullet" style="background-color: #306c86;"></span>
											<span class="label">: Job Expo</span>
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

<?php include( 'footer-alumni.php' ); ?>