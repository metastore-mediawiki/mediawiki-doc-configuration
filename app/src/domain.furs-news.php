<?php

if ( ! defined( 'MEDIAWIKI' ) ) {
	exit;
}

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Main settings.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgSitename = 'Новости FURRY / ФУРРИ';
$wgServer   = 'https://furs.news';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Database settings.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgDBname = extGetConfig( 'project' )['furs.news']['db']['name'];

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Keys.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgSecretKey  = extGetConfig( 'project' )['furs.news']['key']['secret'];
$wgUpgradeKey = extGetConfig( 'project' )['furs.news']['key']['upgrade'];

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Cache.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgCachePrefix = 'mw-furs-news';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Custom.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgLogo    = $wgResourceBasePath . '/ext-network/resources/assets/images/logo/logo.04.001.512.svg.png';
$wgFavicon = $wgResourceBasePath . '/ext-network/resources/assets/images/favicon/favicon.furs.ico';
