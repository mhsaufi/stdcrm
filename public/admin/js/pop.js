
var divs = $('.popped');
var index = 0;

var delay = setInterval(function(){

  if(index <= divs.length){

    $(divs[ index ]).addClass('popping');
    index += 1;

  }else{

    clearInterval(delay);
  }

},40);