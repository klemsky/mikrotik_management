(function($) {

	$.fn.binus_fullcalendar_custom = function($options) {

		// fullcalendar config
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();

		var WURFL = {
			is_mobile: /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
		}

		var weekday = new Array(7);
		weekday[0] = 'Sunday';
		weekday[1] = 'Monday';
		weekday[2] = 'Tuesday';
		weekday[3] = 'Wednesday';
		weekday[4] = 'Thursday';
		weekday[5] = 'Friday';
		weekday[6] = 'Saturday';

		var monthname = new Array(12);
		monthname[0]  = 'January';
		monthname[1]  = 'February';
		monthname[2]  = 'March';
		monthname[3]  = 'April';
		monthname[4]  = 'May';
		monthname[5]  = 'June';
		monthname[6]  = 'July';
		monthname[7]  = 'August';
		monthname[8]  = 'September';
		monthname[9]  = 'October';
		monthname[10] = 'November';
		monthname[11] = 'December';

		var $calendar_data  = [];
		var $calendar_view  = 'calendar_view';
		var $calendar_lists = [];
		var $calendar_month = m;
		var $calendar_year  = y;
		var $calendar_count = [];
		var $calendar_curr_id = 0;

		return $(this).each(function($index, $object) {
			if ($(this).data('has-init') == 'yes')
				return;
			__create_element(this, $options.source, $options.limit);
		});

		function __create_element($element, $source, $limit) {
			__fullcalendar($element, $source, $limit);
		}

		function __fullcalendar($element, $source, $limit) {
			var $calendar = $($element).fullCalendar({
				header: {
					left: 'today prev,next',
					center: 'title',
					right: false
				},
				editable: false,
				eventRender: function(event, element, view) {
					$(element).css('z-index', '-1').addClass('fc-cal-' + event.id);

					var $append;
					var $hours;
					var $minutes;

					$append  = '<div class="fc-dialog">';
					$append += '<div class="fc-dcontent">';
					$append += '<a href="#" class="fc-dclose"></a>';
					$append += '<div class="fc-dtitle"></div>';
					$append += '<div class="fc-ddate"></div>';
					$append += '</div>';
					$append += '</div>';

					$(element).find('.fc-event-inner').append($append);

					var $start_day, $start_month, $start_year;
					var $end_day, $end_month, $end_year;
					var $ddate_label;

					if (event.start) {
						$start_day   = event.start.getDate();
						$start_month = event.start.getMonth();
						$start_year  = event.start.getFullYear();

						$ddate_label  = '' + weekday[event.start.getDay()];
						$ddate_label += ', ' + monthname[$start_month];
						$ddate_label += ' ' + $start_day;
					}

					if (event.end) {
						$end_day   = event.end.getDate();
						$end_month = event.end.getMonth();
						$end_year  = event.end.getFullYear();

						if ($start_month == $end_month && $start_day == $end_day) {
							if (event.start.getHours() < 10) {
								$hours = '0' + event.start.getHours();
							} else {
								$hours = event.start.getHours();
							}
							if (event.start.getMinutes() < 10) {
								$minutes = '0' + event.start.getMinutes();
							} else {
								$minutes = event.start.getMinutes();
							}
							$ddate_label += ', ' + $hours;
							$ddate_label += ':' + $minutes;
							$ddate_label += ' - ';
							if (event.end.getHours() < 10) {
								$hours = '0' + event.end.getHours();
							} else {
								$hours = event.end.getHours();
							}
							if (event.end.getMinutes() < 10) {
								$minutes = '0' + event.end.getMinutes();
							} else {
								$minutes = event.end.getMinutes();
							}
							$ddate_label += '' + $hours;
							$ddate_label += ':' + $minutes;
						} else {
							$ddate_label  = '' + weekday[event.start.getDay()];
							$ddate_label += ', ' + monthname[$start_month];
							$ddate_label += ' ' + $start_day;
							$ddate_label += ' - ';
							$ddate_label += '' + weekday[event.end.getDay()];
							$ddate_label += ', ' + monthname[$end_month];
							$ddate_label += ' ' + $end_day;
						}
					}

					$(element).find('.fc-dtitle').html(event.title);
					$(element).find('.fc-ddate').html($ddate_label);

					// body content
					var $body_content = event.body;

					$.each($body_content, function($i, $val) {
						$(element).find('.fc-dialog .fc-dcontent').append('<div class="fc-ddesc">\
						<p><strong>' + $val.title + '</strong></p>\
						<p>' + $val.content + '</p>\
						</div>');
					});

					// custom content
					var $audit_info = event.audit_info;

					var $custom_content = '<div class="fc-audit-action">\
					<span class="group-item action">\
					<span class="item action-link">\
					<a href="' + $audit_info.edit_link + '" class="button button-primary">Edit</a>\
					</span>\
					<span class="item status">\
					<span class="label">Audit Status</span>\
					<span class="value">\
					<i class="icon ' + $audit_info.status.icon + '"></i>\
					<span class="text-status">' + $audit_info.status.text + '</span>\
					</span>\
					</span>\
					</span>\
					</div>';

					$(element).find('.fc-dialog .fc-dcontent').append($custom_content);

					// add icon
					$(element).append('<span class="fc-indicator"><i class="icon ' + $audit_info.status.icon + '"></i></span>');

					if (!WURFL.is_mobile) {
						$(element).addClass('fc-desktop').next().addClass('fc-desktop');
					}

					if (event.end) {
						var dateStart = event.start.getDate(),
							dateEnd = (event.end) ? event.end.getDate() : dateStart,
							dateDiff = Math.floor(__datediff(event.end, event.start)),
							dateCreate, getDate;

						var day, month, year,
							dayText, monthText, yearText;

						day = event.start.getDate();
						month = event.start.getMonth();
						year = event.start.getFullYear();

						if (dateDiff == 0) {
							$currYear  = event.start.getFullYear();
							$currMonth = event.start.getMonth();

							if (!$calendar_data[$currYear]) {
								$calendar_data[$currYear] = [];
							}

							if (!$calendar_data[$currYear][$currMonth]) {
								$calendar_data[$currYear][$currMonth] = [];
							}

							if (!$calendar_data[$currYear][$currMonth][event.start.getDate()]) {
								$calendar_data[$currYear][$currMonth][event.start.getDate()] = [];
							}

							if (!__find_id($calendar_data[$currYear][$currMonth][event.start.getDate()], event.id)) {
								$calendar_data[$currYear][$currMonth][event.start.getDate()].push({
									id: event.id,
									start: event.start,
									title: event.title,
									color: event.color,
									desc: (event.desc) ? event.desc : null,
									url: (event.url) ? event.url : null
								});
							}
						} else {
							day -= 1;

							for (var $i = 0;$i <= dateDiff;$i++) {
								day = day + 1;
								getDate = new Date(year, month + 1, 0);

								if (day > getDate.getDate()) {
									day = day - getDate.getDate();
									month += 1;
								}
								if (month > 12) {
									month = 1;
									year += 1;
								}

								dayText = (day < 10) ? ('0' + day) : day;
								monthText = (month < 10) ? ('0' + month) : month;
								dateCreate = new Date(year, month, day);

								$currYear  = dateCreate.getFullYear();
								$currMonth = dateCreate.getMonth();

								if (!$calendar_data[$currYear]) {
									$calendar_data[$currYear] = [];
								}

								if (!$calendar_data[$currYear][$currMonth]) {
									$calendar_data[$currYear][$currMonth] = [];
								}

								if (!$calendar_data[$currYear][$currMonth][dateCreate.getDate()]) {
									$calendar_data[$currYear][$currMonth][dateCreate.getDate()] = [];
								}

								if (!__find_id($calendar_data[$currYear][$currMonth][dateCreate.getDate()], event.id)) {
									$calendar_data[$currYear][$currMonth][dateCreate.getDate()].push({
										id: event.id,
										start: dateCreate,
										title: event.title,
										color: event.color,
										desc: (event.desc) ? event.desc : null,
										url: (event.url) ? event.url : null
									});
								}
							}
						}
					} else {
						$currYear  = event.start.getFullYear();
						$currMonth = event.start.getMonth();

						if (!$calendar_data[$currYear]) {
							$calendar_data[$currYear] = [];
						}

						if (!$calendar_data[$currYear][$currMonth]) {
							$calendar_data[$currYear][$currMonth] = [];
						}

						if (!$calendar_data[$currYear][$currMonth][event.start.getDate()]) {
							$calendar_data[$currYear][$currMonth][event.start.getDate()] = [];
						}

						if (!__find_id($calendar_data[$currYear][$currMonth][event.start.getDate()], event.id)) {
							$calendar_data[$currYear][$currMonth][event.start.getDate()].push({
								id: event.id,
								start: event.start,
								title: event.title,
								color: event.color,
								desc: (event.desc) ? event.desc : null,
								url: (event.url) ? event.url : null
							});
						}
					}
				},
				eventAfterAllRender: function(view) {
					$calendar_lists = $calendar_data;
					$calendar_data  = [];

					if ($calendar_view == 'list_view') {
						var $append;
						var $obj, $obj_month, $obj_day;
						var $last_day = 0;

						$append = '<table class="table-list-view">';

						$obj = $calendar_lists[view.start.getFullYear()];
						$obj_month = ($obj) ? $obj[$calendar_month] : null;

						if ($obj && $obj_month) {
							$obj_month.forEach(function($obj_day) {
								$obj_day.forEach(function($item) {

									if ($item.start.getMonth() == m && $item.start.getDate() == d) {
										$append += '<tr class="current">';
									} else {
										$append += '<tr>';
									}

									if ($item.start.getDate() == $last_day) {
										$append += '<td class="list-view-date">';
										$append += '<span class="list-view-blank"></span>';
										$append += '</td>';
									} else {
										$append += '<td class="list-view-date">';
										$append += '<span class="list-view-day">' + $item.start.getDate() + '</span>';
										$append += '<span class="list-view-month">' + monthname[$item.start.getMonth()].substring(0, 3) + '</span>';
										$append += '</td>';
									}

									$append += '<td class="list-view-color"><span class="list-view-bullet" style="background:' + $item.color + '"></span></td>';
									$append += '<td class="list-view-title no-left-border">' + $item.title + '</td>';
									$append += '</tr>';

									$last_day = $item.start.getDate();

								});
							});
						} else {
							$append += '<tr><td class="list-view-title">Event not found.</td></tr>';
						}

						$append += '</table>';

						$('.calendar .fc-list-view').addClass('active').find('.fc-list-content').html('').append($append);

						if ($('.fc-list-view').outerHeight() > 720) {
							$('.fc-content').css('overflow', 'hidden').height($('.fc-list-view').outerHeight());
						} else {
							$('.fc-content').css('overflow', 'hidden').height($('.fc-list-view').outerHeight());
						}
					}

					if ($calendar_month != view.start.getMonth()) {
						$calendar_month = view.start.getMonth();
					}

					if ($calendar_year != view.start.getFullYear()) {
						$calendar_year = view.start.getFullYear();
					}
				},
				viewRender: function(view, element) {
					var $append;

					if ($calendar_view == 'calendar_view') {
						$append  = '<span class="view-type grid-view active"><i class="icon-grid-view"></i></span>';
						$append += '<span class="view-type list-view"><i class="icon-list-view"></i></span>';
					} else {
						$append  = '<span class="view-type grid-view"><i class="icon-grid-view"></i></span>';
						$append += '<span class="view-type list-view active"><i class="icon-list-view"></i></span>';
					}

					if ($('.calendar .fc-content .fc-list-view').length <= 0) {
						$('.calendar .fc-content').append('<div class="fc-list-view"><div class="fc-list-content"></div></div>');
					}

					$calendar_month = view.start.getMonth();
					$('.fc-header-right').html('').prepend($append);
				},
				eventClick: function(event, jsEvent, view) {
					if (WURFL.is_mobile) {
						if ($(this).find('.fc-dialog').hasClass('active')) {
							$('.fc-dialog').removeClass('active');
							$(this).removeClass('fc-index');
							return;
						}

						$('#calendar .fc-event').removeClass('fc-index');
						$(this).addClass('fc-index');

						$('.fc-dialog').removeClass('active');
						$(this).find('.fc-dialog').css({ left: (jsEvent.offsetX == undefined) ? jsEvent.originalEvent.layerX : jsEvent.offsetX }).addClass('active');
					}
				},
				eventMouseover: function(event, jsEvent, view) {
					if ( ! WURFL.is_mobile ) {
						$(this).addClass('fc-index');
						$(this).find('.fc-dialog').css({
							left: (jsEvent.offsetX == undefined) ? jsEvent.originalEvent.layerX : jsEvent.offsetX
						});
					}
				},
				eventMouseout: function(event, jsEvent, view) {
					if ( ! WURFL.is_mobile ) {
						$(this).removeClass('fc-index');
					}
				},
				events: $source
			}).limitEvents($limit);

			$calendar.promise().done(function() {
				$($element).find('.fc-header-left').prepend('<span class="fc-add-event">\
				<a href="' + $options.add_link + '" class="button button-primary">Add Event</a>\
				</span>');
			});

			__create_event($element);

			$($element).data('has-init', 'yes');
		}

		function __create_event($element) {
			$($element).delegate('.fc-dclose', 'touchstart click', function() {
				if (WURFL.is_mobile) {
					$('.fc-dialog').removeClass('active');
				}
				return false;
			});

			$($element).delegate('.form-bubble .fc-event', 'click', function() {
				if (WURFL.is_mobile) {
					if ($(this).find('.fc-dialog').hasClass('active')) {
						$('.fc-dialog').removeClass('active');
						return false;
					}
					$('.form-bubble .fc-dialog').removeClass('active');
					$(this).find('.fc-dialog').addClass('active');
				}
				return false;
			});

			$($element).delegate('.icon-list-view', 'click', function() {
				var $append;
				var $obj, $obj_month, $obj_day;
				var $last_day = 0;

				$append = '<table class="table-list-view">';

				$obj = $calendar_lists[$calendar_year];
				$obj_month = ($obj) ? $obj[$calendar_month] : null;

				if ($obj && $obj_month) {
					$obj_month.forEach(function($obj_day) {
						$obj_day.forEach(function($item) {

							if ($item.start.getMonth() == m && $item.start.getDate() == d) {
								$append += '<tr class="current">';
							} else {
								$append += '<tr>';
							}

							if ($item.start.getDate() == $last_day) {
								$append += '<td class="list-view-date">';
								$append += '<span class="list-view-blank"></span>';
								$append += '</td>';
							} else {
								$append += '<td class="list-view-date">';
								$append += '<span class="list-view-day">' + $item.start.getDate() + '</span>';
								$append += '<span class="list-view-month">' + monthname[$item.start.getMonth()].substring(0, 3) + '</span>';
								$append += '</td>';
							}

							$append += '<td class="list-view-color"><span class="list-view-bullet" style="background:' + $item.color + '"></span></td>';
							$append += '<td class="list-view-title no-left-border">' + $item.title + '</td>';
							$append += '</tr>';

							$last_day = $item.start.getDate();

						});
					});
				} else {
					$append += '<tr><td class="list-view-title">Event not found.</td></tr>';
				}

				$append += '</table>';

				$('.calendar .fc-list-view').addClass('active').find('.fc-list-content').html('').append($append);

				$('.calendar .view-type').removeClass('active');
				$(this).parent().addClass('active');

				if ($calendar_view == 'calendar_view') {
					$calendar_view = 'list_view';
				} else {
					$calendar_view = 'calendar_view';
				}

				if ($('.fc-list-view').outerHeight() > 720) {
					$('.fc-content').css('overflow', 'hidden').height($('.fc-list-view').outerHeight());
				} else {
					$('.fc-content').css('overflow', 'hidden').height($('.fc-list-view').outerHeight());
				}
			});

			$($element).delegate('.icon-grid-view', 'click', function() {
				$('.calendar .fc-list-view').removeClass('active');
				$('.fc-content').css('overflow', 'visible').height($('.fc-view').outerHeight());

				$('.calendar .view-type').removeClass('active');
				$(this).parent().addClass('active');

				if ($calendar_view == 'calendar_view') {
					$calendar_view = 'list_view';
				} else {
					$calendar_view = 'calendar_view';
				}
			});
		}

		function __find_id(obj, id) {
			if (!obj || obj.length <= 0)
				return false;
			var e;

			for (var i = 0;i <= obj.length;i++) {
				e = obj[i];

				if (e !== undefined && e.id == id) {
					return true;
				}
			}
			return false;
		}

		function __datediff(date1, date2) {
			// Store the getTime diff - or +
			var datediff = date1.getTime() - date2.getTime();

			// Convert values to -/+ days and return value
			return (datediff / (24 * 60 * 60 * 1000));
		}
	}

})(jQuery);