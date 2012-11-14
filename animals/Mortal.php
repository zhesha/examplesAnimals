<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zhesha
 * Date: 10/31/12
 * Time: 1:59 PM
 * To change this template use File | Settings | File Templates.
 */
namespace animals;

interface Mortal
{
    public function canLive();
    public function kill();
}