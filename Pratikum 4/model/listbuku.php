<?php
require_once "buku.php";

class listbuku
{
    public function getdata()
    {
        $list_buku = array(
            new buku("Buku tutorial mytic", "Nova", "Aziz komputer", "2023"),
            new buku("belajar php", "Faruq", "Erlangga", "2005"),
            new buku("tutorial memasak", "Andi", "Gunadarma","2013"),
            new buku("Metode Penelitian", "Sukidi", "Qwerty","2015")
        );
        return $list_buku;
    }
}
