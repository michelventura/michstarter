jQuery(function( $ ){

	var a = $( "#menu-icon" );

	$( "#menu-button" ).click(function(b) {
		b.preventDefault();
		$( "body" ).toggleClass( "menu-opened" );
		a.toggleClass( "fi-list fi-x" );
	});
	
	$( ".main-menu ul li a" ).click(function(){
		$( "body" ).removeClass( "menu-opened" );
		a.toggleClass( "fi-list fi-x" );
	});

});