<?php

namespace gramziu\anami\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Event listener
 */
class listener implements EventSubscriberInterface
{

    private $template;
    private $config;
    private $db;
    private $request;
    private $root_path;
    private $php_ext;

    private $anami_sidebar_table;
    private $anami_footer_table;
    private $anami_social_table;
    private $anami_menu_table;
    

	public function __construct(
        \phpbb\template\template $template,
        \phpbb\config\config $config,
        \phpbb\db\driver\factory $db,
        \phpbb\request\request $request,
        $root_path,
        $php_ext,
        $anami_sidebar_table,
        $anami_footer_table,
        $anami_social_table,
        $anami_menu_table)
	{
		$this->template     = $template;
        $this->config       = $config;
        $this->db           = $db;
        $this->request      = $request;
        $this->root_path    = $root_path;
        $this->php_ext      = $php_ext;

        $this->anami_sidebar_table  = $anami_sidebar_table;
        $this->anami_footer_table   = $anami_footer_table;
        $this->anami_social_table   = $anami_social_table;
        $this->anami_menu_table     = $anami_menu_table;
	}

    static public function getSubscribedEvents()
    {
        return array(
            'core.page_header_after' => 'load_language_on_setup',
        );
    }

    public function load_language_on_setup($event)
    {
		$anami_tcp = $this->config['anami_tcp'];

        $anami_width = $this->config['anami_width'];
        $anami_layout = $this->config['anami_layout'];
        $anami_header = $this->config['anami_header'];
        $anami_font = $this->config['anami_font'];

        $anami_font_c = str_replace(' ', '+',  $anami_font);

        $anami_cm = $this->config['anami_cm'];
        $anami_ct = $this->config['anami_ct'];
        $anami_cl = $this->config['anami_cl'];
        $anami_cl_h = $this->config['anami_cl_h'];
        $anami_cb = $this->config['anami_cb'];

        $anami_sidebar = $this->config['anami_sidebar'];

        $anami_footer = $this->config['anami_footer'];

		$this->template->assign_vars(
			array(
				'ANAMI_TCP'			=> $anami_tcp,

				'ANAMI_WIDTH'   	=> $anami_width,
                'ANAMI_LAYOUT'		=> $anami_layout,
                'ANAMI_HEADER'		=> $anami_header,
                'ANAMI_FONT'		=> $anami_font,
                'ANAMI_FONT_C'		=> $anami_font_c,
                'ANAMI_CM'			=> $anami_cm,
                'ANAMI_CT'			=> $anami_ct,
                'ANAMI_CL'			=> $anami_cl,
                'ANAMI_CL_H'		=> $anami_cl_h,
                'ANAMI_CB'			=> $anami_cb,

                'ANAMI_SIDEBAR'   	=> $anami_sidebar,

                'ANAMI_FOOTER'		=> $anami_footer,
			)
		);
        
        $anami_tcp = $this->config['anami_tcp'];

        if ($anami_tcp)
        {	
            $sql = 'SELECT * FROM ' . $this->anami_sidebar_table;
            $result = $this->db->sql_query($sql);
            while($row = $this->db->sql_fetchrow($result))
            {
                $this->template->assign_block_vars('siba', array(
                    'SIDEBAR_NAME'        => $row['sidebar_name'],
                    'SIDEBAR_CONTENT'     => $row['sidebar_content'],
                    'SIDEBAR_POSITION'    => $row['sidebar_position'],
                ));
            }
            $this->db->sql_freeresult($result);

            $sql = 'SELECT * FROM ' . $this->anami_footer_table;
            $result = $this->db->sql_query($sql);
            while($row = $this->db->sql_fetchrow($result))
            {
                $this->template->assign_block_vars('fubl', array(
                    'FOOTER_NAME'        => $row['footer_name'],
                    'FOOTER_CONTENT'     => $row['footer_content'],
                    'FOOTER_POSITION'    => $row['footer_position'],
                ));
            }
            $this->db->sql_freeresult($result);

            $sql = 'SELECT * FROM ' . $this->anami_social_table;
            $result = $this->db->sql_query($sql);
            while($row = $this->db->sql_fetchrow($result))
            {
                $this->template->assign_block_vars('soic', array(
                    'SOCIAL_POSITION'	=> $row['social_position'],
                    'SOCIAL_URL'		=> $row['social_url'],
                    'SOCIAL_ICON'		=> $row['social_icon'],
                ));
            }
            $this->db->sql_freeresult($result);

            $sql = 'SELECT * FROM ' . $this->anami_menu_table;
            $result = $this->db->sql_query($sql);
            while($row = $this->db->sql_fetchrow($result))
            {
                $this->template->assign_block_vars('mame', array(
                    'MENU_NAME'		   => $row['menu_name'],
                    'MENU_POSITION'	   => $row['menu_position'],
                    'MENU_PARENT'	   => $row['menu_parent'],
                    'MENU_URL'		   => $row['menu_url'],
                ));
            }
            $this->db->sql_freeresult($result);
        }
    }
}
