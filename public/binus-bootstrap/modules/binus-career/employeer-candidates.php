<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">

		<section class="user-content single-page">
			<div class="container">
				<div class="row">
					<div class="column two-thirds">
						<section class="breadcrumb">
							<div class="container">
								<div class="wrap">
									<ul>
										<li><a href="#">Dashboard</a></li>
										<li>Vacancy Candidate</li>
									</ul>
								</div>
							</div>
						</section>
						<section class="page-heading">
							<div class="container">
								<h1>View All Candidate</h1>
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
												<option value="1">Employeer</option>
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

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<div class="candidate-list">
						<div class="filter">
							<form action="#" method="get">
								<p>
									<label>Vacancy Filter:</label>
									<span class="custom-combobox">
										<select name="input[]">
											<option value="0">Select Filter</option>
										</select>
									</span>
								</p>
							</form>
						</div>
						<div class="result">
							<table class="zebra bordered">
								<thead>
									<tr>
										<th>Candidate</th>
										<th>Work Experience</th>
										<th>Expected Salary</th>
										<th>Process Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<span class="profile">
												<span class="thumbnail">
													<img src="images/statics/avatar.png" alt="">
												</span>
												<span class="details">
													<span class="name">
														<a href="employeer-profile-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Rebecca Setiadi</a>
													</span>
													<span class="meta">Female, 27 y.o</span>
													<span class="meta">S1 - Psikologi (3.5)</span>
												</span>
											</span>
										</td>
										<td>HRD 3 Years</td>
										<td>Rp.8.000.000</td>
										<td>Psikotes</td>
									</tr>
									<tr>
										<td>
											<span class="profile">
												<span class="thumbnail">
													<img src="images/statics/avatar.png" alt="">
												</span>
												<span class="details">
													<span class="name">
														<a href="employeer-profile-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Rebecca Setiadi</a>
													</span>
													<span class="meta">Female, 27 y.o</span>
													<span class="meta">S1 - Psikologi (3.5)</span>
												</span>
											</span>
										</td>
										<td>HRD 3 Years</td>
										<td>Rp.8.000.000</td>
										<td>Psikotes</td>
									</tr>
									<tr>
										<td>
											<span class="profile">
												<span class="thumbnail">
													<img src="images/statics/avatar.png" alt="">
												</span>
												<span class="details">
													<span class="name">
														<a href="employeer-profile-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Rebecca Setiadi</a>
													</span>
													<span class="meta">Female, 27 y.o</span>
													<span class="meta">S1 - Psikologi (3.5)</span>
												</span>
											</span>
										</td>
										<td>HRD 3 Years</td>
										<td>Rp.8.000.000</td>
										<td>Psikotes</td>
									</tr>
									<tr>
										<td>
											<span class="profile">
												<span class="thumbnail">
													<img src="images/statics/avatar.png" alt="">
												</span>
												<span class="details">
													<span class="name">
														<a href="employeer-profile-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Rebecca Setiadi</a>
													</span>
													<span class="meta">Female, 27 y.o</span>
													<span class="meta">S1 - Psikologi (3.5)</span>
												</span>
											</span>
										</td>
										<td>HRD 3 Years</td>
										<td>Rp.8.000.000</td>
										<td>Psikotes</td>
									</tr>
									<tr>
										<td>
											<span class="profile">
												<span class="thumbnail">
													<img src="images/statics/avatar.png" alt="">
												</span>
												<span class="details">
													<span class="name">
														<a href="employeer-profile-detail.php #target-id" class="fancybox-trigger fancybox.ajax">Rebecca Setiadi</a>
													</span>
													<span class="meta">Female, 27 y.o</span>
													<span class="meta">S1 - Psikologi (3.5)</span>
												</span>
											</span>
										</td>
										<td>HRD 3 Years</td>
										<td>Rp.8.000.000</td>
										<td>Psikotes</td>
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
	</div>

<?php include( 'footer.php' ); ?>