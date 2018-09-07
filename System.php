<?php

/**
 * Get configuration file.
 *
 * @param $file
 *
 * @return mixed
 */
function extGetConfig( $file ) {
	$get = file_get_contents( __DIR__ . '/app/config/' . $file . '.json' );
	$out = json_decode( $get, true );

	return $out[ $file ];
}

/**
 * Get host.
 *
 * @return mixed
 */
function extGetHost() {
	$out = $_SERVER['HTTP_HOST'];

	return $out;
}

/**
 * Get host ID.
 *
 * @return mixed
 */
function extGetHostID() {
	$host = array_reverse( explode( '.', extGetHost() ) );
	$out  = $host[1];

	return $out;
}

/**
 * Get long host ID.
 *
 * @return mixed
 */
function extGetProjectID() {
	$out = str_replace( '.', '_', extGetHost() );

	return $out;
}