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
						<li>
							<a href="courseview-schedule.php">
								<span class="label">Schedule</span>
							</a>
						</li>
						<li class="current">
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
				<div class="box-container">
					<div class="forum">
						<div class="thread-view">
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