<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 27.10.2016
 * Time: 14:45
 */
require_once "relclass.php";

$obj=new relclass();
$obj->summa(5,5);
echo $obj->showres();
echo "</br>";
$obj->umn(5,5);
echo $obj->showres();
echo "</br>";
$obj->minus(5,5);
echo $obj->showres();
echo "</br>";
$obj->delenie(5,5);
echo $obj->showres();

?>
