<?php

require_once 'GreetAble.php';
require_once 'EMail.class.php';

class FHNWEMail extends EMail implements Greetable {

    public function checkEmail() {
        if (filter_var($this->getEmail(), FILTER_VALIDATE_EMAIL) && ((substr($this->getEmail(), -8) == "@fhnw.ch") or ( substr($this->getEmail(), -17) == "@students.fhnw.ch"))) {
            return true;
        } else {
            return false;
        }
    }

    public function getSalutation() {
        $pieces = explode("@", $this->getEmail());
        return $pieces[0];
    }

}
