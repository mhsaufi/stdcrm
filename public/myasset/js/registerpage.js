$(document).ready(function(){

	var us = $("[name='name']").val();
	var em = $("[name='email']").val();
	var ps = $("[name='password']").val();
	var rps = $("[name='password_confirmation']").val();

	if(us == "" || em == "" || ps == "" || rps == ""){
		$("#reg-btn").prop("disabled", true);
		// alert("aaaaa 1 = "+ us +" 2 = "+ em + " 3 = "+ ps +" 4 = "+ rps);
	}else{
		passwordValidate(ps);
	}

	// check on each focusout, if one of the input is not filled up
	$("[name='name'],[name='email'],[name='password'],[name='password_confirmation']").focusout(function(){

		var us = $("[name='name']").val();
		var em = $("[name='email']").val();
		var ps = $("[name='password']").val();
		var rps = $("[name='password_confirmation']").val();

		if(em != ""){

			var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; // regex to test email

			if(!regex.test(em)){
				$("#reg-btn").prop("disabled", true);
				$("[name='email']").focus();
				$("#error-message").html("Please give a valid email");
			}else{
				if(us == "" || em == "" || ps == "" || rps == ""){
					$("#reg-btn").prop("disabled", true);
				}else{
					// check if password and retype match
					passwordValidate(ps);
				}
			}

		}else{

			if(us == "" || em == "" || ps == "" || rps == ""){
				$("#reg-btn").prop("disabled", true);
			}else{
				// check if password and retype match
				passwordValidate(ps);
			}

		}

		
	})
});

function passwordValidate(psw){

	var len = psw.length;

	if(len < 8){
		$("#reg-btn").prop("disabled", true);
		$("[name='password']").focus();
		$("#error-message").html("Password must be at least 8 character");
	}else{
		passwordNotMatch();
	}

}

function passwordNotMatch(){

	var us = $("[name='name']").val();
	var em = $("[name='email']").val();
	var ps = $("[name='password']").val();
	var rps = $("[name='password_confirmation']").val();
	var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; // regex to test email

	// check if password and retype match
	if(ps != rps){
		$("#reg-btn").prop("disabled", true);
		$("[name='password_confirmation']").focus();
		$("#error-message").html("Password did not match");
	}else{
		if(!regex.test(em)){
			$("#reg-btn").prop("disabled", true);
			$("#error-message").html("Please give a valid email");
		}else{

			checkUsernameEmail(em,us);

			// $("#error-message").html("");
			// $("#reg-btn").prop("disabled", false);
		}
	}
}

function checkUsernameEmail(email,username){

	var urlHost = window.location.pathname;

	var uRL = urlHost + "/87eef723";

	$.post(uRL, {email:email, username:username},function(result){

		if(result == 1){
			$("#reg-btn").prop("disabled", true);
			$("[name='name']").focus();
			$("#error-message").html("Username is already taken");
		}

		if(result == 2){
			$("#reg-btn").prop("disabled", true);
			$("[name='email']").focus();
			$("#error-message").html("This email has already registered");
		}

		if(result == 3){
			$("#reg-btn").prop("disabled", false);
			$("#error-message").html("");
		}

	});
}