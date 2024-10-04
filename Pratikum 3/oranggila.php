<?php

require_once "orang.php";

//override
class oranggila extends orang{
    public function ucapsalam(){
        echo "Hello My Name is " . $this->nama . "<br.";
    }
}