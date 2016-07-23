<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Event\Event;

class HomeController extends AppController
{
	public $helpers = ['Material'];

	public $myself = 'home';
	// TODO: セッションから取得
	public $viewName = 'HOME';

	public function initialize() {
		parent::initialize();
		$this->viewBuilder()->layout('main');
	}

	public function index() {
		// TODO: view Master Access
		// TODO: お知らせ
		// TODO: ユーザーアカウント、権限別
		// TODO: STUB VAL
		// TODO: セッションに入れる
		$this->set('menuList', array(
				array(
					'sortNo' => 1,
					'viewKey' => 'home',
					'viewName' => 'HOME',
					'comment' => 'ホーム画面。'
								 . '各画面のリンクを表示します。'
								 . 'お知らせを表示します。',
					'controller' => 'home',
					'action' => '',
					'symbolKey' => 'home'
				),
				array(
					'sortNo' => 2,
					'viewKey' => 'request',
					'viewName' => '運行依頼',
					'comment' => '運行を計画し、依頼を行う画面。<br>'
								 . '日単位で運行の計画を表示します。',
					'controller' => 'request',
					'action' => '',
					'symbolKey' => 'paper-plane'
				),
				array(
					'sortNo' => 3,
					'viewKey' => 'approve',
					'viewName' => '運行承認',
					'comment' => '依頼された運行を確認し、'
								 . '承認や却下を行う画面。'
								 . '検索機能により、条件を指定して、'
								 . '運行の照会を行えます。',
					'controller' => 'approve',
					'action' => '',
					'symbolKey' => 'gavel'
				),
				array(
					'sortNo' => 80,
					'viewKey' => 'setting',
					'viewName' => '設定',
					'comment' => '個人設定を行う画面。'
								 . '各機能のon/offや、'
								 . 'パスワードの変更を行えます。',
					'controller' => 'setting',
					'action' => '',
					'symbolKey' => 'cog'
				),
				array(
					'sortNo' => 90,
					'viewKey' => 'login',
					'viewName' => 'ログアウト',
					'comment' => 'システムからログアウトします。<br>'
								 . '※利用終了時は必ずログアウトしてください。',
					'controller' => 'login',
					'action' => 'logout',
					'symbolKey' => 'sign-out'
				)
			)
		);
	}

}
