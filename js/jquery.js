$('document').ready(function(){
	$(window).scroll( function(){
		var ratio = $(document).scrollTop() / (($(document).height() - $(window).height())/100);
		$("#progress").width(ratio + "%");
		var offset = 0;
		
});