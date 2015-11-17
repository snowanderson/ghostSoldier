<?php

namespace gramziu\anami\migrations;

class tcp_install extends \phpbb\db\migration\migration
{
	public function update_schema()
	{
		return array(
			'add_tables'	=> array(
				$this->table_prefix . 'anami_sidebar'	=> array(
					'COLUMNS'	    => array(
                        'sidebar_name'                  => array('VCHAR', ''),
                        'sidebar_content'               => array('TEXT_UNI', ''),
                        'sidebar_position'              => array('UINT', null, 'auto_increment'),
					),
					'PRIMARY_KEY'	=> 'sidebar_position',
				),

				$this->table_prefix . 'anami_menu'	    => array(
					'COLUMNS'	    => array(
                        'menu_name'                     => array('VCHAR', ''),
                        'menu_position'                 => array('UINT', null, 'auto_increment'),
                        'menu_parent'                   => array('UINT', 0),
                        'menu_url'                      => array('VCHAR', ''),
					),
					'PRIMARY_KEY'	=> 'menu_position',
				),

				$this->table_prefix . 'anami_social'	=> array(
					'COLUMNS'	    => array(
                        'social_position'               => array('UINT', null, 'auto_increment'),
                        'social_url'                    => array('VCHAR', ''),
                        'social_icon'                   => array('VCHAR', ''),
					),
					'PRIMARY_KEY'	=> 'social_position',
				),

				$this->table_prefix . 'anami_footer'	=> array(
					'COLUMNS'	    => array(
                        'footer_name'                   => array('VCHAR', ''),
                        'footer_content'                => array('TEXT_UNI', ''),
                        'footer_position'               => array('UINT', null, 'auto_increment'),
					),
					'PRIMARY_KEY'	=> 'footer_position',
				),
			),
		);
	}

	public function update_data()
	{
		return array(
            array('custom', array(array($this, 'insert_sample_data'))),

            array('config.add', array('anami_tcp', '1')),
            array('config.add', array('anami_width', '1200px')),
            array('config.add', array('anami_layout', '0')),
            array('config.add', array('anami_header', '0')),
            array('config.add', array('anami_font', 'Open Sans')),
            array('config.add', array('anami_cm', '#46494F')),
            array('config.add', array('anami_ct', '#46494F')),
            array('config.add', array('anami_cl', '#46494F')),
            array('config.add', array('anami_cl_h', '#2569B5')),
            array('config.add', array('anami_cb', '#2569B5')),
            array('config.add', array('anami_sb', '1')),
            array('config.add', array('anami_fb', '1')),

            array('module.add', array(
                'acp',
                'ACP_CAT_DOT_MODS',
                'ACP_TCP'
             )),

            array('module.add', array(
                'acp',
                'ACP_TCP',
                array(
                    'module_basename'	=> '\gramziu\anami\acp\anami_module',
                    'modes'		        => array('main', 'sidebar', 'footer_blocks', 'social_icons', 'main_menu'),
                ),
            )),
		);
	}

	public function insert_sample_data()
	{
		$sample_anami_sidebar = array(
			array(
                'sidebar_name'          => 'Anami Theme',
                'sidebar_content'       => 'Responsive and Retina Ready phpBB3 Forum Theme. Three main layouts: Wide, Boxed Bright and Boxed Dark.',
                'sidebar_position'      => 1,
			),
		);

		$sample_anami_menu = array(
			array(
                'menu_name'             => 'Your Menu',
                'menu_position'         => 1,
                'menu_url'              => '#your_link',
			),
		);

		$sample_anami_social = array(
			array(
                'social_position'       => 1,
                'social_url'            => '#',
                'social_icon'           => 'fa-youtube-play',
			),
			array(
                'social_position'       => 2,
                'social_url'            => '#',
                'social_icon'           => 'fa-twitter',
			),
			array(
                'social_position'       => 3,
                'social_url'            => '#',
                'social_icon'           => 'fa-facebook',
			),
			array(
                'social_position'       => 4,
                'social_url'            => '#',
                'social_icon'           => 'fa-dropbox',
			),
		);

		$sample_anami_footer = array(
			array(
                'footer_name'			=> 'About us',
                'footer_content'		=> '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br /><br />Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>',
                'footer_position'		=> 1,
			),
			array(
                'footer_name'			=> 'Important links',
                'footer_content'		=> '<ul>
        <li>
            <a href="#">Our Rules</a>
        </li>
        <li>
            <a href="#">Frequently Asked Questions</a>
        </li>
        <li>
            <a href="#">BBCode Examples</a>
        </li>
        <li>
            <a href="#">Empty Link</a>
        </li>
        <li>
            <a href="#">Creating an account</a>
        </li>
    </ul>',
                'footer_position'		=> 2,
			),
		);

        $this->db->sql_multi_insert($this->table_prefix . 'anami_sidebar', $sample_anami_sidebar);
        $this->db->sql_multi_insert($this->table_prefix . 'anami_menu', $sample_anami_menu);
        $this->db->sql_multi_insert($this->table_prefix . 'anami_social', $sample_anami_social);
        $this->db->sql_multi_insert($this->table_prefix . 'anami_footer', $sample_anami_footer);
	}

	public function revert_schema()
	{
		return array(
			'drop_tables'	=> array(
				$this->table_prefix . 'anami_sidebar',
                $this->table_prefix . 'anami_menu',
                $this->table_prefix . 'anami_social',
                $this->table_prefix . 'anami_footer',
			),
		);
	}
}
