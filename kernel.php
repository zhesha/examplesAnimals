<?php
/**
 * Created by JetBrains PhpStorm.
 * User: zhesha
 * Date: 10/31/12
 * Time: 3:11 PM
 * To change this template use File | Settings | File Templates.
 */
function custRand()
{
    return rand(0,100)/100;
}
function autoload($className)
{
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}
/*function __autoload($className){
    $file = "animals/$className.php";
    require_once $file;
}*/
spl_autoload_register('autoload');