<?php

if ( ! defined( 'MEDIAWIKI' ) ) {
	exit;
}

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Main settings.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgSitename = 'Помощь по IPB / IPS Community Suite';
$wgServer   = 'https://ipb.help';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Database settings.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgDBname = extGetConfig( 'project' )['ipb.help']['db']['name'];

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Keys.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgSecretKey  = extGetConfig( 'project' )['ipb.help']['key']['secret'];
$wgUpgradeKey = extGetConfig( 'project' )['ipb.help']['key']['upgrade'];

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Cache.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgCachePrefix = 'mw-ipb-help';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Extension.Custom - Cargo.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgCargoDBname = $wgDBname . '_cargo';