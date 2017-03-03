<? php
define('ROOT',dirname(__FILE__));
echo ROOT;
require_once(ROOT.'/www/login.php');

function top($title){
echo '<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>'.$title.'</title>
  
  <link rel="stylesheet" href="/styles.css">
<script src="js/scripts.js"></script>
  </head>
<body>
<div class="wrapper">
<div class="menu">
<a href="/">glavnaja</a>
<a href="/login">vxod</a>
<a href="/registr">registacija</a>
</div>
<div class="conect">
<div class="block">';

}
  function bottom(){
echo '</div>
</div>
</div>
</body>
</html>';
  }


?>