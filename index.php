<?php
require_once "Join.php";
$Dtv=new Join (2,3);
echo $Dtv->vivod_c();
echo "<br/>";
echo $Dtv->a;
echo "<br/>";
echo $Dtv->b;
echo "<br/>";
$Dtv->sum();
?>