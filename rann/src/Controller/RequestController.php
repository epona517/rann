<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Event\Event;

class RequestController extends AppController
{
	public $helpers = ['Material'];

	public $myself = 'request';
	// TODO: セッションから取得
	public $viewName = '運行依頼';

	public function initialize() {
		parent::initialize();
		$this->viewBuilder()->layout('main');
	}

	public function index() {

	}

	public function doReqest() {

	}

	public function reserve() {

	}

	public function cancel() {

	}

	public function dayChange() {

	}

	public function copyReqest() {

	}
}
