<?php include('header.php'); ?>

	<div class="site-content" id="site-content">
		<div class="main-content bg-gray" id="main-content">
			<div class="container">
				<div class="search-engine is-simple-search">
					<div class="container w-640px">
						<header class="header-block">
                            <i class="icon icon-block-binus-pages"></i>
                            <h1 class="heading text-color">BINUS Pages</h1>
                        </header>
						<p class="text-center">We're here to help you find people with the white pages directory ! Times change. People move. Things happen. If you want to know how to find people or get back in touch, you landed in just the right spot.</p>
						<form action="#" method="get" class="form-simple-search">
							<p>
								<span class="custom-search">
									<input type="text" name="input[]" value="rebecca" placeholder="Type on this field and hit Enter/Return to search for BINUS Employee">
									<span class="icon-area"></span>
								</span>
							</p>
						</form>
                        <form action="#" method="get" class="form-advanced-search row">
                            <div class="column two-thirds">
                                <p>
                                    <span class="custom-search">
                                        <input type="text" name="input[]" placeholder="Type on this field">
                                    </span>
                                </p>
                            </div>
                            <div class="column one-third">
                                <p>
                                    <span class="custom-combobox">
                                        <select>
                                            <option value="">Anywhere</option>
                                        </select>
                                    </span>
                                </p>
                            </div>
                            <div class="column one-sixth">
                                <p>
                                    <span class="custom-combobox">
                                        <select>
                                            <option value="">And</option>
                                        </select>
                                    </span>
                                </p>
                            </div>
                            <div class="column one-half">
                                <p>
                                    <span class="custom-search">
                                        <input type="text" name="input[]" placeholder="Type on this field">
                                    </span>
                                </p>
                            </div>
                            <div class="column one-third">
                                <p>
                                    <span class="custom-combobox">
                                        <select>
                                            <option value="">Anywhere</option>
                                        </select>
                                    </span>
                                </p>
                            </div>
                            <div class="column">
                                <p class="text-center">
                                    <input type="submit" class="button button-primary" value="Search">
                                </p>
                            </div>
						</form>
                        <div class="form-link-option">
                            <a href="#" class="link-option link-advanced-search">Advanced Search</a>
                            <a href="#" class="link-option link-simple-search">Simple Search</a>
                        </div>
					</div>
				</div>
				<div class="prtl-lecturers open-container" id="lecturers">
					<div class="container">
                        <h1 class="heading text-color">
                            Search Result For "rebecca"
                            <span class="description">About 20 results.</span>
                        </h1>
                        <div class="list-lecturers row">
                            <?php for ($i = 1;$i <=9;$i++) : ?>
                            <div class="lecturer column one-third">
                                <div class="lecturer-thumbnail">
                                    <a href="#" class="image-container">
                                        <img src="images/statics/avatar.png" alt="Lecturer Thumbnail">
                                    </a>
                                </div>
                                <div class="lecturer-details">
                                    <h3 class="lecturer-name">
                                        <a href="#">
                                            Rebecca Setiadi
                                        </a>
                                    </h3>
                                    <span class="meta-text">Teknik Informatika</span>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                        <div class="view-all">
                            <a href="#" class="button button-primary">Load More</a>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>

<?php include('footer.php'); ?>