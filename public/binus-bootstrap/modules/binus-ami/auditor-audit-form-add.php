<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<div class="single-content popup-content" id="target-id">
						<h1 class="heading new-layout">Tambah Temuan</h1>
						<form action="#" method="post" class="custom-form">
							<div class="row">
								<div class="column one-half">
									<p>
										<label>Jadwal Audit</label>
										<span class="custom-combobox">
											<select name="input[]">
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
											<input type="text" name="input[]" class="datepicker">
											<span class="icon-area"></span>
										</span>
									</p>
								</div>
							</div>
							<p>
								<label>Division / Business Unit</label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">BINUS NUSANTARA UNIVERSITY</option>
									</select>
								</span>
							</p>
							<p>
								<label>Bagian</label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Strategic Development</option>
									</select>
								</span>
							</p>
							<p>
								<label>Sub Bagian</label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Digital Media Development</option>
									</select>
								</span>
							</p>
							<p>
								<label>Lead Auditor</label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Auditor I</label>
								<input type="text" name="input[]">
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
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>