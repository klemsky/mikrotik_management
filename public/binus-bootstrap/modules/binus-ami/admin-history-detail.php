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
						<li>
							<a href="admin-dashboard.php">
								<span class="label">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="admin-audit.php">
								<span class="label">Audit</span>
							</a>
						</li>
						<li class="current">
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
				<div class="box-container">
					<div class="breadcrumb">
						<div class="wrap">
							<ul>
								<li><a href="#">Dashboard</a></li>
								<li><a href="#">History</a></li>
								<li>Deskripsi Audit</li>
							</ul>
						</div>
					</div>
					<div class="page-sub-heading">
						<h2>Deskripsi Audit</h2>
					</div>
					<div class="table-component">
						<div class="item-table">
							<div class="item-body">
								<table class="zebra bordered horizontal">
									<tbody>
										<tr>
											<th width="300">Tahun</th>
											<td>2014</td>
										</tr>
										<tr>
											<th>Business Unit</th>
											<td>2014.01</td>
										</tr>
										<tr>
											<th>Bagian</th>
											<td>Strategic Development</td>
										</tr>
										<tr>
											<th>Sub Bagian</th>
											<td>Digital Media Development</td>
										</tr>
										<tr>
											<th>Jadwal Audit</th>
											<td>22 Mei 2014</td>
										</tr>
										<tr>
											<th>Auditor</th>
											<td>
												Mr. A<br/>
												Mr. B
											</td>
										</tr>
										<tr>
											<th>Auditee</th>
											<td>
												Mr. A<br/>
												Mr. B
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="item-table">
							<div class="item-head">Temuan I</div>
							<div class="item-body">
								<table class="zebra bordered horizontal">
									<tbody>
										<tr>
											<th width="300">Jenis Temuan</th>
											<td>Opportunity for Improvement</td>
										</tr>
										<tr>
											<th>Sebab</th>
											<td>Lain-lain</td>
										</tr>
										<tr>
											<th>Uraian Temuan</th>
											<td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</td>
										</tr>
										<tr>
											<th>Rencana Tenggat Perbaikan</th>
											<td>11 Desember 2014</td>
										</tr>
										<tr>
											<th>Perbaikan</th>
											<td>Lorem ipsum dolor sit amet.</td>
										</tr>
										<tr>
											<th>Dokumen</th>
											<td>
												<ul>
													<li>Lorem ipsum dolor sit amet.</li>
													<li>Lorem ipsum dolor sit amet.</li>
													<li>Lorem ipsum dolor sit amet.</li>
												</ul>
											</td>
										</tr>
										<tr>
											<th rowspan="3">Verifikasi</th>
											<td class="has-detail">
												<span class="item-viewer">
													<span class="view-head">
														<span class="label">I. 8 Desember 2014</span>
														<span class="indicator"></span>
													</span>
													<span class="view-body">
														<span class="group-item data-details">
															<span class="rows">
																<span class="item label">Auditee Notes</span>
																<span class="item value">Telah diapprove Rektor</span>
															</span>
															<span class="rows">
																<span class="item label">Auditor Notes</span>
																<span class="item value">Telah diapprove Rektor</span>
															</span>
															<span class="rows">
																<span class="item label">Admin Notes</span>
																<span class="item value">Telah diapprove Rektor</span>
															</span>
														</span>
													</span>
												</span>
											</td>
										</tr>
										<tr>
											<td class="has-detail">
												<span class="item-viewer">
													<span class="view-head">
														<span class="label">II. 12 Desember 2014</span>
														<span class="indicator"></span>
													</span>
													<span class="view-body">
														<span class="group-item data-details">
															<span class="rows">
																<span class="item label">Auditee Notes</span>
																<span class="item value">Telah diapprove Rektor</span>
															</span>
															<span class="rows">
																<span class="item label">Auditor Notes</span>
																<span class="item value">Telah diapprove Rektor</span>
															</span>
															<span class="rows">
																<span class="item label">Admin Notes</span>
																<span class="item value">Telah diapprove Rektor</span>
															</span>
														</span>
													</span>
												</span>
											</td>
										</tr>
										<tr>
											<td class="has-detail">
												<span class="item-viewer">
													<span class="view-head">
														<span class="label">III. 22 Desember 2014</span>
														<span class="indicator"></span>
													</span>
													<span class="view-body">
														<span class="group-item data-details">
															<span class="rows">
																<span class="item label">Auditee Notes</span>
																<span class="item value">Telah diapprove Rektor</span>
															</span>
															<span class="rows">
																<span class="item label">Auditor Notes</span>
																<span class="item value">Telah diapprove Rektor</span>
															</span>
															<span class="rows">
																<span class="item label">Admin Notes</span>
																<span class="item value">Telah diapprove Rektor</span>
															</span>
														</span>
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
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>