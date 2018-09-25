<?php

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * MediaWiki: LocalSettings - Common - Main.
 * ---------------------------------------------------------------------------------------------------------------------
 * @author Kitsune Solar <https://kitsune.solar>
 * @version 1.0.0
 * ---------------------------------------------------------------------------------------------------------------------
 */

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Global: Show detailed debugging information.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgShowExceptionDetails = true;

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Global: Enable read only mode.
 * ---------------------------------------------------------------------------------------------------------------------
 */

# $wgReadOnly = "System Maintenance";

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Global: Main settings.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgMetaNamespace       = 'META';
$wgScriptPath          = '';
$wgResourceBasePath    = $wgScriptPath;
$wgLogo                = $wgResourceBasePath . '/resources/assets/wiki.png';
$wgEnableEmail         = true;
$wgEnableUserEmail     = true;
$wgAllowHTMLEmail      = false;
$wgEmergencyContact    = extGetConfig( 'general' )['common']['emergency.contact'];
$wgPasswordSender      = extGetConfig( 'general' )['common']['password.sender'];
$wgEnotifUserTalk      = false;
$wgEnotifWatchlist     = false;
$wgEmailAuthentication = true;
$wgJobRunRate          = 0;

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Global: Database settings.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgDBtype         = extGetConfig( 'general' )['common']['db']['type'];
$wgDBserver       = extGetConfig( 'general' )['common']['db']['server'];
$wgDBuser         = extGetConfig( 'general' )['common']['db']['user'];
$wgDBpassword     = extGetConfig( 'general' )['common']['db']['password'];
$wgDBprefix       = extGetConfig( 'general' )['common']['db']['prefix'];
$wgDBTableOptions = extGetConfig( 'general' )['common']['db']['options'];

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Global: Storage settings.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgEnableUploads             = false;
$wgUseImageMagick            = true;
$wgImageMagickConvertCommand = '/usr/bin/convert';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Global: Rights settings.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgRightsPage = '';
$wgRightsUrl  = '';
$wgRightsText = '';
$wgRightsIcon = '';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Global: Diff settings.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgDiff3 = '/usr/bin/diff3';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Global: Skin settings.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgDefaultSkin = 'vector';
wfLoadSkin( 'Vector' );
wfLoadSkin( 'MinervaNeue' );

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Global: Shared database.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgSharedDB     = extGetConfig( 'general' )['common']['db']['shared']['name'];
$wgSharedTables = array_merge( $wgSharedTables, extGetConfig( 'general' )['common']['db']['shared']['tables'] );
$wgSharedPrefix = extGetConfig( 'general' )['common']['db']['shared']['prefix'];

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Global: Cache.
 * ---------------------------------------------------------------------------------------------------------------------
 */

// Cache: File.
//$wgUseFileCache     = true;
$wgFileCacheDirectory = $IP . '/ext-cache/file/' . $srvProjectID;
$wgCacheDirectory     = $IP . '/ext-cache/l10n/' . $srvProjectID;
$wgUseGzip            = true;
$wgEnableSidebarCache = true;
$wgShowIPinHeader     = false;

$wgObjectCaches['redis'] = [
	'class'   => 'RedisBagOStuff',
	'servers' => [ '/var/run/redis/redis.sock' ],
];

$wgJobTypeConf['default'] = [
	'class'       => 'JobQueueRedis',
	'redisServer' => '/var/run/redis/redis.sock',
	'redisConfig' => [],
	'claimTTL'    => 3600,
	'daemonized'  => true,
];

$wgMainCacheType    = 'redis';
$wgMessageCacheType = 'redis';
$wgParserCacheType  = 'redis';
//$wgSessionCacheType = 'redis';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Global: SVG.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgSVGConverterPath = '/usr/bin';
$wgSVGConverters    = [ 'rsvg' => '/usr/bin/rsvg-convert -w $width -h $height -o $output $input' ];
$wgSVGConverter     = 'rsvg';
$wgAllowTitlesInSVG = true;

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Global: Custom.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgAuthenticationTokenVersion = '1';
$wgArticlePath                = '/view/$1';
$wgUsePathInfo                = true;
$wgMaxImageArea               = '1.25e7';
$wgApiFrameOptions            = 'DENY';
$wgUseInstantCommons          = false;
$wgShellLocale                = 'en_US.utf8';
$wgLanguageCode               = 'ru';
$wgPingback                   = false;
$wgLogo                       = $wgResourceBasePath . '/ext-network/resources/assets/images/logo/logo.03.001.512.svg.png';
$wgLogoHD                     = $wgResourceBasePath . '/ext-network/resources/assets/images/logo/logo.03.001.512.svg';
$wgFavicon                    = $wgResourceBasePath . '/ext-network/resources/assets/images/favicon/favicon.common.png';
$wgUrlProtocols               = array_merge( $wgUrlProtocols, [ 'skype:' ] );
$wgEnableDnsBlacklist         = false;
$wgDnsBlacklistUrls           = [ 'xbl.spamhaus.org', 'dnsbl.tornevall.org' ];
$wgFlaggedRevsStatsAge        = false;

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Global: Copyright.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgRightsUrl                = 'https://creativecommons.org/licenses/by-nc-sa/4.0/';
$wgRightsText               = 'Creative Commons Attribution-NonCommercial-ShareAlike 4.0 Всемирная';
$wgRightsIcon               = 'https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png';
$wgEnableCreativeCommonsRdf = true;
$wgEnableDublinCoreRdf      = true;

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Global: Unset.
 * ---------------------------------------------------------------------------------------------------------------------
 */

// Unset "powered by" icon.
unset( $wgFooterIcons['poweredby'] );
