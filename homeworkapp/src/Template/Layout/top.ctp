<!DOCTYPE html>
<html lang="ja">
<head>
	<?=$this->Html->charset(); ?>
	<title>
		<?= $this->fetch('title') ?>
	</title>
	<?php
	echo $this->Html->css('cake.top');
	echo $this->Html->script('cake.top');
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">GAME</div>
		<div class="nav">
			<ul class="nav__list">
				<li class="nav__item"><a href="">TOP</a></li>
				<li class="nav__item"><a href="">GAME</a></li>
				<li class="nav__item"><a href="">RANKING</a></li>
				<li class="nav__item"><a href="">ACCOUNT</a></li>
			</ul>
		</div>
		<div id="content">
			<?=$this->fetch('content') ?>
		</div>
		<div id="footer">** this is test. **</div>
	</div>
</body>
</html>