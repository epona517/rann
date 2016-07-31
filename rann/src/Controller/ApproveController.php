<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Event\Event;

class ApproveController extends AppController
{
	public $helpers = ['Material'];

	public $myself = 'approve';
	// TODO: セッションから取得
	public $viewName = '運行承認';

	public function initialize() {
		parent::initialize();
		$this->viewBuilder()->layout('main');
	}

	public function index() {

	}

	public function search() {

	}

	public function approve() {

	}

	public function reject() {

	}

	public function ajaxGetHistory() {

	}

	public function refresh() {

	}
}
