<?php

namespace gramziu\anami\acp;

class anami_info
{
	function module()
	{
		return array(
			'filename'	=> '\gramziu\anami\acp\anami_module',
			'title'		=> 'ACP_TCP',
			'modes'		=> array(
				'main'	=> array(
                    'title' => 'ACP_CAT_TCP',
                    'auth' => 'acl_a_board',
                    'cat' => array('ACP_TCP')),
				'sidebar'	=> array(
                    'title' => 'ACP_CAT_TCP_SIDEBAR',
                    'auth' => 'acl_a_board',
                    'cat' => array('ACP_TCP')),
				'footer_blocks'	=> array(
                    'title' => 'ACP_CAT_TCP_FOOTER_BLOCKS',
                    'auth' => 'acl_a_board',
                    'cat' => array('ACP_TCP')),
				'social_icons'	=> array(
                    'title' => 'ACP_CAT_TCP_SOCIAL_ICONS',
                    'auth' => 'acl_a_board',
                    'cat' => array('ACP_TCP')),
				'main_menu'	=> array(
                    'title' => 'ACP_CAT_TCP_MAIN_MENU',
                    'auth' => 'acl_a_board',
                    'cat' => array('ACP_TCP')),
			),
		);
	}
}
