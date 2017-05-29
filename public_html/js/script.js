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
			$('.navbar').addClass('navbar-main').removeClass('navbar-transparent');
		}

		/* when user scrolls back up, reset navbar*/
		if($(window).scrollTop() <= 50) {
			$('.navbar').addClass('navbar-transparent').removeClass('navbar-main');
		}

	});

	function standby() {
		document.getElementById('wheel').src = 'images/sararuthfinkel-ceramics.jpg'
	}

});
