<?php

class Notebook
{

    private $vendor;
    private $type;
    private $price;

    public function __construct($vendor, $type, $price)
    {
        $this->vendor = $vendor;
        $this->type = $type;
        $this->price = $price;
    }

    public function __destruct()
    {
        echo "Notebook " . $this->type . " deleted!" . "<br/>";
    }

    public function getVendor()
    {
        return $this->vendor;
    }

    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function showAllNotebookInformation()
    {
        echo "Vendor: " . $this->vendor . "<br/>";
        echo "Type: " . $this->type . "<br/>";
        echo "Price: " . $this->price . "<br/>";
        echo "<br/>";
    }

    public function __toString()
    {
        $erg = "Vendor: $this->vendor <br/> Typ: $this->type <br/> Price: $this->price <br/><br/>";
        return $erg;
    }

    public function __clone()
    {
        $this->type = "";
        $this->price = 0;
    }

}