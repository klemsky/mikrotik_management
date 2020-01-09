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

		<section class="body-navigation on-pre-content">
			<div class="nav-head">
				<div class="container">
					<ul>
						<li class="current">
							<a href="admin-dashboard.php">
								<span class="label">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="admin-audit.php">
								<span class="label">Audit</span>
							</a>
						</li>
						<li>
							<a href="admin-history.php">
								<span class="label">History</span>
							</a>
						</li>
						<li>
							<a href="admin-schedule.php">
								<span class="label">Schedule</span>
							</a>
						</li>
						<li>
							<a href="admin-registration.php">
								<span class="label">Registration</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section><!-- .body-navigation -->

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="widget-parent" id="widget-parent">
					<div class="row">
						<div class="column one-half">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Audit Document</span>
										</span>
										<span class="opposite-link">
											<a href="admin-action-list.php #target-id" class="fancybox-trigger fancybox.ajax">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-table">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th>Document</th>
													<th>Required Unit</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Lorem ipsum dolor sit amet.</td>
													<td>All Unit, DMD, ...</td>
												</tr>
												<tr>
													<td>Lorem ipsum dolor sit amet.</td>
													<td>All Unit, DMD, ...</td>
												</tr>
												<tr>
													<td>Lorem ipsum dolor sit amet.</td>
													<td>All Unit, DMD, ...</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="column one-half">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Audit Schedule</span>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-audit-schedule">
										<div class="group-item">
											<div class="rows">
												<div class="item date">
													17 November 2014
												</div>
												<div class="item time">
													14.00 - 17.00
												</div>
												<div class="item description">
													<span class="title">Audit Quarter 1</span>
													<span class="location">M2A - Syahdan</span>
												</div>
											</div>
											<div class="rows">
												<div class="item date">
													17 November 2014
												</div>
												<div class="item time">
													14.00 - 17.00
												</div>
												<div class="item description">
													<span class="title">Audit Quarter 1</span>
													<span class="location">M2A - Syahdan</span>
												</div>
											</div>
											<div class="rows">
												<div class="item date">
													17 November 2014
												</div>
												<div class="item time">
													14.00 - 17.00
												</div>
												<div class="item description">
													<span class="title">Audit Quarter 1</span>
													<span class="location">M2A - Syahdan</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="column one-half">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Audit Statistics</span>
										</span>
										<span class="opposite-link">
											<a href="admin-chart-detail.php">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-audit-statistics">
										<div class="google-chart" id="audit-statistics-chart"></div>
										<span class="legend-divider"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="column one-half">
							<div class="widget">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Audit Monitoring</span>
										</span>
										<span class="opposite-link">
											<a href="admin-schedule.php">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-audit-monitoring">
										<div class="chart-filter">
											<span class="nav-wrap">
												<span class="label">Year</span>
												<span class="item-value">
													<a href="#" class="filter-prev"></a>
													<span class="value">2014</span>
													<a href="#" class="filter-next"></a>
												</span>
											</span>
										</div>
										<div class="google-chart" id="audit-monitoring-chart"></div>
										<span class="legend-divider"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="column">
							<div class="widget auto-height">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Audit Schedule Verificator</span>
										</span>
										<span class="opposite-link">
											<a href="admin-audit-schedule.php">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-table has-action">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th>&nbsp;</th>
													<th>Date</th>
													<th>Time</th>
													<th>Unit</th>
													<th>Auditor</th>
													<th>Auditte</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>
														<span class="custom-checkbox">
															<input type="checkbox" name="input[]">
														</span>
													</td>
													<td>22 Desember 2014</td>
													<td>14.00 - 17.00</td>
													<td>DMD</td>
													<td>
														Engkos Ahmad Kuncoro<br/>
														Danella Indriani
													</td>
													<td>
														Danu Widhyatmoko<br/>
														Rina Kartika
													</td>
													<td>
														<span class="group-item status">
															<span class="item">
																<i class="icon icon-ami-status-done"></i>
															</span>
															<span class="item">Done</span>
														</span>
													</td>
												</tr>
												<tr>
													<td>
														<span class="custom-checkbox">
															<input type="checkbox" name="input[]">
														</span>
													</td>
													<td>22 Desember 2014</td>
													<td>14.00 - 17.00</td>
													<td>DMD</td>
													<td>
														Engkos Ahmad Kuncoro<br/>
														Danella Indriani
													</td>
													<td>
														Danu Widhyatmoko<br/>
														Rina Kartika
													</td>
													<td>
														<span class="group-item status">
															<span class="item">
																<i class="icon icon-ami-status-awaiting"></i>
															</span>
															<span class="item">Awaiting Information</span>
														</span>
													</td>
												</tr>
												<tr>
													<td>
														<span class="custom-checkbox">
															<input type="checkbox" name="input[]">
														</span>
													</td>
													<td>22 Desember 2014</td>
													<td>14.00 - 17.00</td>
													<td>DMD</td>
													<td>
														Engkos Ahmad Kuncoro<br/>
														Danella Indriani
													</td>
													<td>
														Danu Widhyatmoko<br/>
														Rina Kartika
													</td>
													<td>
														<span class="group-item status">
															<span class="item">
																<i class="icon icon-ami-status-cancel"></i>
															</span>
															<span class="item">Cancel</span>
														</span>
													</td>
												</tr>
												<tr>
													<td>
														<span class="custom-checkbox">
															<input type="checkbox" name="input[]">
														</span>
													</td>
													<td>22 Desember 2014</td>
													<td>14.00 - 17.00</td>
													<td>DMD</td>
													<td>
														Engkos Ahmad Kuncoro<br/>
														Danella Indriani
													</td>
													<td>
														Danu Widhyatmoko<br/>
														Rina Kartika
													</td>
													<td>
														<span class="group-item status">
															<span class="item">
																<i class="icon icon-ami-status-progress"></i>
															</span>
															<span class="item">On Progress</span>
														</span>
													</td>
												</tr>
											</tbody>
										</table>
										<p align="right">
											<a href="admin-reschedule.php #target-id" class="button button-primary fancybox-trigger fancybox.ajax">Reschedule</a>
											<a href="#" class="button button-primary">Accept Selected</a>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="column">
							<div class="widget auto-height">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Recent Audit Finding</span>
										</span>
										<span class="opposite-link">
											<a href="admin-audit-finding.php">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-table">
										<table class="bordered">
											<thead>
												<tr>
													<th>Periode</th>
													<th>Unit</th>
													<th>Uraian Temuan</th>
													<th>Sebab</th>
													<th>Status</th>
													<th>&nbsp;</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td rowspan="2">2015</td>
													<td rowspan="2">DMD</td>
													<td>1. Lorem ipsum dolor sit amet.</td>
													<td>Lain-lain</td>
													<td>Verifikasi pada...</td>
													<td class="action">
														<a href="admin-audit-form-edit.php #target-id-5" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
														<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
													</td>
												</tr>
												<tr>
													<td>2. Lorem ipsum dolor sit amet.</td>
													<td>Lain-lain</td>
													<td>Sesuai</td>
													<td class="action">
														<a href="admin-audit-form-edit.php #target-id-5" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
														<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
													</td>
												</tr>
												<tr class="zebra-bg">
													<td>2014</td>
													<td>DMD</td>
													<td>1. Lorem ipsum dolor sit amet.</td>
													<td>Lain-lain</td>
													<td>Verifikasi pada...</td>
													<td class="action">
														<a href="admin-audit-form-edit.php #target-id-5" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
														<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
													</td>
												</tr>
												<tr>
													<td>2013</td>
													<td>DMD</td>
													<td>1. Lorem ipsum dolor sit amet.</td>
													<td>Lain-lain</td>
													<td>Verifikasi pada...</td>
													<td class="action">
														<a href="admin-audit-form-edit.php #target-id-5" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
														<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="column">
							<div class="widget auto-height">
								<div class="widget-head">
									<span class="head-wrap">
										<span class="label">
											<span class="title">Finding Verification</span>
										</span>
										<span class="opposite-link">
											<a href="admin-finding-verification.php">View All</a>
										</span>
									</span>
								</div>
								<div class="widget-body">
									<div class="widget-table">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th>Unit</th>
													<th>No. Temuan</th>
													<th>No. Verifikasi</th>
													<th>Tgl. Verifikasi</th>
													<th>Auditee Notes</th>
													<th>Auditor Notes</th>
													<th>Admin Notes</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>DMD</td>
													<td>1</td>
													<td>1</td>
													<td>11 Desember 2014</td>
													<td>Lorem ipsum dolor sit amet.</td>
													<td>Lorem ipsum dolor sit amet.</td>
													<td>
														<span class="group-item notes">
															<span class="item description">
																Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
															</span>
															<span class="item action">
																<a href="admin-audit-form-edit.php #target-id-4" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
															</span>
														</span>
													</td>
												</tr>
												<tr>
													<td>DMD</td>
													<td>1</td>
													<td>1</td>
													<td>11 Desember 2014</td>
													<td>Lorem ipsum dolor sit amet.</td>
													<td>Lorem ipsum dolor sit amet.</td>
													<td>
														<span class="group-item notes">
															<span class="item description">
																Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
															</span>
															<span class="item action">
																<a href="admin-audit-form-edit.php #target-id-4" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
															</span>
														</span>
													</td>
												</tr>
												<tr>
													<td>DMD</td>
													<td>1</td>
													<td>1</td>
													<td>11 Desember 2014</td>
													<td>Lorem ipsum dolor sit amet.</td>
													<td>Lorem ipsum dolor sit amet.</td>
													<td>
														<span class="group-item notes">
															<span class="item description">
																Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
															</span>
															<span class="item action">
																<a href="admin-audit-form-edit.php #target-id-4" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
															</span>
														</span>
													</td>
												</tr>
											</tbody>
										</table>
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