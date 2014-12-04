$(document).ready(function(){

//	alert('test');

	var $reviews = $("#newReviews");
	setInterval(function () {
		$reviews.load("includes/widgets/newReviews.php");
	}, 2000);


	$('#login-form').on('submit', function(e) {
		submit_login(e);	
	});

	$('#register-form').on('submit', function(e) {
		submit_register(e);
	});

});


var submit_register=function(e){
	id=document.getElementById("register-username").value;
	pwd=document.getElementById("register-pwd").value;
	email=document.getElementById("register-email").value;

	if (id=="" || pwd=="") {
		alert('Username and password cannot be empty');
		e.preventDefault();
	}
	else if (email=="") {
		alert('Please enter a valid email address');
		e.preventDefault();
	}
	else {

	}
}

var submit_login=function(e){
	loginid=document.getElementById("login-username").value;
	loginpwd=document.getElementById("login-pwd").value;

	if (loginid=="" || loginpwd=="") {
		alert('Username and password cannot be empty');
		e.preventDefault();
	}
	else {
	}
}



