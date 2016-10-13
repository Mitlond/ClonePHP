<meta charset="utf-8">
<?php
require_once "Join.php";
$Dtv=new Join (3);
echo $Dtv->a;  //  2	
echo "<br/>";
echo $Dtv->b;  //  3
echo "<br/>";
$Dtv->sum();
$recrut = $Dtv->vivod_c();
echo $recrut;
echo "<br/>";
$recrut_c = $Dtv->grin_v();
$recrut = $Dtv->vivod_c();
echo $recrut;
echo "<br/>";
echo "--------------------клонирование обьекта---------------------";
echo "<br/>";
$a = clone $Dtv;


echo $a->a;  //  2
echo "<br/>";
echo $a->b;  //  3
echo "<br/>";
$a->sum();
$recrut = $a->vivod_c();
echo $recrut;
echo "<br/>";
$recrut_c = $a->grin_v();
$recrut = $a->vivod_c();
echo $recrut;
echo "<br/>";
echo "--------------------клонирование обьекта---------------------";
echo "<br/>";
echo "--------------------STATIC---------------------";
echo "<br/>";
echo Join::abc();


?>