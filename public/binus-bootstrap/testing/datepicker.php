<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>BINUS</title>

		<!-- Favicon -->
		<link rel="Shortcut Icon" type="image/png" href="../images/favicon.ico">

		<!-- Stylesheet -->
		<link rel="stylesheet" type="text/css" href="../css/themes/university/css/style.css">

		<!--[if lt IE 9]>
			<script src="../js/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body style="background: #f1f1f1">
        <div id="page" style="padding-top: 40px; padding-right: 20px;">
            <form>
                <p>
                    <label>Start Date</label>
                    <span class="custom-datepicker" id="start-date">
                        <input type="text" name="input[]" class="datepicker">
                        <span class="icon-area"></span>
                    </span>
                </p>
                <p>
                    <label>End Date</label>
                    <span class="custom-datepicker" id="end-date">
                        <input type="text" name="input[]" class="datepicker">
                        <span class="icon-area"></span>
                    </span>
                </p>
                <p>
                    <input type="reset" name="action[]" value="Cancel" class="button button-secondary">
                    <input type="submit" name="action[]" value="Save" class="button button-primary">
                    <button class="button button-primary">Button</button>
                </p>
            </form>
        </div>

        <!-- Vendor -->
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/jquery.ui.js"></script>
		<script type="text/javascript" src="../js/jquery.browser.js"></script>
		<script type="text/javascript" src="../js/jquery.fancyfields.js"></script>
		<script type="text/javascript" src="../js/jquery.fancybox.js"></script>
		<script type="text/javascript" src="../js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="../js/jquery.mcustomscrollbar.js"></script>
		<script type="text/javascript" src="../js/jquery.datatables.js"></script>
		<script type="text/javascript" src="../js/jquery.datatables.fixedcolumns.js"></script>
		<script type="text/javascript" src="../js/jquery.chosen.js"></script>
		<script type="text/javascript" src="../js/jquery.qtip.js"></script>
		<script type="text/javascript" src="../js/raphael.js"></script>
		<script type="text/javascript" src="../js/multiselect.js"></script>

		<!-- Calendar -->
		<script type="text/javascript" src="../js/date.js"></script>
		<script type="text/javascript" src="../js/jquery.formbubble.js"></script>
		<script type="text/javascript" src="../js/fullcalendar.js"></script>
		<script type="text/javascript" src="../js/fullcalendar.viewmore.js"></script>

		<!-- Global -->
		<script type="text/javascript" src="../js/script.js"></script>

		<!-- Plugins -->
		<script type="text/javascript" src="../js/plugins/accordion-toggle.js"></script>
		<script type="text/javascript" src="../js/plugins/advanced-combobox.js"></script>
		<script type="text/javascript" src="../js/plugins/body-navigation.js"></script>
		<script type="text/javascript" src="../js/plugins/combobox.js"></script>
		<script type="text/javascript" src="../js/plugins/datepicker.js"></script>
		<script type="text/javascript" src="../js/plugins/editor.js"></script>
		<script type="text/javascript" src="../js/plugins/freeze-pane.js"></script>
		<script type="text/javascript" src="../js/plugins/fullcalendar.js"></script>
		<script type="text/javascript" src="../js/plugins/scrollbar.js"></script>
		<script type="text/javascript" src="../js/plugins/tabulation.js"></script>
		<script type="text/javascript" src="../js/plugins/tooltip.js"></script>
		<script type="text/javascript" src="../js/plugins/uploader.js"></script>
		<script type="text/javascript" src="../js/plugins/widgets.js"></script>
		<script type="text/javascript" src="../js/plugins/multiselect.js"></script>

		<!-- Main JS -->
		<script type="text/javascript">
            (function($) {
                $(document).ready(function() {
                    $('body').binus_bootstrap();

                    $('#start-date').data('has-init', 'no').binus_datepicker({
                        onClose: function($selected_date) {
                            $('#end-date').find('.datepicker').datepicker('option', 'minDate', $selected_date);
                        }
                    });

                    $('#end-date').data('has-init', 'no').binus_datepicker({
                        onClose: function($selected_date) {
                            $('#start-date').find('.datepicker').datepicker('option', 'maxDate', $selected_date);
                        }
                    });
                });
            })(jQuery);
        </script>
    </body>
</html>