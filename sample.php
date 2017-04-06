<?php
echo '<h1>Function</h1>';
$filename = 'sample.txt';
is_file($filename);
filesize($filename);
file_get_contents($filename);


echo '<h1>Object</h1>';
$file = new SplFileObject('sample.txt');
$file->isFile();
$file->getSize();
$file->fread($file->getSize());
