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
		<h4>今後伸ばしていきたいスキルをチェックしてください。（複数選択可）</h4>
		<form action="checkbox.php" method="post">
			<label><input type="checkbox" name="skill[]" value="PHP"> PHP</label>
			<label><input type="checkbox" name="skill[]" value="HTML"> HTML</label>
			<label><input type="checkbox" name="skill[]" value="CSS"> CSS</label>
			<label><input type="checkbox" name="skill[]" value="その他"> その他</label>
			<input type="submit" class="btn" value="送信">
		</form>
	</div>
</body>
</html>
