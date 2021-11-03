<?php

class Koneksi {
    var $host = 'localhost';
    var $user = 'root';
    var $pass = '';
    var $db_name = 'spp';

    public function _construct() {
        $this->konek = mysqli_connect($this->host, $this->user, $this->pass, $this->db_name);

        if($this->konek) {
            echo "Koneksi sukses";
        } else {
            echo "koneksi gagal";
        }
    }
}

// $konek = new Koneksi;