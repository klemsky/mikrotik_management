<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<div class="page-sub-heading">
						<h2>Personal Assignment</h2>
					</div>
					<div class="single-content popup-content" id="target-id">
						<h1 class="heading new-layout">
							Personal Assignment
						</h1>
						<form action="#" method="post">
							<p>
								<label>Judul Tugas</label>
								<span>Week 1 - Tugas Personal 1 - 0734M</span>
							</p>
							<p>
								<label>Nama</label>
								<span>Ander Herrera</span>
							</p>
							<p>
								<label>Tanggal Kirim</label>
								<span>17 September 2015</span>
							</p>
							<p>
								<label>Status Saat ini</label>
								<span>Wait Approval</span>
							</p>
							<p>
								<label>Komentar Mahasiswa</label>
								<span>Once upon a time, Jessica Jones was a costumed super-hero, just not a very good one. Meet all of Spideys deadly enemies, from the Green Goblin and Doctor Octopus to Venom and Carnage, plus see Peter Parker fall in love, face tragedy and triumph, and learn that with great power comes great responsibility.</span>
							</p>
							<p>
								<label>Komentar Dosen</label>
								<textarea class="editor" id="editor" rows="12"></textarea>
							</p>
							<p>
								<label>Score</label>
								<input type="text" name="input[]" value="0">
								<span>*Previous score for this assignment: 0.</span>
							</p>
							<p>
								<label>Update Status</label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Select Status</option>
									</select>
								</span>
							</p>
							<p class="action has-loader" align="right">
								<span class="loader failed">
									<span class="indicator"></span>
									<span class="progress-text">Data failed to save.</span>
								</span>
								<input type="submit" class="button button-primary" value="Submit">
							</p>
						</form>
					</div>
				</div>
			</div>
		</div><!-- #main-content -->
	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>