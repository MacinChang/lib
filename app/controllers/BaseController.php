<?php

class BaseController extends Controller {

/**
	 * layout to use
	 * @var View
	 */
	protected $layout = 'layout.index';
	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */


	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
