<?
/**
 * テスト モーダル
 *
 *
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

					</dd>
					<dt>車輌No.</dt>
					<dd>

					</dd>
					<dt>地域</dt>
					<dd>

					</dd>
					<dt>ｽﾃーﾀｽ</dt>
					<dd>

					</dd>
					<dt>履歴</dt>
					<dd>

					</dd>
					<dt>緊急度</dt>
					<dd>

					</dd>
					<dt>表示順</dt>
					<dd>

					</dd>
				</dl>
			</section>
		</form>
	</div>
</div>