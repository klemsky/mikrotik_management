<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li>Forms</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Form</h1>
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
								<label>Password</label>
								<input type="password" name="input[]">
							</p>
							<p>
								<label>Date of Birth</label>
								<span class="custom-datepicker">
									<input type="text" name="input[]" class="datepicker">
									<span class="icon-area"></span>
								</span>
							</p>
                            <p>
                                <label>Choose Time</label>
                                <span class="custom-timepicker">
                                    <input type="text" name="input[]" class="timepicker">
									<span class="icon-area"></span>
                                </span>
                            </p>
                            <p>
                                <label>Choose DateTime</label>
                                <span class="custom-datetimepicker">
                                    <input type="text" name="input[]" class="datetimepicker">
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
								<label>Gender</label>
								<span class="group-radiobutton">
									<span class="custom-radiobutton">
										<input type="radio" name="input[]" id="male">
										<label class="label" for="male">Male</label>
									</span>
									<span class="custom-radiobutton">
										<input type="radio" name="input[]" id="female">
										<label class="label" for="female">Male</label>
									</span>
								</span>
							</p>
							<p>
								<span class="custom-checkbox">
									<input type="checkbox" name="input[]" id="check">
									<label class="label" for="check">Check me out</label>
								</span>
							</p>
							<p>
								<input type="reset" name="action[]" value="Cancel" class="button button-secondary">
								<input type="submit" name="action[]" value="Save" class="button button-primary">
								<button class="button button-primary">Button</button>
							</p>
						</form>

						<p>&nbsp;</p>
						<p>Struktur HTML:</p>
						<div class="highlight">
							<code class="language-html">
<span class="nt">&lt;form&gt;</span>
    <span class="nt">&lt;p&gt;</span>
        <span class="nt">&lt;label&gt;</span>
            Username<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"required"</span><span class="nt">&gt;</span>*<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p&gt;</span>
        <span class="nt">&lt;label&gt;</span>Password<span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"password"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p&gt;</span>
        <span class="nt">&lt;label&gt;</span>Date of Birth<span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-datepicker"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">class=</span><span class="s">"datepicker"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon-area"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p&gt;</span>
        <span class="nt">&lt;label&gt;</span>Photo Profile<span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-uploader"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">readonly=</span><span class="s">"readonly"</span> <span class="na">class=</span><span class="s">"field-temporary"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"file"</span> <span class="na">class=</span><span class="s">"upload-area"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"icon-area"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p&gt;</span>
        <span class="nt">&lt;label&gt;</span>Country<span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-combobox"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;select&gt;</span>
                <span class="nt">&lt;option&gt;</span>A<span class="nt">&lt;/option&gt;</span>
            <span class="nt">&lt;/select&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p&gt;</span>
        <span class="nt">&lt;label&gt;</span>About You<span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;textarea&gt;&lt;/textarea&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p&gt;</span>
        <span class="nt">&lt;label&gt;</span>Gender<span class="nt">&lt;/label&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"group-radiobutton"</span><span class="nt">&gt;</span>
    	    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-radiobutton"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">""</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Male<span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-radiobutton"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"radio"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">""</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Female<span class="nt">&lt;/label&gt;</span>
            <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-checkbox"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;label</span> <span class="na">for=</span><span class="s">""</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Check me out<span class="nt">&lt;/label&gt;</span>
	<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;p&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"reset"</span> <span class="na">class=</span><span class="s">"button button-secondary"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">class=</span><span class="s">"button button-primary"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/p&gt;</span>
<span class="nt">&lt;/form&gt;</span>
							</code>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>