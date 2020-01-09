<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Samples</a></li>
						<li>Forms</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Forms</h1>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<div class="single-content popup-content" id="target-id">
                        <span class="alert is-error">
                            Form is error.
                        </span>
                        <span class="alert is-success">
                            Form has been saved.
                        </span>
                        <span class="alert is-warning">
                            All field required.
                        </span>
                        <form>
                            <p>
                                <label>Username<span class="required">*</span></label>
                                <input type="text" name="input[]">
                            </p>
                            <p>
                                <label>Or Using Email Address<span class="required">*</span></label>
                                <span class="input-group">
                                    <span class="addon"><input type="checkbox" name="input[]"></span>
                                    <input type="text" name="input[]">
                                    <span class="addon">@example.com</span>
                                </span>
                            </p>
                            <p>
                                <label>Password<span class="required">*</span></label>
                                <input type="password" name="input[]">
                            </p>
                            <p>
                                <label>Date of Birth<span class="required">*</span></label>
                                <span class="custom-datepicker">
                                    <input type="text" name="input[]" class="datepicker">
                                    <span class="icon-area"></span>
                                </span>
                            </p>
                            <p>
                                <label>Photo Profile</label>
                                <span class="custom-uploader">
                                    <input type="text" readonly="readonly" class="field-temporary">
                                    <input type="file" name="input[]" class="upload-area">
                                    <span class="icon-area"></span>
                                </span>
                            </p>
                            <p>
                                <label>Country</label>
                                <span class="custom-combobox">
                                    <select name="input[]">
                                        <option value="1">A</option>
                                        <option value="2">B</option>
                                        <option value="3">C</option>
                                        <option value="4">D</option>
                                    </select>
                                </span>
                            </p>
                            <p>
                                <label>About You</label>
                                <textarea name="input[]" rows="5"></textarea>
                            </p>
                            <p>
                                <input type="reset" name="action[]" value="Cancel" class="button button-secondary">
                                <input type="submit" name="action[]" value="Save" class="button button-primary">
                            </p>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>