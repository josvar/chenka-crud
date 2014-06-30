<?php namespace Backend;

class BaseController extends \Controller {

    function __construct()
    {
        $this->beforeFilter('backend.auth');
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
    }

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
