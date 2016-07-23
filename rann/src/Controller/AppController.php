<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{

	/**
	 * Initialization hook method.
	 *
	 * Use this method to add common initialization code like loading components.
	 *
	 * e.g. `$this->loadComponent('Security');`
	 *
	 * @return void
	 */
	public function initialize()
	{
		parent::initialize();

		$this->loadComponent('RequestHandler');
		$this->loadComponent('Flash');
	}

	/**
	 * Before render callback.
	 *
	 * @param \Cake\Event\Event $event The beforeRender event.
	 * @return void
	 */
	public function beforeRender(Event $event)
	{
		if (!array_key_exists('_serialize', $this->viewVars) &&
			in_array($this->response->type(), ['application/json', 'application/xml'])
		) {
			$this->set('_serialize', true);
		}
	}

	public function beforeFilter(Event $event) {

		$this->setAppForm();
	}

	private function setAppForm() {
		$app = array(
				'myself' => $this->myself,
				'viewName' => $this->viewName,
		);

		$this->set('app', $app);
	}

}
