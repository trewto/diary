<?php
$js = isset($_GET['js'])&&$_GET['js']=="0" ? "0":"1";
setcookie('js', $js, time()+3000);
header('location: index.php?return=true');