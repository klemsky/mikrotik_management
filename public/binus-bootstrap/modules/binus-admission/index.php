<?php include('header.php'); ?>

	<div class="site-content" id="site-content">

		<section class="user-content">
			<div class="container">
				<div class="row">
					<div class="column two-thirds">
						<section class="user-profile">
							<div class="thumbnail">
								<span class="avatar">
									<img src="../../images/statics/avatar.png" alt="">
								</span>
							</div>
							<div class="details">
								<div class="field">
									<h2 class="student-name">User Nicename</h2>
									<span class="position">Lorem ipsum dolor sit amet.</span>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>

		<section class="body-navigation on-pre-content">
			<div class="nav-head">
				<div class="container">
					<ul>
						<li class="current">
							<a href="index.php">
								<span class="label">Dashboard</span>
							</a>
						</li>
						<li>
							<a href="personal-information.php">
								<span class="label">Data Diri</span>
							</a>
						</li>
						<li>
							<a href="parent-information.php">
								<span class="label">Data Orangtua / Wali</span>
							</a>
						</li>
						<li>
							<a href="sibling-information.php">
								<span class="label">Data Saudara Kandung</span>
							</a>
						</li>
						<li>
							<a href="study-information.php">
								<span class="label">Data Pendidikan</span>
							</a>
						</li>
						<li>
							<a href="work-information.php">
								<span class="label">Data Pekerjaan</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section>

		<div class="main-content has-widget" id="main-content">
			<div class="container">
                <div class="box-container bg-grey">
                    <div class="badm-banner">
                        <div class="banner table-layout">
                            <div class="table-cell auto-width">
                                <div class="video">
                                    <span class="video-frame"></span>
                                    <span class="video-thumb">
                                        <img src="http://img.youtube.com/vi/v5qZ12JFmfg/0.jpg" alt="Thumbnail">
                                    </span>
                                    <a href="#" class="video-overlay badm-show-video" data-id="v5qZ12JFmfg">
                                        <i class="icon icon-play"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="table-cell valign-bottom">
                                <h4 class="subtitle">Click here to</h4>
                                <h3 class="title">Watch our video on our Online Admission Process</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-container">
                    <div class="page-sub-heading">
						<h2>Daftar Program</h2>
					</div>
                    <div class="container w-640px">
                        <form>
                            <p>
                                <label>Degree</label>
                                <span class="custom-combobox">
                                    <select>
                                        <option>A</option>
                                    </select>
                                </span>
                            </p>
                            <p>
                                <label>Group Program</label>
                                <span class="custom-combobox">
                                    <select>
                                        <option>A</option>
                                    </select>
                                </span>
                            </p>
                            <p>
                                <label>Campus Location</label>
                                <span class="custom-combobox">
                                    <select>
                                        <option>A</option>
                                    </select>
                                </span>
                            </p>
                            <p>
                                <label>Periode</label>
                                <span class="custom-combobox">
                                    <select>
                                        <option>A</option>
                                    </select>
                                </span>
                            </p>
                            <p>
                                <label>Referal Code / Voucher - <span class="verified">Verified</span></label>
                                <span class="table-layout">
                                    <span class="table-cell">
                                        <span class="verify-textbox">
                                            <input type="text">
                                            <span class="icon-verified"></span>
                                        </span>
                                    </span>
                                    <span class="table-cell auto-width">
                                        <input type="button" value="Verify" class="button button-secondary">
                                    </span>
                                </span>
                            </p>
                            <p>
                                <label>Referal Code / Voucher - <span class="not-verified">Wrong referral code / voucher</span></label>
                                <span class="table-layout">
                                    <span class="table-cell">
                                        <span class="verify-textbox">
                                            <input type="text" class="has-error">
                                        </span>
                                    </span>
                                    <span class="table-cell auto-width">
                                        <input type="button" value="Verify" class="button button-secondary">
                                    </span>
                                </span>
                            </p>
                            <p align="right">
                                <input type="submit" value="Daftar" class="button button-primary">
                            </p>
                        </form>
                    </div>
                </div>
                <div class="box-container">
                    <div class="page-sub-heading">
						<h2>Status Histori Pemesanan</h2>
					</div>
                    <div class="single-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Booking #</th>
                                    <th>Program</th>
                                    <th>Tanggal Pemesanan</th>
                                    <th>Tanggal Batas Bayar</th>
                                    <th>Metode Bayar</th>
                                    <th>Download Petunjuk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>6578499577</td>
                                    <td>BU</td>
                                    <td>17 Jun 2016</td>
                                    <td>19 Jun 2016</td>
                                    <td>Kartu Kredit</td>
                                    <td>petunjuk_kk.pdf</td>
                                    <td>Ubah Metode | Hapus Pesanan</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <p>Jika anda membayar lebih dari tanggal batas bayar, pesanan akan di anggap tidak jadi dan secara otomatis di hapus oleh system. Silahkan memesan kembali formulir anda.</p>
                    </div>
                </div>
                <div class="box-container">
                    <div class="page-sub-heading no-border">
						<h2>Formulir</h2>
                        <span class="opposite-link">
                            <a href="#" class="button button-primary">Beli Form Baru</a>
                        </span>
					</div>
                    <div class="badm-form">
                        <header class="form-head">
                            <div class="head-nav">
                                <div class="table-layout">
                                    <div class="table-cell auto-width">
                                        <a href="#" class="nav-btn is-prev">
                                            <span class="btn-prev"></span>
                                        </a>
                                    </div>
                                    <div class="table-cell">
                                        <div class="nav-wrap">
                                            <ul class="list-nav">
                                                <li class="nav-item current-item">
                                                    <a href="#">
                                                        <span>BINUS UNIVERSITY</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#">
                                                        <span>BINUS International</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#">
                                                        <span>BINUS Online Learning</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#">
                                                        <span>BINUS ASO</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#">
                                                        <span>BINUS NorthRumbia</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#">
                                                        <span>BINUS Bekasi</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="table-cell auto-width">
                                        <a href="#" class="nav-btn is-next">
                                            <span class="btn-next"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="head-subnav">
                                <div class="table-layout">
                                    <div class="table-cell auto-width">
                                        <a href="#" class="nav-btn is-prev">
                                            <span class="btn-prev"></span>
                                        </a>
                                    </div>
                                    <div class="table-cell">
                                        <div class="nav-wrap">
                                            <ul class="list-nav">
                                                <li class="nav-item current-item">
                                                    <a href="#">
                                                        <span>61162564018</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#">
                                                        <span>61162564080</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#">
                                                        <span>61162563018</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#">
                                                        <span>61292564018</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#">
                                                        <span>61162564818</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#">
                                                        <span>61162563018</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#">
                                                        <span>61162563245</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#">
                                                        <span>61162569087</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="table-cell auto-width">
                                        <a href="#" class="nav-btn is-next">
                                            <span class="btn-next"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <div class="form-body">
                            <div class="form-view">
                                <div class="item-view">
                                    <div class="item-body">
                                        <div class="group-item">
                                            <div class="item">
                                                <span class="field">
                                                    <span class="label">Periode / Tahun Akademik</span>
                                                    <span class="value">2017 - 2018</span>
                                                </span>
                                                <span class="field">
                                                    <span class="label">Lokasi Perkuliahan</span>
                                                    <span class="value">Kemanggisan</span>
                                                </span>
                                            </div>
                                            <div class="item">
                                                <span class="field">
                                                    <span class="label">Program</span>
                                                    <span class="value">Teknik Informatika</span>
                                                </span>
                                                <span class="field">
                                                    <span class="label">Jadwal TPKS</span>
                                                    <span class="value">23 Juli 2016</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-step">
                                <ul class="step-list">
                                    <li class="step-item prev-step">
                                        <a href="#" class="step-number">1</a>
                                    </li>
                                    <li class="step-item prev-step">
                                        <a href="#" class="step-number">2</a>
                                    </li>
                                    <li class="step-item current-step">
                                        <a href="#" class="step-number">3</a>
                                    </li>
                                    <li class="step-item">
                                        <a href="#" class="step-number">4</a>
                                    </li>
                                    <li class="step-item">
                                        <a href="#" class="step-number">5</a>
                                    </li>
                                    <li class="step-item">
                                        <a href="#" class="step-number">6</a>
                                    </li>
                                    <li class="step-item">
                                        <a href="#" class="step-number">7</a>
                                    </li>
                                </ul>
                                <div class="step-legend">
                                    <table class="legend-table">
                                        <tbody>
                                            <tr>
                                                <th width="100">Step 1</th>
                                                <td><p>Sed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p></td>
                                            </tr>
                                            <tr>
                                                <th width="100">Step 2</th>
                                                <td>
                                                    <p>Sed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
                                                    <p><strong>Download:</strong></p>
                                                    <ul>
                                                        <li><a href="#">Buku Petunjuk</a></li>
                                                        <li><a href="#">Kartu Ujian Masuk</a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th width="100">Step 3</th>
                                                <td><p>Sed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p></td>
                                            </tr>
                                            <tr>
                                                <th width="100">Step 4</th>
                                                <td><p>Sed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p></td>
                                            </tr>
                                            <tr>
                                                <th width="100">Step 5</th>
                                                <td><p>Sed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p></td>
                                            </tr>
                                            <tr>
                                                <th width="100">Step 6</th>
                                                <td><p>Sed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p></td>
                                            </tr>
                                            <tr>
                                                <th width="100">Step 7</th>
                                                <td><p>Sed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p class="legend-detail-link">
                                        <a href="form-inside.php">View Details &raquo;</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget-parent" id="widget-parent">
                    <div class="row">
                        <div class="column">
                            <div class="widget box-container-style auto-height">
                                <div class="widget-head has-navigation">
                                    <span class="head-wrap">
                                        <span class="label">
											<span class="title">Teman Yang Masuk BINUS</span>
										</span>
                                    </span>
                                    <span class="nav-container">
										<a href="#" class="btn-nav prev widget-scrolled-prev"></a>
										<a href="#" class="btn-nav next widget-scrolled-next"></a>
									</span>
                                </div>
                                <div class="widget-body">
                                    <div class="badm-widget-list-friend widget-scrolled scrolled-horizontal" data-show="1" data-items="3">
                                        <div class="scrolled-item">
                                            <div class="list-friend row">
                                                <div class="friend column one-third">
                                                    <div class="table-layout">
                                                        <div class="table-cell valign-middle auto-width">
                                                            <div class="friend-avatar">
                                                                <img src="../../images/statics/avatar.png" alt="Avatar">
                                                            </div>
                                                        </div>
                                                        <div class="table-cell valign-middle">
                                                            <h3 class="friend-name">Rebecca Setiadi</h3>
                                                            <span class="friend-meta">Teknik Informatika</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="friend column one-third">
                                                    <div class="table-layout">
                                                        <div class="table-cell valign-middle auto-width">
                                                            <div class="friend-avatar">
                                                                <img src="../../images/statics/avatar.png" alt="Avatar">
                                                            </div>
                                                        </div>
                                                        <div class="table-cell valign-middle">
                                                            <h3 class="friend-name">Rebecca Setiadi</h3>
                                                            <span class="friend-meta">Teknik Informatika</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="friend column one-third">
                                                    <div class="table-layout">
                                                        <div class="table-cell valign-middle auto-width">
                                                            <div class="friend-avatar">
                                                                <img src="../../images/statics/avatar.png" alt="Avatar">
                                                            </div>
                                                        </div>
                                                        <div class="table-cell valign-middle">
                                                            <h3 class="friend-name">Rebecca Setiadi</h3>
                                                            <span class="friend-meta">Teknik Informatika</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="scrolled-item">
                                            <div class="list-friend row">
                                                <div class="friend column one-third">
                                                    <div class="table-layout">
                                                        <div class="table-cell valign-middle auto-width">
                                                            <div class="friend-avatar">
                                                                <img src="../../images/statics/avatar.png" alt="Avatar">
                                                            </div>
                                                        </div>
                                                        <div class="table-cell valign-middle">
                                                            <h3 class="friend-name">Rebecca Setiadi</h3>
                                                            <span class="friend-meta">Teknik Informatika</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="friend column one-third">
                                                    <div class="table-layout">
                                                        <div class="table-cell valign-middle auto-width">
                                                            <div class="friend-avatar">
                                                                <img src="../../images/statics/avatar.png" alt="Avatar">
                                                            </div>
                                                        </div>
                                                        <div class="table-cell valign-middle">
                                                            <h3 class="friend-name">Rebecca Setiadi</h3>
                                                            <span class="friend-meta">Teknik Informatika</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="friend column one-third">
                                                    <div class="table-layout">
                                                        <div class="table-cell valign-middle auto-width">
                                                            <div class="friend-avatar">
                                                                <img src="../../images/statics/avatar.png" alt="Avatar">
                                                            </div>
                                                        </div>
                                                        <div class="table-cell valign-middle">
                                                            <h3 class="friend-name">Rebecca Setiadi</h3>
                                                            <span class="friend-meta">Teknik Informatika</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="scrolled-item">
                                            <div class="list-friend row">
                                                <div class="friend column one-third">
                                                    <div class="table-layout">
                                                        <div class="table-cell valign-middle auto-width">
                                                            <div class="friend-avatar">
                                                                <img src="../../images/statics/avatar.png" alt="Avatar">
                                                            </div>
                                                        </div>
                                                        <div class="table-cell valign-middle">
                                                            <h3 class="friend-name">Rebecca Setiadi</h3>
                                                            <span class="friend-meta">Teknik Informatika</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="friend column one-third">
                                                    <div class="table-layout">
                                                        <div class="table-cell valign-middle auto-width">
                                                            <div class="friend-avatar">
                                                                <img src="../../images/statics/avatar.png" alt="Avatar">
                                                            </div>
                                                        </div>
                                                        <div class="table-cell valign-middle">
                                                            <h3 class="friend-name">Rebecca Setiadi</h3>
                                                            <span class="friend-meta">Teknik Informatika</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="friend column one-third">
                                                    <div class="table-layout">
                                                        <div class="table-cell valign-middle auto-width">
                                                            <div class="friend-avatar">
                                                                <img src="../../images/statics/avatar.png" alt="Avatar">
                                                            </div>
                                                        </div>
                                                        <div class="table-cell valign-middle">
                                                            <h3 class="friend-name">Rebecca Setiadi</h3>
                                                            <span class="friend-meta">Teknik Informatika</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>