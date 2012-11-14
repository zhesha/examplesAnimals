<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zhesha
 * Date: 10/31/12
 * Time: 2:14 PM
 * To change this template use File | Settings | File Templates.
 */
namespace animals;

use animals\Animal;
use animals\Mortal;

class Wolf extends Animal implements Mortal
{
    public $MAX_OLD = 60;
    public $SPEED = 20;
    public $old = 0;
    public $arealFoodChance;
    public $alive = true;
    public function __construct($arealFoodChance = 0.3)
    {
        $this->arealFoodChance = $arealFoodChance;
        $this->weight = 40;
        $this->minWeight = 20;
        $this->maxWeight = 60;
    }
    public function live()
    {
        if(!$this->alive){
            echo 'Your wolf is dead';
            return;
        }
        while($this->old < $this->MAX_OLD){
            if($this->searchFood($this->arealFoodChance)){
                $this->eat(custRand());
                echo 'day '.$this->old.': find food in ('.$this->x.', '.$this->y.', '.$this->z.'). Happy.';
            }
            else{
                echo 'day '.$this->old.': Don\'t have food. Sad.';
            }
            $this->poop(custRand());
            if(!$this->canLive()){
                $this->kill();
                echo '<br>Dead';
                return;
            }
            echo '<br>';
            $this->old++;
        }
        echo 'R.I.P.';
    }
    public function move()
    {
        if($this->weight > $this->maxWeight)
            return false;
        $this->x += (custRand()-0.5)*$this->SPEED;
        $this->y += (custRand()-0.5)*$this->SPEED;
        return true;
    }
    public function kill()
    {
        $this->alive = false;
    }
}
