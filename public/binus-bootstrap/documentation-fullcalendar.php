<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li><a href="#">Components</a></li>
						<li>Fullcalendar</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Fullcalendar</h1>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<div class="calendar-wrapper">
						<div class="fullcalendar calendar"></div>
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
					</div>
					<div class="single-content">
						<p><strong>Fullcalendar</strong> adalah sebuah plugin open source yang digunakan untuk menampilkan jadwal event dalam bentuk table (Calendar).<br/>Link resmi Fullcalendar: <a href="http://fullcalendar.io">http://fullcalendar.io</a>.</p>
						<p>Struktur HTML:</p>
						<div class="highlight">
							<code class="language-html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"calendar-wrapper"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"fullcalendar calendar"</span><span class="nt">&gt;&lt;/div&gt;</span>
    
    <span class="c">&lt;!-- legend component --&gt;</span>
<span class="nt">&lt;/div&gt;</span>
							</code>
						</div>
						<p>Fullcalendar digenerate secara otomatis oleh JavaScript. Cukup membuat kode HTML dengan class <span class="text-success">.fullcalendar</span>. Kode Fullcalendar terdapat pada file <strong>"js/script.js"</strong> baris <strong>56-71</strong>. Berikut kodenya:</p>
						<div class="highlight">
							<code class="language-js">
<span class="kc">function</span> <span class="nx">__fullcalendar</span><span class="p">(</span><span class="nx">$element</span><span class="p">) {</span>
    <span class="kc">if</span> <span class="p">(</span><span class="nx">$</span><span class="p">(</span><span class="nx">$element</span><span class="p">)</span><span class="nx">.find</span><span class="p">(</span><span class="s">'.fullcalendar'</span><span class="p">)</span><span class="nx">.length <= 0</span><span class="p">)</span> <span class="kc">return</span><span class="p">;</span>

    <span class="c">// initialization calendar</span>
    <span class="kd">var</span> <span class="nx">$id    = </span><span class="s">'.fullcalendar'</span><span class="p">;</span>
    <span class="kd">var</span> <span class="nx">$limit = 4</span><span class="p">;</span>
    <span class="kd">var</span> <span class="nx">$host  = </span><span class="s">'http://localhost'</span><span class="p">;</span>

    <span class="nx">$.ajax</span><span class="p">({</span>
        <span class="na">url</span>      <span class="p">:</span> <span class="nx">$host + </span><span class="s">'/frontend/binus-bootstrap/json/json.events.php'</span><span class="p">,</span>
        <span class="na">dataType</span> <span class="p">:</span> <span class="s">'json'</span><span class="p">,</span>
        <span class="na">success</span>  <span class="p">:</span> <span class="kc">function</span><span class="p">(</span><span class="nx">$result</span><span class="p">) {</span>
            <span class="nx">dmdCalendar</span><span class="p">(</span><span class="nx">$id, $result, $limit</span><span class="p">);</span>
        <span class="p">}</span>
    <span class="p">});</span>
<span class="p">}</span>
							</code>
						</div>
						<p>Data yang digunakan berbentuk JSON. Formatnya dapat dilihat pada file <strong>"json/json.events.php"</strong>.</p>
						<p><strong>Update 24 Februari 2015:</strong><br/>Fullcalendar dibuat menjadi jQuery plugin sehingga lebih fleksibel penggunaannya. Update ini menggantikan semua cara kerja yang sudah ada (termasuk format data JSON).</p>
						<p>Contoh kode JS-nya:</p>
						<div class="highlight">
							<code class="language-js">
<span class="c">// source as json feed</span>
<span class="nx">$</span><span class="p">(</span><span class="s">'.fullcalendar'</span><span class="p">)</span><span class="nx">.binus_fullcalendar</span><span class="p">({</span>
    <span class="na">limit</span>  <span class="p">:</span> <span class="nx">4</span>,     <span class="c">// default 4</span>
    <span class="na">source</span> <span class="p">:</span> <span class="s">'http://localhost/frontend/binus-bootstrap/json/json.events.php'</span>
<span class="p">});</span>

<span class="c">// source as an array</span>
<span class="nx">$</span><span class="p">(</span><span class="s">'.fullcalendar'</span><span class="p">)</span><span class="nx">.binus_fullcalendar</span><span class="p">({</span>
    <span class="na">limit</span>  <span class="p">:</span> <span class="nx">4</span>,     <span class="c">// default 4</span>
    <span class="na">source</span> <span class="p">:</span> <span class="p">[</span>
        <span class="p">{</span>
            <span class="na">id</span>    <span class="p">:</span> <span class="nx">1,</span>
            <span class="na">title</span> <span class="p">:</span> <span class="s">'Event Title'</span><span class="p">,</span>
            <span class="na">start</span> <span class="p">:</span> <span class="s">'2015-02-20'</span><span class="p">,</span>    <span class="c">// format Y-m-d</span>
            <span class="na">end</span>   <span class="p">:</span> <span class="s">'2015-02-28'</span><span class="p">,</span>    <span class="c">// format Y-m-d</span>
            <span class="na">color</span> <span class="p">:</span> <span class="s">'#000'</span><span class="p">,</span>
            <span class="na">body</span>  <span class="p">:</span> <span class="p">[</span>
                <span class="p">{</span>
                    <span class="na">title</span>   <span class="p">:</span> <span class="s">'Place'</span><span class="p">,</span>
                    <span class="na">content</span> <span class="p">:</span> <span class="s">'Your Place Content'</span>
                <span class="p">},</span>
                <span class="p">{</span>
                    <span class="na">title</span>   <span class="p">:</span> <span class="s">'Link'</span><span class="p">,</span>
                    <span class="na">content</span> <span class="p">:</span> <span class="s">'&lt;a href="#"&gt;Your Link Content&lt;/a&gt;'</span>
                <span class="p">}</span>
            <span class="p">]</span>
        <span class="p">},</span>
        <span class="p">{</span>
            <span class="na">id</span>    <span class="p">:</span> <span class="nx">2,</span>
            <span class="na">title</span> <span class="p">:</span> <span class="s">'Event Title'</span><span class="p">,</span>
            <span class="na">start</span> <span class="p">:</span> <span class="s">'2015-02-20'</span><span class="p">,</span>    <span class="c">// format Y-m-d</span>
            <span class="na">end</span>   <span class="p">:</span> <span class="s">'2015-02-28'</span><span class="p">,</span>    <span class="c">// format Y-m-d</span>
            <span class="na">color</span> <span class="p">:</span> <span class="s">'#000'</span><span class="p">,</span>
            <span class="na">body</span>  <span class="p">:</span> <span class="p">[</span>
                <span class="p">{</span>
                    <span class="na">title</span>   <span class="p">:</span> <span class="s">'Description'</span><span class="p">,</span>
                    <span class="na">content</span> <span class="p">:</span> <span class="s">'Your Description Content'</span>
                <span class="p">},</span>
                <span class="p">{</span>
                    <span class="na">title</span>   <span class="p">:</span> <span class="s">'Setup Your Title by Your Self'</span><span class="p">,</span>
                    <span class="na">content</span> <span class="p">:</span> <span class="s">'Your Amazing Content'</span>
                <span class="p">}</span>
            <span class="p">]</span>
        <span class="p">}</span>
    <span class="p">]</span>
<span class="p">});</span>
							</code>
						</div>
						<p>Format data baru:</p>
						<div class="highlight">
							<code>
[
    {
        'id': 1,
        'title': 'Event Title',
        'start': '2015-02-20',
        'color': '#000',
        'body': [
            {
                'title': 'Your Title',
                'content': 'Your Content'
            }
        ]
    },
    {
        'id': 2,
        'title': 'Long Event Title',
        'start': '2015-02-20',
        'end': '2015-02-25',
        'color': '#000',
        'body': [
            {
                'title': 'Your Title',
                'content': 'Your Content'
            },
            {
                'title': 'Your Title 2',
                'content': '&lt;a href="#"&gt;Your Content Link&lt;/a&gt;'
            }
        ]
    }
]
							</code>
						</div>
						<p>Pada format data baru, content yang ingin ditampilkan diubah formatnya menjadi array. Tujuannya adalah agar content yang ditampilkan pada Tooltip Calendar lebih fleksibel dari sebelumnya (tidak ada batasan, namun diharapkan dipakai sesuai dengan porsinya).</p>
						<p>Lokasi file plugin Fullcalendar: <strong>js/plugins/fullcalendar.js</strong>.</p>
					</div>
				</div>
			</div><!-- .container -->
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>