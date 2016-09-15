<? $myself = $this->fetch('myself'); ?>
<script>
	var common = new Common(
		'<?= h($myself) ?>',
		'<?= h(PROJECT) ?>'
	);
	<?= "var $myself = new " . ucfirst($myself) . "();"; ?>
	(function($) {
		common.init();
		<?= "$myself.init();"; ?>
	})(jQuery);
</script>