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
										<li>Repair List</li>
									</ul>
								</div>
							</div>
						</section>
						<section class="page-heading">
							<div class="container">
								<h1>Repair List</h1>
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

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<div class="page-sub-heading">
						<h2>View All Repair List</h2>
					</div>
					<div class="table-component">
						<form action="#" method="get">
							<span class="group-item horizontal-filter">
								<span class="item label">
									<label>Tahun Audit</label>
								</span>
								<span class="item component">
									<span class="custom-combobox">
										<select name="input[]">
											<option value="1">Select Tahun</option>
										</select>
									</span>
								</span>
								<span class="item action">
									<input type="submit" value="Load Data" class="button button-primary">
								</span>
							</span>
						</form>
						<table class="zebra bordered">
							<thead>
								<tr>
									<th>Deadline</th>
									<th>Submit Date</th>
									<th>Perbaikan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>22/12/2014</td>
									<td>Unsolved</td>
									<td>-</td>
								</tr>
								<tr>
									<td>22/12/2014</td>
									<td>Unsolved</td>
									<td>-</td>
								</tr>
								<tr>
									<td>22/12/2014</td>
									<td>Unsolved</td>
									<td>-</td>
								</tr>
								<tr>
									<td>22/12/2014</td>
									<td>Unsolved</td>
									<td>-</td>
								</tr>
								<tr>
									<td>22/12/2014</td>
									<td>Unsolved</td>
									<td>-</td>
								</tr>
								<tr>
									<td>22/12/2014</td>
									<td>Unsolved</td>
									<td>-</td>
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

<?php include( 'footer.php' ); ?>