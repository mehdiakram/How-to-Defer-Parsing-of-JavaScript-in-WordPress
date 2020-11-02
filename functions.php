// Defer Parsing of js Start ========================================
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );
function defer_parsing_of_js( $url ) {
	if ( is_user_logged_in() ) return $url; //don't break WP Admin
	if ( FALSE === strpos( $url, '.js' ) ) return $url;
	if ( strpos( $url, 'jquery.js' ) ) return $url;
	return str_replace( ' src', ' defer src', $url );
}
// Defer Parsing of js End ========================================
