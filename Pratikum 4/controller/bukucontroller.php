<?php

require_once 'model/listbuku.php';

class bukuController{
    public function jalankan(){
        $daftar_buku_model=new listbuku();
        $daftar_buku=$daftar_buku_model->getdata();

        include_once 'view/bukuview.php';
    }
}