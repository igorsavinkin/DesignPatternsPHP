<?php
include 'autoloader.php'; 
$w = new WinWriterFactory();
var_dump($w);
echo '<br />', $w->createCsvWriter()->write([1,2, "line", "temp"]);
echo '<br />', $w->createJsonWriter()->write([1,2, "line", "temp"], 0);
?>