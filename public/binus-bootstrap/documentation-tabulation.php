<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">

		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Samples</a></li>
						<li>Tabulation</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Tabulation</h1>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
                    <div class="tabulation">
                        <div class="tab-head">
                            <ul class="container">
                                <li>
                                    <a href="#">Tab 1</a>
                                </li>
                                <li>
                                    <a href="#">Tab 2</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-body">
                            <div class="tab-body-item">
                                <div class="container w-800px">
                                    <div class="single-content popup-content" id="target-id">
                                        <h1 class="heading">Tabulation</h1>
                                        <p>Struktur HTML:</p>
                                        <div class="highlight">
                                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tabulation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-head"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;li&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Tab 1<span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;/li&gt;</span>
            <span class="nt">&lt;li&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Tab 2<span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;/li&gt;</span>
        <span class="nt">&lt;/ul&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-body"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-body-item"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- your content here --&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-body-item"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- your content here --&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                                            </code>
                                        </div>
                                        <p><strong>Update 24 Februari 2015:</strong><br/>Tabulation dibuat menjadi jQuery plugin sehingga lebih fleksibel penggunaannya. Contoh kodenya:</p>
                                        <div class="highlight">
                                            <code class="language-js">
<span class="nx">$</span><span class="p">(</span><span class="s">'.tabulation'</span><span class="p">)</span><span class="nx">.binus_tabulation</span><span class="p">(</span>
    <span class="na">on_item_click</span><span class="p">:</span> <span class="kc">function</span><span class="p">() {</span>
        <span class="nx">console.log</span><span class="p">(</span><span class="na">this</span><span class="p">);</span>
    <span class="p">}</span>
<span class="p">);</span>
                                            </code>
                                        </div>
                                        <p>Plugin tabulation hanya menyediakan satu callback saja yaitu ketika item diklik.</p>
                                        <p>Lokasi file plugin Content Editor: <strong>js/plugins/tabulation.js</strong>.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-body-item">
                                <div class="container w-800px">
                                    <div class="single-content popup-content" id="target-id">
                                        <h1 class="heading">Tab Header</h1>
                                        <p>Meet all of Spideys deadly enemies, from the Green Goblin and Doctor Octopus to Venom and Carnage, plus see Peter Parker fall in love, face tragedy and triumph, and learn that with great power comes great responsibility. Youve found it. Now, hes a premiere member of both the X-Men and the Avengers. The classic adventures of Spider-Man from the early days up until the 90s.</p>
                                        <p><a href="images/statics/banner.jpg"><img src="images/statics/banner.jpg" alt></a></p>
                                        <p>This is where youll find all the big-time action, major storylines and iconic Spider-Man magic youd come to expect from the Wall-Crawler. The classic adventures of Spider-Man from the early days up until the 90s. Meet all of Spideys deadly enemies, from the Green Goblin and Doctor Octopus to Venom and Carnage, plus see Peter Parker fall in love, face tragedy and triumph, and learn that with great power comes great responsibility. Amazing Spider-Man is the cornerstone of the Marvel Universe.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>