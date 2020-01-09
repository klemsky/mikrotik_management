<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li><a href="#">Components</a></li>
						<li>Pagination</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Pagination</h1>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
                    <div class="single-content popup-content" id="target-id">
                        <div class="page-sub-heading">
                            <h2>Example</h2>
                        </div>
                        <div class="pagination">
                            <span class="page-display">Page 7 of 10</span>
                            <span class="page-number">
                                <a href="#" class="item">1</a>
                                <a href="#" class="item">&laquo;</a>
                                <a href="#" class="item">5</a>
                                <a href="#" class="item">6</a>
                                <span class="item current">7</span>
                                <a href="#" class="item">8</a>
                                <a href="#" class="item">9</a>
                                <a href="#" class="item">&raquo;</a>
                                <a href="#" class="item">10</a>
                            </span>
                            <span class="page-button">
                                <a href="#" class="prev"></a>
                                <a href="#" class="next"></a>
                            </span>
                        </div>
                        <p>Struktur HTML:</p>
                        <div class="highlight">
                            <code class="language-html">
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"pagination"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"page-display"</span><span class="nt">&gt;</span>Page 7 of 10<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"page-number"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"page-button"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"prev"</span><span class="nt">&gt;</span><span class="nt">&lt;/a&gt;</span>
            <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"next"</span><span class="nt">&gt;</span><span class="nt">&lt;/a&gt;</span>
        <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>