<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zhesha
 * Date: 10/31/12
 * Time: 1:40 PM
 * To change this template use File | Settings | File Templates.
 */
namespace animals;

abstract class Animal
{
    public $weight;
    public $minWeight;
    public $maxWeight;
    public $x = 0;
    public $y = 0;
    public $z = 0;

    abstract function move();
    abstract function live();
    public function canLive()
    {
        if($this->weight > $this->minWeight)
            return true;
        else
            return false;
    }
    public function eat($count)
    {
        $this->weight += $count;
    }
    public function poop($count)
    {
        $this->weight -= $count;
    }
    public function searchFood($chance)
    {
        if($chance/2 > custRand())
            return true;
        if(!$this->move())
            return false;
        if($chance/2 > custRand())
            return true;
        return false;
    }
}
