<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">

		<section class="breadcrumb">
			<div class="container">
				<div class="wrap">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Testing</a></li>
						<li>Combobox</li>
					</ul>
				</div>
			</div>
		</section><!-- .breadcrumb -->

		<section class="page-heading">
			<div class="container">
				<h1>Testing Combobox: Append Option</h1>
			</div>
		</section><!-- .page-heading -->

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">

					<div class="search-filter-form">
						<form>
							<div class="row">
								<div class="column one-half">
									<p>
										<span class="custom-combobox">
											<select id="filter">
												<option value="0">Select Filter</option>
												<option value="1">Asia</option>
											</select>
										</span>
									</p>
									<p>
										<span class="custom-chosen">
											<select>
												<option>A</option>
												<option>B</option>
												<option>C</option>
												<option>D</option>
											</select>
										</span>
									</p>
								</div>
								<div class="column one-half">
									<p>
										<span class="custom-combobox">
											<select id="target">
												<option value="0">Select Country</option>
											</select>
										</span>
									</p>
									<p>
										<span class="custom-chosen">
											<select>
												<option>A</option>
												<option>B</option>
												<option>C</option>
												<option>D</option>
											</select>
										</span>
									</p>
								</div>
								<div class="column one-half">
									<p>
										<span class="custom-multiselect">
											<select id="example-getting-started" multiple="multiple">
												<option value="cheese">Cheese</option>
												<option value="tomatoes">Tomatoes</option>
												<option value="mozarella">Mozzarella</option>
												<option value="mushrooms">Mushrooms</option>
												<option value="pepperoni">Pepperoni</option>
												<option value="onions">Onions</option>
											</select>
										</span>
									</p>
                                    <p>
										<span class="custom-multiselect">
											<select id="example-getting-started" multiple="multiple">
												<option value="cheese">Cheese</option>
												<option value="tomatoes">Tomatoes</option>
												<option value="mozarella">Mozzarella</option>
												<option value="mushrooms">Mushrooms</option>
												<option value="pepperoni">Pepperoni</option>
												<option value="onions">Onions</option>
											</select>
										</span>
									</p>
								</div>
							</div>
						</form>
					</div>

					<!-- group item filter -->
					<style type="text/css">
						.main-filter {
							table-layout: auto;
						}
						.main-filter .item {
							vertical-align: middle;
						}
						.main-filter .item.cell-label {
							width: 1%;
							padding-right: 20px;
							white-space: nowrap;
						}
						.main-filter .item.cell-action {
							width: 1%;
							padding-left: 20px;
						}
					</style>
					<div class="group-item main-filter">
						<div class="item cell-label">Search Filter</div>
						<div class="item cell-component">
							<input type="text">
						</div>
						<div class="item cell-action">
							<input type="submit" class="button button-primary" value="Button">
						</div>
					</div>

				</div><!-- .main-container -->
			</div><!-- .container -->
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>