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
                    <label>Username<span class="required">*</span></label>
                    <input type="text" name="input[]">
                </p>
                <p>
                    <label>Password</label>
                    <input type="password" name="input[]">
                </p>
                <p>
                    <label>Date of Birth</label>
                    <span class="custom-datepicker">
                        <input type="text" name="input[]" class="datepicker">
                        <span class="icon-area"></span>
                    </span>
                </p>
                <p>
                    <label>Photo Profile</label>
                    <span class="custom-uploader">
                        <input type="text" readonly="readonly" class="field-temporary">
                        <input type="file" name="input[]" class="upload-area">
                        <span class="icon-area"></span>
                    </span>
                </p>
                <p>
                    <label>Country</label>
                    <span class="custom-combobox">
                        <select name="input[]">
                            <option value="1">A</option>
                            <option value="2">B</option>
                            <option value="3">C</option>
                            <option value="4">D</option>
                        </select>
                    </span>
                </p>
                <p>
                    <label>About You</label>
                    <textarea name="input[]" rows="5"></textarea>
                </p>
                <p>
                    <label>Gender</label>
                    <span class="group-radiobutton">
                        <span class="custom-radiobutton">
                            <input type="radio" name="input[]" id="male">
                            <label class="label" for="male">Male</label>
                        </span>
                        <span class="custom-radiobutton">
                            <input type="radio" name="input[]" id="female">
                            <label class="label" for="female">Male</label>
                        </span>
                    </span>
                </p>
                <p>
                    <span class="custom-checkbox">
                        <input type="checkbox" name="input[]" id="check">
                        <label class="label" for="check">Check me out</label>
                    </span>
                </p>
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