$(document).ready(function(){
	var sample1="This is Avatar";
	var sample2="This is Avatar";
	var sample3="This is Avatar";
	var sample4="This is Avatar";
	var sample5="This is Avatar";
	var sample6="This is Avatar";
	var sample7="This is Avatar";
	var sample8="This is Avatar";
	var sample9="This is Avatar";
	var sample10="This is Avatar";
	for (var i=1;i<=10;i++){
		$('#sample'+i).popover({
			title:"sample"+i,
			content:'Interest:'+"\n"+'Action, Adventure, Fantasy'

		})
	}
});
