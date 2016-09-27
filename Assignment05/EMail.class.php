<?php

class EMail
{

    private $email;
    private $timestamp;

    function __construct($email)
    {
        $this->email = $email;
    }

    public function checkEmail()
    {
        if (filter_var($this->getEmail(), FILTER_VALIDATE_EMAIL)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function storeDataInFile()
    {
        $file = fopen("mail.txt", "a");
        $content = $this->getEmail() . "|" . $this->getTimestamp() . "\n";
        fwrite($file, $content);
        fclose($file);
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }

}
