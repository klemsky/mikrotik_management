(function($) {

	// item viewer
	$.fn.binus_item_viewer = function() {

		return $(this).each(function($index, $object) {
			if ($($object).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element($element) {
			$($element).find('.view-body').hide();

			$($element).on('click', '.view-head', function($e) {
				$e.preventDefault();

				var $object = $(this);
				var $parent = $object.parent();

				if ($object.find('.indicator').hasClass('active')) {
					$parent.find('.view-body').stop().slideUp('medium', function() {
						$object.find('.indicator').removeClass('active');
					});
					return;
				}

				$parent.find('.view-body').stop().slideDown('medium', function() {
					$object.find('.indicator').addClass('active');
				});
			});

			$($element).data('has-init', 'yes');
		}
	}

	// language option
	$.fn.binus_language_option = function() {

		return $(this).each(function($index, $object) {
			if ($($object).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element($element) {
			$($element).on('click', '.trigger', function($e) {
				$e.preventDefault();
				$e.stopPropagation();

				var $object = $(this);
				var $parent = $object.parent();

				$parent.find('.dropdown-wrap').toggleClass('active');
			});

			$('html').click(function() {
				$($element).find('.dropdown-wrap').removeClass('active');
			});

			$($element).data('has-init', 'yes');
		}
	}

	// fullcalendar custom trigger
	$.fn.binus_fullcalendar_trigger = function() {

		return $(this).each(function($index, $object) {
			if ($($object).data('has-init') == 'yes')
				return;
			__create_element(this);
		});

		function __create_element($element) {
			$($element).on('click', '.wrap-head a', function($e) {
				$e.preventDefault();

				var $object = $(this);
				var $parent = $object.parents('.calendar-container');

				if ($object.parent().hasClass('current')) {
					return;
				}

				$($element).find('.wrap-head li').removeClass('current');
				$object.parent().addClass('current');

				if ($object.hasClass('type-grid')) {
					if ($($element).hasClass('has-additional-tab')) {
						$parent.find('.view-target').removeClass('current').css('display', 'none');
						$parent.find('.view-target.calendar-view').addClass('current');
					}
					$parent.find('.calendar .icon-grid-view').trigger('click');
				} else if ($object.hasClass('type-list')) {
					if ($($element).hasClass('has-additional-tab')) {
						$parent.find('.view-target').removeClass('current').css('display', 'none');
						$parent.find('.view-target.calendar-view').addClass('current');
					}
					$parent.find('.calendar .icon-list-view').trigger('click');
				} else if ($object.hasClass('type-audit')) {
					$parent.find('.view-target').removeClass('current').css('display', 'none');
					$parent.find('.view-target.audit-view').addClass('current');
				}
			});

			if ($($element).hasClass('has-additional-tab')) {
				$(window).load(function() {
					$($element).find('.view-target').css('display', 'none');
					$($element).find('.view-target').first().addClass('current');
				});
			}

			$($element).data('has-init', 'yes');
		}
	}

	// google chart
	$.fn.binus_google_chart = function($type, $data, $options) {

		return $(this).each(function($index, $object) {
			var $object  = $(this);
			google_chart($object, $type, $data, $options);
		});
	}

	// binus ami bootstrap
	$.fn.binus_ami = function() {
		$('.item-viewer').binus_item_viewer();
		$('.language-option').binus_language_option();
		$('.calendar-container').binus_fullcalendar_trigger();

		// google chart init
		$('#audit-statistics-chart').binus_google_chart('combochart', [
			['Year', 'Major', 'Minor', 'Observasi', 'OFI'],
			['2011', 80, 60, 90, 40],
			['2012', 80, 60, 90, 40],
			['2013', 80, 60, 90, 40],
			['2014', 80, 60, 90, 40]
		], {
			title : '',
			legend: {
				alignment: 'start',
				position: 'bottom',
				textStyle: {
					color: '#919191',
					fontSize: 12,
					fontName: 'Open Sans'
				}
			},
			seriesType: 'bars',
			colors: ['#044b69', '#007fc4', '#4dc8f4', '#a2d8f0'],
			height: 240,
			chartArea: {
				top: 20,
				height: 115
			}
		});

		$('#audit-statistics-chart-detail').binus_google_chart('combochart', [
			['Year', 'Major', 'Minor', 'Observasi', 'OFI'],
			['2011', 80, 60, 90, 40],
			['2012', 80, 60, 90, 40],
			['2013', 80, 60, 90, 40],
			['2014', 80, 60, 90, 40]
		], {
			title : 'Total Temuan Audit',
			titleTextStyle: {
				color: '#919191',
				fontSize: 12,
				fontName: 'Open Sans'
			},
			hAxis: {
				title: 'YEAR',
				titleTextStyle: {
					color: '#919191',
					bold: true,
					italic: false
				}
			},
			legend: {
				alignment: 'center',
				position: 'bottom',
				textStyle: {
					color: '#919191',
					fontSize: 12,
					fontName: 'Open Sans'
				}
			},
			seriesType: 'bars',
			colors: ['#044b69', '#007fc4', '#4dc8f4', '#a2d8f0'],
			height: 240,
			chartArea: {
				top: 20,
				height: 120
			}
		});

		$('#audit-monitoring-chart').binus_google_chart('piechart', [
			['Status', 'Audit'],
			['Done', 100],
			['Awaiting Confirmation', 60],
			['Cancel', 30]
		], {
			pieHole: 0.4,
			pieSliceText: 'none',
			legend: {
				alignment: 'center',
				position: 'bottom',
				textStyle: {
					color: '#919191',
					fontSize: 12,
					fontName: 'Open Sans'
				}
			},
			colors: ['#74b71b', '#f2ae33', '#d12f2e'],
			chartArea: {
				top: 20,
				height: 115
			}
		});
	}

	$(document).ready(function() {

		$('body').binus_ami();

		// init custom fullcalendar
		$event_as_an_array = [
			{
				id: 1,
				title: 'Event Title',
				start: '2015-02-20',
				color: '#0098D7',
				body : [
					{
						title   : 'Place',
						content : 'BINUS INTERNATIONAL SCHOOL SERPONG Jl. Lengkong Karya - Jelupang No. 58 Lengkong Karya Serpong, Tangerang, Indonesia'
					},
					{
						title   : 'Auditor',
						content : 'Harry Potter'
					}
				],
				audit_info: {
					edit_link: 'admin-schedule-form.php?id=1',
					status: {
						text: 'Awaiting Information',
						icon: 'icon-ami-status-awaiting'
					}
				}
			},
			{
				id: 2,
				title: 'Long Event',
				start: '2015-02-20',
				color: '#f07273',
				body : [
					{
						title   : 'Description',
						content : 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.'
					}
				],
				audit_info: {
					edit_link: 'admin-schedule-form.php?id=2',
					status: {
						text: 'Done',
						icon: 'icon-ami-status-done'
					}
				}
			},
			{
				id: 3,
				title: 'Long Event',
				start: '2015-03-1',
				color: '#f07273',
				body : [
					{
						title   : 'Description',
						content : 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.'
					}
				],
				audit_info: {
					edit_link: 'admin-schedule-form.php?id=3',
					status: {
						text: 'Cancel',
						icon: 'icon-ami-status-cancel'
					}
				}
			},
			{
				id: 4,
				title: 'Long Event',
				start: '2015-04-20',
				color: '#f07273',
				body : [
					{
						title   : 'Description',
						content : 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.'
					}
				],
				audit_info: {
					edit_link: 'admin-schedule-form.php?id=4',
					status: {
						text: 'On Progress',
						icon: 'icon-ami-status-progress'
					}
				}
			}
		];
		$event_as_json_feed = 'http://localhost/frontend/binus-bootstrap/json/json.events.ami.php';

		$('.fullcalendar-custom').binus_fullcalendar_custom({
			limit    : 4,
			source   : $event_as_an_array,
			add_link : 'admin-schedule-form.php'
		});

	});

})(jQuery);

/* Google chart */
google.load('visualization', '1', { packages: ['corechart'] });

function google_chart($element, $type, $data, $options) {
	var $chart = '';
	var $data_table = google.visualization.arrayToDataTable($data);

	if ($type == 'combochart') {
		$chart = new google.visualization.ComboChart($element[0]);
	} else if ($type == 'piechart') {
		$chart = new google.visualization.PieChart($element[0]);
	}

	console.log($chart, $type);

	$chart.draw($data_table, $options);
}