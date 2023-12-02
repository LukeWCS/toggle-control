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

$lang = array_merge($lang, [
	// language pack author
	'TOGGLECTRL_LANG_DESC'					=> 'Deutsch (Sie)',
	'TOGGLECTRL_LANG_VER'	 				=> '1.0.0',
	'TOGGLECTRL_LANG_AUTHOR'	 			=> 'LukeWCS',

	// messages
	'TOGGLECTRL_MSG_LANGUAGEPACK_OUTDATED'	=> 'Hinweis: Das Sprachpaket der Erweiterung <strong>%1$s</strong> ist nicht mehr aktuell. (vorhanden: %2$s / benötigt: %3$s)',
]);
