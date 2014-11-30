$(document).ready(function(){

//	alert('test');

	$('#login-form').on('submit', function(e) {
	//	alert('submitted')
	//	alert("Hi");
		submit_login(e);
	//	e.preventDefault();
		
		
	});



	$('#register-form').on('submit', function(e) {
	//	alert('submitted')
	//	alert("Hi");
		submit_register(e);
	//	e.preventDefault();
		
		
	});

})


/*
var $reviews = $("#newReviews");
setInterval(function () {
    $reviews.load("index.html #newReviews");
}, 2000);
*/


var submit_register=function(e){
	id=document.getElementById("register-username").value;
	pwd=document.getElementById("register-pwd").value;
	email=document.getElementById("register-email").value;

	if (id=="" || pwd=="") {
		alert('Username and password cannot be empty');
//		$('#login').modal('show');
		e.preventDefault();
	}
	else if (email=="") {
		alert('Please enter a valid email address');
		e.preventDefault();
	}
	else {
//		alert('We will send you a confirmation email shortly');
//		$('#register-close').trigger("click");
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



