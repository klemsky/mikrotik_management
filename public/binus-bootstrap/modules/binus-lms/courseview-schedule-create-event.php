<?php include( 'header.php' ); ?>

	<div class="site-content" id="site-content">

		<div class="main-content has-widget" id="main-content">
			<div class="container">
				<div class="box-container">
					<div class="page-sub-heading">
						<h2>Create Event</h2>
					</div>
					<div class="single-content popup-content" id="target-id">
						<h1 class="heading new-layout">Create Event</h1>
						<form action="#" method="post">
							<p>
								<label>Event Name</label>
								<input type="text" name="input[]">
							</p>
							<p>
								<label>Event Type</label>
								<span class="custom-combobox">
									<select name="input[]">
										<option value="0">Event Type</option>
									</select>
								</span>
							</p>
							<p>
								<label>Description</label>
								<textarea class="editor" id="editor" rows="12"></textarea>
							</p>
							<p class="action has-border" align="right">
								<input type="submit" class="button button-primary" value="Create Event">
							</p>
						</form>
					</div>
				</div>
			</div>
		</div><!-- #main-content -->
	</div><!-- #site-content -->

<?php include( 'footer.php' ); ?>