<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<div class="single-content popup-content" id="target-id">
						<h1 class="heading new-layout">Reschedule Request</h1>
						<div class="page-reschedule">
							<div class="section-item">
								<h3 class="title-section">Previous Schedule Detail</h3>
								<div class="group-item details-layout">
									<div class="item">
										<span class="field">
											<span class="label">Audit Period</span>
											<span class="value">2014.01</span>
										</span>
										<span class="field">
											<span class="label">Date</span>
											<span class="value">22 Desember 2014</span>
										</span>
										<span class="field">
											<span class="label">Time</span>
											<span class="value">13.00 - 17.00 WIB</span>
										</span>
									</div>
									<div class="item">
										<span class="field">
											<span class="label">Lead Auditor</span>
											<span class="value">Mr. A</span>
										</span>
										<span class="field">
											<span class="label">Assistant Auditor</span>
											<span class="value">Mrs. B</span>
										</span>
									</div>
								</div>
							</div>
							<div class="section-item">
								<h3 class="title-section">New Request</h3>
								<form action="#" method="post">
									<div class="row">
										<div class="column one-half">
											<p>
												<label>Date</label>
												<span class="custom-datepicker">
													<input type="text" name="input[]" class="datepicker">
													<span class="icon-area"></span>
												</span>
											</p>
										</div>
										<div class="column one-half">
											<p>
												<label>Time</label>
												<span class="group-item time-layout">
													<span class="item">
														<input type="text" name="input[]">
													</span>
													<span class="item semicolon">-</span>
													<span class="item">
														<input type="text" name="input[]">
													</span>
												</span>
											</p>
										</div>
									</div>
									<p>
										<label>Reschedule Reason</label>
										<input type="text" name="input[]">
									</p>
									<p class="action has-border" align="right">
										<input type="submit" value="Cancel" class="button button-secondary">
										<input type="submit" value="Save" class="button button-primary">
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- #main-content -->

	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>