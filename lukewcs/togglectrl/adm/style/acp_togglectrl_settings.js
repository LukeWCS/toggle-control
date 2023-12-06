/**
*
* Toggle Control. An extension for the phpBB Forum Software package.
*
* @copyright (c) 2023, LukeWCS, https://www.wcsaga.org/
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

(function () {	// IIFE start

'use strict';

var constants = Object.freeze({
	OpacityEnabled	: '1.0',
	OpacityDisabled	: '0.35',
});

function setState() {
	dimOptionGroup('togglectrl_type', !$('[name="togglectrl_enabled"]').prop('checked'));
};

function dimOptionGroup(elememtName, dimCondition) {
	var c = constants;

	$('[name="' + elememtName + '"]').parents('dl').css('opacity', dimCondition ? c.OpacityDisabled : c.OpacityEnabled);
}

function formReset() {
	setTimeout(function() {
		setState();
	});
};

$(window).ready(function () {
	setState();

	$('[name="togglectrl_enabled"]')	.on('change', setState);
	$('#togglectrl_form')				.on('reset'	, formReset);
});

})();	// IIFE end
