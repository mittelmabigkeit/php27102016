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
interface B
{

    public function showres();
}


interface C extends A, B
{
    public function nool();
}
class Tools implements C
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

    public function nool()
    {
        $this->res = 0;
    }
}

?>