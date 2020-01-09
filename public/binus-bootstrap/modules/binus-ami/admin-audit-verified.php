<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<div class="single-content popup-content" id="target-id">
						<h1 class="heading new-layout">Verifikasi Temuan</h1>
						<div class="page-verified">
							<div class="section-item">
								<form action="#" method="post">
									<p>
										<label>Tahun</label>
										<span class="custom-combobox">
											<select name="input[]" disabled="disabled">
												<option value="2014">2014</option>
											</select>
										</span>
									</p>
									<p>
										<label>Divisions/Business Unit</label>
										<span class="custom-combobox">
											<select name="input[]" disabled="disabled">
												<option value="0">Select Divisions/Business Unit</option>
											</select>
										</span>
									</p>
									<p>
										<label>Department</label>
										<span class="custom-combobox">
											<select name="input[]" disabled="disabled">
												<option value="0">Select Department</option>
											</select>
										</span>
									</p>
									<p>
										<label>Section</label>
										<span class="custom-combobox">
											<select name="input[]" disabled="disabled">
												<option value="0">Select Section</option>
											</select>
										</span>
									</p>
									<p>
										<label>Tanggal Audit</label>
										<span class="custom-datepicker">
											<input type="text" name="input[]" class="datepicker">
											<span class="icon-area"></span>
										</span>
									</p>
									<p>
										<label>Uraian Temuan</label>
										<textarea name="input[]" rows="5"></textarea>
									</p>
									<p>
										<label>Hasil</label>
										<span class="custom-combobox">
											<select name="input[]" disabled="disabled">
												<option value="0">Select Hasil</option>
											</select>
										</span>
									</p>
									<p>
										<label>Sebab</label>
										<span class="custom-combobox">
											<select name="input[]" disabled="disabled">
												<option value="0">Select Sebab</option>
											</select>
										</span>
									</p>
									<p>
										<label>Uraian Perbaikan</label>
										<textarea name="input[]" rows="5"></textarea>
									</p>
									<p>
										<label>Status</label>
										<span class="custom-combobox">
											<select name="input[]">
												<option value="0">Select Status</option>
											</select>
										</span>
									</p>
									<p>
										<label>Notes</label>
										<textarea name="input[]" rows="5"></textarea>
									</p>
									<p align="center">
										<input type="submit" value="Butuh Perbaikan" class="button button-primary" style="min-width: 200px;">
										<input type="submit" value="Tidak Butuh Perbaikan" class="button button-primary" style="min-width: 200px;">
									</p>
									<p align="center">
										<input type="submit" value="Hapus Temuan" class="button button-primary" style="min-width: 200px;">
										<input type="reset" value="Batal" class="button button-primary" style="min-width: 200px;">
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>