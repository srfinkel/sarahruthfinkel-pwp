/**Creates a navbar-fixed-top after a certain height of scrolling**/
$(document).ready(function() {
	$('.footer').append('<div class="container"><div id="toTop" class="btn btn-info"><i class="fa fa-arrow-up"></i></div></div>');

	$(window).scroll(function() {
		if($(this).scrollTop() > 500) {
			$('#toTop').fadeIn();
		} else {
			$('#toTop').fadeOut();
		}
	});

	$('#toTop').click(function() {
		$("html, body").animate({scrollTop: 0}, 600);
		return false;
	});

}); /*end $(document).ready(...)*/