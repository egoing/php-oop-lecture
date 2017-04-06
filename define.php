<?php
class MyFileObject{
    function __construct($fname) {
        $this->filename = $fname;
    }
    function isFile(){
        return is_file($this->filename);
    }
    function getSize(){
        return filesize($this->filename);
    }
    function fread(){
        return file_get_contents($this->filename);
    }
}
$file = new MyFileObject('sample.txt');
$file->isFile();
$file->getSize();
echo $file->fread();