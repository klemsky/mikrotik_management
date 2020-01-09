<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li><a href="#">Content</a></li>
						<li>Button</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Button</h1>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
                    <div class="single-content popup-content" id="target-id">
                        <div class="page-sub-heading">
                            <h2>Usage Example</h2>
                        </div>
                        <p>
                            <a href="#" class="button button-primary">Button Primary</a>
                            <a href="#" class="button button-secondary">Button Secondary</a>
                            <a href="#" class="button button-orange">Button Orange</a>
                        </p>
                        <p>Struktur HTML:</p>
                        <div class="highlight">
                            <code class="language-html">
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"button button-primary"</span><span class="nt">&gt;</span>Button Primary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"button button-secondary"</span><span class="nt">&gt;</span>Button Secondary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"button button-orange"</span><span class="nt">&gt;</span>Button Orange<span class="nt">&lt;/a&gt;</span>
                            </code>
                        </div>
                        <h2>Block Button</h2>
                        <p>Tambahkan class <span class="text-success">.wide</span> untuk membuat panjang button menjadi selebar layout.</p>
                        <p>
                            <a href="#" class="button button-primary wide">Button Primary</a>
                            <a href="#" class="button button-secondary wide">Button Secondary</a>
                            <a href="#" class="button button-orange wide">Button Orange</a>
                        </p>
                        <p>Struktur HTML:</p>
                        <div class="highlight">
                            <code class="language-html">
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"button button-primary wide"</span><span class="nt">&gt;</span>Button Primary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"button button-secondary wide"</span><span class="nt">&gt;</span>Button Secondary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"button button-orange wide"</span><span class="nt">&gt;</span>Button Orange<span class="nt">&lt;/a&gt;</span>
                            </code>
                        </div>
                        <h2>Button With Icon</h2>
                        <p>Tambahkan class <span class="text-success">.with-icon.icon-name</span> untuk menambahkan icon pada button.</p>
                        <p>
                            <a href="#" class="button button-primary with-icon icon-btn-add">Add</a>
                            <a href="#" class="button button-primary with-icon icon-btn-edit">Edit</a>
                            <a href="#" class="button button-primary with-icon icon-btn-delete">Delete</a>
                            <a href="#" class="button button-primary with-icon icon-btn-download">Download</a>
                            <a href="#" class="button button-primary with-icon icon-btn-upload">Upload</a>
                            <a href="#" class="button button-primary with-icon icon-btn-print">Print</a>
                        </p>
                        <p>Tampilan dengan kombinasi Block Button.</p>
                        <p>
                            <a href="#" class="button button-primary wide with-icon icon-btn-add">Add</a>
                        </p>
                        <p>Struktur HTML:</p>
                        <div class="highlight">
                            <code class="language-html">
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"button button-primary with-icon icon-btn-add"</span><span class="nt">&gt;</span>Button Primary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"button button-secondary with-icon icon-btn-add"</span><span class="nt">&gt;</span>Button Secondary<span class="nt">&lt;/a&gt;</span>
<span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"button button-orange with-icon icon-btn-add"</span><span class="nt">&gt;</span>Button Orange<span class="nt">&lt;/a&gt;</span>
                            </code>
                        </div>
                        <p>List icon:</p>
                        <table class="zebra bordered">
                            <thead>
                                <tr>
                                    <th>Icon Name</th>
                                    <th>Markups</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Icon Add</td>
                                    <td>.icon-btn-add</td>
                                </tr>
                                <tr>
                                    <td>Icon Edit</td>
                                    <td>.icon-btn-edit</td>
                                </tr>
                                <tr>
                                    <td>Icon Delete</td>
                                    <td>.icon-btn-delete</td>
                                </tr>
                                <tr>
                                    <td>Icon Download</td>
                                    <td>.icon-btn-download</td>
                                </tr>
                                <tr>
                                    <td>Icon Upload</td>
                                    <td>.icon-btn-upload</td>
                                </tr>
                                <tr>
                                    <td>Icon Print</td>
                                    <td>.icon-btn-print</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>