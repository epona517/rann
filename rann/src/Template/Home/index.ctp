<?=
	$this->assign('myself', 'home');
?>
<section id="menus" class="menus box-center">
	<?
		$pathPrefix = PROJECT . '/';
		foreach ($menuList as $menu) : ?>

			<a href="<?= $pathPrefix . $menu['controller'] . '/'
					. $menu['action'] ?>" class="card card-linked float-l">
				<h2>
					<?= $this->Material->icon($menu['symbolKey']) ?>
					<span><?= h($menu['viewName']) ?></span>
				</h2>
				<p><?= $menu['comment'] ?></p>
			</a>

	<?	endforeach; ?>
</section>