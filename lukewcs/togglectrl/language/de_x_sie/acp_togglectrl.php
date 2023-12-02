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
	'TOGGLECTRL_CONFIG_TITLE'		=> 'Schalter Steuerung',
	'TOGGLECTRL_CONFIG_DESC'		=> 'Hier können Sie die Einstellungen für die Erweiterung <strong>%s</strong> ändern.',

	'TOGGLECTRL_SETTINGS_TITLE'		=> 'Einstellungen',

	'TOGGLECTRL_ENABLED'			=> 'Funktion aktivieren',
	'TOGGLECTRL_ENABLED_EXP'		=> 'Mit diesem Schalter können Sie die Funktionalität dieser Erweiterung deaktivieren, ohne die Erweiterung komplett deaktivieren zu müssen. Ideal zum testen.',
	'TOGGLECTRL_TYPE'				=> 'Stil der Ja/Nein-Schalter',
	'TOGGLECTRL_TYPE_EXP'			=> 'Mit diesem Menü können Sie auswählen, welchen Stil die Erweiterungen bei Ja/Nein-Schaltern verwenden sollen, sofern die betreffenden Erweiterungen diese Einstellung unterstützen.',
	'TOGGLECTRL_TYPE_TOGGLE'		=> 'Schiebeschalter (Toggle)',
	'TOGGLECTRL_TYPE_CHECKBOX'		=> 'Kontrollkästchen (Checkbox)',
	'TOGGLECTRL_TYPE_RADIO'			=> 'Radio Knöpfe (phpBB Standard)',

	'TOGGLECTRL_MSG_SAVED_SETTINGS'	=> 'Toggle Control: Einstellungen erfolgreich gespeichert',
]);
