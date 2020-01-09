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
										<li>Add / Edit Schedule</li>
									</ul>
								</div>
							</div>
						</section>
						<section class="page-heading">
							<div class="container">
								<h1>Add / Edit Schedule</h1>
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
						<h2>Add / Edit Schedule</h2>
					</div>
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
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>