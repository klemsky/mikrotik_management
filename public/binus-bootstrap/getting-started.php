<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
        <section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li>Getting Started</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Getting Started</h1>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
                    <div class="single-content">
                        <p><strong>BINUS Bootstrap</strong> adalah sebuah framework CSS yang didesain sesuai dengan standar desain identity BINUS University. Semua komponen yang ada sudah didesain mengikuti identity BINUS.</p>
                        <p>File bootstrap dapat didownload disini:<br/><a href="http://dmd.binus.ac.id/frontend/binus-bootstrap/download/">http://dmd.binus.ac.id/frontend/binus-bootstrap/download/</a>.</p>

                        <h2>Basic Template</h2>
                        <p>Struktur utama dari BINUS Bootstrap terdiri dari:</p>
                        <ul>
                            <li>Header</li>
                            <li>Pre Content</li>
                            <li>Content</li>
                            <li>Footer</li>
                        </ul>
                        <p>Berikut struktur dasar HTML dari frontend BINUS Bootstrap:</p>
                        <div class="highlight">
                            <code class="language-html">
<span class="c">&lt;!DOCTYPE HTML&gt;</span>
<span class="nt">&lt;html&gt;</span>
    <span class="nt">&lt;head&gt;</span>
        <span class="nt">&lt;meta</span> <span class="na">charset=</span><span class="s">"UTF-8"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;meta</span> <span class="na">name=</span><span class="s">"viewport"</span> <span class="nt">content=</span><span class="s">"width=device-width, initial-scale=1"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;title&gt;</span>BINUS<span class="nt">&lt;/title&gt;</span>

        <span class="c">&lt;!-- favicon --&gt;</span>
        <span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"icon"</span> <span class="na">type=</span><span class="s">"image/png"</span> <span class="na">href=</span><span class="s">"images/favicon.png"</span><span class="nt">&gt;</span>

        <span class="c">&lt;!-- stylesheet --&gt;</span>
        <span class="nt">&lt;link</span> <span class="na">rel=</span><span class="s">"stylesheet"</span> <span class="na">href=</span><span class="s">"css/themes/university/css/style.css"</span><span class="nt">&gt;</span>

        <span class="c">&lt;!--[if lt IE 9]&gt;</span>
            <span class="c">&lt;script src="js/html5shiv.js"&gt;&lt;/script&gt;</span>
        <span class="c">&lt;![endif]--&gt;</span>
    <span class="nt">&lt;/head&gt;</span>

    <span class="nt">&lt;body&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">id=</span><span class="s">"page"</span> <span class="na">class=</span><span class="s">"main-container"</span><span class="nt">&gt;</span>

            <span class="nt">&lt;header</span> <span class="na">class=</span><span class="s">"header"</span><span class="nt">&gt;</span>
                <span class="c">&lt;!-- header element --&gt;</span>
            <span class="nt">&lt;/header&gt;</span>

            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"site-content"</span> <span class="na">id=</span><span class="s">"site-content"</span><span class="nt">&gt;</span>

                <span class="c">&lt;!-- pre content element --&gt;</span>
                <span class="c">&lt;!-- ex. breadcrumb, page title, body-navigation, etc --&gt;</span>

                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"main-content"</span> <span class="na">id=</span><span class="s">"main-content"</span><span class="nt">&gt;</span>
                    <span class="c">&lt;!-- main content element --&gt;</span>
                <span class="nt">&lt;/div&gt;</span>

            <span class="nt">&lt;/div&gt;</span>

            <span class="nt">&lt;footer</span> <span class="na">class=</span><span class="s">"footer"</span><span class="nt">&gt;</span>
                <span class="c">&lt;!-- footer element --&gt;</span>
            <span class="nt">&lt;/footer&gt;</span>

        <span class="nt">&lt;/div&gt;</span>

        <span class="c">&lt;!-- javascript (if necessary) --&gt;</span>

    <span class="nt">&lt;/body&gt;</span>
<span class="nt">&lt;/html&gt;</span>
                            </code>
                        </div>
                        <h2>Header Element</h2>
                        <p>Header terdiri dari beberapa element yaitu:</p>
                        <ul>
                            <li>Web Navigator</li>
                            <li>Logo</li>
                            <li>Top Navigation (Menu, Notification, Profile Settings, Search Form)</li>
                        </ul>
                        <p>Untuk struktur HTML, bisa melihat ke file <strong>header.php</strong>.</p>

                        <h2>Pre Content Element</h2>
                        <p>Untuk melihat komponen <strong>Pre Content Element</strong> dapat ke <strong>Menu > Documentation > Pre Content</strong>.</p>

                        <h2>Footer Element</h2>
                        <p>Footer terdiri dari beberapa element yaitu:</p>
                        <ul>
                            <li>Education Link</li>
                            <li>Corporate Information</li>
                        </ul>
                        <p>Untuk struktur HTML, bisa melihat ke file <strong>footer.php</strong>.</p>
                    </div>
                </div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>