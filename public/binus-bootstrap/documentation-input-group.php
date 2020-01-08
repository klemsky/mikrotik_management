<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li><a href="#">Component</a></li>
						<li>Input Group</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Input Group</h1>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
                    <div class="single-content popup-content" id="target-id">
                        <div class="page-sub-heading">
                            <h2>Example</h2>
                        </div>
                        <p>
                            <span class="input-group">
                                <span class="addon"><input type="checkbox" name="input[]"></span>
                                <input type="text" name="input[]">
                            </span>
                        </p>
                        <p>
                            <span class="input-group">
                                <input type="text" name="input[]">
                                <span class="addon">@example.com</span>
                            </span>
                        </p>
                        <p>
                            <span class="input-group">
                                <span class="addon"><input type="checkbox" name="input[]"></span>
                                <input type="text" name="input[]">
                                <span class="addon">@example.com</span>
                            </span>
                        </p>
                        <p>Stuktur HTML:</p>
                        <div class="highlight">
                            <code class="language-html">
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"addon"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">name=</span><span class="s">"input[]"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"input[]"</span><span class="nt">&gt;</span>
<span class="nt">&lt;/span&gt;</span>

<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"input[]"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"addon"</span><span class="nt">&gt;</span>
        @example.com
    <span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>

<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"input-group"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"addon"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"checkbox"</span> <span class="na">name=</span><span class="s">"input[]"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;/span&gt;</span>
    <span class="nt">&lt;input</span> <span class="na">type=</span><span class="s">"text"</span> <span class="na">name=</span><span class="s">"input[]"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"addon"</span><span class="nt">&gt;</span>
        @example.com
    <span class="nt">&lt;/span&gt;</span>
<span class="nt">&lt;/span&gt;</span>
                            </code>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>