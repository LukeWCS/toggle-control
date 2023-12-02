<?php
/**
*
* Toggle Control. An extension for the phpBB Forum Software package.
*
* @copyright (c) 2023, LukeWCS, https://www.wcsaga.org/
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace lukewcs\togglectrl\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	protected $config;
	protected $template;

	public function __construct(
		\phpbb\config\config $config,
		\phpbb\template\template $template
	)
	{
		$this->config	= $config;
		$this->template	= $template;
	}

	public static function getSubscribedEvents()
	{
		return [
			'core.adm_page_header'						=> 'generate_template_vars',
			'core.modify_mcp_modules_display_option'	=> 'generate_template_vars',
			'core.ucp_display_module_before'			=> 'generate_template_vars',
		];
	}

	public function generate_template_vars($event)
	{
		if ($this->config['togglectrl_enabled'])
		{
			$this->template->assign_vars([
				'TOGGLECTRL_TYPE' => $this->config['togglectrl_type'],
			]);
		}
	}
}
