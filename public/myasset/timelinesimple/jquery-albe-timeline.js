/*!
 * Albe-Timeline v4.0.0, https://github.com/Albejr/jquery-albe-timeline
 * ======================================================================
 * Plugin for 'timeline' rendering from JSON data lists
 *
 * 2017, Albertino Júnior, http://albertino.eti.br
 */
(function ($) {
	$.fn.albeTimeline = function (json, options) {

		var _this = this;
		_this.html('');

		// Merges user options with default
		var settings = $.extend({}, $.fn.albeTimeline.defaults, options);

		var language = ($.fn.albeTimeline.languages.hasOwnProperty(settings.language)) ?
			$.fn.albeTimeline.languages[settings.language] : { // pt-BR
				days: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
				months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
				shortMonths: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				separator: '',
				msgEmptyContent: 'Sem informações a serem exibidas.',
			};

		// If 'string' is passed, convert to 'object'.
		if (typeof (json) == 'string') {
			json = $.parseJSON(json);
		}

		// Displays standard message
		if ($.isEmptyObject(json)) {
			console.warn(language.msgEmptyContent);
			return;
		}

		// Sort by date
		json = json.sort(function (a, b) {
			return (settings.sortDesc) ? (Date.parse(b['time']) - Date.parse(a['time'])) : (Date.parse(a['time']) - Date.parse(b['time']));
		});

		var eMenu = $('<ul>').attr('id', 'timeline-menu');
		var eTimeline = $('<section>').attr('id', 'timeline');

		$.each(json, function (index, element) {

			var year = new Date(element.time).getFullYear();
			var grouper = $(eTimeline).find('div.group' + year);

			// If the wrapper does not exist, creates
			if (grouper.length === 0) {
				grouper = $('<div>').attr('id', ('y' + year)).addClass('group' + year).text(year);

				$(eTimeline).append(grouper);

				var anchor = $('<a>').attr('href', ('#y' + year)).text(year);
				eMenu.append($('<li>').append(anchor));
			}

			/****************************************SLOT <article>****************************************/
			var badge = $('<div>').addClass('badge timeline-date');

			badge.text(fnDateFormat(element.time, settings.formatDate, language));

			var ePanel = $('<div>').addClass('panel').append(badge);

			if (element.header) {

				var ePanelHead = $('<div>').addClass('panel-heading');

				if (element.status == 1) {
					var ePaneltitle = $('<div>').addClass('panel-title flex-panel pending');
				}

				if (element.status == 2) {
					var ePaneltitle = $('<div>').addClass('panel-title flex-panel approve');
				}

				if (element.status == 3) {
					var ePaneltitle = $('<div>').addClass('panel-title flex-panel disapproved');
				}

				// custom added
				var ePaneltitleFlex = $('<div>').text(element.header + " : " + element.owner);
				var ePaneltitleFlex2 = $('<div>').text("Assigned to : " + element.assignto);

				// ePaneltitleFlex.append(ePaneltitleFlex2);

				// custom added
				ePaneltitle.append(ePaneltitleFlex);
				ePaneltitle.append(ePaneltitleFlex2);

				ePanelHead.append(ePaneltitle);
				ePanel.append(ePanelHead);
			}

			var ePanelBody = $('<div>').addClass('panel-body std-timeline-body').attr('onclick','tDetail("'+ element.tid +'")');

			$.each(element.body, function (index2, value2) {

				// HTML Element
				var e = $('<' + value2.tag + '>');

				// Element Attributes
				$(value2.attr).each(function () {
					$.each(this, function (index3, value3) {
						// Special attribute, set the 'class' to be reserved word in javascript.
						(index3.toLowerCase() === 'cssclass') ? e.addClass(value3): e.attr(index3, value3);
					});
				});

				// Element content
				if (value2.content)
					e.html(value2.content);

				ePanelBody.append(e);
			});

			ePanel.append(ePanelBody);

			if (element.footer) {
				var ePanelFooter = $('<div>').addClass('panel-footer').html(element.footer);
				ePanel.append(ePanelFooter);
			}

			// Adds the item to its grouper.
			var irmaos = grouper.siblings('article[id^="a' + year + '"]');
			var slot = $('<article id="a' + year + '-' + (irmaos.length + 1) + '">').append(ePanel);

			if (irmaos.length > 0)
				slot.insertAfter(irmaos.last());
			else
				slot.insertAfter(grouper);
			/****************************************FIM - SLOT <article> ****************************************/
		});

		// Timeline Start Marker
		var badge = $('<div>').addClass('badge').html('&nbsp;');
		var ePanel = $('<div>').addClass('panel').append(badge);
		eTimeline.append($('<article>').append(ePanel));
		eTimeline.append($('<div>').addClass('clearfix').css({
			'float': 'none'
		}));

		$.each(eTimeline.find('article'), function (index, value) {
			// Adds css class responsible for reversing the side of the item.
			$(this).addClass((index % 2 == 0) ? '' : 'inverted');
			// Add animation class
			if (settings.effect && settings.effect != 'none')
				$(this).addClass('animated ' + settings.effect);
		});

		// The menu display depends on the grouper visibility setting.
		if (settings.showGroup) {
			if (settings.showMenu) {
				eMenu.appendTo(_this);
			}
		} else {
			$.each(eTimeline.find('div[class*="group"]'), function (index, value) {
				$(this).css('display', 'none');
			});
		}

		eTimeline.appendTo(_this);
		// return this;
	};

	$.fn.albeTimeline.languages = {};
	$.fn.albeTimeline.defaults = {
		effect: 'fadeInUp',
		formatDate: 'dd MMM',
		language: 'pt-BR',
		showGroup: true,
		showMenu: true,
		sortDesc: true,
	};

	// value = "YYYY-MM-DD" (ISO 8601)
	// format =
	// .:"dd MMMM"
	// .:"dd/MM/yyyy"
	// .:"dd de MMMM de yyyy"
	// .:"DD, dd de MMMM de yyyy"
	// .:"MM/dd/yyyy"
	// .:"DD dd MMMM yyyy HH:mm:ss"



	function formatAMPM(date) {
	  var hours = date.getHours();
	  var minutes = date.getMinutes();
	  var ampm = hours >= 12 ? 'PM' : 'AM';

	  var month = date.get

	  hours = hours % 12;
	  hours = hours ? hours : 12; // the hour '0' should be '12'
	  minutes = minutes < 10 ? '0'+minutes : minutes;
	  var strTime = hours + ':' + minutes + ' ' + ampm;
	  return strTime;
	}

	var fnDateFormat = function (value, format, language) {

		var parts = value.split(/[ :\-\/]/g);
		var newDate = new Date(parts[0], (parts[1] - 1), parts[2], (parts[3] || 0), (parts[4] || 0), (parts[5] || 0));

		if (language.separator) {
			format = format.replace(new RegExp(language.separator, 'g'), '___');
		}

		format = format.replace('std', formatAMPM(newDate));
		format = format.replace('ss', padLeft(newDate.getSeconds(), 2));
		format = format.replace('s', newDate.getSeconds());
		format = format.replace('dd', padLeft(newDate.getDate(), 2));
		format = format.replace('d', newDate.getDate());
		format = format.replace('mm', padLeft(newDate.getMinutes(), 2));
		format = format.replace('m', newDate.getMinutes());
		format = format.replace('MMMM', language.months[newDate.getMonth()]);
		format = format.replace('MMM', language.months[newDate.getMonth()].substring(0, 3));
		format = format.replace('MM', padLeft((newDate.getMonth() + 1), 2));
		format = format.replace('DD', language.days[newDate.getDay()]);
		format = format.replace('yyyy', newDate.getFullYear());
		format = format.replace('YYYY', newDate.getFullYear());
		format = format.replace('yy', (newDate.getFullYear() + '').substring(2));
		format = format.replace('YY', (newDate.getFullYear() + '').substring(2));
		format = format.replace('HH', padLeft(newDate.getHours(), 2));
		format = format.replace('H', newDate.getHours());

		if (language.separator) {
			format = format.replace(new RegExp('___', 'g'), language.separator);
		}

		return format;
	};

	var padLeft = function (n, width, z) {
		z = z || '0';
		n = n + '';
		return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
	};

})(jQuery);