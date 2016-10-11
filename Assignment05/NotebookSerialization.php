<?php

require_once 'NotebookExample.php';

if ((!isset($_POST['submit'])) || (!isset($_POST['notebook']) && (isset($_POST['submit'])))) {
    echo '
    <form action="NotebookSerialization.php" method="POST">
            <h2>Please choose a notebook:</h2>
            <input type="radio" name="notebook" value="elitebook">HP EliteBook 840 G1<br>
            <input type="radio" name="notebook" value="probook">HP ProBook 640 G1<br>
            <input type="radio" name="notebook" value="pavillon">HP Pavilion 13-a100 x360<br>
            </p>
            <input type="submit" name="submit" value="Submit" />
            <input type="reset" value="Reset"/>
        </form>
        ';
} else {

    if ($_POST['notebook'] == 'elitebook') {
        $type = "HP EliteBook 840 G1";
        $price = 1000;
    } else if ($_POST['notebook'] == 'probook') {
        $type = "HP ProBook 640 G1";
        $price = 700;
    } else {
        $type = "HP Pavilion 13-a100 x360";
        $price = 500;
    }

    $myNotebook = new Notebook('HP', $type, $price);

    $s = serialize($myNotebook);

    echo "Test: " . $s . "<br><br>";

    file_put_contents('log.txt', $s);

    $s = file_get_contents('log.txt');

    $myNotebookInfo = unserialize($s);

    echo " Orders:<br>";
    echo $myNotebookInfo->showAllNotebookInformation();
    echo "<br><a href=\"javascript: history.go(-1)\">Back</a><br>";
}