<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	<h1>heder</h1>
	<? if(isset($text)):?>
	
	<h2><?=$text['title']; ?></h2>
	<p>
		<?=$text['text'];?>	</p>
	
		<? endif;?>
		
	</body>
</html>