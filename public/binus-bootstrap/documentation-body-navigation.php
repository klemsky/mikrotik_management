<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li><a href="#">Components</a></li>
						<li>Body Navigation</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Body Navigation</h1>
			</div>
		</section>

		<section class="body-navigation on-pre-content">
			<div class="nav-head">
				<div class="container">
					<ul>
						<li class="current">
							<a href="#">
								<span class="label">Home</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="label">Achievement</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="label">Galleries</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="label">Website Development</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="label">Shop</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="label">Contact Us</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="label">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="label">Widget</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="label">Documentation</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="label">Download</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="label">Others</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
                    <div class="single-content">
                        <div class="page-sub-heading">
                            <h2>Struktur HTML</h2>
                        </div>
                        <div class="highlight">
                            <code class="language-html">
<span class="nt">&lt;section</span> <span class="na">class=</span><span class="s">"body-navigation on-pre-content"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"nav-head"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;ul&gt;</span>
                <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"current"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label"</span><span>&gt;</span>Item Current<span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
                <span class="nt">&lt;li</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label"</span><span>&gt;</span>Item Menu<span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/li&gt;</span>
            <span class="nt">&lt;/ul&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/section&gt;</span>
                            </code>
                        </div>
                        <p><strong>Body Navigation</strong> termasuk plugin jQuery. Berikut contoh penggunaannya:</p>
                        <div class="highlight">
                            <code class="language-js">
<span class="nx">$</span><span class="p">(</span><span class="s">'.body-navigation'</span><span class="p">)</span><span class="nx">.binus_body_navigation</span><span class="p">({</span>
<span class="na">item_show</span><span class="p">:</span> <span class="kc">3</span> <span class="c">// default 6 item</span>
<span class="p">});</span>
                            </code>
                        </div>
                        <p>Lokasi file plugin Body Navigation: <strong>js/plugins/body-navigation.js</strong>.</p>
                    </div>
				</div>
			</section>
		</div>
	</div>

<?php include( 'footer.php' ); ?>