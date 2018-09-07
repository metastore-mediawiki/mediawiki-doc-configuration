<?php

if ( ! defined( 'MEDIAWIKI' ) ) {
	exit;
}

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Main settings.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgSitename = 'METADATA / STORAGE';
$wgServer   = 'https://storage.metadata.cloud';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Database settings.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgDBname = extGetConfig( 'project' )['storage']['db']['name'];

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Keys.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgSecretKey  = extGetConfig( 'project' )['storage']['key']['secret'];
$wgUpgradeKey = extGetConfig( 'project' )['storage']['key']['upgrade'];


/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Storage.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgEnableUploads   = true;
$wgUploadDirectory = $IP . '/ext-storage';
$wgUploadPath      = $wgScriptPath . '/ext-storage';
//$wgFileExtensions  = array_merge( $wgFileExtensions, [ 'svg' ] );
$wgFileExtensions = [ 'png', 'gif', 'jpg', 'jpeg', 'svg' ];

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Cache.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgCachePrefix = 'mw-storage';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Custom.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgLogo = $wgResourceBasePath . '/ext-network/resources/assets/images/logo/logo.02.001.512.svg.png';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Group Permissions.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgGroupPermissions['*']['edit']        = false;
$wgGroupPermissions['user']['edit']     = false;
$wgGroupPermissions['user']['upload']   = false;
$wgGroupPermissions['user']['reupload'] = false;
$wgGroupPermissions['sysop']['edit']    = true;

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Extension.Custom - Cargo.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgCargoDBname = $wgDBname . '_cargo';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Extension.Custom - CirrusSearch.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgCirrusSearchIndexBaseName = 'wm_storage';

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Extension.Custom - UploadWizard.
 * ---------------------------------------------------------------------------------------------------------------------
 */

require_once( $IP . '/extensions/UploadWizard/UploadWizard.php' );

$wgExtensionFunctions[] = function () {
	$GLOBALS['wgUploadNavigationUrl'] = SpecialPage::getTitleFor( 'UploadWizard' )->getLocalURL();

	return true;
};

$wgUploadWizardConfig = array(
	'debug'                      => false,
	'enableFormData'             => true,
	'enableMultipleFiles'        => true,
	'enableMultiFileSelect'      => true,
	'tutorial'                   => [ 'skip' => true ],
	'autoAdd'                    => [ 'wikitext' => '', 'categories' => [ 'Uploads' ] ],
	//'trackingCategory'      => array( 'all' => 'Uploads' ),
	'uwLanguages'                => empty( $uwLanguages ) ? [
		'ru' => 'Russian',
		'en' => 'English'
	] : $uwLanguages,
	'altUploadForm'              => '',
	'alternativeUploadToolsPage' => '',
	'licenseCategory'            => 'TPL-LICENSES',
	'maxUploads'                 => 10,
	'fileExtensions'             => $wgFileExtensions,
	'licenses'                   => [
		'cc-by-sa-4.0'      => [
			'msg'                => 'mwe-upwiz-license-cc-by-sa-4.0',
			'templates'          => [ 'INC-LICENSE-CC-BY-SA-4.0' ],
			'icons'              => [ 'cc-by', 'cc-sa' ],
			'url'                => '//creativecommons.org/licenses/by-sa/4.0/',
			'languageCodePrefix' => 'deed.'
		],
		'cc-by-sa-3.0'      => [
			'msg'                => 'mwe-upwiz-license-cc-by-sa-3.0',
			'templates'          => [ 'INC-LICENSE-CC-BY-SA-3.0' ],
			'icons'              => [ 'cc-by', 'cc-sa' ],
			'url'                => '//creativecommons.org/licenses/by-sa/3.0/',
			'languageCodePrefix' => 'deed.'
		],
		'cc-by-sa-3.0-gfdl' => [
			'msg'       => 'mwe-upwiz-license-cc-by-sa-3.0-gfdl',
			'templates' => [ 'INC-LICENSE-GFDL', 'INC-LICENSE-CC-BY-SA-3.0' ],
			'icons'     => [ 'cc-by', 'cc-sa' ]
		],
		'cc-by-sa-3.0-at'   => [
			'msg'                => 'mwe-upwiz-license-cc-by-sa-3.0-at',
			'templates'          => [ 'INC-LICENSE-CC-BY-SA-3.0-AT' ],
			'icons'              => [ 'cc-by', 'cc-sa' ],
			'url'                => '//creativecommons.org/licenses/by-sa/3.0/at/',
			'languageCodePrefix' => 'deed.'
		],
		'cc-by-sa-3.0-de'   => [
			'msg'                => 'mwe-upwiz-license-cc-by-sa-3.0-de',
			'templates'          => [ 'INC-LICENSE-CC-BY-SA-3.0-DE' ],
			'icons'              => [ 'cc-by', 'cc-sa' ],
			'url'                => '//creativecommons.org/licenses/by-sa/3.0/de/',
			'languageCodePrefix' => 'deed.'
		],
		'cc-by-sa-3.0-ee'   => [
			'msg'                => 'mwe-upwiz-license-cc-by-sa-3.0-ee',
			'templates'          => [ 'INC-LICENSE-CC-BY-SA-3.0-EE' ],
			'icons'              => [ 'cc-by', 'cc-sa' ],
			'url'                => '//creativecommons.org/licenses/by-sa/3.0/ee/',
			'languageCodePrefix' => 'deed.'
		],
		'cc-by-sa-3.0-es'   => [
			'msg'                => 'mwe-upwiz-license-cc-by-sa-3.0-es',
			'templates'          => [ 'INC-LICENSE-CC-BY-SA-3.0-ES' ],
			'icons'              => [ 'cc-by', 'cc-sa' ],
			'url'                => '//creativecommons.org/licenses/by-sa/3.0/es/',
			'languageCodePrefix' => 'deed.'
		],
		'cc-by-sa-3.0-hr'   => [
			'msg'                => 'mwe-upwiz-license-cc-by-sa-3.0-hr',
			'templates'          => [ 'INC-LICENSE-CC-BY-SA-3.0-HR' ],
			'icons'              => [ 'cc-by', 'cc-sa' ],
			'url'                => '//creativecommons.org/licenses/by-sa/3.0/hr/',
			'languageCodePrefix' => 'deed.'
		],
		'cc-by-sa-3.0-lu'   => [
			'msg'                => 'mwe-upwiz-license-cc-by-sa-3.0-lu',
			'templates'          => [ 'INC-LICENSE-CC-BY-SA-3.0-LU' ],
			'icons'              => [ 'cc-by', 'cc-sa' ],
			'url'                => '//creativecommons.org/licenses/by-sa/3.0/lu/',
			'languageCodePrefix' => 'deed.'
		],
		'cc-by-sa-3.0-nl'   => [
			'msg'                => 'mwe-upwiz-license-cc-by-sa-3.0-nl',
			'templates'          => [ 'INC-LICENSE-CC-BY-SA-3.0-NL' ],
			'icons'              => [ 'cc-by', 'cc-sa' ],
			'url'                => '//creativecommons.org/licenses/by-sa/3.0/nl/',
			'languageCodePrefix' => 'deed.'
		],
		'cc-by-sa-3.0-no'   => [
			'msg'                => 'mwe-upwiz-license-cc-by-sa-3.0-no',
			'templates'          => [ 'INC-LICENSE-CC-BY-SA-3.0-NO' ],
			'icons'              => [ 'cc-by', 'cc-sa' ],
			'url'                => '//creativecommons.org/licenses/by-sa/3.0/no/',
			'languageCodePrefix' => 'deed.'
		],
		'cc-by-sa-3.0-pl'   => [
			'msg'                => 'mwe-upwiz-license-cc-by-sa-3.0-pl',
			'templates'          => [ 'INC-LICENSE-CC-BY-SA-3.0-PL' ],
			'icons'              => [ 'cc-by', 'cc-sa' ],
			'url'                => '//creativecommons.org/licenses/by-sa/3.0/pl/',
			'languageCodePrefix' => 'deed.'
		],
		'cc-by-sa-3.0-ro'   => [
			'msg'                => 'mwe-upwiz-license-cc-by-sa-3.0-ro',
			'templates'          => [ 'INC-LICENSE-CC-BY-SA-3.0-RO' ],
			'icons'              => [ 'cc-by', 'cc-sa' ],
			'url'                => '//creativecommons.org/licenses/by-sa/3.0/ro/',
			'languageCodePrefix' => 'deed.'
		],
		'cc-by-4.0'         => [
			'msg'                => 'mwe-upwiz-license-cc-by-4.0',
			'templates'          => [ 'INC-LICENSE-CC-BY-4.0' ],
			'icons'              => [ 'cc-by' ],
			'url'                => '//creativecommons.org/licenses/by/4.0/',
			'languageCodePrefix' => 'deed.'
		],
		'cc-by-3.0'         => [
			'msg'                => 'mwe-upwiz-license-cc-by-3.0',
			'templates'          => [ 'INC-LICENSE-CC-BY-3.0' ],
			'icons'              => [ 'cc-by' ],
			'url'                => '//creativecommons.org/licenses/by/3.0/',
			'languageCodePrefix' => 'deed.'
		],
		'cc-zero'           => [
			'msg'                => 'mwe-upwiz-license-cc-zero',
			'templates'          => [ 'INC-LICENSE-CC-ZERO' ],
			'icons'              => [ 'cc-zero' ],
			'url'                => '//creativecommons.org/publicdomain/zero/1.0/',
			'languageCodePrefix' => 'deed.'
		],
		'own-pd'            => [
			'msg'       => 'mwe-upwiz-license-own-pd',
			'templates' => [ 'INC-LICENSE-CC-ZERO' ],
			'icons'     => [ 'cc-zero' ]
		],
		'cc-by-sa-2.5'      => [
			'msg'                => 'mwe-upwiz-license-cc-by-sa-2.5',
			'icons'              => [ 'cc-by', 'cc-sa' ],
			'url'                => '//creativecommons.org/licenses/by-sa/2.5/',
			'languageCodePrefix' => 'deed.'
		],
		'cc-by-2.5'         => [
			'msg'                => 'mwe-upwiz-license-cc-by-2.5',
			'templates'          => [ 'INC-LICENSE-CC-BY-SA-2.5' ],
			'icons'              => [ 'cc-by' ],
			'url'                => '//creativecommons.org/licenses/by/2.5/',
			'languageCodePrefix' => 'deed.'
		],
		'cc-by-sa-2.0'      => [
			'msg'                => 'mwe-upwiz-license-cc-by-sa-2.0',
			'templates'          => [ 'INC-LICENSE-CC-BY-SA-2.0' ],
			'icons'              => [ 'cc-by', 'cc-sa' ],
			'url'                => '//creativecommons.org/licenses/by-sa/2.0/',
			'languageCodePrefix' => 'deed.'
		],
		'cc-by-2.0'         => [
			'msg'                => 'mwe-upwiz-license-cc-by-2.0',
			'templates'          => [ 'INC-LICENSE-CC-BY-2.0' ],
			'icons'              => [ 'cc-by' ],
			'url'                => '//creativecommons.org/licenses/by/2.0/',
			'languageCodePrefix' => 'deed.'
		],
		'fal'               => [
			'msg'       => 'mwe-upwiz-license-fal',
			'templates' => [ 'INC-LICENSE-FAL' ]
		],
		'pd-old-100'        => [
			'msg'       => 'mwe-upwiz-license-pd-old-100',
			'templates' => [ 'INC-LICENSE-PD-OLD-100' ]
		],
		'pd-old'            => [
			'msg'       => 'mwe-upwiz-license-pd-old',
			'templates' => [ 'INC-LICENSE-PD-OLD' ]
		],
		'pd-art'            => [
			'msg'       => 'mwe-upwiz-license-pd-art',
			'templates' => [ 'INC-LICENSE-PD-ART' ]
		],
		'pd-us'             => [
			'msg'       => 'mwe-upwiz-license-pd-us',
			'templates' => [ 'INC-LICENSE-PD-1923' ]
		],
		'pd-usgov'          => [
			'msg'       => 'mwe-upwiz-license-pd-usgov',
			'templates' => [ 'INC-LICENSE-PD-USGOV' ]
		],
		'pd-usgov-nasa'     => [
			'msg'       => 'mwe-upwiz-license-pd-usgov-nasa',
			'templates' => [ 'INC-LICENSE-PD-USGOV-NASA' ]
		],
		'pd-ineligible'     => [
			'msg'       => 'mwe-upwiz-license-pd-ineligible',
			'templates' => [ 'INC-LICENSE-INELIGIBLE' ]
		],
		'pd-textlogo'       => [
			'msg'       => 'mwe-upwiz-license-pd-textlogo',
			'templates' => [ 'INC-LICENSE-TRADEMARKED', 'INC-LICENSE-PD-TEXTLOGO' ]
		],
		'attribution'       => [
			'msg'       => 'mwe-upwiz-license-attribution',
			'templates' => [ 'INC-LICENSE-ATTRIBUTION' ]
		],
		'gfdl'              => [
			'msg'       => 'mwe-upwiz-license-gfdl',
			'templates' => [ 'INC-LICENSE-GFDL' ]
		],
		'none'              => [
			'msg'       => 'mwe-upwiz-license-none',
			'templates' => [ 'INC-LICENSE-NONE' ]
		],
		'custom'            => [
			'msg'       => 'mwe-upwiz-license-custom',
			'templates' => [ 'INC-LICENSE-CUSTOM' ],
			//'url'       => wfMessage( 'mwe-upwiz-license-custom-url' )->parse()
		],
		'generic'           => [
			'msg'       => 'mwe-upwiz-license-generic',
			'templates' => [ 'INC-LICENSE-GENERIC' ]
		],
	],
);

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Local: Group Permissions.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgGroupPermissions['sysop']['edit']       = true;
$wgGroupPermissions['sysop']['createpage'] = true;
$wgGroupPermissions['sysop']['upload']     = true;
$wgGroupPermissions['sysop']['reupload']   = true;