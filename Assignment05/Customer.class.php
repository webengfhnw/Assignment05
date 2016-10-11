<?php

require_once 'GreetAble.php';

class Customer extends Person implements GreetAble {

    protected $customerId;

    public function __construct($firstName, $lastName, $address, $customerId) {
        parent::__construct($firstName, $lastName, $address);
        $this->customerId = $customerId;
    }

    public function getCustomerId() {
        return $this->customerId;
    }

    public function setCustomerId($customerId) {
        $this->customerId = $customerId;
    }

    public function __toString() {
        return parent::__toString() . " Customer number: ".$this->getCustomerId()."<br/>";
    }

    public function getSalutation() {
        return 'Dear ' . $this->lastName;
    }

}

?>