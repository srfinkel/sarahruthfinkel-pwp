;( function( $ ) {

	$( '.swipebox' ).swipebox();

} )( jQuery );

$( '#gallery' ).click( function( e ) {
	e.preventDefault();
	$.swipebox( [
		{ href:'port-lg-eib1.jpg', title:'Eileen & the In-Betweens (Squarespace)' },
		{ href:'port-lg-eib1.jpg', title:'My Second Caption' }
	] );
} );