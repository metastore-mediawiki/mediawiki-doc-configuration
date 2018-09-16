<?php

require_once( __DIR__ . '/System.php' );

$srvHost      = extGetHost();
$srvHostID    = extGetHostID();
$srvProjectID = extGetProjectID();

require_once( __DIR__ . '/app/src/common.main.php' );
require_once( __DIR__ . '/app/src/common.namespaces.php' );
require_once( __DIR__ . '/app/src/common.extensions.php' );
require_once( __DIR__ . '/app/src/common.permissions.php' );

$srvHostStorage = [
	'storage.metadata.cloud',
];

if ( ! in_array( $srvHost, $srvHostStorage ) ) {
	require_once( __DIR__ . '/app/src/common.storage.php' );
}

switch ( $srvHost ) {

	# Domain: common.meta
	# ------------------------------------------------------------------------------------------------------------------

	case 'metadata.foundation':
		require_once( __DIR__ . '/app/src/domain.common.meta.php' );
		break;

	# Domain: common.accounts
	# ------------------------------------------------------------------------------------------------------------------

	case 'accounts.metadata.cloud':
		require_once( __DIR__ . '/app/src/domain.common.accounts.php' );
		break;

	# Domain: common.help
	# ------------------------------------------------------------------------------------------------------------------

	case 'help.metadata.cloud':
		require_once( __DIR__ . '/app/src/domain.common.help.php' );
		break;

	# Domain: common.storage
	# ------------------------------------------------------------------------------------------------------------------

	case 'storage.metadata.cloud':
		require_once( __DIR__ . '/app/src/domain.common.storage.php' );
		break;

	# Domain: common.store
	# ------------------------------------------------------------------------------------------------------------------

	case 'metastore.pro':
		require_once( __DIR__ . '/app/src/domain.common.store.php' );
		break;

	# Domain: furs.*
	# ------------------------------------------------------------------------------------------------------------------

	case 'furs.games':
		require_once( __DIR__ . '/app/src/domain.furs-games.php' );
		break;

	case 'furs.news':
		require_once( __DIR__ . '/app/src/domain.furs-news.php' );
		break;

	case 'furs.today':
		require_once( __DIR__ . '/app/src/domain.furs-today.php' );
		break;

	# Domain: *.furs.wiki
	# ------------------------------------------------------------------------------------------------------------------

	case 'library.furs.wiki':
		require_once( __DIR__ . '/app/src/domain.furs-wiki-library.php' );
		break;

	case 'event.furs.wiki':
		require_once( __DIR__ . '/app/src/domain.furs-wiki-event.php' );
		break;

	case 'person.furs.wiki':
		require_once( __DIR__ . '/app/src/domain.furs-wiki-person.php' );
		break;

	case 'web.furs.wiki':
		require_once( __DIR__ . '/app/src/domain.furs-wiki-web.php' );
		break;

	case 'craft.furs.wiki':
		require_once( __DIR__ . '/app/src/domain.furs-wiki-craft.php' );
		break;

	# Domain: fursona.info
	# ------------------------------------------------------------------------------------------------------------------

	case 'fursona.info':
		require_once( __DIR__ . '/app/src/domain.fursona-info.php' );
		break;

	# Domain: kitsune.solar
	# ------------------------------------------------------------------------------------------------------------------

	case 'kitsune.solar':
		require_once( __DIR__ . '/app/src/domain.kitsune-solar.php' );
		break;

	# Domain: radio.wtf
	# ------------------------------------------------------------------------------------------------------------------

	case 'radio.wtf':
		require_once( __DIR__ . '/app/src/domain.radio-wtf.php' );
		break;

	# Domain: *.help
	# ------------------------------------------------------------------------------------------------------------------

	case 'flarum.help':
		require_once( __DIR__ . '/app/src/domain.flarum-help.php' );
		break;

	case 'humhub.help':
		require_once( __DIR__ . '/app/src/domain.humhub-help.php' );
		break;

	case 'ipb.help':
		require_once( __DIR__ . '/app/src/domain.ipb-help.php' );
		break;

	case 'xenforo.help':
		require_once( __DIR__ . '/app/src/domain.xenforo-help.php' );
		break;

	# Domain: lurkfur.com
	# ------------------------------------------------------------------------------------------------------------------

	case 'lurkfur.com':
		require_once( __DIR__ . '/app/src/domain.lurkfur-com.php' );
		break;

	# Exit: 404.
	# ------------------------------------------------------------------------------------------------------------------

	default:
		http_response_code( 404 );
		echo 'This wiki is not available. Check configuration.';
		exit( 0 );
}
