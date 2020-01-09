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
												<option value="1">Auditee</option>
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
							<a href="auditee-dashboard.php">
								<span class="label">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="auditee-audit.php">
								<span class="label">Audit</span>
							</a>
						</li>
						<li>
							<a href="auditee-history.php">
								<span class="label">History</span>
							</a>
						</li>
						<li class="current">
							<a href="auditee-questionnaire.php">
								<span class="label">Questionnaire</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section><!-- .body-navigation -->

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<div class="page-sub-heading">
						<h2>Questionnaire List</h2>
					</div>
					<div class="table-component">
						<table class="zebra bordered">
							<thead>
								<tr>
									<th>Questionnaire List</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="auditee-questionnaire-form.php">Lorem ipsum dolor sit amet</a></td>
									<td>UNDONE</td>
								</tr>
								<tr>
									<td>Lorem ipsum dolor sit amet</td>
									<td>DONE</td>
								</tr>
								<tr>
									<td><a href="auditee-questionnaire-form.php">Lorem ipsum dolor sit amet</a></td>
									<td>UNDONE</td>
								</tr>
								<tr>
									<td><a href="auditee-questionnaire-form.php">Lorem ipsum dolor sit amet</a></td>
									<td>UNDONE</td>
								</tr>
								<tr>
									<td><a href="auditee-questionnaire-form.php">Lorem ipsum dolor sit amet</a></td>
									<td>UNDONE</td>
								</tr>
								<tr>
									<td><a href="auditee-questionnaire-form.php">Lorem ipsum dolor sit amet</a></td>
									<td>UNDONE</td>
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
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>