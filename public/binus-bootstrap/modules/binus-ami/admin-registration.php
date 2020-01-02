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
						<li>
							<a href="admin-schedule.php">
								<span class="label">Schedule</span>
							</a>
						</li>
						<li class="current">
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
				<div class="tabulation page-tab">
					<div class="tab-head">
						<ul class="container">
							<li>
								<a href="#">Periode Unit</a>
							</li>
							<li>
								<a href="#">Daftar Auditee &amp; Auditor</a>
							</li>
							<li>
								<a href="#">Daftar Audit</a>
							</li>
							<li>
								<a href="#">Jadwal Audit</a>
							</li>
						</ul>
					</div>
					<div class="tab-body">
						<div class="tab-body-item">
							<div class="box-container">
								<div class="single-content">
									<form action="#" method="post">
										<div class="row">
											<div class="column one-half">
												<p>
													<label>Tahun</label>
													<span class="custom-combobox">
														<select name="input[]">
															<option value="1">Select Tahun</option>
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
												<p align="right">
													<input type="reset" class="button button-secondary" value="Cancel">
												</p>
											</div>
											<div class="column one-half">
												<p>
													<input type="submit" class="button button-primary" value="Add Periode">
												</p>
											</div>
										</div>
										
									</form>
									<hr>
									<div class="table-component">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th>Periode</th>
													<th>Status</th>
													<th>&nbsp;</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>2010</td>
													<td>Aktif</td>
													<td class="action">
														<a href="#" class="icon icon-edit has-tooltip" title="Edit Data"></a>
														<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
													</td>
												</tr>
												<tr>
													<td>2010</td>
													<td>Aktif</td>
													<td class="action">
														<a href="#" class="icon icon-edit has-tooltip" title="Edit Data"></a>
														<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
													</td>
												</tr>
												<tr>
													<td>2010</td>
													<td>Aktif</td>
													<td class="action">
														<a href="#" class="icon icon-edit has-tooltip" title="Edit Data"></a>
														<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
													</td>
												</tr>
												<tr>
													<td>2010</td>
													<td>Aktif</td>
													<td class="action">
														<a href="#" class="icon icon-edit has-tooltip" title="Edit Data"></a>
														<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
													</td>
												</tr>
												<tr>
													<td>2010</td>
													<td>Aktif</td>
													<td class="action">
														<a href="#" class="icon icon-edit has-tooltip" title="Edit Data"></a>
														<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
													</td>
												</tr>
												<tr>
													<td>2010</td>
													<td>Aktif</td>
													<td class="action">
														<a href="#" class="icon icon-edit has-tooltip" title="Edit Data"></a>
														<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-body-item">
							<div class="box-container">
								<div class="single-content">
									<form action="#" method="post">
										<p>
											<label>Tahun Audit</label>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Tahun</option>
												</select>
											</span>
										</p>
										<p>
											<label>Business Unit</label>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Business Unit</option>
												</select>
											</span>
										</p>
										<p>
											<label>Division</label>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Division</option>
												</select>
											</span>
										</p>
										<p>
											<label>Department</label>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Department</option>
												</select>
											</span>
										</p>
										<p>
											<label>Section</label>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Section</option>
												</select>
											</span>
										</p>
										<p align="center">
											<input type="submit" class="button button-primary" value="Load Data">
										</p>
									</form>
									<hr>
									<div class="table-component">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th rowspan="2">User</th>
													<th colspan="3" class="text-center">Role</th>
													<th rowspan="2">Access</th>
												</tr>
												<tr>
													<th class="text-center">Admin</th>
													<th class="text-center">Auditor</th>
													<th class="text-center">Auditee</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Harry Potter</td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="action">
														<a href="#">CREATE ACCESS</a> |
														DELETE ACCESS
													</td>
												</tr>
												<tr>
													<td>Harry Potter</td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="action" class="action">
														CREATE ACCESS |
														<a href="#">DELETE ACCESS</a>
													</td>
												</tr>
												<tr>
													<td>Harry Potter</td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="action">
														<a href="#">CREATE ACCESS</a> |
														DELETE ACCESS
													</td>
												</tr>
												<tr>
													<td>Harry Potter</td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="action">
														<a href="#">CREATE ACCESS</a> |
														DELETE ACCESS
													</td>
												</tr>
												<tr>
													<td>Harry Potter</td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="action">
														<a href="#">CREATE ACCESS</a> |
														DELETE ACCESS
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-body-item">
							<div class="box-container">
								<div class="single-content">
									<form action="#" method="post">
										<p>
											<label>Audit Period</label>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Period</option>
												</select>
											</span>
										</p>
										<p>
											<label>Business Unit</label>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Business Unit</option>
												</select>
											</span>
										</p>
										<p align="center">
											<input type="submit" value="Load Data" class="button button-primary">
											<input type="submit" value="Copy From Previous Period" class="button button-primary">
										</p>
									</form>
									<hr>
									<div class="table-component">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th>Divisi/Business Unit</th>
													<th>Department</th>
													<th>Section</th>
													<th class="text-center">
														Scheduled<br/>
														<small>
															<a href="#">Select All</a>
														</small>
													</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>BINUS UNIVERSITY</td>
													<td>Strategic Development</td>
													<td>QMC</td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
												</tr>
												<tr>
													<td>BINUS UNIVERSITY</td>
													<td>Strategic Development</td>
													<td>QMC</td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
												</tr>
												<tr>
													<td>BINUS UNIVERSITY</td>
													<td>Strategic Development</td>
													<td>QMC</td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
												</tr>
												<tr>
													<td>BINUS UNIVERSITY</td>
													<td>Strategic Development</td>
													<td>QMC</td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
												</tr>
												<tr>
													<td>BINUS UNIVERSITY</td>
													<td>Strategic Development</td>
													<td>QMC</td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
												</tr>
												<tr>
													<td>BINUS UNIVERSITY</td>
													<td>Strategic Development</td>
													<td>QMC</td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-body-item">
							<div class="box-container">
								<div class="single-content">
									<form action="#" method="post">
										<p>
											<label>Audit Period</label>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Period</option>
												</select>
											</span>
										</p>
										<p>
											<label>Business Unit</label>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Business Unit</option>
												</select>
											</span>
										</p>
										<p>
											<label>Division</label>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Division</option>
												</select>
											</span>
										</p>
										<p>
											<label>Department</label>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Department</option>
												</select>
											</span>
										</p>
										<p>
											<label>Section</label>
											<span class="custom-combobox">
												<select name="input[]">
													<option value="1">Select Section</option>
												</select>
											</span>
										</p>
										<div class="multiple-component">
											<label>Jadwal Audit</label>
											<div class="component-items">
												<div class="row">
													<div class="column one-half">
														<p>
															<label>Tanggal</label>
															<span class="custom-datepicker">
																<input type="text" class="datepicker" name="input[]">
																<span class="icon-area"></span>
															</span>
														</p>
													</div>
													<div class="column one-half">
														<p>
															<label>Waktu</label>
															<input type="text" name="input[]">
														</p>
													</div>
												</div>
												<div class="row">
													<div class="column one-half">
														<p>
															<span class="custom-datepicker">
																<input type="text" class="datepicker" name="input[]">
																<span class="icon-area"></span>
															</span>
														</p>
													</div>
													<div class="column one-half">
														<p>
															<input type="text" name="input[]">
															<a href="#" class="remove-item"></a>
														</p>
													</div>
												</div>
											</div>
											<div class="component-trigger">
												<a href="#">+ Add More</a>
											</div>
										</div>
										<div class="multiple-component">
											<label>Auditor</label>
											<div class="component-items">
												<div class="row">
													<div class="column one-half">
														<p>
															<label>Auditor Name</label>
															<span class="custom-combobox">
																<select name="input[]">
																	<option value="1">Select Auditor</option>
																</select>
															</span>
														</p>
													</div>
													<div class="column one-half">
														<p>
															<label>Role</label>
															<span class="custom-combobox">
																<select name="input[]">
																	<option value="1">Select Role</option>
																</select>
															</span>
														</p>
													</div>
												</div>
												<div class="row">
													<div class="column one-half">
														<p>
															<span class="custom-combobox">
																<select name="input[]">
																	<option value="1">Select Auditor</option>
																</select>
															</span>
														</p>
													</div>
													<div class="column one-half">
														<p>
															<span class="custom-combobox">
																<select name="input[]">
																	<option value="1">Select Role</option>
																</select>
															</span>
															<a href="#" class="remove-item"></a>
														</p>
													</div>
												</div>
											</div>
											<div class="component-trigger">
												<a href="#">+ Add More</a>
											</div>
										</div>
									</form>
									<hr>
									<div class="table-component">
										<table class="zebra bordered">
											<thead>
												<tr>
													<th rowspan="2">Auditee</th>
													<th rowspan="2">Auditee Position</th>
													<th colspan="2" class="text-center">Role</th>
												</tr>
												<tr>
													<th class="text-center">Peserta</th>
													<th class="text-center">Pengisi Temuan</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Harry Potter</td>
													<td>Manager</td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
												</tr>
												<tr>
													<td>Harry Potter</td>
													<td>Manager</td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
												</tr>
												<tr>
													<td>Harry Potter</td>
													<td>Manager</td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
												</tr>
												<tr>
													<td>Harry Potter</td>
													<td>Manager</td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
												</tr>
												<tr>
													<td>Harry Potter</td>
													<td>Manager</td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
												</tr>
												<tr>
													<td>Harry Potter</td>
													<td>Manager</td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
												</tr>
												<tr>
													<td>Harry Potter</td>
													<td>Manager</td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
													<td class="text-center"><input type="checkbox" name="input[]"></td>
												</tr>
											</tbody>
										</table>
										<p align="center" class="action">
											<input type="reset" class="button button-secondary" value="Cancel">
											<input type="submit" class="button button-primary" value="Submit">
										</p>
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