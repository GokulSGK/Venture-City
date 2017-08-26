 var data1 = [ "i can teach c",
		   "i can teach C++",
		   "i can teach Java",
		   "i can teach Python",
		   "i can teach C#",
		   "i can teach Ruby",
		   "i can teach Angular.js",
		   "i can teach Node.js"];

  var data2 = [ "i want to learn C",
		   "i want to learn C++",
		   "i want to learn Java",
		   "i want to learn Python",
		   "i want to learn C#",
		   "i want to learn Ruby",
		   "i want to learn Angular.js",
		   "i want to learn Node.js"];


$(document).ready(function () {

$(function(){
	

	$('#error_message_username').hide();
	$('#error_message_number').hide();
	$('#error_message_email').hide();
    $('#error_message_password').hide();
	$('#error_message_password1').hide();

	var error_username = false;
	var error_teach = false;
	var error_learn = false;
    var error_password = false;
	var error_retype_password = false;
	var error_message_number = false;
	var error_email = false;


	$("#username").focusout(function(){
		check_username();
	});
	$("#teach").autocomplete({
		source : data1;
		autoFocus : true;
	});
    $("#password").focusout(function(){
		check_password();
	});
	$("#learn").focusout(function(){
		check_password1();
	});
	$("#number").focusout(function(){
		check_number();
	});
	$("#email").focusout(function(){
		check_email();
	});

	function check_username() {
		var username_length = $("#username").val().length;
		
		if (username_length < 5 || username_length > 20) {

			$('#error_message_username').html("should be between 5-20 characters");
			$('#error_message_username').show();
			error_username = true;
		}
		else
		{
			$('#error_message_username').hide();
		} 
		


	}
	function check_password() {
		var password_length = $("#password").val().length;
		
		if (password_length < 8) {

			$('#error_message_password').html("should be minimum 8 characters");
			$('#error_message_password').show();
			error_password = true;
		}
		else
		{
			$('#error_message_password').hide();
		} 
		


	}
	function check_password1() {
		var password = $('#password').val();
		var password1 = $("#password1").val();
		
		if (password !== password1) {

			$('#error_message_password1').html("Not same");
			$('#error_message_password1').show();
			error_password1 = true;
		}
		else
		{
			$('#error_message_password1').hide();
		} 
		


	}
	function check_number() {
		var no = $('#number').val().length;
		if(no < 10 || no >10 )
		{
			$('#error_message_number').html("Invalid Number");
			$('#error_message_number').show();
			error_message_number = true;
		}
		else
		{
			$('#error_message_number').hide();
		}
	}
	function check_email() {
		var  pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
		if (pattern.test($('#email').val())) {
			$('#error_message_email').hide();
		}
		else
		{
			$('#error_message_email').html("Email Invalid");
			$('#error_message_email').show();
			var error_email = true;

		}
	}

	$('#sign_up_form').submit(function() {
		var error_username = false;
		var error_password = false;
		var error_retype_password = false;
		var error_email = false;

		check_username();
		check_password();
		check_password1();
		check_email();

		if (error_username == false && error_password == false && error_password1 == false && error_email == false) {
			return true;
		}
		else{
			return false;
		}



	});

});

});