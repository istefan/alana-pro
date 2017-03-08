jQuery(document).ready(function($) {

	// Front page section 1 background image
	$( '.front-page-section-1' ).backstretch([BackStretchImg.src]);

	// Hide Header on on scroll down
	$( window ).scroll( function() {

		var top_scroll = $( this ).scrollTop();

		if ( top_scroll > 80 ){  
			$( '.site-header' ).addClass( 'scroll' );
		} else {
			$( '.site-header' ).removeClass( 'scroll' );
		}

	});

	// Set front page 1 height
	var windowHeight = $( window ).height();

	$( '.front-page-section-1' ) .css({'height': windowHeight +'px'});
		
	$( window ).resize(function(){
		var windowHeight = $( window ).height();
		$( '.front-page-section-1' ) .css({'height': windowHeight +'px'});
	});

});