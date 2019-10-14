//Json Object
var data = [
	{
		time: '2019-04-12 11:31:45',
		vendors : 'Istana Puteh',
		header : 'First',
		status : '1',
		body: [{
			tag: 'p',
			content: 'First meeting, choose dress theme and design. Meet up at Istana Puteh boutique Alam Damai, Cheras'
		}]
	},
	{
		time: '2019-05-12 14:00:20',
		vendors : 'Istana Puteh',
		header : 'Fitting',
		status : '2',
		body: [{
			tag: 'p',
			content: 'First fitting for dress measurement'
		}]
	},
	// {
	// 	time: '2019-05-01 23:59:59',
	// 	vendors : 'Istana Puteh',
	// 	header : 'Reconfirm call',
	// 	status : '1',
	// 	body: [{
	// 		tag: 'p',
	// 		content: '3 - Lorem ipsum dolor sit amet, nisl lorem, wisi egestas orci tempus class massa, suscipit eu elit urna in urna, gravida wisi aenean eros massa, cursus quisque leo quisque dui. See <a href=\"https://github.com/Albejr/jquery-albe-timeline\" target=\"_blank\">more details</a>'
	// 	}]
	// },
	{
		time: '2019-05-13 13:00:15',
		vendors : 'Istana Puteh',
		header : 'Meeting',
		status : '3',
		body: [{
			tag: 'p',
			content: 'Pick up accessories at Istana Puteh shop'
		}]
	}
];



$(document).ready(function () {

	console.log(data);

	$('#myTimeline').albeTimeline(data, {
		effect: 'fadeInUp',
		showGroup: false,
		formatDate: 'DD d MMMM, at std'
	});

});