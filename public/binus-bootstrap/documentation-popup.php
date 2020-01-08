<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li><a href="#">Components</a></li>
						<li>Popup</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Popup</h1>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
                    <div class="single-content popup-content" id="target-id">
                        <p>Popup BINUS Bootstrap dibuat menggunakan plugin <a href="http://fancyapps.com/">fancybox</a>. Fancybox dapat digunakan untuk menampilkan gambar, HTML konten dan juga media lainnya.</p>
                        <p>Untuk menggunakan Fancybox, tambahkan class <span class="text-success">.fancybox-trigger</span> dan/atau <span class="text-success">.fancybox.ajax</span>.</p>
                        <h2>Image Content</h2>
                        <p>
                            <a href="images/statics/banner.jpg" class="fancybox-trigger">
                                Klik disini atau klik gambar
                            </a>
                        </p>
                        <p>
                            <a href="images/statics/banner.jpg" class="fancybox-trigger">
                                <img src="images/statics/banner.jpg" alt>
                            </a>
                        </p>
                        <p>Struktur HTML:</p>
                        <div class="highlight">
                            <code class="language-html">
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"images/statics/banner.jpg"</span> <span class="na">class=</span><span class="s">"fancybox-trigger"</span><span class="nt">&gt;</span>
        Klik disini atau klik gambar
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"images/statics/banner.jpg"</span> <span class="na">class=</span><span class="s">"fancybox-trigger"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"images/statics/banner.jpg"</span> <span class="nt">alt&gt;</span>
    <span class="nt">&lt;/a&gt;</span>
                            </code>
                        </div>

                        <h2>HTML Content</h2>
                        <p>Untuk menampilkan konten HTML pada popup, wajib menambahkan class <span class="text-success">.popup-content</span> pada target HTML yang ingin ditampilkan. Tujuannya untuk menjaga lebar konten sesuai dengan standart desain yang sudah ditentukan.</p>
                        <ul>
                            <li><a href="documentation-popup.php #target-id" class="fancybox-trigger fancybox.ajax">Internal Content</a></li>
                            <li><a href="documentation-content-editor.php #target-id" class="fancybox-trigger fancybox.ajax">External Content</a></li>
                            <li>
                                <a href="documentation-popup.php #dialog-content-delete" class="fancybox-trigger fancybox.ajax">Dialog Content: Delete</a>
                                &mdash;
                                <a href="documentation-popup.php #dialog-content-status" class="fancybox-trigger fancybox.ajax">Dialog Content: Status</a>
                            </li>
                        </ul>
                        <div style="display: none">
                            <div id="dialog-content-delete" class="popup-content-dialog">
                                <form>
                                    <p>Delete this item?</p>
                                    <div class="action">
                                        <input type="submit" class="button button-primary" value="Yes">
                                        <input type="submit" class="button button-primary" value="No">
                                    </div>
                                </form>
                            </div>
                            <div id="dialog-content-status" class="popup-content-dialog">
                                <form>
                                    <p>Item has been removed.</p>
                                    <div class="action">
                                        <input type="submit" class="button button-primary" value="Ok">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <p>Struktur HTML:</p>
                        <div class="highlight">
                            <code class="language-html">
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"docs-popup.php #target-id"</span> <span class="na">class=</span><span class="s">"fancybox-trigger fancybox.ajax"</span><span class="nt">&gt;</span>
        Internal Content
    <span class="nt">&lt;/a&gt;</span>

    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"docs-typography.php #target-id"</span> <span class="na">class=</span><span class="s">"fancybox-trigger fancybox.ajax"</span><span class="nt">&gt;</span>
        External Content
    <span class="nt">&lt;/a&gt;</span>
                            </code>
                        </div>
                        <p>Struktur HTML untuk kontent popup:</p>
                        <div class="highlight">
                            <code class="language-html">
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"your-class popup-content"</span> <span class="na">id=</span><span class="s">"target-id"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- your HTML content --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p>Untuk lebih jelas bisa langsung melihat pada dokumentasi resmi Fancybox berikut ini:<br/><a href="http://fancyapps.com/">http://fancyapps.com/</a></p>
                    </div>
                </div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>