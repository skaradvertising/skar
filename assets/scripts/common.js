jQuery(document).ready(function($){
	
	$(function () {
		$('[data-toggle="tooltip"]').tooltip();
	});

	$('.arrow-icon').click(function(){
		$(this).toggleClass('is-clicked');
	});
});