<?php
class C{
    function __construct($fname) {
        $this->filename = $fname;
        echo 'hi '.$this->filename.'<br>';
    }
    function bye(){
        echo 'bye '.$this->filename.'<br>';
    }
}
$obj = new C('sample.txt');
$obj->bye();

$obj2 = new C('sample2.txt');
$obj2->bye();