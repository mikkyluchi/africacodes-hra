// JavaScript Document
// JavaScript Document
var Script = function () {
	//open the forgot password form
	$('#forget-password').click(function(e) {
        if ($('#loginForm').is(":visible") === true) {
			
			$('#loginForm').hide();
			$('#forgotForm').show();
			$(this).hide();
			$('a#log-in').show();
			$('.remember-hint').hide();
			$('.login-error').hide();
			$('#forgotForm input#identity').val("");
		}
    });
	//open the login form
	$('#log-in').click(function(e) {
        if ($('#forgotForm,#passcodeForm').is(":visible") === true) {
			
			$('#forgotForm,#passcodeForm').hide();
			$('#loginForm').show();
			$(this).hide();
			$('a#forget-password').show();
			$('.remember-hint').show();
			$('.login-error').hide();
		}
    });
	//open the sign up form
	$('#sign-up').click(function(e) {
        if ($('#loginWrapper').is(":visible") === true) {
			$('#loginWrapper').hide();
			$('#registrationWrapper').show();
			$('.login-error').hide();
		}
    });
	//open login from the registration form
	$('#log-in-r').click(function(e) {
        if ($('#registrationWrapper').is(":visible") === true) {
			$('#registrationWrapper').hide();
			$('#loginWrapper').show();
			if ($('#forgotForm').is(":visible") === true) {
			
				$('#forgotForm').hide();
				$('#loginForm').show();
				$(this).hide();
				$('a#forget-password').show();
				$('.remember-hint').show();
				$('a#log-in').hide();
				$('.login-error').hide();
			}
		}
    });
	
    /*$.validator.setDefaults({
        //submitHandler: function() { alert("submitted!"); }
    });*/
	//login
	$("button#loginBtn").click(function(e) {
			
			// validate the comment form when it is submitted
			$("#loginForm").validate({
				rules: {
					identity: {
						required: true,
      					email: true
					},
					password: {
						required: true
					},
				},
				messages: {
					identity: {
						required: "Please enter your email.",
						minlength: "Please enter a valid email"
					},
					password: {
						required: "Password is required"
					},
				},
				
			});
			
    });
	//sign up
	$("button#signupBtn").click(function(e) {
			
			// validate the comment form when it is submitted
			$("#registerForm").validate({
				rules: {
					fullname: {
						required: true,
					},
					password: {
                    required: true,
                    minlength: 8
					},
					confirm_password: {
						required: true,
						minlength: 8,
						equalTo: "#password"
					},
					email: {
						required: true,
						email: true
					},
				},
				messages: {
					fullname: {
						required: "Fullname is required."
					},
					password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long"
                	},
					confirm_password: {
						required: "Please provide a password",
						minlength: "Your password must be at least 5 characters long",
						equalTo: "Please enter the same password as above"
					},
					email: "Please enter a valid email address",
				},
				//perform an AJAX post to ajax.php
                submitHandler: function() {
					
					$.post('auth/create_wotamann',$('form#registerForm').serialize() , function(data){
						
						
						
						if(data.status && data.status == "1"){
							
							$.gritter.add({
								// (string | mandatory) the heading of the notification
								title: data.title,
								// (string | mandatory) the text inside the notification
								text: data.msg,
								class_name: data.gritter_type
							});
							$('#registrationWrapper').hide();
							$('#loginWrapper').show();
							
						}else{
							$.gritter.add({
								// (string | mandatory) the heading of the notification
								title: data.title,
								// (string | mandatory) the text inside the notification
								text: data.msg,
								class_name: data.gritter_type
							});
						}
						
					}, "json");
                }
			});
			
    });
	//forgot password
	$("button#forgotBtn").click(function(e) {
			// validate the comment form when it is submitted
			$("#forgotForm").validate({
				rules: {
					identity: {
						required: true,
      					email: true
					}
				},
				messages: {
					identity: {
						required: "Please enter your email.",
						minlength: "Please enter a valid email"
					}
				},
				//perform an AJAX post to ajax.php
                submitHandler: function() {
					
					$.post('auth/sendPasscodeToUser',$('form#forgotForm').serialize() , function(data){
						
						if(data.status && data.status == "1"){
							
							$.gritter.add({
								// (string | mandatory) the heading of the notification
								title: data.title,
								// (string | mandatory) the text inside the notification
								text: data.msg,
								class_name: data.gritter_type
							});
							$('#forgotForm').hide();
							$('#passcodeForm').show();
							
						}else{
							$.gritter.add({
								// (string | mandatory) the heading of the notification
								title: data.title,
								// (string | mandatory) the text inside the notification
								text: data.msg,
								class_name: data.gritter_type
							});
						}
						
					}, "json");
                }
			});
			
    });
	//reset password
	$("button#passcodeBtn").click(function(e) {
			// validate the comment form when it is submitted
			$("#passcodeForm").validate({
				rules: {
					passcode: {
						required: true,
					}
				},
				messages: {
					passcode: {
						required: "Please enter your passcode."
					}
				},
				//perform an AJAX post to ajax.php
                submitHandler: function() {
					
					$.post('auth/resetPasswordUsingPasscode',$('form#passcodeForm').serialize() , function(data){
						
						$.gritter.add({
								// (string | mandatory) the heading of the notification
								title: data.title,
								// (string | mandatory) the text inside the notification
								text: data.msg,
								class_name: data.gritter_type
						});
						$('#forgotForm,#passcodeForm').hide();
						$('#loginForm').show();
						//$(this).hide();
						//$('a#forget-password').show();
						$('.remember-hint').show();
						$('.login-error').hide();
						
					}, "json");
                }
			});
			
    });
   


}();
