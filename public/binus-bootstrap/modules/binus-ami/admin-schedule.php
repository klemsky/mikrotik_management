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
						<li>
							<a href="admin-history.php">
								<span class="label">History</span>
							</a>
						</li>
						<li class="current">
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
				<div class="calendar-container has-additional-tab">
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
							<li>
								<a href="#" class="type-audit">
									<i class="icon icon-audit-view"></i>
									<span class="label">Audit List</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="wrap-body">
						<div class="calendar-wrapper">
							<div class="view-target calendar-view">
								<div class="fullcalendar-custom calendar"></div>
								<div class="legend new-layout">
									<div class="legend-item">
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
									<br/>
									<div class="legend-item">
										<div class="header">Audit Status</div>
										<div class="group-item">
											<div class="rows">
												<div class="item">
													<i class="icon icon-ami-status-done"></i>
													: Done
												</div>
												<div class="item">
													<i class="icon icon-ami-status-cancel"></i>
													: Cancel
												</div>
												<div class="item">
													<i class="icon icon-ami-status-awaiting"></i>
													: Awaiting Confirmation
												</div>
												<div class="item">
													<i class="icon icon-ami-status-progress"></i>
													: On Progress
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="view-target audit-view">
								<div class="search-filter">
									<form action="#" method="get">
										<div class="row">
											<div class="column one-half">
												<p>
													<label>Tahun Audit</label>
													<span class="custom-combobox">
														<select name="input[]">
															<option value="1">Select Tahun</option>
														</select>
													</span>
												</p>
											</div>
											<div class="column one-half">
												<p>
													<label>Unit</label>
													<span class="custom-combobox">
														<select name="input[]">
															<option value="1">Select Unit</option>
														</select>
													</span>
												</p>
											</div>
											<div class="column one-half">
												<p>
													<label>Status</label>
													<span class="custom-combobox">
														<select name="input[]">
															<option value="1">Select Status</option>
														</select>
													</span>
												</p>
											</div>
											<div class="column one-half">
												<p>
													<label>Request By</label>
													<span class="custom-combobox">
														<select name="input[]">
															<option value="1">Select Request By</option>
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
								<div class="table-component">
									<table class="zebra bordered">
										<thead>
											<tr>
												<th width="1%">Periode Unit</th>
												<th width="1%">Unit</th>
												<th>Date Schedule</th>
												<th>Reschedule Request By</th>
												<th width="120">Status</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="has-rowspan" rowspan="5">2014</td>
												<td class="has-rowspan-sub">DMD</td>
												<td>25 mei 2014</td>
												<td>-</td>
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
												<td class="has-rowspan-sub" rowspan="2">SOD</td>
												<td>25 mei 2014</td>
												<td>-</td>
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
												<td>25 mei 2014</td>
												<td>LEAD AUDITOR | Harry Potter</td>
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
												<td class="has-rowspan-sub" rowspan="2">QMC</td>
												<td>25 mei 2014</td>
												<td>-</td>
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
												<td>25 mei 2014</td>
												<td>LEAD AUDITOR | Harry Potter</td>
												<td>
													<span class="group-item status">
														<span class="item">
															<i class="icon icon-ami-status-cancel"></i>
														</span>
														<span class="item">Cancel</span>
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
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>