<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">

		<section class="user-content">
			<div class="container">
				<div class="row">
					<div class="column one-half">
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
					<div class="column one-half opposite">
						<section class="user-role">
							<div class="wrap">
								<div class="field">
									<p>
										<span class="label">Login As</span>
										<span class="component">
											<span class="login-role" id="login-role">
												<select name="login-role">
													<option value="1">Lecturer</option>
												</select>
											</span>
										</span>
									</p>
									<p>
										<span class="label">Active Period</span>
										<span class="component">
											<span class="login-role" id="active-periode">
												<select name="active-period">
													<option value="1">2015 - Ganjil - 1</option>
												</select>
											</span>
										</span>
									</p>
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
							<a href="dashboard-lecturer-dashboard.php">
								<span class="label">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="dashboard-lecturer-course.php">
								<span class="label">Course</span>
							</a>
						</li>
						<li>
							<a href="dashboard-lecturer-schedule.php">
								<span class="label">Schedule</span>
							</a>
						</li>
						<li class="current">
							<a href="dashboard-lecturer-forum.php">
								<span class="label">Forum</span>
							</a>
						</li>
						<li>
							<a href="dashboard-lecturer-finance.php">
								<span class="label">Finance</span>
							</a>
						</li>
						<li>
							<a href="dashboard-lecturer-profile.php">
								<span class="label">Profile</span>
							</a>
						</li>
						<li>
							<a href="dashboard-lecturer-message.php">
								<span class="label">Message</span>
							</a>
						</li>
						<li>
							<a href="dashboard-lecturer-score.php">
								<span class="label">Score</span>
							</a>
						</li>
						<li>
							<a href="dashboard-lecturer-course-archive.php">
								<span class="label">Course Archive</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section><!-- .body-navigation -->

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<div class="forum">
						<div class="thread-view">
							<table class="zebra bordered">
								<thead>
									<tr>
										<th>Course Forum</th>
										<th>Last Post</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr class="new-post">
										<td>
											<span class="title">
												<a href="courseview-forum-sub.php">
													<strong>Algorithm and Programming</strong>
												</a>
											</span>
											<span class="meta-data">
												<a href="courseview-forum-info.php #target-id" class="fancybox-trigger fancybox.ajax">Course Info</a>
											</span>
										</td>
										<td>
											<span class="meta-data"><strong>Algorithm Intro</strong></span>
											<span class="meta-data">18 Nov 2014, 17:17:17 by: Lia Oktavianti</span>
										</td>
										<td>
											<span class="meta-data">Views: 78</span>
											<span class="meta-data">Replies: 19</span>
										</td>
									</tr>
									<tr class="new-post">
										<td>
											<span class="title">
												<a href="courseview-forum-sub.php">
													<strong>Algorithm and Programming</strong>
												</a>
											</span>
											<span class="meta-data">
												<a href="courseview-forum-info.php #target-id" class="fancybox-trigger fancybox.ajax">Course Info</a>
											</span>
										</td>
										<td>
											<span class="meta-data"><strong>Algorithm Intro</strong></span>
											<span class="meta-data">18 Nov 2014, 17:17:17 by: Lia Oktavianti</span>
										</td>
										<td>
											<span class="meta-data">Views: 78</span>
											<span class="meta-data">Replies: 19</span>
										</td>
									</tr>
									<tr>
										<td>
											<span class="title">
												<a href="courseview-forum-sub.php">
													<strong>Algorithm and Programming</strong>
												</a>
											</span>
											<span class="meta-data">
												<a href="courseview-forum-info.php #target-id" class="fancybox-trigger fancybox.ajax">Course Info</a>
											</span>
										</td>
										<td>
											<span class="meta-data"><strong>Algorithm Intro</strong></span>
											<span class="meta-data">18 Nov 2014, 17:17:17 by: Lia Oktavianti</span>
										</td>
										<td>
											<span class="meta-data">Views: 78</span>
											<span class="meta-data">Replies: 19</span>
										</td>
									</tr>
									<tr>
										<td>
											<span class="title">
												<a href="courseview-forum-sub.php">
													<strong>Algorithm and Programming</strong>
												</a>
											</span>
											<span class="meta-data">
												<a href="courseview-forum-info.php #target-id" class="fancybox-trigger fancybox.ajax">Course Info</a>
											</span>
										</td>
										<td>
											<span class="meta-data"><strong>Algorithm Intro</strong></span>
											<span class="meta-data">18 Nov 2014, 17:17:17 by: Lia Oktavianti</span>
										</td>
										<td>
											<span class="meta-data">Views: 78</span>
											<span class="meta-data">Replies: 19</span>
										</td>
									</tr>
								</tbody>
							</table>
							<table class="zebra bordered">
								<thead>
									<tr>
										<th>Public Forum Thread</th>
										<th>Last Post</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr class="new-post">
										<td>
											<span class="title">
												<a href="courseview-forum-inside.php">Session 1 - Product and Service  Costing: Job-Order System</a>
											</span>
											<span class="meta-data">
												by: Suprapto Karapto
											</span>
										</td>
										<td>
											<span class="post-date">18 Nov 2014, 17:17:17</span>
											<span class="meta-data">by: Lia Oktavianti</span>
										</td>
										<td>
											<span class="meta-data">Views: 78</span>
											<span class="meta-data">Replies: 19</span>
										</td>
									</tr>
									<tr>
										<td>
											<span class="title">
												<a href="courseview-forum-inside.php">Session 2 - Product and Service  Costing: Job-Order System</a>
											</span>
											<span class="meta-data">
												by: Suprapto Karapto
											</span>
										</td>
										<td>
											<span class="post-date">18 Nov 2014, 17:17:17</span>
											<span class="meta-data">by: Lia Oktavianti</span>
										</td>
										<td>
											<span class="meta-data">Views: 78</span>
											<span class="meta-data">Replies: 19</span>
										</td>
									</tr>
									<tr>
										<td>
											<span class="title">
												<a href="courseview-forum-inside.php">Session 3 - Product and Service  Costing: Job-Order System</a>
											</span>
											<span class="meta-data">
												by: Suprapto Karapto
											</span>
										</td>
										<td>
											<span class="post-date">18 Nov 2014, 17:17:17</span>
											<span class="meta-data">by: Lia Oktavianti</span>
										</td>
										<td>
											<span class="meta-data">Views: 78</span>
											<span class="meta-data">Replies: 19</span>
										</td>
									</tr>
									<tr>
										<td>
											<span class="title">
												<a href="courseview-forum-inside.php">Session 4 - Product and Service  Costing: Job-Order System</a>
											</span>
											<span class="meta-data">
												by: Suprapto Karapto
											</span>
										</td>
										<td>
											<span class="post-date">18 Nov 2014, 17:17:17</span>
											<span class="meta-data">by: Lia Oktavianti</span>
										</td>
										<td>
											<span class="meta-data">Views: 78</span>
											<span class="meta-data">Replies: 19</span>
										</td>
									</tr>
									<tr>
										<td>
											<span class="title">
												<a href="courseview-forum-inside.php">Team Forum</a>
											</span>
										</td>
										<td>
											<span class="post-date">18 Nov 2014, 17:17:17</span>
											<span class="meta-data">by: Lia Oktavianti</span>
										</td>
										<td>
											<span class="meta-data">Views: 78</span>
											<span class="meta-data">Replies: 19</span>
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td>
											<a href="courseview-create-thread.php #target-id" class="button button-primary fancybox-trigger fancybox.ajax">
												Create New Thread
											</a>
										</td>
										<td colspan="2" class="has-pagination">
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
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div><!-- #main-content -->
	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>