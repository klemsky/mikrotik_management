<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
        <section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li>Widgets</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Widgets</h1>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
                    <div class="single-content popup-content" id="target-id">
                        <p><strong>Widget</strong> terbagi menjadi tiga bagian, diantaranya:</p>
                        <ol>
                            <li>Widget Header</li>
                            <li>Widget Body</li>
                            <li>Widget Footer</li>
                        </ol>
                        <p>
                            Anda dapat mengkombinasi ketiganya sesuai dengan kebutuhan.<br/>
                            <a href="index.php">Contoh penggunaan Widget &raquo;</a>
                        </p>
                        <p>Setiap halaman yang menggunakan/memakai komponen Widget, pada class <span class="text-success">.main-content</span> <strong>harus</strong> menambahkan class <span class="text-success">.has-widget</span> pada element tersebut. Berikut kodenya:</p>
                        <div class="highlight">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"main-content has-widget"</span> <span class="na">id=</span><span class="s">"main-content"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span> <span class="na">id=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- widget component --&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p>Semua Widget sudah diubah menjadi jQuery Plugin agar penggunaanya lebih fleksibel. Berikut kodenya:</p>
                        <div class="highlight">
                            <code class="language-js">
<span class="c">// untuk melakukan init semua widget</span>
<span class="nx">$</span><span class="p">(</span><span class="s">'.widget'</span><span class="p">)</span><span class="nx">.binus_widgets</span><span class="p">();</span>

<span class="c">// untuk melakukan init masing-masing widget</span>
<span class="nx">$</span><span class="p">(</span><span class="s">'.bar-meter'</span><span class="p">)</span><span class="nx">.binus_widget_bar</span><span class="p">();</span>

<span class="nx">$</span><span class="p">(</span><span class="s">'.performance-meter'</span><span class="p">)</span><span class="nx">.binus_widget_performance</span><span class="p">();</span>

<span class="nx">$</span><span class="p">(</span><span class="s">'.perspective-meter'</span><span class="p">)</span><span class="nx">.binus_widget_perspective</span><span class="p">();</span>

<span class="nx">$</span><span class="p">(</span><span class="s">'.widget-scrolled'</span><span class="p">)</span><span class="nx">.binus_widget_scrolled</span><span class="p">();</span>

<span class="nx">$</span><span class="p">(</span><span class="s">'.wheel-meter'</span><span class="p">)</span><span class="nx">.binus_widget_wheel</span><span class="p">();</span>
                            </code>
                        </div>
                        <h2>Widget Example</h2>
                    </div>
                    <div class="widget-parent">
                        <div class="row">
                            <div class="column one-half">
                                <div class="widget">
                                    <div class="widget-head">
                                        <span class="head-wrap">
                                            <span class="label">
                                                <span class="title">Widget Header</span>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="widget-body">
                                        <p>Widget Body</p>
                                    </div>
                                    <div class="widget-footer">
                                        <span class="text-center">Widget Footer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="column one-half">
                                <div class="widget">
                                    <div class="widget-head">
                                        <span class="head-wrap">
                                            <i class="icon icon-widget-attendance"></i>
                                            <span class="label">
                                                <span class="title">Widget Header With Icon</span>
                                                <span class="pre-title">Widget Subtitle</span>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="widget-body">
                                        <div class="widget-wheel-meter">
                                            <div class="wheel-meter" data-value="80" data-scale="100">
                                                <!-- widget goes here -->
                                                <span class="wheel-legend">
                                                    <span class="score">80</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-footer">
                                        <span class="text-center">Widget Footer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-content popup-content" id="target-id">
                        <p>Struktur dasar HTML untuk Widget:</p>
                        <div class="highlight">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-head"</span><span class="nt">&gt;</span>

        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-body"</span><span class="nt">&gt;</span>

        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-footer"</span><span class="nt">&gt;</span>

        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p>Setiap widget harus berada didalam class <span class="text-success">.widget-parent</span> agar layoutnya tampil dengan benar.</p>

                        <h2>Widget Header</h2>
                        <p><strong>Layout standar untuk header widget:</strong></p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-half">
                                    <div class="widget auto-height">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <span class="label">
                                                    <span class="title">Widget Header</span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-head"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"head-wrap"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Widget Header<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p><strong>Layout header dengan subtitle:</strong></p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-half">
                                    <div class="widget auto-height">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <span class="label">
                                                    <span class="title">Widget Header</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-head"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"head-wrap"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Widget Header<span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"pre-title"</span><span class="nt">&gt;</span>Widget Subtitle<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p><strong>Layout header dengan tambahan icon:</strong></p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-half">
                                    <div class="widget auto-height">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <i class="icon icon-widget-statistic"></i>
                                                <span class="label">
                                                    <span class="title">Widget Header</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one-half">
                                    <div class="widget auto-height">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <i class="icon icon-widget-calendar"></i>
                                                <span class="label">
                                                    <span class="title">Widget Header</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-head"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"head-wrap"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"icon icon-widget-statistic"</span><span class="nt">&gt;&lt;/i&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Widget Header<span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"pre-title"</span><span class="nt">&gt;</span>Widget Subtitle<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p>Untuk daftar icon yang bisa digunakan bisa cek disini:<br/><a href="icons.php">List icon for Widget &raquo;</a></p>
                        <p><strong>Layout header dengan icon indicator:</strong></p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-half">
                                    <div class="widget auto-height">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <span class="indicator">
                                                    <span class="wrap">
                                                        <span class="label">Score</span>
                                                        <span class="value">N/A</span>
                                                    </span>
                                                </span>
                                                <span class="label">
                                                    <span class="title">Widget Header</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one-half">
                                    <div class="widget auto-height">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <span class="indicator warning">
                                                    <span class="wrap">
                                                        <span class="label">Score</span>
                                                        <span class="value">N/A</span>
                                                    </span>
                                                </span>
                                                <span class="label">
                                                    <span class="title">Widget Header</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one-half">
                                    <div class="widget auto-height">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <span class="indicator success">
                                                    <span class="wrap">
                                                        <span class="label">Score</span>
                                                        <span class="value">N/A</span>
                                                    </span>
                                                </span>
                                                <span class="label">
                                                    <span class="title">Widget Header</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one-half">
                                    <div class="widget auto-height">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <span class="indicator danger">
                                                    <span class="wrap">
                                                        <span class="label">Score</span>
                                                        <span class="value">N/A</span>
                                                    </span>
                                                </span>
                                                <span class="label">
                                                    <span class="title">Widget Header</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-head"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"head-wrap"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"indicator"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"wrap"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Score<span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"value"</span><span class="nt">&gt;</span>N/A<span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Widget Header<span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"pre-title"</span><span class="nt">&gt;</span>Widget Subtitle<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p>Icon indicator memiliki tiga tambahan class untuk memberikan kesan yang berbeda, yaitu <span class="text-success">.success</span>, <span class="text-success">.danger</span> dan <span class="text-success">.warning</span>. Struktur HTML masing-masing indicator:</p>
                        <div class="highlight">
                            <code class="language-html">
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"indicator success"</span><span class="nt">&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"indicator danger"</span><span class="nt">&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"indicator warning"</span><span class="nt">&gt;</span>
                            </code>
                        </div>
                        <p><strong>Layout header dengan navigasi:</strong></p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-half">
                                    <div class="widget auto-height">
                                        <div class="widget-head has-navigation">
                                            <span class="head-wrap">
                                                <i class="icon icon-widget-statistic"></i>
                                                <span class="label">
                                                    <span class="title">Widget Header</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                            <span class="nav-container">
                                                <a href="#" class="btn-nav up widget-scrolled-up"></a>
                                                <a href="#" class="btn-nav down widget-scrolled-down"></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one-half">
                                    <div class="widget auto-height">
                                        <div class="widget-head has-navigation">
                                            <span class="head-wrap">
                                                <i class="icon icon-widget-statistic"></i>
                                                <span class="label">
                                                    <span class="title">Widget Header</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                            <span class="nav-container">
                                                <a href="#" class="btn-nav prev widget-scrolled-prev"></a>
                                                <a href="#" class="btn-nav next widget-scrolled-next"></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-head has-navigation"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"head-wrap"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"icon icon-widget-statistic"</span><span class="nt">&gt;&lt;/i&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Widget Header<span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"pre-title"</span><span class="nt">&gt;</span>Widget Subtitle<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"nav-container"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn-nav prev widget-scrolled-prev"</span><span class="nt">&gt;&lt;/a&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn-nav next widget-scrolled-next"</span><span class="nt">&gt;&lt;/a&gt;</span>
                <span class="c">&lt;!-- atau --&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn-nav up widget-scrolled-up"</span><span class="nt">&gt;&lt;/a&gt;</span>
                <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn-nav down widget-scrolled-down"</span><span class="nt">&gt;&lt;/a&gt;</span>
            <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>

                        <h2>Widget Footer</h2>
                        <p><strong>Layout standar untuk footer:</strong></p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-half">
                                    <div class="widget auto-height">
                                        <div class="widget-header">

                                        </div>
                                        <div class="widget-body">
                                            <p>&nbsp;</p>
                                        </div>
                                        <div class="widget-footer">
                                            <span class="text-center">
                                                Widget Footer Description
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- widget header --&gt;</span>

        <span class="c">&lt;!-- widget body --&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-footer"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;</span>
                Widget Footer Description
            <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p><strong>Layout footer dengan navigasi:</strong></p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-half">
                                    <div class="widget">
                                        <div class="widget-header">

                                        </div>
                                        <div class="widget-body">
                                            <p>&nbsp;</p>
                                        </div>
                                        <div class="widget-footer has-navigation">
                                            <span class="text-right">
                                                <span class="nav-container">
                                                    <a href="#" class="btn-nav up widget-scrolled-up"></a>
                                                    <a href="#" class="btn-nav down widget-scrolled-down"></a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one-half">
                                    <div class="widget">
                                        <div class="widget-header">

                                        </div>
                                        <div class="widget-body">
                                            <p>&nbsp;</p>
                                        </div>
                                        <div class="widget-footer has-navigation">
                                            <span class="text-right">
                                                <span class="nav-container">
                                                    <a href="#" class="btn-nav prev widget-scrolled-prev"></a>
                                                    <a href="#" class="btn-nav next widget-scrolled-next"></a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- widget header --&gt;</span>

        <span class="c">&lt;!-- widget body --&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-footer"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;</span>
                Widget Footer Description
            <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p>Layout footer dengan navigasi dan label:</p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-half">
                                    <div class="widget">
                                        <div class="widget-header">

                                        </div>
                                        <div class="widget-body">
                                            <p>&nbsp;</p>
                                        </div>
                                        <div class="widget-footer has-navigation">
                                            <span class="text-center">
                                                <span class="nav-container has-label">
                                                    <a href="#" class="btn-nav up widget-scrolled-up"></a>
                                                    <span class="label">Widget Description 1</span>
                                                    <a href="#" class="btn-nav down widget-scrolled-down"></a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one-half">
                                    <div class="widget">
                                        <div class="widget-header">

                                        </div>
                                        <div class="widget-body">
                                            <p>&nbsp;</p>
                                        </div>
                                        <div class="widget-footer has-navigation">
                                            <span class="text-center">
                                                <span class="nav-container has-label">
                                                    <a href="#" class="btn-nav prev widget-scrolled-prev"></a>
                                                    <span class="label">Widget Description 1</span>
                                                    <a href="#" class="btn-nav next widget-scrolled-next"></a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- widget header --&gt;</span>

        <span class="c">&lt;!-- widget body --&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-footer"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"text-center"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"nav-container has-label"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn-nav up widget-scrolled-up"</span><span class="nt">&gt;&lt;/a&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Widget Description 1<span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn-nav down widget-scrolled-down"</span><span class="nt">&gt;&lt;/a&gt;</span>

                    <span class="c">&lt;!-- atau --&gt;</span>

                    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn-nav prev widget-scrolled-prev"</span><span class="nt">&gt;&lt;/a&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Widget Description 1<span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span> <span class="na">class=</span><span class="s">"btn-nav next widget-scrolled-next"</span><span class="nt">&gt;&lt;/a&gt;</span>
                <span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>

                        <h2>Widget Body</h2>
                        <p>Pada BINUS Bootstrap, sudah ada beberapa Widget yang sudah dibuat dan bisa langsung dipakai. Setiap Widget memiliki fungsi yang berbeda-beda. Berikut daftar Widget tersebut:</p>
                        <p><strong>Widget Perspective</strong></p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-third">
                                    <div class="widget">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <i class="icon icon-widget-performance"></i>
                                                <span class="label">
                                                    <span class="title">Widget Perspective</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-perspective-meter">
                                                <div class="perspective-meter" data-value="5" data-scale="6">
                                                    <!-- widget goes here -->
                                                    <span class="perspective-legend">
                                                        <span class="score">
                                                            <span class="score-label">Score</span>
                                                            <span class="score-value">5</span>
                                                        </span>
                                                        <span class="state-value">
                                                            <span class="start">1</span>
                                                            <span class="end">6</span>
                                                        </span>
                                                        <span class="description">
                                                            Weight: 100%
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-footer">
                                            <span class="text-center">Widget Description</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column two-thirds">
                                    <div class="widget">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <i class="icon icon-widget-performance"></i>
                                                <span class="label">
                                                    <span class="title">Widget Perspective Meter</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-perspective-meter">
                                                <div class="group-item">
                                                    <div class="item">
                                                        <div class="perspective-meter" data-value="5" data-scale="6">
                                                            <!-- widget goes here -->
                                                            <span class="perspective-legend">
                                                                <span class="score">
                                                                    <span class="score-label">Score</span>
                                                                    <span class="score-value">5</span>
                                                                </span>
                                                                <span class="state-value">
                                                                    <span class="start">1</span>
                                                                    <span class="end">6</span>
                                                                </span>
                                                                <span class="description">
                                                                    Weight: 100%
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="perspective-meter" data-value="50" data-scale="100">
                                                            <!-- widget goes here -->
                                                            <span class="perspective-legend">
                                                                <span class="score">
                                                                    <span class="score-label">Score</span>
                                                                    <span class="score-value">50</span>
                                                                </span>
                                                                <span class="state-value">
                                                                    <span class="start">1</span>
                                                                    <span class="end">100</span>
                                                                </span>
                                                                <span class="description">
                                                                    Weight: 100%
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-footer">
                                            <span class="text-center">Widget Description</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- widget header --&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-body"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- widget perspective --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-perspective-meter"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"perspective-meter"</span> <span class="na">data-value=</span><span class="s">"5"</span> <span class="na">data-scale=</span><span class="s">"6"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"perspective-legend"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"score"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"score-label"</span><span class="nt">&gt;</span>Score<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"score-value"</span><span class="nt">&gt;</span>5<span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"state-value"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"start"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"end"</span><span class="nt">&gt;</span>6<span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"description"</span><span class="nt">&gt;</span>
                            Weight: 100%
                        <span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>

        <span class="c">&lt;!-- widget footer --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p><strong>Widget Performance</strong></p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-third">
                                    <div class="widget">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <i class="icon icon-widget-performance"></i>
                                                <span class="label">
                                                    <span class="title">Widget Perspective</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-performance-meter">
                                                <div class="performance-meter" data-value="80" data-scale="100">
                                                    <!-- widget goes here -->
                                                    <span class="performance-legend">
                                                        <span class="score">
                                                            <span class="score-label">Score</span>
                                                            <span class="score-value">80</span>
                                                        </span>
                                                        <span class="state-value">
                                                            <span class="start">
                                                                <i class="icon icon-indicator icon-sad"></i>
                                                            </span>
                                                            <span class="end">
                                                                <i class="icon icon-indicator icon-smile"></i>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-footer">
                                            <span class="text-center">Widget Description</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column two-thirds">
                                    <div class="widget">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <i class="icon icon-widget-performance"></i>
                                                <span class="label">
                                                    <span class="title">Widget Perspective Meter</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-performance-meter">
                                                <div class="group-item">
                                                    <div class="item">
                                                        <div class="performance-meter" data-value="5" data-scale="6">
                                                            <!-- widget goes here -->
                                                            <span class="performance-legend">
                                                                <span class="score">
                                                                    <span class="score-label">Score</span>
                                                                    <span class="score-value">5</span>
                                                                </span>
                                                                <span class="state-value">
                                                                    <span class="start">
                                                                        <i class="icon icon-indicator icon-sad"></i>
                                                                    </span>
                                                                    <span class="end">
                                                                        <i class="icon icon-indicator icon-smile"></i>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="performance-meter" data-value="80" data-scale="100">
                                                            <!-- widget goes here -->
                                                            <span class="performance-legend">
                                                                <span class="score">
                                                                    <span class="score-label">Score</span>
                                                                    <span class="score-value">80</span>
                                                                </span>
                                                                <span class="state-value">
                                                                    <span class="start">
                                                                        <i class="icon icon-indicator icon-sad"></i>
                                                                    </span>
                                                                    <span class="end">
                                                                        <i class="icon icon-indicator icon-smile"></i>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-footer">
                                            <span class="text-center">Widget Description</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- widget header --&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-body"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- widget performance --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-performance-meter"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"performance-meter"</span> <span class="na">data-value=</span><span class="s">"80"</span> <span class="na">data-scale=</span><span class="s">"100"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"performance-legend"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"score"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"score-label"</span><span class="nt">&gt;</span>Score<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"score-value"</span><span class="nt">&gt;</span>80<span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"state-value"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"start"</span><span class="nt">&gt;</span>
                                <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"icon icon-indicator icon-sad"</span><span class="nt">&gt;&lt;/i&gt;</span>
                            <span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"end"</span><span class="nt">&gt;</span>
                                <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"icon icon-indicator icon-smile"</span><span class="nt">&gt;&lt;/i&gt;</span>
                            <span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>

        <span class="c">&lt;!-- widget footer --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p><strong>Widget Wheel Meter</strong></p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-third">
                                    <div class="widget">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <i class="icon icon-widget-attendance"></i>
                                                <span class="label">
                                                    <span class="title">Wheel Meter</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-wheel-meter">
                                                <div class="wheel-meter" data-value="80" data-scale="100">
                                                    <!-- widget goes here -->
                                                    <span class="wheel-legend">
                                                        <span class="score">80</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-footer">
                                            <span class="text-center">Widget Description</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column two-thirds">
                                    <div class="widget">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <i class="icon icon-widget-attendance"></i>
                                                <span class="label">
                                                    <span class="title">Wheel Meter</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-wheel-meter">
                                                <div class="group-item">
                                                    <div class="item">
                                                        <div class="wheel-meter" data-value="50" data-scale="100">
                                                            <!-- widget goes here -->
                                                            <span class="wheel-legend">
                                                                <span class="score">50</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="wheel-meter" data-value="100" data-scale="100">
                                                            <!-- widget goes here -->
                                                            <span class="wheel-legend">
                                                                <span class="score">100</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-footer">
                                            <span class="text-center">
                                                Widget Description
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- widget header --&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-body"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- widget wheel meter --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-wheel-meter"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"wheel-meter"</span> <span class="na">data-value=</span><span class="s">"80"</span> <span class="na">data-scale=</span><span class="s">"100"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"wheel-legend"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"score"</span><span class="nt">&gt;</span>80<span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>

        <span class="c">&lt;!-- widget footer --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p><strong>Widget Bar Meter</strong></p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-third">
                                    <div class="widget">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <i class="icon icon-widget-performance"></i>
                                                <span class="label">
                                                    <span class="title">Widget Bar Meter</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="body-sub-title text-center">Lorem ipsum dolor sit amet</div>
                                            <div class="widget-bar-meter">
                                                <div class="bar-meter" data-percentage="90">
                                                    <div class="bar-scale">
                                                        <div class="the-bar">
                                                            <span class="the-value">Rp. 995.600.000,-</span>
                                                        </div>
                                                        <ul class="bar-x-scales">
                                                            <li>
                                                                <span class="value">0</span>
                                                                <span class="label">M</span>
                                                            </li>
                                                            <li>
                                                                <span class="value">500</span>
                                                                <span class="label">Juta</span>
                                                            </li>
                                                            <li>
                                                                <span class="value">1</span>
                                                                <span class="label">M</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-footer">
                                            <span class="text-center">
                                                Widget Description
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column two-thirds">
                                    <div class="widget">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <i class="icon icon-widget-performance"></i>
                                                <span class="label">
                                                    <span class="title">Widget Bar Meter</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="body-sub-title text-center">Lorem ipsum dolor sit amet</div>
                                            <div class="widget-bar-meter">
                                                <div class="group-item">
                                                    <div class="item">
                                                        <div class="bar-meter" data-percentage="0">
                                                            <div class="bar-scale">
                                                                <div class="the-bar">
                                                                    <span class="the-value">Rp. 0,-</span>
                                                                </div>
                                                                <ul class="bar-x-scales">
                                                                    <li>
                                                                        <span class="value">0</span>
                                                                        <span class="label">M</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="value">500</span>
                                                                        <span class="label">Juta</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="value">1</span>
                                                                        <span class="label">M</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <div class="bar-meter" data-percentage="90">
                                                            <div class="bar-scale">
                                                                <div class="the-bar">
                                                                    <span class="the-value">Rp. 995.600.000,-</span>
                                                                </div>
                                                                <ul class="bar-x-scales">
                                                                    <li>
                                                                        <span class="value">0</span>
                                                                        <span class="label">M</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="value">500</span>
                                                                        <span class="label">Juta</span>
                                                                    </li>
                                                                    <li>
                                                                        <span class="value">1</span>
                                                                        <span class="label">M</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-footer">
                                            <span class="text-center">
                                                Widget Description
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- widget header --&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-body"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"body-sub-title text-center"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet<span class="nt">&lt;/div&gt;</span>
            <span class="c">&lt;!-- widget bar meter --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-bar-meter"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"bar-meter"</span> <span class="na">data-percentage=</span><span class="s">"90"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"bar-scale"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"the-bar"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"the-value"</span><span class="nt">&gt;</span>Rp. 995.600.000,-<span class="nt">&lt;/span&gt;</span>
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"bar-x-scales"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;li&gt;</span>
                                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"value"</span><span class="nt">&gt;</span>0<span class="nt">&lt;/span&gt;</span>
                                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>M<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;/li&gt;</span>
                            <span class="nt">&lt;li&gt;</span>
                                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"value"</span><span class="nt">&gt;</span>500<span class="nt">&lt;/span&gt;</span>
                                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Juta<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;/li&gt;</span>
                            <span class="nt">&lt;li&gt;</span>
                                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"value"</span><span class="nt">&gt;</span>1<span class="nt">&lt;/span&gt;</span>
                                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>M<span class="nt">&lt;/span&gt;</span>
                            <span class="nt">&lt;/li&gt;</span>
                        <span class="nt">&lt;/ul&gt;</span>
                    <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>

        <span class="c">&lt;!-- widget footer --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p><strong>Widget Big State</strong></p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-half">
                                    <div class="widget">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <span class="label">
                                                    <span class="title">Widget Big State</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-big-state">
                                                <div class="state-item">
                                                    <span class="indicator icon-checklist"></span>
                                                    <span class="value">1.000.000</span>
                                                    <span class="label">Credits</span>
                                                </div>
                                                <div class="state-item">
                                                    <span class="indicator icon-sandwatch"></span>
                                                    <span class="value">1.000</span>
                                                    <span class="label">Credits</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-footer">
                                            <span class="text-center">Widget Description</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- widget header --&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-body"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- widget big state --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-big-state"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"state-item"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"indicator icon-checklist"</span><span class="nt">&gt;&lt;/span&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"value"</span><span class="nt">&gt;</span>1.000.000<span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Credits<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"state-item"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"indicator icon-sandwatch"</span><span class="nt">&gt;&lt;/span&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"value"</span><span class="nt">&gt;</span>1.000.000<span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Credits<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>

        <span class="c">&lt;!-- widget footer --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p><strong>Widget State</strong></p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-half">
                                    <div class="widget">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <span class="label">
                                                    <span class="title">Widget State</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-state">
                                                <div class="state-item">
                                                    <span class="indicator icon-checklist"></span>
                                                    <span class="description">
                                                        You are just attending<br/>
                                                        <a href="#">Character Building V</a>
                                                    </span>
                                                </div>
                                                <div class="state-item">
                                                    <span class="indicator icon-sandwatch"></span>
                                                    <span class="description">
                                                        Not attending<br/>
                                                        <a href="#">Business Management</a><br/>
                                                        (1 more attending Fail)
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-footer">
                                            <span class="text-center">Widget Description</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- widget header --&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-body"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- widget state --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-state"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"state-item"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"indicator icon-checklist"</span><span class="nt">&gt;&lt;/span&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"description"</span><span class="nt">&gt;</span>
                        You are just attending<span class="nt">&lt;br/&gt;</span>
                        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Character Building V<span class="nt">&lt;/a&gt;</span><span class="nt">&lt;br/&gt;</span>
                        (1 more attending Fail)
                    <span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"state-item"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"indicator icon-sandwatch"</span><span class="nt">&gt;&lt;/span&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"description"</span><span class="nt">&gt;</span>
                        You are just attending<span class="nt">&lt;br/&gt;</span>
                        <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Character Building V<span class="nt">&lt;/a&gt;</span><span class="nt">&lt;br/&gt;</span>
                        (1 more attending Fail)
                    <span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>

        <span class="c">&lt;!-- widget footer --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p><strong>Widget Scrollbar</strong></p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-half">
                                    <div class="widget">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <span class="label">
                                                    <span class="title">Widget State</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-scrollbar custom-scrollbar">
                                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                                            </div>
                                        </div>
                                        <div class="widget-footer">
                                            <span class="text-center">Widget Description</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- widget header --&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-body"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- widget scrollbar --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-scrollbar custom-scrollbar"</span><span class="nt">&gt;</span>
                <span class="c">&lt;!-- your content --&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>

        <span class="c">&lt;!-- widget footer --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p><strong>Widget News</strong></p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-half">
                                    <div class="widget">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <i class="icon icon-widget-news"></i>
                                                <span class="label">
                                                    <span class="title">Widget News</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-news">
                                                <div class="news-item">
                                                    <span class="details">
                                                        <h3 class="title">
                                                            <a href="#">Pengumuman Jadwal Briefing...</a>
                                                        </h3>
                                                        <span class="credential">12 December 2014</span>
                                                    </span>
                                                </div>
                                                <div class="news-item">
                                                    <span class="details">
                                                        <h3 class="title">
                                                            <a href="#">Pengumuman Jadwal Briefing...</a>
                                                        </h3>
                                                        <span class="credential">12 December 2014</span>
                                                    </span>
                                                </div>
                                                <div class="news-item">
                                                    <span class="details">
                                                        <h3 class="title">
                                                            <a href="#">Pengumuman Jadwal Briefing...</a>
                                                        </h3>
                                                        <span class="credential">12 December 2014</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-footer">
                                            <span class="text-right">
                                                <a href="#">View All News &raquo;</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- widget header --&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-body"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- widget news --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-news"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"news-item"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"details"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;h3</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>Pengumuman Jadwal Briefing...<span class="nt">&lt;/a&gt;</span>
                        <span class="nt">&lt;/h3&gt;</span>
                        <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"credential"</span><span class="nt">&gt;</span>12 December 2014<span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                ...
            <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>

        <span class="c">&lt;!-- widget footer --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p><strong>Widget Schedule</strong></p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-half">
                                    <div class="widget">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <i class="icon icon-widget-schedule"></i>
                                                <span class="label">
                                                    <span class="title">Widget Schedule</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-schedule">
                                                <div class="schedule-item">
                                                    <div class="group-item">
                                                        <div class="item time">
                                                            07:20
                                                        </div>
                                                        <div class="item title">
                                                            <a href="#">PSG Info Session</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="schedule-item">
                                                    <div class="group-item">
                                                        <div class="item time">
                                                            09:20
                                                        </div>
                                                        <div class="item title">
                                                            <a href="#">English Session</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="schedule-item">
                                                    <div class="group-item">
                                                        <div class="item time">
                                                            11:20
                                                        </div>
                                                        <div class="item title">
                                                            <a href="#">Business Management</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="schedule-item">
                                                    <div class="group-item">
                                                        <div class="item time">
                                                            13:20
                                                        </div>
                                                        <div class="item title">
                                                            <a href="#">Character Building</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-footer">
                                            <span class="text-right">
                                                <a href="#">View All Schedule</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- widget header --&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-body"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- widget schedule --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-schedule"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"schedule-item"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"group-item"</span><span class="nt">&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item time"</span><span class="nt">&gt;</span>
                            07:20
                        <span class="nt">&lt;/div&gt;</span>
                        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"item title"</span><span class="nt">&gt;</span>
                            <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>PSG Info Session<span class="nt">&lt;/a&gt;</span>
                        <span class="nt">&lt;/div&gt;</span>
                    <span class="nt">&lt;/div&gt;</span>
                <span class="nt">&lt;/div&gt;</span>
                ...
            <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>

        <span class="c">&lt;!-- widget footer --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p><strong>Widget Comparison</strong></p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-half">
                                    <div class="widget">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <i class="icon icon-widget-statistic"></i>
                                                <span class="label">
                                                    <span class="title">Widget Revenue</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="body-sub-title text-center">Lorem ipsum dolor sit amet</div>
                                            <div class="widget-comparison">
                                                <span class="current-value">200.500.000.000</span>
                                                <span class="comparison-value">100.000 Mhs</span>
                                                <span class="description">Weight: 100%</span>
                                            </div>
                                        </div>
                                        <div class="widget-footer">
                                            <span class="text-right">
                                                <a href="#">View Details &raquo;</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- widget header --&gt;</span>

        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-body"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"body-sub-title text-center"</span><span class="nt">&gt;</span>Lorem ipsum dolor sit amet<span class="nt">&lt;/div&gt;</span>
            <span class="c">&lt;!-- widget comparison --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-comparison"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"current-value"</span><span class="nt">&gt;</span>200.500.000.000<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"comparison-value"</span><span class="nt">&gt;</span>100.000 Mhs<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"description"</span><span class="nt">&gt;</span>Weight: 100%<span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>

        <span class="c">&lt;!-- widget footer --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p><strong>Widget Scrolled</strong></p>
                        <p>Komponen ini sebenarnya bukan termasuk widget, namun dapat menambah informasi yang ingin disampaikan karena memiliki navigasi untuk melihat informasi yang tidak dapat ruang pada widget (karena ukuran widget terbatas).</p>
                        <p>Widget scrolled terbagi atas dua jenis berdasarkan arah navigasinya, yaitu <strong>scrolled-vertical</strong> dan <strong>scrolled-horizontal</strong>. <strong>scrolled-vertical</strong> berarti arahnya ke atas dan ke bawah, sedangkan <strong>scrolled-horizontal</strong> arahnya ke kanan dan ke kiri. Berikut contohnya widget scrolled:</p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column two-thirds">
                                    <div class="widget">
                                        <div class="widget-head has-navigation">
                                            <span class="head-wrap">
                                                <span class="indicator warning">
                                                    <span class="wrap">
                                                        <span class="label">Score</span>
                                                        <span class="value">N/A</span>
                                                    </span>
                                                </span>
                                                <span class="label">
                                                    <span class="title">Widget Title</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                            </span>
                                            <span class="nav-container">
                                                <a href="#" class="btn-nav prev widget-scrolled-prev"></a>
                                                <a href="#" class="btn-nav next widget-scrolled-next"></a>
                                            </span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-scrolled scrolled-horizontal" data-show="1">
                                                <div class="scrolled-item">
                                                    <table class="zebra">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Name</th>
                                                                <th>Description</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Milan Baros</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetuer elit...</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Milan Baros</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetuer elit...</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Milan Baros</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetuer elit...</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="scrolled-item">
                                                    <table class="zebra">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Name</th>
                                                                <th>Description</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Milan Baros</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetuer elit...</td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>Milan Baros</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetuer elit...</td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>Milan Baros</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetuer elit...</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="scrolled-item">
                                                    <table class="zebra">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Name</th>
                                                                <th>Description</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>7</td>
                                                                <td>Milan Baros</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetuer elit...</td>
                                                            </tr>
                                                            <tr>
                                                                <td>8</td>
                                                                <td>Milan Baros</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetuer elit...</td>
                                                            </tr>
                                                            <tr>
                                                                <td>9</td>
                                                                <td>Milan Baros</td>
                                                                <td>Lorem ipsum dolor sit amet, consectetuer elit...</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-footer">
                                            <span class="text-right">
                                                <a href="#">View All Content &raquo;</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one-third">
                                    <div class="widget">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <i class="icon icon-widget-schedule"></i>
                                                <span class="label">
                                                    <span class="title">Widget Schedule</span>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="widget-body">
                                            <div class="widget-schedule widget-scrolled" data-show="4">
                                                <div class="schedule-item scrolled-item">
                                                    <div class="group-item">
                                                        <div class="item time">
                                                            07:20
                                                        </div>
                                                        <div class="item title">
                                                            <a href="#">PSG Info Session</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="schedule-item scrolled-item">
                                                    <div class="group-item">
                                                        <div class="item time">
                                                            09:20
                                                        </div>
                                                        <div class="item title">
                                                            <a href="#">English Session</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="schedule-item scrolled-item">
                                                    <div class="group-item">
                                                        <div class="item time">
                                                            11:20
                                                        </div>
                                                        <div class="item title">
                                                            <a href="#">Management</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="schedule-item scrolled-item">
                                                    <div class="group-item">
                                                        <div class="item time">
                                                            13:20
                                                        </div>
                                                        <div class="item title">
                                                            <a href="#">Character Building</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="schedule-item scrolled-item">
                                                    <div class="group-item">
                                                        <div class="item time">
                                                            15:20
                                                        </div>
                                                        <div class="item title">
                                                            <a href="#">Algorithm</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="schedule-item scrolled-item">
                                                    <div class="group-item">
                                                        <div class="item time">
                                                            17:20
                                                        </div>
                                                        <div class="item title">
                                                            <a href="#">Closing Session</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-footer has-navigation">
                                            <span class="text-right">
                                                <span class="nav-container">
                                                    <a href="#" class="btn-nav up widget-scrolled-up"></a>
                                                    <a href="#" class="btn-nav down widget-scrolled-down"></a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>Struktur HTML Widget Scrolled:</p>
                        <div class="highlight">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-head has-navigation"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- widget header element --&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"body"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- scrolled vertical --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-scrolled scrolled-vertical"</span> <span class="na">data-show=</span><span class="s">"4"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"scrolled-item"</span><span class="nt">&gt;&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"scrolled-item"</span><span class="nt">&gt;&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"scrolled-item"</span><span class="nt">&gt;&lt;/div&gt;</span>
                ...
            <span class="nt">&lt;/div&gt;</span>

            <span class="c">&lt;!-- scrolled horizontal --&gt;</span>
            <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-scrolled scrolled-horizontal"</span> <span class="na">data-show=</span><span class="s">"1"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"scrolled-item"</span><span class="nt">&gt;&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"scrolled-item"</span><span class="nt">&gt;&lt;/div&gt;</span>
                <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"scrolled-item"</span><span class="nt">&gt;&lt;/div&gt;</span>
                ...
            <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-footer has-navigation"</span><span class="nt">&gt;</span>
            <span class="c">&lt;!-- widget footer element --&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>
                        <p>Widget scrolled memiliki attribute <span class="text-success">data-show</span> yang digunakan untuk menampilkan jumlah item yang ingin dilihat dalam satu konten.</p>
                        <p><strong>Catatan:</strong> Implementasi widget scrolled membutuhkan Header atau Footer yang memiliki navigasi. Widget scrolled dapat dikombinasi dengan widget yang sudah ada seperti contoh diatas. Untuk contoh lengkapnya bisa dilihat <a href="index.php">disini</a>.</p>

                        <h2>Widget Auto Height</h2>
                        <p>Widget Auto Height digunakan untuk membuat tinggi widget mengikuti tinggi konten pada body (tadinya terkunci di 293px). Untuk menggunakannya cukup menambahkan class <span class="text-success">.auto-height</span> pada class <span class="text-success">.widget</span>. Cara pemakaiannya:</p>
                        <div class="highlight">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget auto-height"</span><span class="nt">&gt;</span>
        <span class="c">&lt;!-- widget header --&gt;</span>
        <span class="c">&lt;!-- widget body --&gt;</span>
        <span class="c">&lt;!-- widget footer --&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
                            </code>
                        </div>

                        <p id="feb2615"><strong>Update 26 Februari 2015:</strong><br/>Menambahkan link pada header Widget. Berikut contohnya:</p>
                        <div class="widget-parent">
                            <div class="row">
                                <div class="column one-half">
                                    <div class="widget auto-height">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <span class="label">
                                                    <span class="title">Widget Header</span>
                                                </span>
                                                <span class="opposite-link">
                                                    <a href="#">Opposite Link</a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column one-half">
                                    <div class="widget auto-height">
                                        <div class="widget-head">
                                            <span class="head-wrap">
                                                <i class="icon icon-widget-statistic"></i>
                                                <span class="label">
                                                    <span class="title">Widget Header</span>
                                                    <span class="pre-title">Widget Subtitle</span>
                                                </span>
                                                <span class="opposite-link">
                                                    <a href="#">View All</a>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="highlight" style="margin-top: -24px;">
                            <code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-parent"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"widget-head"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"head-wrap"</span><span class="nt">&gt;</span>
                <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"icon icon-widget-statistic"</span><span class="nt">&gt;&lt;/i&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"title"</span><span class="nt">&gt;</span>Widget Header<span class="nt">&lt;/span&gt;</span>
                    <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"pre-title"</span><span class="nt">&gt;</span>Widget Subtitle<span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;/span&gt;</span>
                <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"opposite-link"</span><span class="nt">&gt;</span>
                    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="s">"#"</span><span class="nt">&gt;</span>View All<span class="nt">&lt;/a&gt;</span>
                <span class="nt">&lt;/span&gt;</span>
            <span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
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