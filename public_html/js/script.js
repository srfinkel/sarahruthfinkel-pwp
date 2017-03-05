/**Creates a navbar-fixed-top after a certain height of scrolling**/
$(document).ready(function() {

	$(window).scroll(function() {
		if($(this).scrollTop() > 665) {
			$('.navbar-default').addClass('navbar-fixed-top').fadeIn();
		} else {
			$('.navbar-default').removeClass('navbar-fixed-top');
		}
	});

}); /*end $(document).ready(...)*/