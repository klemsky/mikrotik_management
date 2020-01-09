<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li><a href="#">Components</a></li>
						<li>Accordion &amp; Toggle</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Accordion &amp; Toggle</h1>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
                    <div class="single-content">
                         <div class="page-sub-heading">
                            <h2>Accordion</h2>
                        </div>
                        <p>Contoh Accordion:</p>
                        <div class="accordion">
                            <div class="item-wrap">
                                <div class="head">
                                    <h2 class="title">Apa itu BINUS Bootstrap?</h2>
                                    <span class="indicator"></span>
                                </div>
                                <div class="body">
                                    BINUS Bootstrap adalah sebuah framework CSS yang didesain sesuai dengan standar desain identity BINUS University.
                                </div>
                            </div>
                            <div class="item-wrap">
                                <div class="head">
                                    <h2 class="title">Apa itu BINUS Bootstrap?</h2>
                                    <span class="indicator"></span>
                                </div>
                                <div class="body">
                                    BINUS Bootstrap adalah sebuah framework CSS yang didesain sesuai dengan standar desain identity BINUS University.
                                </div>
                            </div>
                            <div class="item-wrap">
                                <div class="head">
                                    <h2 class="title">Apa itu BINUS Bootstrap?</h2>
                                    <span class="indicator"></span>
                                </div>
                                <div class="body">
                                    BINUS Bootstrap adalah sebuah framework CSS yang didesain sesuai dengan standar desain identity BINUS University.
                                </div>
                            </div>
                        </div>
                        <br>
                        <p>Struktur HTML:</p>
                        <div class="highlight">
                            <code class="language-html">
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"accordion"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item-wrap"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"head"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;h2</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Title Item<span class="nt">&lt;/h2&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"body"</span><span class="nt">&gt;</span>
                <span class="c">&lt;!-- your content here --&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p>Script JS:</p>
                        <div class="highlight">
                            <code class="language-js">
    <span class="nx">$</span><span class="p">(</span><span class="s">'.accordion'</span><span class="p">)</span><span class="nx">.binus_accordion</span><span class="p">();</span>
                            </code>
                        </div>
                        <p>Lokasi file plugin Accordion: <strong>js/plugins/accordion-toggle.js</strong>. (baris 3-37)</p>

                        <h2>Toggle</h2>
                        <p>Contoh Toggle:</p>
                        <div class="toggle">
                            <div class="item-wrap">
                                <div class="head">
                                    <h2 class="title">Apa itu BINUS Bootstrap?</h2>
                                    <span class="indicator"></span>
                                </div>
                                <div class="body">
                                    BINUS Bootstrap adalah sebuah framework CSS yang didesain sesuai dengan standar desain identity BINUS University.
                                </div>
                            </div>
                            <div class="item-wrap">
                                <div class="head">
                                    <h2 class="title">Apa itu BINUS Bootstrap?</h2>
                                    <span class="indicator"></span>
                                </div>
                                <div class="body">
                                    BINUS Bootstrap adalah sebuah framework CSS yang didesain sesuai dengan standar desain identity BINUS University.
                                </div>
                            </div>
                            <div class="item-wrap">
                                <div class="head">
                                    <h2 class="title">Apa itu BINUS Bootstrap?</h2>
                                    <span class="indicator"></span>
                                </div>
                                <div class="body">
                                    BINUS Bootstrap adalah sebuah framework CSS yang didesain sesuai dengan standar desain identity BINUS University.
                                </div>
                            </div>
                        </div>
                        <br>
                        <p>Struktur HTML:</p>
                        <div class="highlight">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"toggle"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item-wrap"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"head"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;h2</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Title Item<span class="nt">&lt;/h2&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"indicator"</span><span class="nt">&gt;&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"body"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- your content here --&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p>Script JS:</p>
                        <div class="highlight">
                            <code class="language-js">
    <span class="nx">$</span><span class="p">(</span><span class="s">'.toggle'</span><span class="p">)</span><span class="nx">.binus_toggle</span><span class="p">();</span>
                            </code>
                        </div>
                        <p>Lokasi file plugin Toggle: <strong>js/plugins/accordion-toggle.js</strong>. (baris 39-70)</p>
                    </div>
                </div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>