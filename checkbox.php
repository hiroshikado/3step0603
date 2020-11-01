<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8" >
	<title>アンケートフォームを作ろう</title>
	<link rel="stylesheet" href="/php/css/skyblue.css">
</head>
<body>
	<div class="bg-success padding-y-20">
		<div class="container text-center">
			<h1>アンケートフォームを作ろう</h1>
		</div>
	</div>
	<div class="container padding-y-20">
		あなたが選択した項目は<br>
		<!-- ここから -->
		<?php 
		$skill = $_POST["skill"];
		foreach ($skill as $key => $value) {
			echo $value. "<br>";
			echo $skill[$key]. "<br>";
		}
		?>
		<!-- ここまで -->
	</div>
</body>
</html>
