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

namespace lukewcs\togglectrl\controller;

class acp_togglectrl_controller
{
	protected $language;
	protected $template;
	protected $request;
	protected $config;
	protected $ext_manager;
	protected $metadata;

	public $u_action;

	public function __construct(
		\phpbb\language\language $language,
		\phpbb\template\template $template,
		\phpbb\request\request $request,
		\phpbb\config\config $config,
		\phpbb\extension\manager $ext_manager
	)
	{
		$this->language		= $language;
		$this->template		= $template;
		$this->request		= $request;
		$this->config		= $config;
		$this->ext_manager	= $ext_manager;

		$this->metadata		= $this->ext_manager->create_extension_metadata_manager('lukewcs/togglectrl')->get_metadata('all');
	}

	public function module_settings(): void
	{
		$notes = [];

		$this->language->add_lang(['acp_togglectrl', 'acp_togglectrl_lang_author'], 'lukewcs/togglectrl');
		$this->set_meta_template_vars('TOGGLECTRL');

		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('togglectrl'))
			{
				trigger_error($this->language->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			$this->config->set('togglectrl_enabled'	, $this->request->variable('togglectrl_enabled', 0));
			$this->config->set('togglectrl_type'	, $this->request->variable('togglectrl_type', 'toggle'));

			trigger_error($this->language->lang('TOGGLECTRL_MSG_SAVED_SETTINGS') . adm_back_link($this->u_action));
		}

		$lang_outdated_msg = $this->lang_ver_check_msg('TOGGLECTRL_LANG_VER', 'TOGGLECTRL_MSG_LANGUAGEPACK_OUTDATED');
		if ($lang_outdated_msg)
		{
			$notes[] = $lang_outdated_msg;
		}

		$this->template->assign_vars([
			'TOGGLECTRL_NOTES'				=> $notes,
			'TOGGLECTRL_ENABLED'			=> $this->config['togglectrl_enabled'],
			'TOGGLECTRL_TYPES' 				=> $this->select_struct($this->config['togglectrl_type'], [
				['TOGGLECTRL_TYPE_TOGGLE'	, 'toggle'],
				['TOGGLECTRL_TYPE_CHECKBOX'	, 'checkbox'],
				['TOGGLECTRL_TYPE_RADIO'	, 'radio'],
			]),
		]);

		if (!$this->config['togglectrl_enabled'])
		{
			$this->template->assign_var('TOGGLECTRL_TYPE', $this->config['togglectrl_type']);
		}

		add_form_key('togglectrl');
	}

	public function set_page_url(string $u_action): void
	{
		$this->u_action = $u_action;
	}

	private function select_struct($value, array $options_params): array
	{
		$is_array_value = is_array($value);
		$options = [];
		foreach ($options_params as $params)
		{
			$options[] = [
				'label'		=> $params[0],
				'value'		=> $params[1],
				'selected'	=> $is_array_value ? in_array($params[1], $value) : $params[1] == $value,
				'bold'		=> $params[2] ?? false,
			];
		}

		return $options;
	}

	private function set_meta_template_vars(string $tpl_prefix): void
	{
		$this->template->assign_vars([
			$tpl_prefix . '_METADATA' => [
				'EXT_NAME'		=> $this->metadata['extra']['display-name'],
				'EXT_VER'		=> $this->language->lang($tpl_prefix . '_VERSION_STRING', $this->metadata['version']),
				'LANG_DESC'		=> $this->language->lang($tpl_prefix . '_LANG_DESC'),
				'LANG_VER'		=> $this->language->lang($tpl_prefix . '_VERSION_STRING', $this->language->lang($tpl_prefix . '_LANG_VER')),
				'LANG_AUTHOR'	=> $this->language->lang($tpl_prefix . '_LANG_AUTHOR'),
				'CLASS'			=> strtolower($tpl_prefix) . '_footer',
			],
		]);
	}

	// Check the language pack version for the minimum version and generate notice if outdated
	private function lang_ver_check_msg(string $lang_version_var, string $lang_outdated_var): string
	{
		$lang_outdated_msg = '';
		preg_match('/^([0-9]+\.[0-9]+\.[0-9]+)/', $this->language->lang($lang_version_var), $matches);
		$ext_lang_ver = $matches[1] ?? '0.0.0';
		$ext_lang_min_ver = $this->metadata['extra']['lang-min-ver'];

		if (phpbb_version_compare($ext_lang_ver, $ext_lang_min_ver, '<'))
		{
			if ($this->language->is_set($lang_outdated_var))
			{
				$lang_outdated_msg = $this->language->lang($lang_outdated_var);
			}
			else // Fallback if the current language package does not yet have the required variable.
			{
				$lang_outdated_msg = 'Note: The language pack for the extension <strong>%1$s</strong> is no longer up-to-date. (installed: %2$s / needed: %3$s)';
			}
			$lang_outdated_msg = sprintf($lang_outdated_msg, $this->metadata['extra']['display-name'], $ext_lang_ver, $ext_lang_min_ver);
		}

		return $lang_outdated_msg;
	}
}
