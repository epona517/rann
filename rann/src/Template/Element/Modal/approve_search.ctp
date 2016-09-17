<?
/**
 * 運行承認 検索モーダル
 */
?>
<? $id = "modal_" . $modalId; ?>
<div id="<?= $id ?>" class="hidden">
	<div class="modal <?= $id ?>">
		<form name="<?= $id ?>" id="<?= $id ?>Form">
			<section class="form-table">
				<dl>
					<dt>日付</dt>
					<dd>
					<?
						$labelY = '年';
						echo $this->Form->year('form.year', [
							'value' => '',
							'class' => 'date-year',
							'data-default' => date('Y'),
							'empty' => false,
							'minYear' => date('Y') - 1,
							'maxYear' => date('Y') + 1
						])
						. '<span>' . $labelY . '</span>';
						// 月
						$labelM = '月';
						echo $this->Form->month('form.month', [
							'value' => '',
							'class' => 'date-month',
							'data-default' => date('m'),
							'monthNames' => false,
							'empty' => false,
						])
						. '<span>' . $labelM . '</span>';
						// 日
						$labelD = '日';
						echo $this->Form->day('form.day', [
							'value' => '',
							'class' => 'date-day',
							'data-default' => date('d'),
							'empty' => false,
						])
						. '<span>' . $labelD . '</span>';
						// 曜日
						echo '<span>('
							. $this->Material->jpWeekName(date('Y-m-d'))
							. ')</span>';
						echo $this->Form->year('form.year', [
							'value' => '',
							'class' => 'date-year',
							'data-default' => date('Y'),
							'empty' => false,
							'minYear' => date('Y') - 1,
							'maxYear' => date('Y') + 1
						])
						. '<span>' . $labelY . '</span>';
						// 月
						echo $this->Form->month('form.month', [
							'value' => '',
							'class' => 'date-month',
							'data-default' => date('m'),
							'monthNames' => false,
							'empty' => false,
						])
						. '<span>' . $labelM . '</span>';
						// 日
						echo $this->Form->day('form.day', [
							'value' => '',
							'class' => 'date-day',
							'data-default' => date('d'),
							'empty' => false,
						])
						. '<span>' . $labelD . '</span>';
						// 曜日
						echo '<span>('
							. $this->Material->jpWeekName(date('Y-m-d'))
							. ')</span>';
					?>
					</dd>
					<dt>顧客名</dt>
					<dd>
						<?=
							// 顧客名
							$this->Form->input('form.customerName', [
								'type' => 'text',
								'value' => '',
								'maxlength' => 45,
								'class' => 'wdh-xxl',
								'placeholder' => '顧客名',
							]);
						?>
					</dd>
					<dt>車輌No.</dt>
					<dd>
						<?=
							$this->Form->input('form.carNumber', [
								'type' => 'select',
								'options' => array('1' => 'その1', '2' => 'その2', '3' => 'その3'),
								'value' => '',
								'class' => 'wdh-xxl',
								// 空白を許可
								'empty' => true
							]);
						?>
					</dd>
					<dt>地域</dt>
					<dd>
						<?=
							$this->Form->input('form.area', [
								'type' => 'select',
								'options' => array('1' => '大阪', '2' => '東京'),
								'value' => '1',
								'class' => 'wdh-s',
								'empty' => true
							]);
						?>
					</dd>
					<dt>ｽﾃーﾀｽ</dt>
					<dd>
						<?=
							$this->Form->input('form.status', [
								'type' => 'select',
								'options' => array(
									'00' => '保存中',
									'10' => '依頼中',
									'20' => '承認済',
									'30' => '却下済',
								),
								'value' => '10',
								'class' => 'wdh-s',
								'empty' => true
							]);
						?>
					</dd>
					<dt>履歴</dt>
					<!--<dd class="js-btn-group">-->
					<dd>
						<span class="js-btn-group">
							<?=
								$this->Form->input('form.history', [
									'type' => 'radio',
									'value' => '1',
									'class' => 'switch',
									'options' => array(
										'1' => 'ON',
										'0' => 'OFF'
									),
									'hiddenField' => false
								]);
							?>
						</span>
					</dd>
					<dt>緊急度</dt>
					<dd>
						<span class="js-btn-group">
							<?=
								$this->Form->input('form.deadline', [
									'type' => 'radio',
									'value' => '20',
									'class' => 'switch',
									'options' => array(
										'10' => '高',
										'20' => '通常',
										'30' => '低'
									),
									'hiddenField' => false
								]);
							?>
						</span>
					</dd>
					<dt>表示順</dt>
					<dd>
						<?=
							$this->Form->input('form.order', [
								'type' => 'select',
								'options' => array(
									'10' => '顧客ID',
									'20' => '運行日時',
									'30' => '依頼日時'
								),
								'value' => '10',
								'class' => 'wdh-s',
								'empty' => true
							]);
						?>
					</dd>
				</dl>
			</section>
		</form>
	</div>
</div>