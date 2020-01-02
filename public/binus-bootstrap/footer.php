			<footer class="footer new-layout" id="footer">

				<section class="footer-widget">
					<div class="container">
						<div class="group-item">
							<div class="item has-padding-right">
								<div class="footer-title">
									<h2 class="title" title="Social Media tooltip">Social Media</h2>
								</div>
								<div class="social-media">
									<a href="#" class="icon icon-twitter"></a>
									<a href="#" class="icon icon-facebook"></a>
									<a href="#" class="icon icon-google-plus"></a>
									<a href="#" class="icon icon-youtube"></a>
									<a href="#" class="icon icon-rss"></a>
									<a href="#" class="icon icon-website"></a>
									<a href="#" class="icon icon-line"></a>
									<a href="#" class="icon icon-whatsapp"></a>
									<a href="#" class="icon icon-linkedin"></a>
									<a href="#" class="icon icon-instagram"></a>
									<a href="#" class="icon icon-print"></a>
									<a href="#" class="icon icon-contact-mail"></a>
								</div>
							</div>
							<div class="item has-padding">
								<div class="footer-title">
									<h2 class="title">Feedback &amp; Bug</h2>
								</div>
								<div class="feedback-area">
									<a href="#" class="button button-primary wide" id="show-form-feedback">Report Feedback &amp; Bug</a>
									<div class="feedback-popup">
										<a href="#" class="feedback-close" id="close-form-feedback"></a>
										<form action="#" method="post">
											<p>
												<input type="text" name="input[]" placeholder="Subject">
											</p>
											<p>
												<textarea name="input[]" rowspan="2" placeholder="Message"></textarea>
											</p>
											<p>
												<input type="submit" class="button button-primary wide" value="Send">
											</p>
										</form>
									</div>
								</div>
							</div>
							<div class="item has-padding-left bottom-direction">
								<div class="corporate-area">
									<h1 class="main-title">BINUS University</h1>
									<h3 class="pre-title">Corporate Name</h3>
								</div>
							</div>
						</div>
					</div>
				</section><!-- .footer-widget -->

			</footer><!-- #footer -->

		</div><!-- #page -->

		<!-- Vendor -->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.ui.js"></script>
		<script type="text/javascript" src="js/jquery.browser.js"></script>
		<script type="text/javascript" src="js/jquery.fancyfields.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox.js"></script>
		<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="js/jquery.mcustomscrollbar.js"></script>
		<script type="text/javascript" src="js/jquery.datatables.js"></script>
		<script type="text/javascript" src="js/jquery.datatables.fixedcolumns.js"></script>
		<script type="text/javascript" src="js/jquery.chosen.js"></script>
		<script type="text/javascript" src="js/jquery.qtip.js"></script>
		<script type="text/javascript" src="js/raphael.js"></script>
		<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
		<script type="text/javascript" src="js/formalhaut/build/formalhaut.js"></script>
		<script type="text/javascript" src="js/multiselect.js"></script>
		<script type="text/javascript" src="js/autosize.js"></script>
		<script type="text/javascript" src="js/jquery.ui.timepicker.js"></script>

		<!-- Calendar -->
		<script type="text/javascript" src="js/date.js"></script>
		<script type="text/javascript" src="js/jquery.formbubble.js"></script>
		<script type="text/javascript" src="js/fullcalendar.js"></script>
		<script type="text/javascript" src="js/fullcalendar.viewmore.js"></script>

		<!-- Global -->
		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/script.navigation.js"></script>

		<!-- Plugins -->
		<script type="text/javascript" src="js/plugins/accordion-toggle.js"></script>
		<script type="text/javascript" src="js/plugins/advanced-combobox.js"></script>
		<script type="text/javascript" src="js/plugins/body-navigation.js"></script>
		<script type="text/javascript" src="js/plugins/combobox.js"></script>
		<script type="text/javascript" src="js/plugins/datepicker.js"></script>
		<script type="text/javascript" src="js/plugins/editor.js"></script>
		<script type="text/javascript" src="js/plugins/freeze-pane.js"></script>
		<script type="text/javascript" src="js/plugins/fullcalendar.js"></script>
		<script type="text/javascript" src="js/plugins/scrollbar.js"></script>
		<script type="text/javascript" src="js/plugins/tabulation.js"></script>
		<script type="text/javascript" src="js/plugins/tooltip.js"></script>
		<script type="text/javascript" src="js/plugins/uploader.js"></script>
		<script type="text/javascript" src="js/plugins/widgets.js"></script>
		<script type="text/javascript" src="js/plugins/multiselect.js"></script>
		<script type="text/javascript" src="js/plugins/chatting.js"></script>

		<!-- Main JS -->
		<script type="text/javascript" src="js/main.js"></script>

		<!-- Modules -->

		<!-- BINUS Career
		<link rel="stylesheet" type="text/css" href="modules/binus-career/css/style.css">
		<script type="text/javascript" src="modules/binus-career/js/script.js"></script>-->

		<!-- BINUS LMS
		<link rel="stylesheet" type="text/css" href="modules/binus-lms/css/style.css">
		<script type="text/javascript" src="modules/binus-lms/js/script.js"></script>-->

		<!-- BINUS AMI
		<link rel="stylesheet" type="text/css" href="modules/binus-ami/css/style.css">
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript" src="modules/binus-ami/js/fullcalendar.custom.js"></script>
		<script type="text/javascript" src="modules/binus-ami/js/script.js"></script>-->

		<!-- BINUS Portal
		<link rel="stylesheet" type="text/css" href="modules/binus-portal/css/style.css">-->

		<!-- BINUSMAYA
		<link rel="stylesheet" type="text/css" href="modules/binusmaya/css/style.css">
		<script type="text/javascript" src="modules/binusmaya/js/script.js"></script>-->

        <script type="text/javascript">
        (function($) {
            $(document).ready(function() {
                $('.update-freeze-pane').click(function(e) {
                    e.preventDefault();
                    $('.freeze-pane').data('has-init', 'no');

                    $('.freeze-pane').binus_freeze_pane({
                        fixed_left: 0,
                        on_window_load: false
                    });
                });
            });
        })(jQuery);
        </script>

	</body>
</html>
