<?php

function __autoload($className)
{

    try {
        require_once "$className.class.php";
    } catch (Exception $e) {
        echo "Class not found...";
        exit;
    }
}

$firstPerson = new Person("Boris", "Becker", "Bellevue, 1234 Monaco");
$secondPerson = new Customer("Max", "Mustermann", "Riggenbachstrasse 16, 4600 Olten", "12345");
$thirdPerson = new Person("Helmut", "Studer", "Kirchgasse 4 4600 Olten", "6789");

echo $firstPerson;
echo $secondPerson;
echo $thirdPerson;

echo $firstPerson->getSalutation(), '<br/>';
echo $secondPerson->getSalutation(), '<br/>';
echo $thirdPerson->getSalutation(), '<br/>';

echo Person::getInstanceCount();

$thirdPerson = null;

echo Person::getInstanceCount();