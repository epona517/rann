<?php

namespace App\View\Helper;
use Cake\View\Helper;

class MaterialHelper extends Helper {

	/**
	 * FontAwesome のアイコンを出力
	 *
	 * @param アイコンのキー
	 * @param ID名
	 */
	public function icon($key, $id = null) {
		$attrId = is_null($id) ? '' : 'id="' . $id . '"';
		return '<i class="fa fa-fw fa-' . $key . '" ' . $attrId . '></i>';
	}

	/**
	 * 日付に対する曜日を取得
	 *
	 * @param 日付(Y-m-d)
	 */
	public function jpWeekName($date) {
		$weekdays = array('日', '月', '火', '水', '木', '金', '土');
		return $weekdays[date('w', strtotime($date))];
	}

	/**
	 * モーダルを呼び出す際の要素出力補助
	 * 引数のIDをもとに、Elementからテンプレートの読み込みと、
	 * 識別IDを引数に渡す
	 *
	 * @param モーダル識別ID
	 */
	public function includeModal($modalId) {
		// Helper内で、Elementを使用する
		$view = $this->_View;
		return $view->element('Modal/' . $modalId, array('modalId' => $modalId));
	}
}