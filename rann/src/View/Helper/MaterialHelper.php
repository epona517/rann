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
}