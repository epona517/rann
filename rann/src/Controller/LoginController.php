<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Event\Event;

class LoginController extends AppController
{
	public $helpers = ['Material'];

	public $myself = 'login';

	public function initialize() {
		parent::initialize();
		$this->viewBuilder()->layout('title');
	}

	public function index() {

	}

	public function auth() {
		$this->autoRender = false;
		// TODO: 認証処理
		// TODO: セッションにユーザー情報、メッセージを格納

		// TODO: ログイン成功の場合、ホーム画面に遷移
		$this->redirect(['controller' => 'Home']);
	}

	public function logout() {
		// TODO: セッション削除処理
		$this->redirect(['action' => 'index']);
	}
}
