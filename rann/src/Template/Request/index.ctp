<?=
	$this->assign('myself', $app['myself']);
?>
<section id="form-request" class="form-request box-center">
	<form id='<?= h($app['myself']) . 'Form'?>' method="post">
		<header id="request-header" class="request-header clearfix">
			<section id="date" class="date card float-l clearfix flex">
				<div class="date-inner date-prev float-l tx-center">
					<button type="button" id="button-prev" class="wdh-xl">
						<?= $this->Material->icon('arrow-circle-left') ?>
						前日
					</button>
				</div>
				<div class="date-inner date-select float-l tx-center">
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
					?>
					<div class="button-confirm">
						<button type="button" id="button-confirm" class="wdh-xl">
							表示
						</button>
					</div>
				</div>
				<div class="date-inner date-next float-l tx-center">
					<button type="button" id="button-next" class="wdh-xl">
						翌日
						<?= $this->Material->icon('arrow-circle-right') ?>
					</button>
				</div>
			</section>
			<section id="user" class="user float-l">
				<section id="customer" class="customer card">
					<?= $this->Material->icon('user') ?>
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
				</section>
				<section id="car" class="car card">
					<?= $this->Material->icon('car') ?>
					<?=
						$this->Form->input('form.carNumber', [
							'type' => 'select',
							'options' => array('1' => 'その1', '2' => 'その2', '3' => 'その3'),
							'selected' => '2',
							'class' => 'wdh-xxl',
							// 空白を許可
							// TODO: モードによって切り替え
							// 'empty' => true
						]);
					?>
				</section>
			</section>
		</header>

		<nav id="request-nav" class="request-nav clearfix">
			<section id="action" class="action card float-l">
				<ul class="action-buttons clearfix">
					<li class="float-l wdh-xs">
						<button type="button" id="button-plus" class="wdh-full">
							<?= $this->Material->icon('plus-square') ?>
							行追加
						</button>
					</li>
					<li class="float-l wdh-xs">
						<button type="button" id="button-preserve" class="wdh-full">
							<?= $this->Material->icon('floppy-o') ?>
							保存
						</button>
					</li>
					<li class="float-l wdh-xs">
						<button type="button" id="button-request" class="wdh-full">
							<?= $this->Material->icon('car') ?>
							依頼
						</button>
					</li>
					<li class="float-l wdh-xs">
						<button type="button" id="button-cancel" class="wdh-full">
							<?= $this->Material->icon('ban'); ?>
							ｷｬﾝｾﾙ
						</button>
					</li>
				</ul>
			</section>

			<section id="copy" class="copy card float-l">
				<ul class="clearfix">
					<li class="float-l wdh-m">
						<?=
							// コピー日付
							$this->Form->input('form.copyDate', [
								'type' => 'text',
								'value' => date('Y/m/d'),
								'maxlength' => 10,
								'class' => 'wdh-full',
								'placeholder' => 'コピー元日付',
								'div' => false,
							]);
						?>
					</li>
					<li class="float-l wdh-s">
						<button type="button" id="button-copy"
								class="wdh-full">
							<?= $this->Material->icon('copy'); ?>
							コピー
						</button>
					</li>
				</ul>
			</section>
		</nav>

		<? $size = 5; ?>
		<section id="requests" class="requests card">
			<? for ($i = 0; $i < $size; $i++) : ?>
				<section class="clearfix zebra">
					<ul class="flex">
						<li class="target float-l">
							<?=
								$this->Form->input("form.$i.target", [
									'type' => 'checkbox',
									'value' => '',
									'id' => "check-session-$i",
									'label' => [
										'class' => 'label-target',
										'text' => ''
									],
									'checked' => false,
									'hiddenField' => false
								]);
							?>
						</li>
						<li class="editing float-l">
							<?= $this->Material->icon('pencil') ?>
						</li>
						<li class="from float-l">
							<?=
								// 開始時刻
								$this->Form->hour("form.$i.from", [
									'value' => '0',
									'class' => 'form-time form-hour',
									'empty' => false
								]);
							?>
							<span>:</span>
							<?=
								$this->Form->minute("form.$i.from", [
									'value' => '0',
									'class' => 'form-time form-minute',
									'empty' => false,
									'interval' => 5
								]);
							?>
						</li>
						<li class="time-separator  float-l">
							<?= $this->Material->icon('chevron-right') ?>
						</li>
						<li class="from float-l">
							<?=
								// 終了時刻
								$this->Form->hour("form.$i.to", [
									'value' => '0',
									'class' => 'form-time form-hour',
									'empty' => false
								]);
							?>
							<span>:</span>
							<?=
								$this->Form->minute("form.$i.to", [
									'value' => '0',
									'class' => 'form-time form-minute',
									'empty' => false,
									'interval' => 5
								]);
							?>
						</li>
						<li class="destination float-l">
							<?=
								// 目的地
								$this->Form->input("form.$i.destination", [
									'type' => 'text',
									'value' => '',
									'maxlength' => 240,
									'class' => 'wdh-full',
									'placeholder' => '目的地',
									'label' =>false
								]);
							?>
						</li>
						<li class="status float-l">
							<div class="status status-00 wdh-xl">
								新規
							</div>
						</li>
						<li class="history float-l">
							<?= $this->Material->icon('history'); ?>
						</li>
					</ul>
				</section>
			<? endfor; ?>
		</section>
	</form>
</section>