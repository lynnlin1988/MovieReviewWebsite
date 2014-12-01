$(document).ready(function(){
	$("#submitcomment").click(function(){
		$.post("/example/jquery/demo_test_post.asp",
    	{
    		name:"comment",
    		movie:"Avatar"
    	},
		function(data,status){
    		alert("Data:" + data + "\nStatus" + status);
    	});
	});
});