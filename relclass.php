<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 27.10.2016
 * Time: 17:14
 */

require_once 'example.php';

class relclass implements A {

    public $res;

    public function summa($one, $two)
    {
        $this->res=$one+$two;
    }

    public function umn($one, $two)
    {
        $this->res=$one*$two;
    }

    public function minus($one, $two)
    {
        $this->res=$one-$two;
    }

    public function delenie($one, $two)
    {
        $this->res=$one/$two;
    }

    public function showres()
    {
        return $this->res;
    }

}
?>