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

namespace lukewcs\togglectrl;

class ext extends \phpbb\extension\base
{
	public function is_enableable()
	{
		$valid_phpbb = phpbb_version_compare(PHPBB_VERSION, '3.3.0', '>=') && phpbb_version_compare(PHPBB_VERSION, '3.4.0-dev', '<');
		$valid_php = phpbb_version_compare(PHP_VERSION, '7.4.0', '>=') && phpbb_version_compare(PHP_VERSION, '8.5.0-dev', '<');

		return $valid_phpbb && $valid_php;
	}
}
