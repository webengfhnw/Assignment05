<?php

require_once('NotebookExample.php');

$filename = __FILE__ . "\n";
$fh = fopen("metadata.txt", "w+");
fwrite($fh, $filename);

$myLaptop = new Notebook('HP', 'Typ1', 500);
$myClass = get_class($myLaptop);
$am = get_class_methods($myClass);
for ($m = 0; $m < count($am); $m++) {
    $methodName = "Method: " . $am[$m] . "\n";

    fwrite($fh, $methodName);
}
fclose($fh);
echo "metadata.txt has been created<br>";