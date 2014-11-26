


$(document).ready(function(){

//	alert('test');


	$('#register-form').on('submit', function(e) {
	//	alert('submitted')
		submit_register();
		e.preventDefault();
		
		
	});







})





/*
var $reviews = $("#newReviews");
setInterval(function () {
    $reviews.load("index.html #newReviews");
}, 2000);
*/


var submit_register=function(){
	id=document.getElementById("register-username").value;
	pwd=document.getElementById("register-pwd").value;
	email=document.getElementById("register-email").value;

	if (id=="" || pwd=="") {
		alert('Username and password cannot be empty');
	}
	else if (email=="") {
		alert('Please enter a valid email address');
	}
	else {
		alert('We will send you a confirmation email shortly');
		$('#register-close').trigger("click");
	}
}



