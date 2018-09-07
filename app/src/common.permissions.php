<?php

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * MediaWiki: LocalSettings - Common - Permissions.
 * ---------------------------------------------------------------------------------------------------------------------
 * @author Kitsune Solar <https://kitsune.solar>
 * @version 1.0.0
 * ---------------------------------------------------------------------------------------------------------------------
 */

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Global: Group Permissions.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['*']['edit']          = false;
$wgGroupPermissions['*']['createpage']    = false;

$wgGroupPermissions['user']['edit']       = true;
$wgGroupPermissions['user']['createpage'] = true;
$wgGroupPermissions['user']['upload']     = false;
$wgGroupPermissions['user']['reupload']   = false;

// Edit template.
$wgGroupPermissions['*']['edit-template']          = false;
$wgGroupPermissions['user']['edit-template']       = false;
$wgGroupPermissions['sysop']['edit-template']      = true;
$wgGroupPermissions['bureaucrat']['edit-template'] = true;

// Edit project.
$wgGroupPermissions['*']['edit-project']          = false;
$wgGroupPermissions['user']['edit-project']       = false;
$wgGroupPermissions['sysop']['edit-project']      = true;
$wgGroupPermissions['bureaucrat']['edit-project'] = true;

// Edit help.
$wgGroupPermissions['*']['edit-help']          = false;
$wgGroupPermissions['user']['edit-help']       = false;
$wgGroupPermissions['sysop']['edit-help']      = true;
$wgGroupPermissions['bureaucrat']['edit-help'] = true;

// Edit category.
$wgGroupPermissions['*']['edit-category']          = false;
$wgGroupPermissions['user']['edit-category']       = false;
$wgGroupPermissions['sysop']['edit-category']      = true;
$wgGroupPermissions['bureaucrat']['edit-category'] = true;

/**
 * ---------------------------------------------------------------------------------------------------------------------
 * Global: Namespace Protection.
 * ---------------------------------------------------------------------------------------------------------------------
 */

$wgNamespaceProtection[ NS_CATEGORY ] = array( 'edit-category' );
$wgNamespaceProtection[ NS_HELP ]     = array( 'edit-help' );
$wgNamespaceProtection[ NS_PROJECT ]  = array( 'edit-project' );
$wgNamespaceProtection[ NS_TEMPLATE ] = array( 'edit-template' );

# Namespace protection.
$wgNamespaceProtection[ NS_TALK ]           = [ 'everyone' ];
$wgNamespaceProtection[ NS_USER ]           = [ 'everyone' ];
$wgNamespaceProtection[ NS_USER_TALK ]      = [ 'everyone' ];
$wgNamespaceProtection[ NS_PROJECT_TALK ]   = [ 'everyone' ];
$wgNamespaceProtection[ NS_FILE_TALK ]      = [ 'everyone' ];
$wgNamespaceProtection[ NS_MEDIAWIKI_TALK ] = [ 'everyone' ];
$wgNamespaceProtection[ NS_TEMPLATE_TALK ]  = [ 'everyone' ];
$wgNamespaceProtection[ NS_HELP_TALK ]      = [ 'everyone' ];
$wgNamespaceProtection[ NS_CATEGORY_TALK ]  = [ 'everyone' ];

