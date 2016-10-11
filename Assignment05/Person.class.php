<?php

require_once 'GreetAble.php';

class Person implements GreetAble {

    protected $firstName;
    protected $lastName;
    protected $address;
    protected static $instanceCount = 0;

    public function __construct($firstName, $lastName, $address) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
        self::$instanceCount++;
    }

    public function __destruct() {
        self::$instanceCount--;
        echo "Object deleted" . "<br/>";
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function __toString() {
        $erg = "First name: $this->firstName Last name: $this->lastName Address: $this->address<br/>";
        return $erg;
    }

    public function getSalutation() {
        return 'Hallo ' . $this->firstName;
    }

    public static function getInstanceCount() {
        return "Number of objects: " . self::$instanceCount . "<br/>";
    }

}