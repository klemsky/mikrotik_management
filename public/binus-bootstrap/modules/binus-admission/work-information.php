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
					<div class="column one-third opposite">
						<section class="user-role">
							<div class="wrap">
								<div class="field">
									<span class="label">Login As</span>
									<span class="component">
										<span class="login-role" id="login-role">
											<select name="login-role">
												<option value="1">Auditee</option>
											</select>
										</span>
									</span>
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
						<li>
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
						<li class="current">
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
                <div class="box-container">
                    <div class="form-view">
						<div class="item-view">
                            <div class="item-head">
                                <h2 class="head-label">Data Pekerjaan</h2>
                                <span class="opposite-link">
                                    <a href="form.php #target-id" class="fancybox-trigger fancybox.ajax">Add</a>
                                </span>
                            </div>
                            <div class="item-body">
                                <div class="single-content">
                                    <table class="bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Milan Baros</td>
                                                <td>Profile description.</td>
                                                <td>
                                                    <a href="form.php #target-id" class="fancybox-trigger fancybox.ajax">Edit</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Milan Baros</td>
                                                <td>Profile description.</td>
                                                <td>
                                                    <a href="form.php #target-id" class="fancybox-trigger fancybox.ajax">Edit</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Milan Baros</td>
                                                <td>Profile description.</td>
                                                <td>
                                                    <a href="form.php #target-id" class="fancybox-trigger fancybox.ajax">Edit</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
					</div>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>