<?php
class orang {
    // property
    public $nama;
    public $tgllahir;
    public $alamat;

    // constructor
    public function  __construct()
    {
       $this->nama = " Anonim ";
    }


    //method
    public function ucapsalam(){
        echo "<h2> Hallo, perkenalkan nama saya" . $this->nama . "</h2>";
    }

    // destructor
    public function __destruct()
    {
        echo "Ini adalah desrtructor dari"  . $this->nama . "<br>";
    }
}

?>
