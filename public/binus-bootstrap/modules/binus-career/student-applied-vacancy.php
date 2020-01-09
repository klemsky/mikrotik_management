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
						<li class="current">
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
				<div class="box-container">
					<div class="details-table">
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

<?php include( 'footer.php' ); ?>