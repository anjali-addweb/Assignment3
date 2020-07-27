<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Step 6</title>
		<style>
			header{
				background: #e3e3e3;
				text-align: center;
				padding: 2em;
			}
		</style>
	</head>
	<body>
		<header>
			<h1>
				<ul>
					<?php
						foreach($fruit as $key => $feature) :
					?>
						<li><strong><?= $key; ?></strong> <?= $feature?></li>
					<?php endforeach;?>
				</ul>
			</h1>
		</header>
	</body>
</html>