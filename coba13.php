<?php
    class Mahasiswa{
        public $nim = '16.11.0515';
        public function bayarSPP($nama){
            echo  '<h2>', $nama, ' sudah membayar SPP dengan NIM : ', $this->nim, '</h2>';

        }

        public function bayarSPPNoParam(){
            return "<h2><br>Mahasiswa harus bayar SPP</h2>";
        }
    }

    $mhs = new Mahasiswa();
    $mhs->bayarSPP('Ahmad Dwi');
    echo $mhs->bayarSPPNoParam();


?>