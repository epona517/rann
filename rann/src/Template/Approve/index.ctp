<?=
	$this->assign('myself', $app['myself']);
?>
<section id="form-approve" class="form-approve box-center">
	<form id='<?= h($app['myself']) . 'Form'?>' method="post">
		<header id="approve-header" class="approve-header">
			<section id="conditions" class="conditions card clearfix">
				<dl>
					<dt>日付</dt>
					<dd id="date">
						2016年9月10日〜2016年10月11日
					</dd>
				</dl>
				<dl>
					<dt>顧客名</dt>
					<dd id="customer-name">
						おきゃくさん
					</dd>
				</dl>
				<dl>
					<dt>車輌No.</dt>
					<dd id="car-no">
						おくるま
					</dd>
				</dl>
				<dl>
					<dt>地域</dt>
					<dd id="area">
						大阪
					</dd>
				</dl>
				<dl>
					<dt>状態</dt>
					<dd id="status">
						依頼中
					</dd>
				</dl>
				<dl>
					<dt>履歴</dt>
					<dd id="history">
						ON
					</dd>
				</dl>
				<dl>
					<dt>緊急度</dt>
					<dd id="deadline">
						高
					</dd>
				</dl>
				<dl>
					<dt>表示順</dt>
					<dd id="order">
						顧客順
					</dd>
				</dl>
				<div id="search" class="search">
					<button type="button" id="button-set-conditions" class="wdh-full">
						<?= $this->Material->icon('search-plus'); ?>
						設定
					</button>
				</div>
			</section>
		</header>

		<nav id="approve-nav" class="approve-nav card">

		</nav>
	</form>
</section>
<section id="modals" class="hidden">
	<?= $this->Material->includeModal('approve_search'); ?>
</section>