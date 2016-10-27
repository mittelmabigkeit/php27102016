<?php
/**
 * Created by PhpStorm.
 * User: Администратор
 * Date: 27.10.2016
 * Time: 14:41
 */

interface Basainter
{
    public function summa($one, $two);
    public function showres();
}
class Tools implements Basainter
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