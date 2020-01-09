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
						<li>
							<a href="auditor-schedule.php">
								<span class="label">Schedule</span>
							</a>
						</li>
						<li class="current">
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
				<div class="box-container">
					<div class="search-filter">
						<form action="#" method="get">
							<div class="row">
								<div class="column one-half">
									<p>
										<label>Tahun Audit</label>
										<span class="custom-combobox">
											<select name="input[]">
												<option value="0">Select Tahun</option>
											</select>
										</span>
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Unit Unit</label>
										<span class="custom-combobox">
											<select name="input[]">
												<option value="0">Select Unit</option>
											</select>
										</span>
									</p>
								</div>
							</div>
							<p align="right">
								<input type="submit" value="Load Data" class="button button-primary">
							</p>
						</form>
					</div>
				</div>
				<div class="widget-parent" id="widget-parent">
					<div class="row">
						<div class="column one-third">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap text-center">
										<span class="label">
											<span class="title">DMD Audit 2014</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-perspective-meter">
										<div class="perspective-meter" data-value="5" data-scale="6">
											<!-- widget goes here -->
											<span class="perspective-legend">
												<span class="score">
													<span class="score-label">Score</span>
													<span class="score-value">5</span>
												</span>
												<span class="state-value">
													<span class="start">1</span>
													<span class="end">6</span>
												</span>
												<span class="description">
													Weight: 100%
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="widget-footer">
									<span class="text-right"><a href="auditor-questionnaire-detail.php">View Details &gt;</a></span>
								</div>
							</div>
						</div>
						<div class="column one-third">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap text-center">
										<span class="label">
											<span class="title">DMD Audit 2014</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-perspective-meter">
										<div class="perspective-meter" data-value="5" data-scale="6">
											<!-- widget goes here -->
											<span class="perspective-legend">
												<span class="score">
													<span class="score-label">Score</span>
													<span class="score-value">5</span>
												</span>
												<span class="state-value">
													<span class="start">1</span>
													<span class="end">6</span>
												</span>
												<span class="description">
													Weight: 100%
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="widget-footer">
									<span class="text-right"><a href="auditor-questionnaire-detail.php">View Details &gt;</a></span>
								</div>
							</div>
						</div>
						<div class="column one-third">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap text-center">
										<span class="label">
											<span class="title">DMD Audit 2014</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-perspective-meter">
										<div class="perspective-meter" data-value="5" data-scale="6">
											<!-- widget goes here -->
											<span class="perspective-legend">
												<span class="score">
													<span class="score-label">Score</span>
													<span class="score-value">5</span>
												</span>
												<span class="state-value">
													<span class="start">1</span>
													<span class="end">6</span>
												</span>
												<span class="description">
													Weight: 100%
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="widget-footer">
									<span class="text-right"><a href="auditor-questionnaire-detail.php">View Details &gt;</a></span>
								</div>
							</div>
						</div>
						<div class="column one-third">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap text-center">
										<span class="label">
											<span class="title">DMD Audit 2014</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-perspective-meter">
										<div class="perspective-meter" data-value="5" data-scale="6">
											<!-- widget goes here -->
											<span class="perspective-legend">
												<span class="score">
													<span class="score-label">Score</span>
													<span class="score-value">5</span>
												</span>
												<span class="state-value">
													<span class="start">1</span>
													<span class="end">6</span>
												</span>
												<span class="description">
													Weight: 100%
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="widget-footer">
									<span class="text-right"><a href="auditor-questionnaire-detail.php">View Details &gt;</a></span>
								</div>
							</div>
						</div>
						<div class="column one-third">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap text-center">
										<span class="label">
											<span class="title">DMD Audit 2014</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-perspective-meter">
										<div class="perspective-meter" data-value="5" data-scale="6">
											<!-- widget goes here -->
											<span class="perspective-legend">
												<span class="score">
													<span class="score-label">Score</span>
													<span class="score-value">5</span>
												</span>
												<span class="state-value">
													<span class="start">1</span>
													<span class="end">6</span>
												</span>
												<span class="description">
													Weight: 100%
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="widget-footer">
									<span class="text-right"><a href="auditor-questionnaire-detail.php">View Details &gt;</a></span>
								</div>
							</div>
						</div>
						<div class="column one-third">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap text-center">
										<span class="label">
											<span class="title">DMD Audit 2014</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-perspective-meter">
										<div class="perspective-meter" data-value="5" data-scale="6">
											<!-- widget goes here -->
											<span class="perspective-legend">
												<span class="score">
													<span class="score-label">Score</span>
													<span class="score-value">5</span>
												</span>
												<span class="state-value">
													<span class="start">1</span>
													<span class="end">6</span>
												</span>
												<span class="description">
													Weight: 100%
												</span>
											</span>
										</div>
									</div>
								</div>
								<div class="widget-footer">
									<span class="text-right"><a href="auditor-questionnaire-detail.php">View Details &gt;</a></span>
								</div>
							</div>
						</div>
					</div>
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
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>