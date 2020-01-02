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
										<li>Audit Statistic</li>
									</ul>
								</div>
							</div>
						</section>
						<section class="page-heading">
							<div class="container">
								<h1>Audit Statistic</h1>
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
												<option value="1">Admin</option>
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
					<div class="page-sub-heading">
						<h2>Audit Statistic</h2>
					</div>
					<div class="page-audit-detail">
						<div class="audit-statistic">
							<div class="chart-item">
								<div class="google-chart" id="audit-statistics-chart-detail"></div>
							</div>
							<div class="chart-nav">
								<a href="#" class="nav-btn nav-prev">
									<i class="icon icon-ami-angle-left"></i>
									Previous
								</a>
								<a href="#" class="nav-btn nav-label">Year</a>
								<a href="#" class="nav-btn nav-next">
									Next
									<i class="icon icon-ami-angle-right"></i>
								</a>
							</div>
						</div>
						<div class="single-content popup-content" id="target-id">
							<div class="table-component">
								<table class="zebra bordered">
									<thead>
										<tr>
											<th rowspan="2">Tahun</th>
											<th class="text-center" colspan="4">Jenis Temuan</th>
										</tr>
										<tr>
											<th>Major</th>
											<th>Minor</th>
											<th>Observasi</th>
											<th>Opportunity for Improvement</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>2014</td>
											<td>41</td>
											<td>299</td>
											<td>325</td>
											<td>165</td>
										</tr>
										<tr>
											<td>2014</td>
											<td>41</td>
											<td>299</td>
											<td>325</td>
											<td>165</td>
										</tr>
										<tr>
											<td>2014</td>
											<td>41</td>
											<td>299</td>
											<td>325</td>
											<td>165</td>
										</tr>
										<tr>
											<td>2014</td>
											<td>41</td>
											<td>299</td>
											<td>325</td>
											<td>165</td>
										</tr>
										<tr>
											<td>2014</td>
											<td>41</td>
											<td>299</td>
											<td>325</td>
											<td>165</td>
										</tr>
										<tr>
											<td>2014</td>
											<td>41</td>
											<td>299</td>
											<td>325</td>
											<td>165</td>
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
								<hr>
								<p align="center">
									<a href="#" class="download-link">Download Data</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>