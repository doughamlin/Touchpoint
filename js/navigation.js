/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
	var html = document.getElementsByTagName( 'html' )[0], body;
	body = html.getElementsByTagName( 'body' )[0];
	var nav = document.getElementById( 'site-navigation' ), button, menu;
	if ( ! nav )
		return;
	button = nav.getElementsByTagName( 'h3' )[0];
	menu   = nav.getElementsByTagName( 'ul' )[0];
	if ( ! button )
		return;

	// Hide button if menu is missing or empty.
	if ( ! menu || ! menu.childNodes.length ) {
		button.style.display = 'none';
		return;
	}

	button.onclick = function() {
		if ( -1 == menu.className.indexOf( 'nav-menu' ) )
			menu.className = 'nav-menu';

		if ( -1 != html.className.indexOf( 'menu-toggled-on' ) ) {
			html.className = body.className.replace( ' menu-toggled-on', '' );
		} else {
			html.className += ' menu-toggled-on';
		}
	};
} )();
