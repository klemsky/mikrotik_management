<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li><a href="#">Pre Content</a></li>
						<li>Agenda Navigation</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Agenda Navigation</h1>
			</div>
		</section>

		<section class="agenda-navigation">
			<div class="container">
				<div class="heading">
					<i class="icon-calendar"></i>
					<span class="label">Next Agenda</span>
				</div>
				<div class="nav-item">
					<a href="#" class="nav prev-button"></a>
					<a href="#" class="nav next-button"></a>
				</div>
				<div class="agenda-content">
					<ul>
						<li>
							<span class="wrap">
								<span class="label">Monday</span>
								<span class="label">27 Jan 2014</span>
							</span>
						</li>
						<li>
							<span class="wrap">
								<span class="label">11.20 PM</span>
								<span class="label">13.00 PM</span>
							</span>
						</li>
						<li>
							<span class="wrap">
								<span class="label">Anggrek Campus</span>
								<span class="label">Room 601</span>
							</span>
						</li>
						<li>
							<span class="wrap">
								<span class="label">Interview I</span>
								<span class="label">Lecturer School of Design</span>
							</span>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
                    <div class="single-content popup-content" id="target-id">
                        <div class="page-sub-heading">
                            <h2>Struktur HTML</h2>
                        </div>
                        <div class="highlight">
                            <code class="language-html">
<span class="c">&lt;!-- pre content element --&gt;</span>
<span class="nt">&lt;section</span> <span class="na">class=</span><span class="s">"agenda-navigation"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"container"</span><span class="nt">&gt;</span>
        <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"heading"</span><span class="nt">&gt;</span>
            <span class="nt">&lt;i</span> <span class="na">class=</span><span class="s">"icon-calendar"</span><span class="nt">&gt;</span><span class="nt">&lt;/i&gt;</span>
            <span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"label"</span><span class="nt">&gt;</span>Next Agenda<span class="nt">&lt;/span&gt;</span>
        <span class="nt">&lt;/div&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/section&gt;</span>
                            </code>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>