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
						<li class="current">
							<a href="alumni-search-friend.php">
								<span class="label">Search Friend</span>
							</a>
						</li>
						<li>
							<a href="alumni-business-network.php">
								<span class="label">Business Network</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section><!-- .body-navigation -->

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<div class="popup-content" id="target-id">
						<div class="friend-detail">
							<div class="thumbnail">
								<img src="images/statics/avatar.png" alt="">
							</div>
							<div class="friend-name">
								Rebecca Setiadi
							</div>
							<div class="details">
								<div class="group-item">
									<div class="item personal-info">
										<h3 class="subtitle">Personal Info</h3>
										<p>
											rebeccas.setiadi@gmail.com<br/>
											09575644534<br/>
											Robotic Technical Managing<br/>
											PT Astra International<br/>
											Jakarta, Indonesia
										</p>
									</div>
									<div class="item binusian-info">
										<h3 class="subtitle">Binusian Info</h3>
										<ul>
											<li>S1 Marketing Communication BINUS University (2009)</li>
											<li>S2 International Relation, Binus International University (2016)</li>
											<li>S3 Business Management Binus Bussiness School (2019)</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="action">
								<p align="center"><a href="#" class="button button-primary">Add Friend</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer-alumni.php' ); ?>