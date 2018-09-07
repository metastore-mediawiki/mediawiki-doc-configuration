<?php

if ( ! defined( 'MEDIAWIKI' ) ) {
	exit;
}

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Main settings.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgSitename = 'RADIO W.T.F.';
$wgServer   = 'https://radio.wtf';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Database settings.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgDBname = extGetConfig( 'project' )['radio.wtf']['db']['name'];

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Keys.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgSecretKey  = extGetConfig( 'project' )['radio.wtf']['key']['secret'];
$wgUpgradeKey = extGetConfig( 'project' )['radio.wtf']['key']['upgrade'];

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Cache.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgCachePrefix = 'mw-radio-wtf';

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

$wgGroupPermissions['sysop']['edit']       = true;
$wgGroupPermissions['sysop']['createpage'] = true;