<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li><a href="#">Components</a></li>
						<li>Content Editor</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Content Editor</h1>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
                    <div class="single-content popup-content" id="target-id">
                        <p><strong>Content Editor</strong> pada BINUS Bootstrap menggunakan plugin <a href="http://ckeditor.com/">CKEditor</a>.</p>
                        <p>
                            <textarea class="editor" id="editor"></textarea>
                        </p>
                        <p>Struktur HTML:</p>
                        <div class="highlight">
                            <code class="language-html">
<span class="nt">&lt;textarea</span> <span class="na">class=</span><span class="s">"editor"</span> <span class="na">id=</span><span class="s">"your-editor-id"</span><span class="nt">&gt;&lt;/textarea&gt;</span>
                            </code>
                        </div>
                        <p>Untuk membuat sebuah <strong>content editor</strong>, cukup memberikan class <span class="text-success">.editor</span> saja dan berikan ID yang unik untuk setiap Content Editornya.</p>
                        <p><strong>Update 24 Februari 2015:</strong><br/>Content Editor dibuat menjadi jQuery plugin sehingga lebih fleksibel penggunaannya. Contoh kodenya:</p>
                        <div class="highlight">
                            <code class="language-js">
<span class="nx">$</span><span class="p">(</span><span class="s">'.editor'</span><span class="p">)</span><span class="nx">.binus_editor</span><span class="p">();</span>
                            </code>
                        </div>
                        <p>Lokasi file plugin Content Editor: <strong>js/plugins/editor.js</strong>.</p>
                    </div>
                </div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>