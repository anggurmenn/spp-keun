<?php

require_once 'config/koneksi.php';

class Proses extends Koneksi {
    public function loginPetugas($username, $password) {
        $stmt = mysqli_query($this->konek, "SELECT * FROM tb_petugas WHERE username '"
        $username . "' AND password = '" . $password . "'");

        if($stmt->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }
}

$proses = new Proses;
var_dumb($proses->loginPetugas('admin', sha1('admin')));