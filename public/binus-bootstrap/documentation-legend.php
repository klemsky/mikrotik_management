<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li><a href="#">Components</a></li>
						<li>Legend</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Legend</h1>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
                    <div class="single-content popup-content" id="target-id">
                        <div class="page-sub-heading">
                            <h2>Example</h2>
                        </div>
                        <div class="legend">
                            <div class="header">Legends</div>
                            <div class="group-item">
                                <div class="rows">
                                    <div class="item">
                                        <span class="bullet" style="background-color: #47af74;"></span>
                                        <span class="label">: Active Program</span>
                                    </div>
                                    <div class="item">
                                        <span class="bullet" style="background-color: #f2ae33;"></span>
                                        <span class="label">: Active Program</span>
                                    </div>
                                    <div class="item">
                                        <span class="bullet" style="background-color: #f07273;"></span>
                                        <span class="label">: Active Program</span>
                                    </div>
                                </div>
                                <div class="rows">
                                    <div class="item">
                                        <span class="bullet" style="background-color: #47af74;"></span>
                                        <span class="label">: Active Program</span>
                                    </div>
                                    <div class="item">
                                        <span class="bullet" style="background-color: #f2ae33;"></span>
                                        <span class="label">: Active Program</span>
                                    </div>
                                    <div class="item">
                                        <span class="bullet" style="background-color: #f07273;"></span>
                                        <span class="label">: Active Program</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <p>Struktur HTML:</p>
                        <div class="highlight">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"legend"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"header"</span><span class="nt">&gt;</span>Legends<span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"group-item"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- row --&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"rows"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"bullet"</span> <span class="na">style=</span><span class="s">"background-color: #47af74;"</span><span class="nt">&gt;</span><span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>: Active Program<span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
            .....
        <span class="nt">&lt;/div&gt;</span>
        .....
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>