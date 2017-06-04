$(document).ready(function(){
	page = 1;
	$(window).scroll(function(event){
		if(($(window).height() + $(window).scrollTop()) >= $(document).height()-100) {
			page +=1;
			loadData(page);
		}
	});
	loadData(page);
});
function loadData(page){
	$.ajax({
		url: '/ajax/'+ page,
		type: 'GET',
		dataType: 'html',
		// data: {param1: 'value1'},
	})
	.done(function(data) {
		$("#contentUpdate").append(data);
	})
}