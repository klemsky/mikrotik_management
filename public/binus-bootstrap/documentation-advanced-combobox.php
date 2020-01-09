<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li><a href="#">Components</a></li>
						<li>Advanced Combobox</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Advanced Combobox</h1>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
                    <div class="single-content">
                        <p><strong>Advanced Combobox</strong> adalah versi advance dari komponen combobox. <strong>Advanced Combobox</strong> memiliki fitur pencarian item pada layoutnya. <strong>Advanced Combobox</strong> dibuat dengan bantuan plugin <a href="http://harvesthq.github.io/chosen/">jQuery Chosen</a>.</p>
                        <p>
                            <span class="custom-chosen">
                                <select>
                                    <option>A</option>
                                    <option>B</option>
                                    <option>C</option>
                                    <option>D</option>
                                </select>
                            </span>
                        </p>
                        <p>Struktur HTML:</p>
                        <div class="highlight">
                            <code class="language-html">
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"custom-chosen"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;select&gt;</span>
        <span class="nt">&lt;option&gt;</span>Option Item<span class="nt">&lt;/option&gt;</span>
    <span class="nt">&lt;/select&gt;</span>
<span class="nt">&lt;/span&gt;</span>
                        </code>
                    </div>
                    <p>Script JS:</p>
                    <div class="highlight">
                        <code class="language-js">
<span class="nx">$</span><span class="p">(</span><span class="s">'.custom-chosen'</span><span class="p">)</span><span class="nx">.binus_advanced_combobox</span><span class="p">();</span>
                            </code>
                        </div>
                        <p>Lokasi file plugin Advanced Combobox: <strong>js/plugins/advanced-combobox.js</strong>.</p>
                    </div><!-- .single-content -->
                </div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>