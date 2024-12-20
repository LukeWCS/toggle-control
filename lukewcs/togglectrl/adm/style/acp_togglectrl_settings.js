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

(function ($) {

'use strict';

const constants = Object.freeze({
	OpacityEnabled	: '1.0',
	OpacityDisabled	: '0.35',
});

function setState() {
	dimOptionGroup('[name="togglectrl_type"]', !$('[name="togglectrl_enabled"]').prop('checked'));
};

function dimOptionGroup(selector, dimCondition) {
	const c = constants;

	$(selector).parents('dl').css('opacity', dimCondition ? c.OpacityDisabled : c.OpacityEnabled);
}

function formReset() {
	setTimeout(function() {
		setState();
	});
};

function disableEnter(e) {
	if (e.key == 'Enter' && e.target.type != 'textarea') {
		return false;
	}
};

$(window).ready(function () {
	setState();

	$('#togglectrl_settings')			.on('keypress'	, disableEnter);
	$('#togglectrl_settings')			.on('reset'		, formReset);
	$('[name="togglectrl_enabled"]')	.on('change'	, setState);
});

})(jQuery);
