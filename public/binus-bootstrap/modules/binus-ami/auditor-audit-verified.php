<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<div class="single-content popup-content" id="target-id">
						<h1 class="heading new-layout">Verifikasi Temuan</h1>
						<div class="page-verified">
							<div class="section-item">
								<p>Verifikasi perbaikan dari temuan pada audit berikut?</p>
								<div class="meta-data">
									<span class="field">
										<span class="label">Temuan</span>
										<span class="value">Induksi karyawan baru agar didokumentasikan tertulis sesuai form yang berlaku. Hal ini terkait klausul pengendalian dokumen.</span>
									</span>
									<span class="field">
										<span class="label">Perbaikan</span>
										<span class="value">Telah dilakukan dokumentasi sesuai dengan form yang berlaku.</span>
									</span>
								</div>
							</div>
							<div class="section-item">
								<form action="#" method="post">
									<p>
										<label>Verifikasi</label>
										<span class="custom-combobox">
											<select name="input[]">
												<option value="1">Select Status</option>
											</select>
										</span>
									</p>
									<p>
										<label>Status</label>
										<span class="custom-combobox">
											<select name="input[]">
												<option value="1">Select Status</option>
											</select>
										</span>
									</p><p>
										<label>Jenis Temuan</label>
										<span class="custom-combobox">
											<select name="input[]">
												<option value="1">Select Jenis Temuan</option>
											</select>
										</span>
									</p>
									<p>
										<label>Notes</label>
										<textarea name="input[]" rows="5"></textarea>
									</p>
									<p class="action has-border" align="right">
										<input type="submit" value="Cancel" class="button button-secondary">
										<input type="submit" value="Save" class="button button-primary">
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