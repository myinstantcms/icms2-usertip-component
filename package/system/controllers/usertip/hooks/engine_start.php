<?php

	class onUsertipEngineStart extends cmsAction
	{

		public function run()
		{
			$options = $this->controller->getOptions();

			$options['theme'] = isset($options['theme']) ? $options['theme'] : 'TooltipBorder';

			$this->cms_template->addJS('templates/' . $this->cms_template->name . '/controllers/usertip/assets/plugins/qtip/qtip.min.js');
			$this->cms_template->addJS('templates/' . $this->cms_template->name . '/controllers/usertip/assets/js/init.min.js');

			$this->cms_template->addCSS('templates/' . $this->cms_template->name . '/controllers/usertip/assets/plugins/qtip/qtip.min.css');
			$this->cms_template->addCSS('templates/' . $this->cms_template->name . '/controllers/usertip/assets/css/style.min.css');

			return true;
		}
	}
