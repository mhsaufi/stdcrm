var colorOri = '#dcdcdc';
var colorHover = '#d4af37';

$('#star_1').hover(function(){

	$(this).css('color',colorHover);

},function(){
	
	$(this).css('color',colorOri);

});

$('#star_2').hover(function(){

	$('#star_1').css('color',colorHover);
	$(this).css('color',colorHover);
	
},function(){
	
	$('#star_1').css('color',colorOri);
	$(this).css('color',colorOri);
	
});

$('#star_3').hover(function(){

	$('#star_1').css('color',colorHover);
	$('#star_2').css('color',colorHover);
	$(this).css('color',colorHover);
	
},function(){
	
	$('#star_1').css('color',colorOri);
	$('#star_2').css('color',colorOri);
	$(this).css('color',colorOri);
	
});

$('#star_4').hover(function(){

	$('#star_1').css('color',colorHover);
	$('#star_2').css('color',colorHover);
	$('#star_3').css('color',colorHover);
	$(this).css('color',colorHover);
	
},function(){
	
	$('#star_1').css('color',colorOri);
	$('#star_2').css('color',colorOri);
	$('#star_3').css('color',colorOri);
	$(this).css('color',colorOri);
	
});

$('#star_5').hover(function(){

	$('#star_1').css('color',colorHover);
	$('#star_2').css('color',colorHover);
	$('#star_3').css('color',colorHover);
	$('#star_4').css('color',colorHover);
	$(this).css('color',colorHover);
	
},function(){
	
	$('#star_1').css('color',colorOri);
	$('#star_2').css('color',colorOri);
	$('#star_3').css('color',colorOri);
	$('#star_4').css('color',colorOri);
	$(this).css('color',colorOri);
	
});

$('#star_1').click(function(){
	$(this).off('mouseenter mouseleave').css('color',colorHover);
	$('#star_2').css('color',colorOri);
	$('#star_3').css('color',colorOri);
	$('#star_4').css('color',colorOri);
	$('#star_5').css('color',colorOri);

	$('#rating_value').val('1');
});

$('#star_2').click(function(){
	$('#star_1').off('mouseenter mouseleave').css('color',colorHover);
	$(this).off('mouseenter mouseleave').css('color',colorHover);
	$('#star_3').css('color',colorOri);
	$('#star_4').css('color',colorOri);
	$('#star_5').css('color',colorOri);

	$('#rating_value').val('2');
});

$('#star_3').click(function(){
	$('#star_1').off('mouseenter mouseleave').css('color',colorHover);
	$('#star_2').off('mouseenter mouseleave').css('color',colorHover);
	$(this).off('mouseenter mouseleave').css('color',colorHover);
	$('#star_4').css('color',colorOri);
	$('#star_5').css('color',colorOri);

	$('#rating_value').val('3');
});

$('#star_4').click(function(){
	$('#star_1').off('mouseenter mouseleave').css('color',colorHover);
	$('#star_2').off('mouseenter mouseleave').css('color',colorHover);
	$('#star_3').off('mouseenter mouseleave').css('color',colorHover);
	$(this).off('mouseenter mouseleave').css('color',colorHover);
	$('#star_5').css('color',colorOri);

	$('#rating_value').val('4');
});

$('#star_5').click(function(){
	$('#star_1').off('mouseenter mouseleave').css('color',colorHover);
	$('#star_2').off('mouseenter mouseleave').css('color',colorHover);
	$('#star_3').off('mouseenter mouseleave').css('color',colorHover);
	$('#star_4').off('mouseenter mouseleave').css('color',colorHover);
	$(this).off('mouseenter mouseleave').css('color',colorHover);

	$('#rating_value').val('5');
});