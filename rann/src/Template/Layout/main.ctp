<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset(); ?>
	<title><?= SYS_NAME ?></title>
	<!--CSS-->
	<?= $this->Html->css([
			'lib/normalize', 'lib/font-awesome/css/font-awesome.min'
			, 'common/commonize', 'common/forms', 'common/scale'
			, 'main/header', 'main/nav'
			, $this->fetch('myself')]); ?>
	<!--JS-->
	<?= $this->Html->script(['lib/jquery-3.1.0.min'
			, 'common', $this->fetch('myself')]); ?>
</head>
<body>
	<header id="header" class="header">
		<div>
			<h2 class="system-name"><?= SYS_NAME ?></h2>
			<h1 class="view-name"><?= h($app['viewName']) ?></h1>
			<p class="header-action">
				<span><?= $this->Material->icon('cog', 'config') ?></span>
				<span><?= $this->Material->icon('question-circle', 'help') ?></span>
			</p>
		</div>
	</header>

	<nav id="nav" class="nav"></nav>

	<div id="main" class="main">
		<?= $this->fetch('content') ?>
	</div>

	<footer id="footer" class="footer">

	</footer>

	<section id="hidden" class="hidden">

		<!--Hidden-->
		<?= $this->Form->hidden('', [
			'id' => 'myself',
			'value' => $this->fetch('myself')
		]); ?>
		<?= $this->Form->hidden('', [
			'id' => 'root',
			'value' => PROJECT
		]); ?>

		<!--Javascript-->
		<?= $this->element('initScript') ?>
	</section>
</body>
</html>