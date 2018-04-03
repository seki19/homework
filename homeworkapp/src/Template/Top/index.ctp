<h1>ようこそ、名無しさん</h1>
<div id="container">
	<div class="container__log">
		<h2>最新スコア</h2>
	<table>
	<tr>
		<th>NAME</th>
		<th>TITLE</th>
		<th>SCORE</th>
	</tr>
	<?php foreach ($data as $obj): ?>
		<tr>
			<td><?= h($obj->user_id) ?></td>
			<td><?= h($obj->gamename) ?></td>
			<td><?= h($obj->score) ?></td>
		</tr>
	<?php endforeach; ?>
</table>
	</div>
</div>
<!-- <p>konnnitiwa koreha,</p> -->
