<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 27.10.2016
 * Time: 14:41
 */

interface A
{
    public function summa($one, $two);

}
interface B extends A
{

    public function showres();
}
class Tools implements B
{
    public $res;

    public function summa($one, $two)
    {
        $this->res = $one+$two;
    }

    public function showres()
    {
        return $this->res;
    }
}

?>