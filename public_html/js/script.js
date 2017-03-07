/**Creates a navbar-fixed-top after a certain height of scrolling**/

$(document).ready(function() {

	$(window).scroll(function() {
		if($(this).scrollTop() > 500) {
			$('.navbar-default').addClass('navbar-fixed-top').fadeIn();
		} else {
			$('.navbar-default').removeClass('navbar-fixed-top');
		}

//determines the size of the viewport
		var height = $(window).height(),
			width = $(window).width();

		//function to handle scrolling on button click

		$(function() { // adapted from Edu Lomeli http://stackoverflow.com/questions/27558323/bootstrap-scroll-down-when-the-user-clicks-the-button
			$('.scroll').click(function() {
				if(location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					if(target.length) {
						$('html,body').animate({
							scrollTop: (target.offset().top - height * 0.25) // adjust this according to your content

						}, 1000);
						return false;
					}
				}
			});
		});

	});

});

