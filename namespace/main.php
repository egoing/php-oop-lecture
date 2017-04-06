<?php
//require_once 'Hi.php';
function aload($classname){
    require_once $classname.'.php';
}
spl_autoload_register('aload');
new Hi();