<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	<h1>heder</h1>
	<? if(isset($text)):?>
	<? foreach($text as $item):?>
	<h2><a href="index.php?id=<?=$item['id'];?>"><?=$item['title']; ?></a></h2>
	<p>
		<?=$item['discrept'];?>	</p>
		<? endforeach;?>
		<? endif;?>
		
	</body>
</html>