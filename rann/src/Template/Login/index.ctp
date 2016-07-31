<?=
	$this->assign('myself', $app['myself']);
?>
<section id="form-login" class="form-login box-center card">
	<form id='<?= h($app['myself']) . 'Form'?>' method="post">
		<p>
			<?=
				// ログインID
				$this->Form->text('form.loginId', [
					'value' => '',
					'id' => 'loginId',
					'maxlength' => 12,
					'class' => 'wdh-xl login-text js_enterSubmit',
					'placeholder' => 'ログインID'
				]);
			?>
		</p>
		<p>
			<?=
				// パスワード
				$this->Form->password('form.loginPassword', [
					'value' => '',
					'id' => 'loginPassword',
					'maxlength' => 16,
					'class' => 'wdh-xl login-text js_enterSubmit',
					'placeholder' => 'パスワード'
				]);
			?>
		</p>
		<p class="form-login_right">
			<button type="button" id="button-login" class="wdh-m mortion mortion-whiteout">
				<?= $this->Material->icon('sign-in') ?>
				ログイン
			</button>
		</p>
		<p class="form-login_left">
			<?=
				$this->Form->input('form.session', [
					'type' => 'checkbox',
					'value' => '',
					'id' => 'check-session',
					'label' => [
						'class' => 'checkbox',
						'text' => 'ログインしたまま'
					],
					'hiddenField' => false
				]);
			?>
		</p>
	</form>
</section>