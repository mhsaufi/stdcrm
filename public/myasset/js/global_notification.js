function globalNotification(){

	nurl = APP_URL + '/globalnotification';

	$.post(nurl,{_token:token},function(data){

		if(data > 0){

			$('#global_notification').show();

		}else{

			$('#global_notification').hide();

		}
	});
}