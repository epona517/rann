<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset(); ?>
	<title><?= SYS_NAME?></title>
	<!--CSS-->
	<?= $this->Html->css([
			'lib/normalize', 'lib/font-awesome/css/font-awesome.min', 'lib/jquery-ui.min'
			, 'common/commonize', 'common/forms', 'common/scale'
			, $this->fetch('myself')]); ?>
	<!--JS-->
	<?= $this->Html->script(['lib/jquery-3.1.0.min', 'lib/jquery-ui.min'
			, 'common', $this->fetch('myself')]); ?>
</head>
<body>
	<header id="header" class="header flex">
		<div>
			<h1><i class="fa fa-car"></i></h1>
			<h1><?= SYS_NAME?></h1>
			<p>Request Approval Navigation Network</p>
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