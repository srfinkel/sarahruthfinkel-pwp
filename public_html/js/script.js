$(document).ready(function() {

	/********************************************
	 * Navbar Class Swap
	 * adapted from
	 * @author rlewis37@cnm.edu
	 *
	 ********************************************/

	/* on home page ONLY, swap out navabar classes if user scrolls down 50 px */
	$(window).scroll(function() {

		if($(this).scrollTop() > 50) {
			$('.navbar').addClass('navbar-default').removeClass('navbar-transparent');
		}

		/* when user scrolls back up, reset navbar*/
		if($(window).scrollTop() <= 50) {
			$('.navbar').addClass('navbar-transparent').removeClass('navbar-default');
		}

	});

});

// //determines the size of the viewport
// 		var height = $(window).height(),
// 			width = $(window).width();
//
// 		//function to handle scrolling on button click
//
// 		$(function() { // adapted from Edu Lomeli http://stackoverflow.com/questions/27558323/bootstrap-scroll-down-when-the-user-clicks-the-button
// 			$('.scroll').click(function() {
// 				if(location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
// 					var target = $(this.hash);
// 					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
// 					if(target.length) {
// 						$('html,body').animate({
// 							scrollTop: (target.offset().top) // adjust this according to your content
//
// 						}, 500);
// 						return false;
// 					}
// 				}
// 			});
// 		});
