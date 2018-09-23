<?php

if ( ! defined( 'MEDIAWIKI' ) ) {
	exit;
}

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Main settings.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgSitename = 'Библиотека FURRY / ФУРРИ';
$wgServer   = 'https://furlib.com';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Database settings.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgDBname = extGetConfig( 'project' )['furs.wiki.library']['db']['name'];

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Keys.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgSecretKey  = extGetConfig( 'project' )['furs.wiki.library']['key']['secret'];
$wgUpgradeKey = extGetConfig( 'project' )['furs.wiki.library']['key']['upgrade'];

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Cache.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgCachePrefix = 'mw-furlib-com';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Custom.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgLogo    = $wgResourceBasePath . '/ext-network/resources/assets/images/logo/logo.04.001.512.svg.png';
$wgFavicon = $wgResourceBasePath . '/ext-network/resources/assets/images/favicon/favicon.furs.ico';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Extension.Custom - Cargo.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgCargoDBname = $wgDBname . '_cargo';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Group Permissions.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgGroupPermissions['user']['edit']       = true;
$wgGroupPermissions['user']['createpage'] = true;