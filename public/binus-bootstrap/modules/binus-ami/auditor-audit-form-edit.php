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
										<li>Edit Audit Data</li>
									</ul>
								</div>
							</div>
						</section>
						<section class="page-heading">
							<div class="container">
								<h1>Edit Audit Data</h1>
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
					<div class="single-content popup-content" id="target-id">
						<h1 class="heading new-layout">Edit Data</h1>
						<form action="#" method="post">
							<p>
								<label>Jenis Temuan</label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="1">Select Jenis Temuan</option>
									</select>
								</span>
							</p>
							<p align="right" class="action">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>

					<div class="single-content popup-content" id="target-id-2">
						<h1 class="heading new-layout">Edit Data</h1>
						<form action="#" method="post">
							<p>
								<label>Sebab</label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="1">Select Sebab</option>
									</select>
								</span>
							</p>
							<p align="right" class="action">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>

					<div class="single-content popup-content" id="target-id-3">
						<h1 class="heading new-layout">Edit Data</h1>
						<form action="#" method="post">
							<p>
								<label>Uraian Temuan</label>
								<textarea name="input[]" rows="5"></textarea>
							</p>
							<p align="right" class="action">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>

					<div class="single-content popup-content" id="target-id-4">
						<h1 class="heading new-layout">Edit Data</h1>
						<form action="#" method="post">
							<p>
								<label>Auditor Notes</label>
								<textarea name="input[]" rows="5"></textarea>
							</p>
							<p align="right" class="action">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>

					<div class="single-content popup-content" id="target-id-5">
						<h1 class="heading new-layout">Edit Temuan</h1>
						<form action="#" method="post" class="custom-form">
							<div class="row">
								<div class="column one-half">
									<p>
										<label>Jadwal Audit</label>
										<span class="custom-combobox">
											<select name="input[]" disabled="disabled">
												<option value="0">2012</option>
												<option value="0">2013</option>
												<option value="0">2014</option>
												<option value="0">2015</option>
											</select>
										</span>
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Tahun</label>
										<span class="custom-datepicker">
											<input type="text" name="input[]" class="datepicker" disabled="disabled">
											<span class="icon-area"></span>
										</span>
									</p>
								</div>
							</div>
							<p>
								<label>Division / Business Unit</label>
								<span class="custom-combobox">
									<select name="input[]" disabled="disabled">
										<option value="0">BINUS NUSANTARA UNIVERSITY</option>
									</select>
								</span>
							</p>
							<p>
								<label>Bagian</label>
								<span class="custom-combobox">
									<select name="input[]" disabled="disabled">
										<option value="0">Strategic Development</option>
									</select>
								</span>
							</p>
							<p>
								<label>Sub Bagian</label>
								<span class="custom-combobox">
									<select name="input[]" disabled="disabled">
										<option value="0">Digital Media Development</option>
									</select>
								</span>
							</p>
							<p>
								<label>Lead Auditor</label>
								<input type="text" name="input[]" disabled="disabled">
							</p>
							<p>
								<label>Auditor I</label>
								<input type="text" name="input[]" disabled="disabled">
							</p>
							<p>
								<label>Jenis Temuan</label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Opportunity for Improvement</option>
									</select>
								</span>
							</p>
							<p>
								<label>Sebab</label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Lain-lain</option>
									</select>
								</span>
							</p>
							<p>
								<label>Uraian Temuan</label>
								<textarea name="input[]" rows="5"></textarea>
							</p>
							<p class="action has-border" align="right">
								<input type="reset" value="Cancel" class="button button-secondary">
								<input type="submit" value="Save" class="button button-primary">
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>