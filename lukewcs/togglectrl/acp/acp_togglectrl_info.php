<?php
/**
*
* Toggle Control. An extension for the phpBB Forum Software package.
*
* @copyright (c) 2023, LukeWCS, https://www.wcsaga.org/
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace lukewcs\togglectrl\acp;

class acp_togglectrl_info
{
	function module()
	{
		return [
			'filename'	=> '\lukewcs\togglectrl\acp\acp_togglectrl_module',
			'title'		=> 'TOGGLECTRL_NAV_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'TOGGLECTRL_NAV_CONFIG',
					'auth'	=> 'ext_lukewcs/togglectrl && acl_a_board',
					'cat'	=> ['TOGGLECTRL_NAV_TITLE'],
				],
			],
		];
	}
}
