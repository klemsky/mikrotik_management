<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li><a href="#">Components</a></li>
						<li>Form Loader</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Form Loader</h1>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
                    <div class="single-content popup-content" id="target-id">
                        <form id="target-id" class="popup-content">
							<p>
								<label>Input Your Name</label>
								<input type="text" name="input[]">
							</p>
							<p class="action has-loader" align="right">
								<span class="loader">
									<span class="indicator"></span>
									<span class="progress-text">Loading...</span>
								</span>
								<input type="submit" value="Submit" class="button button-primary">
							</p>
						</form>
                        <div style="display: none">
							<form id="target-id-2" class="popup-content">
								<p>
									<label>Input Your Name</label>
									<input type="text" name="input[]">
								</p>
								<p class="action has-loader" align="right">
									<span class="loader success">
										<span class="indicator"></span>
										<span class="progress-text">Data has been saved.</span>
									</span>
									<input type="submit" value="Submit" class="button button-primary">
								</p>
							</form>
						</div>
						<div style="display: none">
							<form id="target-id-3" class="popup-content">
								<p>
									<label>Input Your Name</label>
									<input type="text" name="input[]">
								</p>
								<p class="action has-loader" align="right">
									<span class="loader failed">
										<span class="indicator"></span>
										<span class="progress-text">Data failed to save.</span>
									</span>
									<input type="submit" value="Submit" class="button button-primary">
								</p>
							</form>
						</div>
						<p>Contoh tampilan pada popup: <a href="update-layout.php #target-id" class="fancybox-trigger fancybox.ajax">Klik disini</a>.</p>
						<p>Status loader dapat diubah menjadi <strong>Success</strong> ataupun <strong>Failed</strong> sesuai dengan hasil proses data ataupun action.</p>
						<ul style="margin-top: -10px;">
							<li><a href="update-layout.php #target-id-2" class="fancybox-trigger fancybox.ajax">Contoh status Success</a></li>
							<li><a href="update-layout.php #target-id-3" class="fancybox-trigger fancybox.ajax">Contoh status Failed</a></li>
						</ul>
						<p>Berikut kodenya: (default, saat belum dikombinasi dengan komponen form)</p>
						<div class="highlight">
							<code class="language-html">
<span class="c">&lt;!-- untuk status loading --&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"loader"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"indicator"</span><span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-text"</span><span class="nt">&gt;</span>Loading...<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>

<span class="c">&lt;!-- untuk status success --&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"loader success"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"indicator"</span><span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-text"</span><span class="nt">&gt;</span>Data has been saved.<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>

<span class="c">&lt;!-- untuk status failed --&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"loader failed"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"indicator"</span><span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-text"</span><span class="nt">&gt;</span>Data failed to save.<span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
							</code>
						</div>
						<p>Dan berikut kode saat dikombinasikan dengan komponen form (button):</p>
						<div class="highlight">
							<code class="language-html">
<span class="nt">&lt;p</span> <span class="na">class=</span><span class="s">"action has-loader"</span> <span class="na">align=</span><span class="s">"right"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"loader"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"indicator"</span><span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"progress-text"</span><span class="nt">&gt;</span>Loading...<span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"submit"</span> <span class="na">value=</span><span class="s">"Submit"</span> <span class="na">class=</span><span class="s">"button button-primary"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/p&gt;</span>
							</code>
						</div>
                    </div>
                </div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>