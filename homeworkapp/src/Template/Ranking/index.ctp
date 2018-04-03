
<div class="container">
	<h1>ランキング</h1>
	<div class="games__ranking">
		<table>
			<tr>
			<th>神経衰弱</th>
		</tr>
		<?php foreach ($concentrarionscore as $obj): ?>
		<tr>
			<td><?= h($obj->user_id) ?></td>
			<td><?= h($obj->score) ?></td>
		</tr>
		<?php endforeach; ?>
	</div>
	<div class="games__ranking">
		<table>
			<tr>
			<th>かにゲーム</th>
		</tr>
		<?php foreach ($crabgamescore as $obj): ?>
		<tr>
			<td><?= h($obj->user_id) ?></td>
			<td><?= h($obj->score) ?></td>
		</tr>
	<?php endforeach; ?>
	</div>
</div>
