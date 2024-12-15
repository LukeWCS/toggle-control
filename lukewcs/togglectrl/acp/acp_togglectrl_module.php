<?php
/**
*
* Toggle Control. An extension for the phpBB Forum Software package.
*
* @copyright (c) 2023, LukeWCS, https://www.wcsaga.org/
* @license GNU General Public License, version 2 (GPL-2.0)
*
* Note: This extension is 100% genuine handcraft and consists of selected
*       natural raw materials. There was no AI involved in making it.
*
*/

namespace lukewcs\togglectrl\acp;

class acp_togglectrl_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main()
	{
		global $phpbb_container;

		$language = $phpbb_container->get('language');
		$this->tpl_name = 'acp_togglectrl_settings';
		$this->page_title = $language->lang('TOGGLECTRL_NAV_TITLE') . ' - ' . $language->lang('TOGGLECTRL_NAV_CONFIG');

		$acp_controller = $phpbb_container->get('lukewcs.togglectrl.controller.acp');
		$acp_controller->set_page_url($this->u_action);
		$acp_controller->module_settings();
	}
}
