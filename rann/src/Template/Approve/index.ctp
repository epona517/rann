<?=
	$this->assign('myself', $app['myself']);
?>
<section id="form-approve" class="form-approve box-center">
	<form id='<?= h($app['myself']) . 'Form'?>' method="post">
		<header id="approve-header" class="approve-header clearfix">
			<section id="conditions" class="conditions card float-l">
				<dl>
					<dt>日付</dt>
					<dd>

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
				</dl>

			</section>

			<section id="options" class="options card float-l">
				<button type="button" id="button-modal" class="wdh-xs">
					モーダル
				</button>
			</section>
		</header>

		<nav id="approve-nav" class="approve-nav card">

		</nav>
	</form>
</section>
<section id="modals" class="hidden">
	<?= $this->Material->includeModal('test'); ?>
</section>