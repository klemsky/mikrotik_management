/*
 * Copyright (c) 2011 Lyconic, LLC.
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 * 
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

//todo should attach reset to changeview method in certain situations

var $viewMoreLastID = -1;
var $viewMoreCount = 0;
var $viewMoreLastDay = 0;
var $viewMoreDateList = [];
var $viewMoreLastNo = [];
var $viewMoreLastEvent = 0;
var $viewMoreHeight = 0;

(function ($, undefined) {
	$.fn.limitEvents = function(opts) {
		if (opts.constructor === Number) opts = { maxEvents: opts };

		return this.each(function() {
			var limit = new $.fn.limitEvents.constructor($(this));

			$.extend({ maxEvents: 4 }, opts); //defaults
			$(this).fullCalendar('limitEvents', opts).fullCalendar('rerenderEvents');
		});
	};

	$.fn.limitEvents.constructor = function(calendar) {
		if (!(this instanceof arguments.callee)) return new arguments.callee(calendar);
		var self = this;

		self.calendar = calendar;
		self.calendar.data('fullCalendar').limitEvents = function(opts){
			self.opts = opts;
			self.observers();
			self.increaseHeight(self.opts.maxEvents * 21);
			self.extendCallbacks();
		}
	};
})(jQuery);

(function ($, undefined) {
	this.observers = function() {
		var self = this;

		$(document).mouseup(function(e) {  //deselect when clicking outside of calendar or formbubble
			var $target = $(e.target),
			isFormBubble = $target.parents('.form-bubble').length || $target.hasClass('form-bubble'),
			isInsideOfCalendar = $target.parents('.fc-content').length || $target.hasClass('fc-content');

			if (!isInsideOfCalendar && !isFormBubble) self.calendar.fullCalendar('unselect');
		});

		self.calendar.delegate('.fc-event','mousedown', function() { //close currently open form bubbles when user clicks an existing event
			$.fn.formBubble.close();
		});

		self.calendar.delegate('.fc-button-prev, .fc-button-next', 'click', function() {
			resetEventsRangeCounts();
			self.calendar.fullCalendar('rerenderEvents');
		});
	};
  
	this.increaseHeight = function(height, windowResized, td) {
		var cal = this.calendar,
		cells = td || cal.find('.fc-view-month tbody tr td'),
		fcDayContent = cells.find('.fc-day-content'),
		cellHeight, fcDayContentHeight;

		if (windowResized) fcDayContent.height(1);

		cellHeight = cells.eq(0).height(),
		fcDayContentHeight = cellHeight - cells.eq(0).find('.fc-day-number').height();

		$viewMoreHeight = height;

		fcDayContent.height(height);
	};

	this.extendCallbacks = function(){
		var self = this,
			opt = self.calendar.fullCalendar('getView').calendar.options,
			_eventRender = opt.eventRender,
			_eventDrop = opt.eventDrop,
			_eventResize = opt.eventResize,
			_viewDisplay = opt.viewDisplay,
			_events = opt.events,
			_windowResize = opt.windowResize;

		$.extend(opt, {
			eventRender: function(event, element) {
				var currentView = self.calendar.fullCalendar('getView').name,
				dateFormat = (event.allDay) ? 'MM/dd/yyyy' : 'hh:mmtt',
				startDateLink = $.fullCalendar.formatDate(event.start, dateFormat),
				endDateLink = $.fullCalendar.formatDate(event.end, dateFormat),
				maxEvents = self.opts.maxEvents,
				allEvents = self.calendar.fullCalendar('clientEvents'),
				eventDateStart = $.fullCalendar.formatDate(event.start,'MM/dd/yy'),
				eventDateEnd = $.fullCalendar.formatDate(event.end,'MM/dd/yy'),
				td, viewMoreButton;

				event.element = element;
				event.startDateLink = startDateLink;
				event.endDateLink = endDateLink;

				if (currentView === 'month') {
					if ($viewMoreLastNo.indexOf(event.id) == -1) {
						$(element).addClass('fc-' + event.id);

						if (event.end) {
							var dateStart = event.start.getDate(),
							dateEnd = (event.end) ? event.end.getDate() : dateStart,
							dateDiff = doDateDiff(event.end, event.start),
							dateCreate, getDate;

							var day, month, year, hour, minute, second;

							for (var i = 0;i <= dateDiff;i++) {
								getDate = new Date(event.start.getFullYear(), event.start.getMonth() + 1, 0);

								day = event.start.getDate() + i;
								month = event.start.getMonth() + 1;
								year = event.start.getFullYear();

								if (day > getDate.getDate()) {
									day = day - getDate.getDate();
									month += 1;
								}

								if (month == 13) {
									month = 1;
									year += 1;
								}

								if (day < 10) {
									day = '0' + day;
								}
								if (month < 10) {
									month = '0' + month;
								}

								dateCreate  = year + '-' + month + '-' + day;
								dateCreate  = new Date(dateCreate);

								$currMonth = dateCreate.getMonth();

								if ($viewMoreDateList[$currMonth] === undefined) {
									$viewMoreDateList[$currMonth] = [];
								}

								if ($viewMoreDateList[$currMonth][dateCreate.getDate()] === undefined) {
									var $obj = {
										count: 1,
										month: event.start.getMonth()
									};
									$viewMoreDateList[$currMonth][dateCreate.getDate()] = $obj;
								} else {
									var $obj = $viewMoreDateList[$currMonth][dateCreate.getDate()];
									$obj.count = $obj.count + 1;
									$viewMoreDateList[$currMonth][dateCreate.getDate()] = $obj;
								}
							}
						} else {
							var $currMonth = event.start.getMonth();

							if ($viewMoreDateList[$currMonth] === undefined) {
								$viewMoreDateList[$currMonth] = [];
							}

							if ($viewMoreDateList[$currMonth][event.start.getDate()] === undefined) {
								var $obj = {
									count: 1,
									month: event.start.getMonth()
								};
								$viewMoreDateList[$currMonth][event.start.getDate()] = $obj;
							} else {
								var $obj = $viewMoreDateList[$currMonth][event.start.getDate()];
								$obj.count = $obj.count + 1;
								$viewMoreDateList[$currMonth][event.start.getDate()] = $obj;
							}
						}

						eventsRangeCount(event, self.calendar); //add event quantity to range for event and day
						$viewMoreLastNo.push(event.id);
					}

					td = getCellFromDate(eventDateStart, self.calendar);
					$(element).attr('data-id', event.id);

					var newDate = new Date(event.start);
					if ($viewMoreDateList[newDate.getMonth()] && $viewMoreDateList[newDate.getMonth()][newDate.getDate()]) {
						var newObj = $viewMoreDateList[newDate.getMonth()][newDate.getDate()];

						if (newObj) {
							td.data('apptCount', newObj.count);
						}
					} else {
						td.data('apptCount', 0);
					}

					if (td.data('apptCount') > maxEvents) {
						if (td.find('.events-view-more').length > 0) {
							td.find('.events-view-more').remove();
						}
						viewMoreButton = $('<div class="events-view-more"><a href="#view-more"><span>+' + (td.data('apptCount') - maxEvents) + ' More</span></a></div>')
						.appendTo(td)
						.click(function () {
							var viewMoreClick = self.opts.viewMoreClick;
							viewMore(td, self.calendar);

							if (viewMoreClick && $.isFunction(viewMoreClick)) self.opts.viewMoreClick(td, self.calendar);
							else viewMore(td, self.calendar); //show events in formBubble overlay

							return false;
						});
						td.height(maxEvents * 32);
						if ($.isFunction(_eventRender)) _eventRender(event, element);
						return false; //prevents event from being rendered
					} else {
						td.height(maxEvents * 32);
						td.data('viewMore', false);
					}
				}
				if ($.isFunction(_eventRender)) _eventRender(event, element);

				$viewMoreLastID = event.id;

				return true; //renders event
			},
			eventAfterRender: function(event, element, view) {
				var currentView = self.calendar.fullCalendar('getView').name,
				maxEvents = self.opts.maxEvents,
				td, viewMoreButton;

				// $(element).find('.fc-event-title').css('width', ($(element).find('.fc-event-inner').width() - 2) + 'px');

				if ($viewMoreDateList.length == 0) {
					return;
				}

				if (currentView == 'month') {
					$('.calendar .fc-content table.fc-border-separate').find('td').each(function($index) {
						var $getDate = new Date( $(this).attr('data-date') );
						var td = $(this);

						td.find('div').first().css('min-height', '101px');

						if ($viewMoreDateList[$getDate.getMonth()]) {
							var arr = $viewMoreDateList[$getDate.getMonth()];
							var arr_sub = arr[$getDate.getDate()];

							if (arr && arr_sub != undefined && arr_sub.count > maxEvents) {
								if (td.find('.events-view-more').length > 0) {
									td.find('.events-view-more').remove();
								}
								td.height(maxEvents * 32);
								viewMoreButton = $('<div class="events-view-more"><a href="#view-more"><span>+' + (arr_sub.count - maxEvents) + ' More</span></a></div>')
								.appendTo(td)
								.click(function () {
									var viewMoreClick = self.opts.viewMoreClick;
									viewMore(td, self.calendar);

									if (viewMoreClick && $.isFunction(viewMoreClick)) self.opts.viewMoreClick(td, self.calendar);
									else viewMore(td, self.calendar); //show events in formBubble overlay

									return false;
								});
							} else {
								if (td.find('.events-view-more').length > 0) {
									td.find('.events-view-more').remove();
								}
							}
						}
					});

					$viewMoreDateList = [];
					$viewMoreLastNo = [];
					$viewMoreLastID = -1;
				}
			},
			eventDrop: function(event, dayDelta, minuteDelta, allDay, revertFunc) {
				resetEventsRangeCounts();
				if ($.isFunction(_eventDrop)) _eventDrop(event, dayDelta, minuteDelta, allDay, revertFunc);
			},
			eventResize: function(event) {
				resetEventsRangeCounts();
				if ($.isFunction(_eventResize)) _eventResize(event);
			},
			viewDisplay: function(view) {
				$.fn.formBubble.close();
				if (view.name !== 'month') resetEventsRangeCounts();
				if ($.isFunction(_viewDisplay)) _viewDisplay(view);
			},
			events: function(start, end, callback) {
				resetEventsRangeCounts();
				if ($.isFunction(_events)) _events(start, end, callback);
			},
			windowResize: function(view) { //fired AFTER events are rendered
				if ($.isFunction(_windowResize)) _windowResize(view);
				self.increaseHeight(25, true);
				resetEventsRangeCounts();
				self.calendar.fullCalendar('render'); //manually render to avoid layout bug
			}
		});
	};

	function eventsRangeCount(event, calInstance) {
		var td;

		if (event.end) {
			var dateStart = event.start.getDate(),
				dateEnd   = (event.end) ? event.end.getDate() : dateStart,
				dateDiff  = Math.floor(doDateDiff(event.end, event.start)),
				dateCreate, getDate;

			var day, month, year,
				dayText, monthText, yearText;

			day   = event.start.getDate();
			month = event.start.getMonth();
			year  = event.start.getFullYear();

			if (dateDiff == 0) {
				td = getCellFromDate($.fullCalendar.formatDate(event.start, 'MM/dd/yy'), calInstance);

				if (td.data().appointments === undefined) {
					td.data().appointments = [event];
				} else {
					td.data().appointments.push(event);
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

					td = getCellFromDate($.fullCalendar.formatDate(dateCreate, 'MM/dd/yy'), calInstance);

					if (td !== null && td.data() !== null && td.data().appointments !== null) {
						if (td.data().appointments === undefined) {
							var eventDate = new Date(td.data().date);

							if (eventDate.getMonth() == dateCreate.getMonth()) {
								td.data().appointments = [event];
							}
						} else {
							if (!findEvent(td.data().appointments, event.id)) {
								var eventDate = new Date(td.data().date);
							
								if (eventDate.getMonth() == dateCreate.getMonth()) {
									td.data().appointments.push(event);
								}
							}
						}
					}
				}
			}
		} else {
			td = getCellFromDate($.fullCalendar.formatDate(event.start, 'MM/dd/yy'), calInstance);

			if (td.data().appointments === undefined) {
				td.data().appointments = [event];
			} else {
				td.data().appointments.push(event);
			}
		}
	}

	function doDateDiff(date1, date2) {
		var datediff = date1.getTime() - date2.getTime(); //store the getTime diff - or +
		return Math.floor((datediff / (24 * 60 * 60 * 1000))); //Convert values to -/+ days and return value      
	}

	function resetEventsRangeCounts(){
		$('.fc-view-month td').each(function(i){
			$(this).find('.events-view-more').remove();
			$.removeData(this, "apptCount");
			$.removeData(this, "appointments");
		});
	}

	function findEvent(obj, id) {
		if (!obj || obj.length <= 0) return false;

		var e;

		for (var i = 0;i <= obj.length;i++) {
			e = obj[i];

			if (e !== undefined && e.id == id) {
				return true;
			}
		}

		return false;
	}

	function viewMore(day, calInstance){
		var appointments = day.data('appointments'),
		elemWidth = day.outerWidth() + 1,
		self = this;

		day.formBubble({
			graphics: {
				close: true,
				pointer: false
			},
			offset: {
				x: -elemWidth,
				y: 0
			},
			animation: {
				slide: false,
				speed: 0
			},
			callbacks: {
				onOpen: function() {
					var bubble = $.fn.formBubble.bubbleObject;

					bubble.addClass('overlay');
				},
				onClose: function() {
					calInstance.fullCalendar('unselect');
				}
			},
			content: function() {
				var startDate =  getDateFromCell(day, calInstance),
				startDateLabel = startDate.toString("MMM dS"),
				dayValue = parseInt(day.find('.fc-day-number').text()),
				eventList=$('<ul></ul>').prepend('<li><h5>' + startDateLabel + '</h5></li>');

				elemWidth = elemWidth - 30;

				$(appointments).each(function() {
					var apptStartDay = parseInt($.fullCalendar.formatDate(this.start,'d')), //should be comparing date instead of day (bug with gray dates) <-- fix
					apptEndDay = parseInt($.fullCalendar.formatDate(this.end,'d')),
					event = this.element.clone(false).attr('style', '').css({ 'width' : elemWidth, 'background-color' : this.color });

					if (apptStartDay < dayValue) $(event).addClass('arrow-left');
					if (apptEndDay > dayValue) $(event).addClass('arrow-right');

					event.appendTo(eventList).wrap('<li>');
				});

				eventList.wrap('<div>');
				return eventList.parent('div').html();
			}
		});
	}
  
	function getCellFromDate(thisDate, calInstance) { //ties events to actual table cells, and also differentiates between "gray" dates and "black" dates
		var start = calInstance.fullCalendar('getView').start,
		end = calInstance.fullCalendar('getView').end,
		td;

		thisDate = Date.parse(thisDate);

		td = $('.fc-day-number').filter(function() {
			return $(this).text()===$.fullCalendar.formatDate(thisDate,'d')
		}).closest('td');

		if (thisDate < start) { //date is in last month
			td = td.filter(':first');
		} else if (thisDate >= end) {  //date is in next month
			td = td.filter(':last');
		} else { //date is in this month
			td = td.filter(function() {
				return $(this).hasClass('fc-other-month')===false;
			});
		}

		return td;
	}
  
	function getDateFromCell(td, calInstance){
		var cellPos = {
			row: td.parent().parent().children().index(td.parent()),
			col: td.parent().children().index(td)
		};

		var day_start = new Date(td.attr('data-date'));
		return day_start;
	}

}).call(jQuery.fn.limitEvents.constructor.prototype, jQuery);