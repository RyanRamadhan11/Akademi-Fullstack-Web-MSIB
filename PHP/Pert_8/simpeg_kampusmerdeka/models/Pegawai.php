<?php
class Pegawai{
    //member1 variabel
    private $koneksi;
    //member2 konstruktor untuk koneksi database
    public function __construct(){
        global $dbh; //panggil instance object di koneksi.php 
        $this->koneksi = $dbh;
    }
    //member3 method2 CRUD
    public function dataPegawai(){
        $sql = "SELECT p.*, d.nama AS bagian, j.nama AS jab
                FROM pegawai p 
                INNER JOIN divisi d ON d.id = p.divisi_id
                INNER JOIN jabatan j ON j.id = p.jabatan_id
                ORDER BY p.id DESC";
        //$data_pegawai = $dbh->query($sql);
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll(); 
        return $rs;   
    }

     //member3 method2 CRUD
    public function getPegawai($id){
        $sql = "SELECT p.*, d.nama AS bagian, j.nama AS jab
                FROM pegawai p 
                INNER JOIN divisi d ON d.id = p.divisi_id
                INNER JOIN jabatan j ON j.id = p.jabatan_id
                WHERE p.id = ?";
        //$data_pegawai = $dbh->query($sql);
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch(); 
        return $rs;   
    }

    public function simpan($data){
        $sql = "INSERT INTO pegawai (nip, nama, gender, foto, tmp_lahir, 
                                    tgl_lahir, jabatan_id, divisi_id, alamat)
                VALUES (?,?,?,?,?,?,?,?,?)";
        //$data_pegawai = $dbh->query($sql);
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}