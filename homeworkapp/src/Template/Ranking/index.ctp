
<div class="container">
	<div class="game__ranking">
		<div class="gamename">神経衰弱</div>
		<table>
			<tr>
			<th>神経衰弱</th>
		</tr>
	<?php foreach ($data as $obj): ?>
		<tr>
			<td><?= h($obj->user_id) ?></td>
			<td><?= h($obj->score) ?></td>
		</tr>
	<?php endforeach; ?>
	</div>
</div>
