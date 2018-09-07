<?php

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * MediaWiki: LocalSettings - Common - Storage.
 * ---------------------------------------------------------------------------------------------------------------------
 * @author Kitsune Solar <https://kitsune.solar>
 * @version 1.0.0
 * ---------------------------------------------------------------------------------------------------------------------
 */

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Global: Storage.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$srvStorageRepoName = 'extStorage';
$srvStorageDirName  = 'ext-storage';
$srvStorageURL      = 'https://storage.metadata.cloud';

$srvStoragePath        = extGetConfig( 'project' )['storage']['path'];
$srvStorageDBName      = extGetConfig( 'project' )['storage']['db']['name'];
$srvStorageDBUser      = extGetConfig( 'project' )['storage']['db']['user'];
$srvStorageDBPass      = extGetConfig( 'project' )['storage']['db']['password'];
$srvStorageDBPrefix    = extGetConfig( 'project' )['storage']['db']['prefix'];
$wgUploadNavigationUrl = $srvStorageURL . '/view/Special:UploadWizard';

$wgForeignFileRepos[] = [
	'class'            => 'ForeignDBRepo',
	'name'             => $srvStorageRepoName,
	'url'              => $srvStorageURL . '/' . $srvStorageDirName,
	'directory'        => $srvStoragePath . '/' . $srvStorageDirName,
	'dbType'           => $wgDBtype,
	'dbServer'         => $wgDBserver,
	'dbName'           => $srvStorageDBName,
	'dbUser'           => $srvStorageDBUser,
	'dbPassword'       => $srvStorageDBPass,
	'dbFlags'          => DBO_DEFAULT,
	'tablePrefix'      => $srvStorageDBPrefix,
	'hasSharedCache'   => false,
	'descBaseUrl'      => $srvStorageURL . '/view/File:',
	'fetchDescription' => false,
];
