$(document).ready(function(){

	loadAsyncro();

});

function loadAsyncro(){

	url = APP_URL + "/cardsdata";

	$.post(url,{_token:token},function(result){

		var obj = JSON.parse(result);

		console.log(obj.wevent);

		var countTo = obj.wevent;
		var element1 = $('#deal_count');
		animateCount(element1, countTo);

		countTo = obj.company;
		var element2 = $('#company_count');
		animateCount(element2, countTo);

		countTo = obj.user;
		var element3 = $('#user_count');
		animateCount(element3, countTo);

		countTo = obj.timeline;
		var element4 = $('#timeline_count');
		animateCount(element4, countTo);

	});

}

function animateCount(element, countTo){

	$({countNum: element.text()}).animate({
		countNum: countTo
	},

	{

	duration: 500,
	easing:'linear',
	step: function() {
	  element.text(Math.floor(this.countNum));
	},
	complete: function() {
	  element.text(this.countNum);
	  //alert('finished');
	}

	});  
}