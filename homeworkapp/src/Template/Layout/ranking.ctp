<!DOCTYPE html>
<html lang="ja">
<head>
	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
	<?=$this->Html->charset(); ?>
	<title>
		<?= $this->fetch('title') ?>
	</title>
	<?php
	echo $this->Html->css('cake.game');
	// echo $this->Html->script('cake.top');
	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<i class="fas fa-tv"></i> GAME <i class="fas fa-gamepad"></i>
			<span class="header__twittericon">
				<i class="fas fa-sign-in-alt"></i>
			</span>
		</div>
		<div class="nav">
			<ul class="nav__list">
				<li class="nav__item"><a href="/homework/homeworkapp/top">TOP</a></li>
				<li class="nav__item"><a href="/homework/homeworkapp/game">GAME</a></li>
				<li class="nav__item current"><a href="">RANKING</a></li>
				<li class="nav__item"><a href="/homework/homeworkapp/account">ACCOUNT</a></li>
			</ul>
		</div>
		<div id="content">
			<?=$this->fetch('content') ?>
		</div>
		<!-- <div id="footer"><p>Copyright 2018</p></div> -->
	</div>
</body>
</html>