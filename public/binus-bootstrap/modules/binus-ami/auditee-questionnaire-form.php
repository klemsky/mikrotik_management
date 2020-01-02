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

		<section class="body-navigation on-pre-content">
			<div class="nav-head">
				<div class="container">
					<ul>
						<li>
							<a href="auditee-dashboard.php">
								<span class="label">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="auditee-audit.php">
								<span class="label">Audit</span>
							</a>
						</li>
						<li>
							<a href="auditee-history.php">
								<span class="label">History</span>
							</a>
						</li>
						<li class="current">
							<a href="auditee-questionnaire.php">
								<span class="label">Questionnaire</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section><!-- .body-navigation -->

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<div class="breadcrumb has-language-option">
						<div class="wrap">
							<ul>
								<li><a href="#">Dashboard</a></li>
								<li><a href="#">Questionnaire</a></li>
								<li>Questionnaire Form Title</li>
							</ul>
						</div>
						<div class="language-option">
							<span class="option-wrap">
								<span class="trigger">
									<a href="#" class="icon icon-ami-bahasa"></a>
								</span>
								<span class="dropdown-wrap">
									<ul class="dropdown">
										<li><span class="label">Bahasa</span></li>
										<li>
											<a href="#">
												<i class="icon icon-ami-bahasa"></i>
												Indonesia
												<i class="icon icon-ami-checklist-green"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="icon icon-ami-english"></i>
												Inggris
											</a>
										</li>
									</ul>
								</span>
							</span>
						</div>
					</div>
					<div class="page-sub-heading">
						<h2>Questionnaire Form Title</h2>
					</div>
					<div class="page-questionnaire">
						<form action="#" method="post">
							<div class="information">
								<div class="group-item">
									<span class="rows">
										<span class="item label">Nama Auditor</span>
										<span class="item semicolon">:</span>
										<span class="item value">Mr. A</span>
									</span>
									<span class="rows">
										<span class="item label">Unit Penilai</span>
										<span class="item semicolon">:</span>
										<span class="item value">Digital Media Development</span>
									</span>
									<span class="rows">
										<span class="item label">Periode Audit</span>
										<span class="item semicolon">:</span>
										<span class="item value">2014</span>
									</span>
								</div>
								<p>
									<label>Keterangan Pengisian</label>
									<textarea name="input[]" rows="5"></textarea>
								</p>
							</div>
							<div class="questionnaire-form">
								<p>Isilah dengan memberikan tanda pada kolom penilaian.</p>
								<table class="questionnaire-list">
									<thead>
										<tr>
											<th>Pertanyaan</th>
											<th width="5%">Sangat Tidak Baik</th>
											<th width="5%">Tidak Baik</th>
											<th width="5%">Kurang Baik</th>
											<th width="5%">Cukup Baik</th>
											<th width="5%">Baik</th>
											<th width="5%">Sangat Baik</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td colspan="7" class="head">
												<strong>Kemampuan Auditor</strong>
											</td>
										</tr>
										<tr>
											<td>Kemampuan menggali informasi</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
										<tr>
											<td>Kemampuan bertanya jelas dan terarah</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
										<tr>
											<td>Kemampuan menganalisa data dan informasi</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
										<tr>
											<td>Kemampuan memberikan penilaian</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
										<tr>
											<td>Kemapuan merangkum hasil temuan</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
										<tr>
											<td>Kemampuan memberikan rekomendasi solusi atau alternatif untuk tindakan perbaikan</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
										<tr>
											<td colspan="7" class="head">
												<strong>Pengetahuan Auditor</strong>
											</td>
										</tr>
										<tr>
											<td>Mengetahui prinsip audit</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
										<tr>
											<td>Mengetahui Sistem Manajemen Mutu ISO 9000:2008</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
										<tr>
											<td>Mengetahui proses secara hukum</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
										<tr>
											<td colspan="7" class="head">
												<strong>Sikap Auditor</strong>
											</td>
										</tr>
										<tr>
											<td>Ketelitian</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
										<tr>
											<td>Sopan</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
										<tr>
											<td>Bersikap profesional</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
										<tr>
											<td>Terbuka terhadap pendapat Auditee (Open Minded)</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
										<tr>
											<td>Dapat berkomunikasi dengan baik (Communication Skill)</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
										<tr>
											<td>Memiliki kemampuan mengamati (Observant)</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
										<tr>
											<td>Mudah memahami persoalan (Perceptive)</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
										<tr>
											<td>Mudah beradaptasi (Versatile)</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
										<tr>
											<td>Dapat mengambil keputusan secara tepat dan cepat (Decisive)</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
										<tr>
											<td>Komitmen (Kedisiplinan)</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
											<td align="center">
												<span class="custom-radiobutton">
													<input type="radio" name="input[]">
												</span>
											</td>
										</tr>
									</tbody>
								</table>
								<p>
									<label>Komentar / Saran Perbaikan</label>
									<textarea name="input[]" rows="5"></textarea>
								</p>
								<p class="action has-border" align="right">
									<input type="submit" value="Submit" class="button button-primary">
								</p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>