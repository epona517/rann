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
			<p><input name="modalA" id="modalA" type="text"></p>
			<p><input name="modalB" id="modalB" type="text"></p>
		</form>
	</div>
</div>