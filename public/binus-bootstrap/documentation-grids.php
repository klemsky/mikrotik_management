<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">

		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li>Grid System</li>
					</ul>
				</div>
			</div>
		</section><!-- .breadcrumb -->

		<section class="page-heading">
			<div class="container">
				<h1>Grid System</h1>
			</div>
		</section><!-- .page-heading -->

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<div class="single-content">
						<p>Untuk Grid System, grid yang disediakan hanya sampai 5 kolom saja. Berikut contohnya:</p>
						<div class="row">
							<div class="column" style="background: #f1f1f1;border: 1px solid #c9c9c9;margin: 0 0 20px;padding: 0 10px;">
								<p>.row > .column</p>
							</div>

							<div class="column one-half" style="background: #f1f1f1;border: 1px solid #c9c9c9;margin: 0 0 20px;padding: 0 10px;">
								<p>.row > .column.one-half</p>
							</div>
							<div class="column one-half" style="background: #f1f1f1;border: 1px solid #c9c9c9;margin: 0 0 20px;padding: 0 10px;">
								<p>.row > .column.one-half</p>
							</div>

							<div class="column two-thirds" style="background: #f1f1f1;border: 1px solid #c9c9c9;margin: 0 0 20px;padding: 0 10px;">
								<p>.row > .column.two-thirds</p>
							</div>
							<div class="column one-third" style="background: #f1f1f1;border: 1px solid #c9c9c9;margin: 0 0 20px;padding: 0 10px;">
								<p>.row > .column.one-third</p>
							</div>

							<div class="column one-third" style="background: #f1f1f1;border: 1px solid #c9c9c9;margin: 0 0 20px;padding: 0 10px;">
								<p>.row > .column.one-third</p>
							</div>
							<div class="column one-third" style="background: #f1f1f1;border: 1px solid #c9c9c9;margin: 0 0 20px;padding: 0 10px;">
								<p>.row > .column.one-third</p>
							</div>
							<div class="column one-third" style="background: #f1f1f1;border: 1px solid #c9c9c9;margin: 0 0 20px;padding: 0 10px;">
								<p>.row > .column.one-third</p>
							</div>

							<div class="column one-fourth" style="background: #f1f1f1;border: 1px solid #c9c9c9;margin: 0 0 20px;padding: 0 10px;">
								<p>.row > .column.one-fourth</p>
							</div>
							<div class="column one-fourth" style="background: #f1f1f1;border: 1px solid #c9c9c9;margin: 0 0 20px;padding: 0 10px;">
								<p>.row > .column.one-fourth</p>
							</div>
							<div class="column one-fourth" style="background: #f1f1f1;border: 1px solid #c9c9c9;margin: 0 0 20px;padding: 0 10px;">
								<p>.row > .column.one-fourth</p>
							</div>
							<div class="column one-fourth" style="background: #f1f1f1;border: 1px solid #c9c9c9;margin: 0 0 20px;padding: 0 10px;">
								<p>.row > .column.one-fourth</p>
							</div>

							<div class="column one-fifth" style="background: #f1f1f1;border: 1px solid #c9c9c9;margin: 0 0 20px;padding: 0 10px;">
								<p>.row > .column.one-fifth</p>
							</div>
							<div class="column one-fifth" style="background: #f1f1f1;border: 1px solid #c9c9c9;margin: 0 0 20px;padding: 0 10px;">
								<p>.row > .column.one-fifth</p>
							</div>
							<div class="column one-fifth" style="background: #f1f1f1;border: 1px solid #c9c9c9;margin: 0 0 20px;padding: 0 10px;">
								<p>.row > .column.one-fifth</p>
							</div>
							<div class="column one-fifth" style="background: #f1f1f1;border: 1px solid #c9c9c9;margin: 0 0 20px;padding: 0 10px;">
								<p>.row > .column.one-fifth</p>
							</div>
							<div class="column one-fifth" style="background: #f1f1f1;border: 1px solid #c9c9c9;margin: 0 0 20px;padding: 0 10px;">
								<p>.row > .column.one-fifth</p>
							</div>
						</div>
						<p>Struktur HTML:</p>
						<div class="highlight">
							<code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"row"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"colum"</span><span class="nt">&gt;</span>
        .row > .column
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"colum one-half"</span><span class="nt">&gt;</span>
        .row > .column.one-half
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"colum one-half"</span><span class="nt">&gt;</span>
        .row > .column.one-half
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"colum two-thirds"</span><span class="nt">&gt;</span>
        .row > .column.two-thirds
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"colum one-third"</span><span class="nt">&gt;</span>
        .row > .column.one-third
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"colum one-third"</span><span class="nt">&gt;</span>
        .row > .column.one-third
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"colum one-third"</span><span class="nt">&gt;</span>
        .row > .column.one-third
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"colum one-third"</span><span class="nt">&gt;</span>
        .row > .column.one-third
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"colum one-fourth"</span><span class="nt">&gt;</span>
        .row > .column.one-fourth
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"colum one-fourth"</span><span class="nt">&gt;</span>
        .row > .column.one-fourth
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"colum one-fourth"</span><span class="nt">&gt;</span>
        .row > .column.one-fourth
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"colum one-fourth"</span><span class="nt">&gt;</span>
        .row > .column.one-fourth
    <span class="nt">&lt;/div&gt;</span>

    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"colum one-fifth"</span><span class="nt">&gt;</span>
        .row > .column.one-fifth
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"colum one-fifth"</span><span class="nt">&gt;</span>
        .row > .column.one-fifth
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"colum one-fifth"</span><span class="nt">&gt;</span>
        .row > .column.one-fifth
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"colum one-fifth"</span><span class="nt">&gt;</span>
        .row > .column.one-fifth
    <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"colum one-fifth"</span><span class="nt">&gt;</span>
        .row > .column.one-fifth
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
							</code>
						</div>
					</div>
				</div>
			</div><!-- .container -->
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>