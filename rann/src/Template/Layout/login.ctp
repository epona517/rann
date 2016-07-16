<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset(); ?>
	<title>RANN</title>
	<!--CSS-->
	<?= $this->Html->css([
			'lib/normalize', 'lib/font-awesome/css/font-awesome.min'
			, 'common/commonize', 'common/forms', 'common/scale'
			, $this->fetch('myself')]); ?>
	<!--JS-->
	<?= $this->Html->script(['lib/jquery-3.1.0.min'
			, 'common', $this->fetch('myself')]); ?>
</head>
<body>
	<header id="header" class="flex">
		<div>
			<h1><i class="fa fa-car"></i></h1>
			<h1>RANN</h1>
			<p>Request Approval Navigation Network</p>
		</div>
	</header>

	<nav id="nav"></nav>

	<div id="main">
		<?= $this->fetch('content') ?>
	</div>

	<footer id="footer">

	</footer>

	<section id="hidden" class="hidden">

		<!--Javascript-->
		<?=
		$this->element('initScript');
		?>
	</section>
</body>
</html>