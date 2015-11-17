<?php

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_TCP'						=> 'Theme Control Panel',
	'ACP_CAT_TCP'					=> 'Main settings',
	'ACP_CAT_TCP_SIDEBAR'			=> 'Sidebar',
	'ACP_CAT_TCP_FOOTER_BLOCKS'		=> 'Footer blocks',
	'ACP_CAT_TCP_SOCIAL_ICONS'		=> 'Social icons',
	'ACP_CAT_TCP_MAIN_MENU'			=> 'Main menu',

	'ACP_TCP_DESCRIPTION'			=> 'Customize your theme.',
	'ACP_TCP_MAIN'					=> 'Main settings',

	'ACP_TCP_WIDTH'					=> 'Width',
	'ACP_TCP_LAYOUT'				=> 'Layout',
	'ACP_TCP_WIDE'					=> 'Wide',
	'ACP_TCP_BOXED_BRIGHT'			=> 'Boxed bright',
	'ACP_TCP_BOXED_DARK'			=> 'Boxed dark',
	'ACP_TCP_HEADER'				=> 'Header',
	'ACP_TCP_HEADER_BIG'			=> 'Big',
	'ACP_TCP_HEADER_SMALL'			=> 'Small',
	'ACP_TCP_FONT'					=> 'Font',
	'ACP_TCP_CM'					=> 'Main color',
	'ACP_TCP_CT'					=> 'Secondary color',
	'ACP_TCP_CL'					=> 'Links color',
	'ACP_TCP_CL_H'					=> 'Hovered links color',
	'ACP_TCP_CB'					=> 'Buttons main color',

	'ACP_TCP_FOOTER_BLOCKS'			=> 'Enable footer blocks',
	'ACP_TCP_FOOTER_BLOCK'			=> 'Block name',
	'ACP_TCP_FOOTER_BLOCK_CONTENT'	=> 'Block content',

	'ACP_TCP_SIDEBAR_BLOCKS'		=> 'Enable sidebar blocks',
	'ACP_TCP_SIDEBAR_BLOCK'			=> 'Block name',
	'ACP_TCP_SIDEBAR_BLOCK_CONTENT'	=> 'Block content',

	'ACP_TCP_SOCIAL_ICON_IMAGE'		=> 'Icon',
	'ACP_TCP_SOCIAL_ICON_URL'		=> 'Link',

	'ACP_TCP_MENU_NAME'				=> 'Name',
	'ACP_TCP_MENU_URL'				=> 'Link',

	'ACP_TCP_SETTINGS_CHANGED'		=> 'Theme settings changed.',
	'LOG_ACP_TCP_SETTINGS_CHANGED'	=> '<strong>Altered theme settings</strong>',
));
