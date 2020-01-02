<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li><a href="#">Components</a></li>
						<li>Tooltip</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Tooltip</h1>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
                    <div class="single-content">
                        <p><strong>Tooltip</strong> dibuat dengan bantuan plugin <a href="http://qtip2.com/">jQuery qTip</a>.</p>
                        <a href="#" class="has-tooltip" title="Example of tooltip">Example link using tooltip.</a>
                        <p>Struktur HTML:</p>
                        <div class="highlight">
                            <code class="language-html">
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"has-tooltip"</span> <span class="na">title=</span><span class="s">"Example of tooltip"</span><span class="nt">&gt;</span>
    Example link using tooltip.
<span class="nt">&lt;/a&gt;</span>
                            </code>
                        </div>
                        <p>Pesan yang ingin ditampilkan pada Tooltip dapat diisi melalui attribute <span class="text-success">title</span>. Tooltip sudah dibuat menjadi jQuery plugin sehingga lebih fleksibel penggunaannya. Contoh kodenya:</p>
                        <div class="highlight">
                            <code class="language-js">
<span class="nx">$</span><span class="p">(</span><span class="s">'.has-tooltip'</span><span class="p">)</span><span class="nx">.binus_tooltip</span><span class="p">();</span>
                            </code>
                        </div>
                        <p>Lokasi file plugin Tooltip: <strong>js/plugins/tooltip.js</strong>.</p>
                    </div>
                </div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>