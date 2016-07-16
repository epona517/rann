<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset(); ?>
	<title>RANN</title>
	<?= $this->Html->css(['lib/normalize', 'lib/font-awesome/css/font-awesome.min'
			, 'commonize', $this->fetch('myself')]); ?>
	<?= $this->Html->script(['lib/jquery-3.1.0.min'
			, 'common', $this->fetch('myself')]); ?>
</head>
<body>
	<header id="header">
		<h1>RANN
	</header>

	<nav id="nav">

	</nav>

	<div id="main">
		<?= $this->fetch('content') ?>
	</div>

	<footer id="footer">

	</footer>

	<!--Javascript-->
	<?php
		echo $this->element('initScript');
	?>
</body>
</html>