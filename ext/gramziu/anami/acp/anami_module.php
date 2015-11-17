<?php

namespace gramziu\anami\acp;

class anami_module
{
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $db, $user, $auth, $template;
		global $phpbb_root_path, $phpbb_admin_path, $phpEx, $table_prefix;

		$user->add_lang_ext('gramziu/anami', 'info_acp_anami');

		$action = request_var('action', '');
		$submit = (isset($_POST['submit'])) ? true : false;
		$add = (isset($_POST['add'])) ? true : false;
		$delete = (isset($_POST['delete'])) ? true : false;

		$form_name = 'acp_tcp';
		add_form_key($form_name);

		switch ($mode)
		{
			case 'main':
				$anami_width = request_var('anami_width', $config['anami_width']);
				$anami_layout = request_var('anami_layout', $config['anami_layout']);
				$anami_header = request_var('anami_header', $config['anami_header']);
				$anami_font = request_var('anami_font', $config['anami_font']);

				$anami_font_c = str_replace(' ', '+', $anami_font);

				$anami_cm = request_var('anami_cm', $config['anami_cm']);
				$anami_ct = request_var('anami_ct', $config['anami_ct']);
				$anami_cl = request_var('anami_cl', $config['anami_cl']);
				$anami_cl_h = request_var('anami_cl_h', $config['anami_cl_h']);
				$anami_cb = request_var('anami_cb', $config['anami_cb']);

				if ($submit)
				{
					if (!check_form_key($form_name))
					{
						trigger_error($user->lang['FORM_INVALID']. adm_back_link($this->u_action), E_USER_WARNING);
					}

					$error = array();

					$message = $user->lang['ACP_TCP_SETTINGS_CHANGED'];
					$log = 'ACP_TCP_SETTINGS_CHANGED';

					set_config('anami_width', $anami_width);
					set_config('anami_layout', $anami_layout);
					set_config('anami_header', $anami_header);
					set_config('anami_font', $anami_font);
					set_config('anami_cm', $anami_cm);
					set_config('anami_ct', $anami_ct);
					set_config('anami_cl', $anami_cl);
					set_config('anami_cl_h', $anami_cl_h);
					set_config('anami_cb', $anami_cb);

					add_log('admin', 'LOG_' . $log);
					trigger_error($message . adm_back_link($this->u_action));
				}

				$template->assign_vars(array(
					'S_MAIN'			=> true,
					'ANAMI_WIDTH'		=> $anami_width,
					'ANAMI_LAYOUT'		=> $anami_layout,
					'ANAMI_HEADER'		=> $anami_header,
					'ANAMI_FONT'		=> $anami_font,
					'ANAMI_FONT_C'		=> $anami_font_c,
					'ANAMI_CM'			=> $anami_cm,
					'ANAMI_CT'			=> $anami_ct,
					'ANAMI_CL'			=> $anami_cl,
					'ANAMI_CL_H'		=> $anami_cl_h,
					'ANAMI_CB'			=> $anami_cb,
					)
				);
			break;

			case 'sidebar':
				$sql = 'SELECT * FROM ' . $table_prefix . 'anami_sidebar';
				$result = $db->sql_query($sql);
				while($row = $db->sql_fetchrow($result))
				{
					$template->assign_block_vars('siba', array(
						'SIDEBAR_NAME'		=> $row['sidebar_name'],
						'SIDEBAR_CONTENT'	=> $row['sidebar_content'],
						'SIDEBAR_POSITION'	=> $row['sidebar_position'],
					));
				}
				$db->sql_freeresult($result);

				$anami_sidebar = request_var('anami_sidebar', $config['anami_sidebar']);

				if ($submit)
				{
					if (!check_form_key($form_name))
					{
						trigger_error($user->lang['FORM_INVALID']. adm_back_link($this->u_action), E_USER_WARNING);
					}

					$error = array();

					$message = $user->lang['ACP_TCP_SETTINGS_CHANGED'];
					$log = 'ACP_TCP_SETTINGS_CHANGED';

					$sidebar_name = htmlspecialchars_decode(utf8_normalize_nfc(request_var('sidebar_name', sidebar_name, true)));
					$sidebar_content = htmlspecialchars_decode(utf8_normalize_nfc(request_var('sidebar_content', sidebar_content, true)));
					$sidebar_position = request_var('sidebar_position', sidebar_position);

					$sql_ary = array(
						'sidebar_name'		=> $sidebar_name,
						'sidebar_content'	=> $sidebar_content,
					);

					$sql = 'UPDATE ' . $table_prefix . anami_sidebar . '
							SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
							WHERE sidebar_position = ' . (int) $sidebar_position;
					$db->sql_query($sql);

					set_config('anami_sidebar', $anami_sidebar);

					add_log('admin', 'LOG_' . $log);
					trigger_error($message . adm_back_link($this->u_action));
				}

				if ($add)
				{
					if (!check_form_key($form_name))
					{
						trigger_error($user->lang['FORM_INVALID']. adm_back_link($this->u_action), E_USER_WARNING);
					}

					$error = array();

					$message = $user->lang['ACP_TCP_SETTINGS_CHANGED'];
					$log = 'ACP_TCP_SETTINGS_CHANGED';

					$sql_ary = array(
						'sidebar_name'        => '',
						'sidebar_content'     => '',
					);

					$sql = 'INSERT INTO ' . $table_prefix . anami_sidebar . ' ' . $db->sql_build_array('INSERT', $sql_ary);
					$db->sql_query($sql);

					add_log('admin', 'LOG_' . $log);
					trigger_error($message . adm_back_link($this->u_action));
				}

				if ($delete)
				{
					if (!check_form_key($form_name))
					{
						trigger_error($user->lang['FORM_INVALID']. adm_back_link($this->u_action), E_USER_WARNING);
					}

					$error = array();

					$message = $user->lang['ACP_TCP_SETTINGS_CHANGED'];
					$log = 'ACP_TCP_SETTINGS_CHANGED';

					$sidebar_position = request_var('sidebar_position', sidebar_position);

					$sql = 'DELETE FROM ' . $table_prefix . anami_sidebar . ' 
							WHERE ' . $db->sql_in_set('sidebar_position', $sidebar_position);
					$db->sql_query($sql);



					add_log('admin', 'LOG_' . $log);
					trigger_error($message . adm_back_link($this->u_action));
				}

				$template->assign_vars(array(
					'S_SIDEBAR'			=> true,
					'ANAMI_SIDEBAR'		=> $anami_sidebar,
					)
				);
			break;

			case 'footer_blocks':
				$sql = 'SELECT * FROM ' . $table_prefix . 'anami_footer';
				$result = $db->sql_query($sql);
				while($row = $db->sql_fetchrow($result))
				{
					$template->assign_block_vars('fubl', array(
						'FOOTER_NAME'		=> $row['footer_name'],
						'FOOTER_CONTENT'	=> $row['footer_content'],
						'FOOTER_POSITION'	=> $row['footer_position'],
					));
				}
				$db->sql_freeresult($result);

				$anami_footer = request_var('anami_footer', $config['anami_footer']);

				if ($submit)
				{
					if (!check_form_key($form_name))
					{
						trigger_error($user->lang['FORM_INVALID']. adm_back_link($this->u_action), E_USER_WARNING);
					}

					$error = array();

					$message = $user->lang['ACP_TCP_SETTINGS_CHANGED'];
					$log = 'ACP_TCP_SETTINGS_CHANGED';

					$footer_name = htmlspecialchars_decode(utf8_normalize_nfc(request_var('footer_name', footer_name, true)));
					$footer_content = htmlspecialchars_decode(utf8_normalize_nfc(request_var('footer_content', footer_content, true)));
					$footer_position = request_var('footer_position', footer_position);

					$sql_ary = array(
						'footer_name'		=> $footer_name,
						'footer_content'	=> $footer_content,
					);

					$sql = 'UPDATE ' . $table_prefix . anami_footer . '
							SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
							WHERE footer_position = ' . (int) $footer_position;
					$db->sql_query($sql);

					set_config('anami_footer', $anami_footer);

					add_log('admin', 'LOG_' . $log);
					trigger_error($message . adm_back_link($this->u_action));
				}

				$template->assign_vars(array(
					'S_FOOTER_BLOCKS'	=> true,
					'ANAMI_FOOTER'		=> $anami_footer,
					)
				);
			break;

			case 'social_icons':
				$sql = 'SELECT * FROM ' . $table_prefix . 'anami_social';
				$result = $db->sql_query($sql);
				while($row = $db->sql_fetchrow($result))
				{
					$template->assign_block_vars('soic', array(
						'SOCIAL_POSITION'	=> $row['social_position'],
						'SOCIAL_URL'		=> $row['social_url'],
						'SOCIAL_ICON'		=> $row['social_icon'],
					));
				}
				$db->sql_freeresult($result);

				if ($submit)
				{
					if (!check_form_key($form_name))
					{
						trigger_error($user->lang['FORM_INVALID']. adm_back_link($this->u_action), E_USER_WARNING);
					}

					$error = array();

					$message = $user->lang['ACP_TCP_SETTINGS_CHANGED'];
					$log = 'ACP_TCP_SETTINGS_CHANGED';

					$social_position = request_var('social_position', social_position);
					$social_url = htmlspecialchars_decode(utf8_normalize_nfc(request_var('social_url', social_url, true)));
					$social_icon = request_var('social_icon', social_icon);

					$sql_ary = array(
						'social_url'		=> $social_url,
						'social_icon'		=> $social_icon,
					);

					$sql = 'UPDATE ' . $table_prefix . anami_social . '
							SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
							WHERE social_position = ' . (int) $social_position;
					$db->sql_query($sql);

					add_log('admin', 'LOG_' . $log);
					trigger_error($message . adm_back_link($this->u_action));
				}

				if ($add)
				{
					if (!check_form_key($form_name))
					{
						trigger_error($user->lang['FORM_INVALID']. adm_back_link($this->u_action), E_USER_WARNING);
					}

					$error = array();

					$message = $user->lang['ACP_TCP_SETTINGS_CHANGED'];
					$log = 'ACP_TCP_SETTINGS_CHANGED';

					$sql_ary = array(
						'social_url'		=> '',
						'social_icon'		=> '',
					);

					$sql = 'INSERT INTO ' . $table_prefix . anami_social . ' ' . $db->sql_build_array('INSERT', $sql_ary);
					$db->sql_query($sql);

					add_log('admin', 'LOG_' . $log);
					trigger_error($message . adm_back_link($this->u_action));
				}

				if ($delete)
				{
					if (!check_form_key($form_name))
					{
						trigger_error($user->lang['FORM_INVALID']. adm_back_link($this->u_action), E_USER_WARNING);
					}

					$error = array();

					$message = $user->lang['ACP_TCP_SETTINGS_CHANGED'];
					$log = 'ACP_TCP_SETTINGS_CHANGED';

					$social_position = request_var('social_position', social_position);

					$sql = 'DELETE FROM ' . $table_prefix . anami_social . ' 
							WHERE ' . $db->sql_in_set('social_position', $social_position);
					$db->sql_query($sql);



					add_log('admin', 'LOG_' . $log);
					trigger_error($message . adm_back_link($this->u_action));
				}

				$template->assign_vars(array(
					'S_SOCIAL_ICONS'	=> true,
					)
				);
			break;

			case 'main_menu':
				$sql = 'SELECT * FROM ' . $table_prefix . 'anami_menu';
				$result = $db->sql_query($sql);
				while($row = $db->sql_fetchrow($result))
				{
					$template->assign_block_vars('mame', array(
						'MENU_NAME'       => $row['menu_name'],
						'MENU_POSITION'   => $row['menu_position'],
						'MENU_PARENT'     => $row['menu_parent'],
						'MENU_URL'        => $row['menu_url'],
					));
				}
				$db->sql_freeresult($result);

				if ($submit)
				{
					if (!check_form_key($form_name))
					{
						trigger_error($user->lang['FORM_INVALID']. adm_back_link($this->u_action), E_USER_WARNING);
					}

					$error = array();

					$message = $user->lang['ACP_TCP_SETTINGS_CHANGED'];
					$log = 'ACP_TCP_SETTINGS_CHANGED';

					$menu_name = htmlspecialchars_decode(utf8_normalize_nfc(request_var('menu_name', menu_name, true)));
					$menu_position = request_var('menu_position', menu_position);
					$menu_url = htmlspecialchars_decode(utf8_normalize_nfc(request_var('menu_url', menu_url, true)));

					$sql_ary = array(
						'menu_name'		=> $menu_name,
						'menu_url'		=> $menu_url,
					);

					$sql = 'UPDATE ' . $table_prefix . anami_menu . '
							SET ' . $db->sql_build_array('UPDATE', $sql_ary) . '
							WHERE menu_position = ' . (int) $menu_position;
					$db->sql_query($sql);

					add_log('admin', 'LOG_' . $log);
					trigger_error($message . adm_back_link($this->u_action));
				}

				if ($add)
				{
					if (!check_form_key($form_name))
					{
						trigger_error($user->lang['FORM_INVALID']. adm_back_link($this->u_action), E_USER_WARNING);
					}

					$error = array();

					$message = $user->lang['ACP_TCP_SETTINGS_CHANGED'];
					$log = 'ACP_TCP_SETTINGS_CHANGED';

					$sql_ary = array(
						'menu_name'		=> '',
						'menu_url'		=> '',
					);

					$sql = 'INSERT INTO ' . $table_prefix . anami_menu . ' ' . $db->sql_build_array('INSERT', $sql_ary);
					$db->sql_query($sql);

					add_log('admin', 'LOG_' . $log);
					trigger_error($message . adm_back_link($this->u_action));
				}

				if ($delete)
				{
					if (!check_form_key($form_name))
					{
						trigger_error($user->lang['FORM_INVALID']. adm_back_link($this->u_action), E_USER_WARNING);
					}

					$error = array();

					$message = $user->lang['ACP_TCP_SETTINGS_CHANGED'];
					$log = 'ACP_TCP_SETTINGS_CHANGED';

					$menu_position = request_var('menu_position', menu_position);

					$sql = 'DELETE FROM ' . $table_prefix . anami_menu . ' 
							WHERE ' . $db->sql_in_set('menu_position', $menu_position);
					$db->sql_query($sql);

					add_log('admin', 'LOG_' . $log);
					trigger_error($message . adm_back_link($this->u_action));
				}

				$template->assign_vars(array(
					'S_MAIN_MENU'	=> true,
					)
				);
			break;

			default:
				trigger_error('NO_MODE', E_USER_ERROR);
			break;
		}

		$this->tpl_name = 'acp_tcp';
		$this->page_title = 'ACP_TCP';
	}
}

?>