<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
<?php
require '../config.php';
mysql_connect(HOST, USER, PASS)
or die("<p>oshibka pod " .
mysql_error() . "</p>");
echo "<p>vi pod MySQL!</p>";
mysql_select_db(DB)
or die("<p>oshibka bd " .
DB . mysql_error() . "</p>");
echo "<p>vse ok " .
DB . ".</p>";
$d="SELECT *FROM categ";
$res=mysql_query($d);
for($i=0;$i<mysql_num_rows($res);$i++){
			$row[]= mysql_fetch_array($res,MYSQL_ASSOC);
			}
			print_r($row);

?>
</html>