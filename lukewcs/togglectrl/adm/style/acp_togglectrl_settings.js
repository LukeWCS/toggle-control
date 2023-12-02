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
	var c = constants;

	$('#togglectrl_opt_type').css('opacity', (
			$('input[name="togglectrl_enabled"]').prop('checked')
		) ? c.OpacityEnabled : c.OpacityDisabled
	);
};

$(window).ready(function () {
	setState();

	$('input[name="togglectrl_enabled"]').on('change', setState);
});

})();	// IIFE end
