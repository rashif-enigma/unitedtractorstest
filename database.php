<?php
class database{
    private $host = "localhost";
    private $uname = "root";
    private $pass = "";
    private $db = "db_akademik";
    private $koneksi;

    public function __construct(){
        $this->koneksi = new mysqli($this->host, $this->uname, $this->pass, $this->db);
        if ($this->koneksi->connect_error) {
            die("Koneksi database gagal: " . $this->koneksi->connect_error);
        }
    }

    public function tampil(){
        $hasil = array();
        $data = $this->koneksi->query("SELECT * FROM tb_mahasiswa");
        while($row = $data->fetch_assoc()){
            $hasil[] = $row;
        }
        return $hasil;
    }

    public function simpan($nama, $alamat, $usia){
        $this->koneksi->query("INSERT INTO tb_mahasiswa (Nama, Alamat, Usia) VALUES ('$nama', '$alamat', '$usia')");
    }

    public function hapus($id){
        $this->koneksi->query("DELETE FROM tb_mahasiswa WHERE id='$id'");
    }
}
?>
