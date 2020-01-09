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
												<option value="1">Auditor</option>
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
							<a href="auditor-dashboard.php">
								<span class="label">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="auditor-audit.php">
								<span class="label">Audit</span>
							</a>
						</li>
						<li>
							<a href="auditor-history.php">
								<span class="label">History</span>
							</a>
						</li>
						<li class="current">
							<a href="auditor-schedule.php">
								<span class="label">Schedule</span>
							</a>
						</li>
						<li>
							<a href="auditor-questionnaire.php">
								<span class="label">Questionnaire Score</span>
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
						<div class="calendar-wrapper">
							<div class="fullcalendar calendar"></div>
							<div class="legend new-layout">
								<div class="header">Legends</div>
								<div class="group-item">
									<div class="rows">
										<div class="item">
											<span class="bullet" style="background-color: #0b4c68;"></span>
											<span class="label">: BINUS UNIVERSITY</span>
										</div>
										<div class="item">
											<span class="bullet" style="background-color: #f07273;"></span>
											<span class="label">: BINA Nusantara</span>
										</div>
										<div class="item">
											<span class="bullet" style="background-color: #7290c6;"></span>
											<span class="label">: General Affairs</span>
										</div>
										<div class="item">
											<span class="bullet" style="background-color: #c592bd;"></span>
											<span class="label">: Human Capital</span>
										</div>
									</div>
									<div class="rows">
										<div class="item">
											<span class="bullet" style="background-color: #1a80c2;"></span>
											<span class="label">: Marketing</span>
										</div>
										<div class="item">
											<span class="bullet" style="background-color: #4aaf73;"></span>
											<span class="label">: Information Technology</span>
										</div>
										<div class="item">
											<span class="bullet" style="background-color: #57aae0;"></span>
											<span class="label">: Finance</span>
										</div>
										<div class="item">
											<span class="bullet" style="background-color: #ff5caf;"></span>
											<span class="label">: BCLD</span>
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