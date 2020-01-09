<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">
		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Documentation</a></li>
						<li><a href="#">Content</a></li>
						<li>Table</li>
					</ul>
				</div>
			</div>
		</section>

		<section class="page-heading">
			<div class="container">
				<h1>Table</h1>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
                    <div class="single-content popup-content" id="target-id">
                        <div class="page-sub-heading">
                            <h2>Basic Table</h2>
                        </div>
                        <p>Setiap tag <span class="text-success">&lt;table&gt;</span> sudah ter-styling secara otomatis tanpa menambahkan class tertentu.</p>
                        <table>
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
                                    <td>Profile description.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Milan Baros</td>
                                    <td>Profile description.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Milan Baros</td>
                                    <td>Profile description.</td>
                                </tr>
                            </tbody>
                        </table>
                        <h2>Bordered Table</h2>
                        <p>Tambahkan class <span class="text-success">.bordered</span> untuk menambahkan border pada tabel.</p>
                        <table class="bordered">
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
                                    <td>Profile description.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Milan Baros</td>
                                    <td>Profile description.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Milan Baros</td>
                                    <td>Profile description.</td>
                                </tr>
                            </tbody>
                        </table>
                        <h2>Stripped Rows</h2>
                        <p>Tambahkan class <span class="text-success">.zebra</span> untuk membuat warna baris yang berbeda pada setiap row.</p>
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
                                    <td>Profile description.</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Milan Baros</td>
                                    <td>Profile description.</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Milan Baros</td>
                                    <td>Profile description.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
			</div>
		</div>
	</div>

<?php include( 'footer.php' ); ?>