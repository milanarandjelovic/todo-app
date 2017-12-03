<?php

class View
{

	/**
	 * Render template.
	 *
	 * @param string $template
	 */
	public function render($template)
	{
		include_once VIEW_PATH . 'layouts/partials/header.php';
		include_once VIEW_PATH . $template;
		include_once VIEW_PATH . 'layouts/partials/footer.php';
	}
}
