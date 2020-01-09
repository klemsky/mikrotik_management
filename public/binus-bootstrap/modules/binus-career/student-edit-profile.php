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
										<li>Edit Profile</li>
									</ul>
								</div>
							</div>
						</section>
						<section class="page-heading">
							<div class="container">
								<h1>Edit Profile</h1>
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
												<option value="1">Student</option>
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
						<h1 class="heading">Edit Personal Data</h1>
						<form action="#" method="post">
							<div class="row">
								<div class="column one-half">
									<p>
										<label>Name<span class="required">*</span></label>
										<input type="text" name="input[]" value="Rebecca Setiadi">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Marital Status<span class="required">*</span></label>
										<span class="custom-combobox">
											<select name="input[]">
												<option value="0">Select Marital Status</option>
											</select>
										</span>
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>ID Type<span class="required">*</span></label>
										<input type="text" name="input[]" value="KTP">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Mobile Phone<span class="required">*</span></label>
										<input type="text" name="input[]" value="0695864554">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>ID Number<span class="required">*</span></label>
										<input type="text" name="input[]" value="1204967658594">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Correspondent Email<span class="required">*</span></label>
										<input type="text" name="input[]" value="rebecca.setiadi@yahoo.com">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Gender<span class="required">*</span></label>
										<span class="group-radiobutton">
											<span class="custom-radiobutton">
												<input type="radio" name="input[]">
												<label class="label">Male</label>
											</span>
											<span class="custom-radiobutton">
												<input type="radio" name="input[]">
												<label class="label">Female</label>
											</span>
										</span>
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Have Relative Work in Binus?<span class="required">*</span></label>
										<span class="group-radiobutton">
											<span class="custom-radiobutton">
												<input type="radio" name="input[]">
												<label class="label">Yes</label>
											</span>
											<span class="custom-radiobutton">
												<input type="radio" name="input[]">
												<label class="label">No</label>
											</span>
										</span>
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Date of Birth<span class="required">*</span></label>
										<span class="custom-datepicker">
											<input type="text" name="input[]" value="1987-05-19" class="datepicker">
											<span class="icon-area"></span>
										</span>
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Fulltime Avaibility<span class="required">*</span></label>
										<span class="custom-combobox">
											<select name="input[]">
												<option value="0">Select Avaibility</option>
											</select>
										</span>
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Place of Birth<span class="required">*</span></label>
										<input type="text" name="input[]">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Parttime Avaibility<span class="required">*</span></label>
										<span class="custom-combobox">
											<select name="input[]">
												<option value="0">Select Avaibility</option>
											</select>
										</span>
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Country of Birth<span class="required">*</span></label>
										<span class="custom-combobox">
											<select name="input[]">
												<option value="0">Select Country</option>
											</select>
										</span>
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Internship Avaibility<span class="required">*</span></label>
										<span class="custom-combobox">
											<select name="input[]">
												<option value="0">Select Avaibility</option>
											</select>
										</span>
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Religion<span class="required">*</span></label>
										<input type="text" name="input[]">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Freelance Avaibility<span class="required">*</span></label>
										<span class="custom-combobox">
											<select name="input[]">
												<option value="0">Select Avaibility</option>
											</select>
										</span>
									</p>
								</div>
							</div>
							<br/>
							<p align="right" class="action has-border">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>

					<div class="single-content popup-content" id="target-id-2">
						<h1 class="heading">Edit Address</h1>
						<form action="#" method="post">
							<div class="row">
								<div class="column one-half">
									<h3 class="pre-title">Current Address</h3>
									<p>
										<label>Address<span class="required">*</span></label>
										<textarea name="input[]" rows="4">Kos Puteri Ayu Kamar 08 Lantai 03 Jln. Diponegoro No. 578 Jakarta Barat 11480</textarea>
									</p>
								</div>
								<div class="column one-half">
									<h3 class="pre-title">Permanent Address</h3>
									<p>
										<label>Address<span class="required">*</span></label>
										<textarea name="input[]" rows="4">Kos Puteri Ayu Kamar 08 Lantai 03 Jln. Diponegoro No. 578 Jakarta Barat 11480</textarea>
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Country<span class="required">*</span></label>
										<span class="custom-combobox">
											<select name="input[]">
												<option value="0">Select Country</option>
											</select>
										</span>
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Country<span class="required">*</span></label>
										<span class="custom-combobox">
											<select name="input[]">
												<option value="0">Select Country</option>
											</select>
										</span>
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Phone<span class="required">*</span></label>
										<input type="text" name="input[]" value="021-5647463">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Phone<span class="required">*</span></label>
										<input type="text" name="input[]" value="021-5647463">
									</p>
								</div>
							</div>
							<br/>
							<p align="right" class="action has-border">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>

					<div class="single-content popup-content" id="target-id-3">
						<h1 class="heading">Edit Family Member</h1>
						<form action="#" method="post">
							<div class="row">
								<div class="column one-half">
									<p>
										<label>Nama Ayah<span class="required">*</span></label>
										<input type="text" name="input[]" value="Sudadi">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Kode Pos<span class="required">*</span></label>
										<input type="text" name="input[]" value="287565">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Nama Ibu<span class="required">*</span></label>
										<input type="text" name="input[]" value="Sumami">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Telepon<span class="required">*</span></label>
										<input type="text" name="input[]" value="024-5756458">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Alamat<span class="required">*</span></label>
										<input type="text" name="input[]" value="Jl. Bambu No.13">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Pendidikan Ayah<span class="required">*</span></label>
										<input type="text" name="input[]" value="G-Bachelor's Level Degree">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Kota<span class="required">*</span></label>
										<input type="text" name="input[]" value="Semarang">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Pendidikan Ibu<span class="required">*</span></label>
										<input type="text" name="input[]" value="G-Less Than HS Graduade">
									</p>
								</div>
							</div>
							<br/>
							<p align="right" class="action has-border">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>

					<div class="single-content popup-content" id="target-id-4">
						<h1 class="heading">Edit Other Info</h1>
						<form action="#" method="post">
							<div class="row">
								<div class="column one-half">
									<p>
										<label>No Rekening<span class="required">*</span></label>
										<input type="text" name="input[]" value="0987654321">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Nomor NPWP<span class="required">*</span></label>
										<input type="text" name="input[]" value="09.06867575.85748483">
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>Website Portfolio<span class="required">*</span></label>
										<textarea name="input[]" rows="4">http://behance.net/rebeccasetiadi</textarea>
									</p>
								</div>
								<div class="column one-half">
									<p>
										<label>NPWP Address<span class="required">*</span></label>
										<textarea name="input[]" rows="4">Kos Puteri Ayu Kamar 08 Lantai 03 Jln. Diponegoro No. 578 Jakarta Barat 11480</textarea>
									</p>
								</div>
							</div>
							<br/>
							<p align="right" class="action has-border">
								<input type="reset" class="button button-secondary" value="Cancel">
								<input type="submit" class="button button-primary" value="Save">
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>