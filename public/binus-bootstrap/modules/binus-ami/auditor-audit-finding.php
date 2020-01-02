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
										<li>Audit Finding</li>
									</ul>
								</div>
							</div>
						</section>
						<section class="page-heading">
							<div class="container">
								<h1>Audit Finding</h1>
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
												<option value="1">Auditor</option>
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
						<h2>View Audit Finding</h2>
					</div>
					<div class="table-component">
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
										<a href="auditor-audit-form-edit.php #target-id-5" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
										<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
									</td>
								</tr>
								<tr>
									<td>2. Lorem ipsum dolor sit amet.</td>
									<td>Lain-lain</td>
									<td>Sesuai</td>
									<td class="action">
										<a href="auditor-audit-form-edit.php #target-id-5" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
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
										<a href="auditor-audit-form-edit.php #target-id-5" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
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
										<a href="auditor-audit-form-edit.php #target-id-5" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
										<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
									</td>
								</tr>
								<tr class="zebra-bg">
									<td>2012</td>
									<td>DMD</td>
									<td>1. Lorem ipsum dolor sit amet.</td>
									<td>Lain-lain</td>
									<td>Verifikasi pada...</td>
									<td class="action">
										<a href="auditor-audit-form-edit.php #target-id-5" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
										<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
									</td>
								</tr>
								<tr>
									<td>2011</td>
									<td>DMD</td>
									<td>1. Lorem ipsum dolor sit amet.</td>
									<td>Lain-lain</td>
									<td>Verifikasi pada...</td>
									<td class="action">
										<a href="auditor-audit-form-edit.php #target-id-5" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
										<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
									</td>
								</tr>
								<tr class="zebra-bg">
									<td>2010</td>
									<td>DMD</td>
									<td>1. Lorem ipsum dolor sit amet.</td>
									<td>Lain-lain</td>
									<td>Verifikasi pada...</td>
									<td class="action">
										<a href="auditor-audit-form-edit.php #target-id-5" class="icon icon-edit has-tooltip fancybox-trigger fancybox.ajax" title="Edit Data"></a>
										<a href="#" class="icon icon-trash has-tooltip" title="Delete Data"></a>
									</td>
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