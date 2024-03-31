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

namespace lukewcs\togglectrl\migrations;

class v_1_0_0 extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\phpbb\db\migration\data\v32x\v3210'];
	}

	public function update_data()
	{
		return [
			['config.add', ['togglectrl_enabled'	, 1]],
			['config.add', ['togglectrl_type'		, 'toggle']],
			['module.add', [
				'acp',
				'ACP_CAT_DOT_MODS',
				'TOGGLECTRL_NAV_TITLE'
			]],
			['module.add', [
				'acp',
				'TOGGLECTRL_NAV_TITLE', [
					'module_basename'	=> '\lukewcs\togglectrl\acp\acp_togglectrl_module',
					'module_langname'	=> 'TOGGLECTRL_NAV_CONFIG',
					'module_mode'		=> 'settings',
					'module_auth'		=> 'ext_lukewcs/togglectrl && acl_a_board',
				],
			]],
		];
	}
}
