<html>
<meta charset="UTF-8">
<?php
define('HOST','localhost');
define('USER','valer');
define('PASS','');
define('DB','valer');


mysql_connect(HOST,USER,PASS)
or die("<p>Ошибка подключения к базе данных: " .
mysql_error() . "</p>");
echo "<p>Вы подключились к MySQL!</p>";
mysql_select_db(DB)
or die("<p>Ошибка при выборе базы данных " 
mysql_error() . "</p>");
echo "<p>Вы подключены к MySQL с использованием базы данных  </p>";
// Продолжение действий, инициируемых SQL-запросом...
?>

</html>


