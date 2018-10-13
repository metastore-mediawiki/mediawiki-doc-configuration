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
$wgServer   = 'https://library.furs.wiki';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Database settings.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgDBname = extGetConfig( 'project' )['furs.wiki.library']['db']['name'];

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Shared sessions.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgCookieDomain = '.furs.wiki';

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

$wgCachePrefix = 'mw-furs-wiki-library';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Custom.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgLogo    = $wgResourceBasePath . '/ext-network/resources/assets/images/logo/logo.04.001.512.svg.png';
$wgFavicon = $wgResourceBasePath . '/ext-network/resources/assets/images/favicon/favicon.furs.ico';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Group Permissions.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgGroupPermissions['user']['edit']       = true;
$wgGroupPermissions['user']['createpage'] = true;
