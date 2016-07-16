<?=
	$this->assign('myself', 'login');
?>

<section id="form-login" class="box-center card">
	<p>
		<?=
		// ログインID
		$this->Form->text('loginId', [
			'value' => '',
			'maxlength' => 12,
			'class' => 'wdh-xl login-text',
			'placeholder' => 'ログインID'
		]);
		?>
	</p>
	<p>
		<?=
		// パスワード
		$this->Form->password('loginPassword', [
			'value' => '',
			'maxlength' => 16,
			'class' => 'wdh-xl login-text',
			'placeholder' => 'パスワード'
		]);
		?>
	</p>
	<p class="form-login_right">
		<button type="button" id="button-login" class="wdh-m mortion mortion-whiteout">
			<i class="fa fa-fw fa-sign-in"></i>
			ログイン
		</button>
	</p>
	<p class="form-login_left">
		<input type="checkbox" id="check-session">
		<label for="check-session" class="checkbox">ログインしたまま</label>
	</p>
</section>