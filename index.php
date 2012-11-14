<?php
require_once 'kernel.php';

/*require_once 'animals/Animal.php';
require_once 'animals/Mortal.php';
require_once 'animals/Wolf.php';*/

use animals\Wolf;

$pet = new Wolf();
$pet->live();