<?php
/**
 * Change canonical in paged
 *
 * @param string $canonical
 * @return void
 */
function cotilleo_canonical_pagination_rankmath( $canonical ) {
	if ( is_paged() ) {
		$link = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		$arr = explode('/page/', $link);
		$canonical = $arr[0] . '/';
	}	return $canonical;
}
add_filter('rank_math/frontend/canonical', 'cotilleo_canonical_pagination_rankmath');
