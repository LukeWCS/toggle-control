<?php
/**
*
* Toggle Control. An extension for the phpBB Forum Software package.
*
* @copyright (c) 2023, LukeWCS, https://www.wcsaga.org/
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” … „ “
//
$lang = array_merge($lang, [
	'TOGGLECTRL_CONFIG_TITLE'		=> 'Toggle Control',
	'TOGGLECTRL_CONFIG_DESC'		=> 'Here you can change the settings for the <strong>%s</strong> extension.',

	'TOGGLECTRL_SETTINGS_TITLE'		=> 'Settings',

	'TOGGLECTRL_ENABLED'			=> 'Activate function',
	'TOGGLECTRL_ENABLED_EXP'		=> 'This switch allows you to disable the functionality of this extension without having to disable the extension completely. Ideal for testing.',
	'TOGGLECTRL_TYPE'				=> 'Yes/No switch style',
	'TOGGLECTRL_TYPE_EXP'			=> 'This menu allows you to choose which style extensions should use for yes/no switches, if the extensions in question support this setting.',
	'TOGGLECTRL_TYPE_TOGGLE'		=> 'Toggle',
	'TOGGLECTRL_TYPE_CHECKBOX'		=> 'Checkbox',
	'TOGGLECTRL_TYPE_RADIO'			=> 'Radio buttons (phpBB default)',

	'TOGGLECTRL_MSG_SAVED_SETTINGS'	=> 'Toggle Control: Settings saved successfully',
]);
