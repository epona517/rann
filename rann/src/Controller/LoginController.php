<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class LoginController extends AppController
{
	public function beforeFilter(Event $event) {
		parent::beforeFilter($event);
		$this->viewBuilder()->layout('login');
	}

	public function index() {

	}
}
