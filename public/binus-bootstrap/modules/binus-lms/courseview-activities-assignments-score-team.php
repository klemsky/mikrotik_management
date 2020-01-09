<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<div class="page-sub-heading">
						<h2>Team Assignment</h2>
					</div>
					<div class="single-content popup-content score-team-update" id="target-id">
						<h1 class="heading new-layout">
							Team Assignment
						</h1>
						<form action="#" method="post">
							<p>
								<label>Judul Tugas</label>
								<span>Week 1 - Tugas Kelompok 1 - 0734M</span>
							</p>
							<p>
								<label>Nama Kelompok</label>
								<span>Kelompok 1</span>
							</p>
							<p>
								<label>Nama Pengirim</label>
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
							<div class="score-team">
								<p>
									<label>Score</label>
									<span class="group-radiobutton">
										<span class="custom-radiobutton score-type current" data-target="#score-team-individual">
											<input type="radio" name="input[]" id="score-individual" checked="checked">
											<label for="score-individual" class="label">Individu</label>
										</span>
										<span class="custom-radiobutton score-type" data-target="#score-team-group">
											<input type="radio" name="input[]" id="score-group">
											<label for="score-group" class="label">Kelompok</label>
										</span>
									</span>
								</p>
								<div class="score-team-content">
									<div class="score-team-item score-team-individual current" id="score-team-individual">
										<table class="bordered">
											<thead>
												<tr>
													<th>Binusian ID</th>
													<th>Nama</th>
													<th>Score</th>
													<th>Previous Score</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1504948373</td>
													<td>Ander Herrera</td>
													<td><input type="text" name="input[]"></td>
													<td>0</td>
												</tr>
												<tr>
													<td>1504948356</td>
													<td>Luke Shaw</td>
													<td><input type="text" name="input[]"></td>
													<td>0</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="score-team-item score-team-group" id="score-team-group">
										<input type="text" name="input[]">
									</div>
								</div>
							</div>
							<p>
								<label>Update Status</label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Select Status</option>
									</select>
								</span>
							</p>
							<p class="action has-loader" align="right">
								<span class="loader success">
									<span class="indicator"></span>
									<span class="progress-text">Data has been saved.</span>
								</span>
								<input type="submit" class="button button-primary" value="Submit">
							</p>
						</form>
						<script type="text/javascript">
							(function($) {
								function __select_score_team_type() {
									if ($('.score-team').length > 0) {
										var $element = $('.score-team');

										$element.on('click', '.score-type', function($e) {
											var $obj = $(this);

											if ($obj.hasClass('current')) {
												return;
											}

											// get target
											var $target = $obj.attr('data-target');

											// set current option
											$element.find('.score-type').removeClass('current');
											$element.find('input[type="radio"]').removeAttr('checked');
											$obj.addClass('current');
											$obj.find('input[type="radio"]').prop('checked', true);

											// set current content
											$element.find('.score-team-item').removeClass('current');
											$element.find($target).addClass('current');
										});
									}
								}
								$(document).ready(function() {
									__select_score_team_type();
								});
							})(jQuery);
						</script>
					</div>
				</div>
			</div>
		</div><!-- #main-content -->
	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>