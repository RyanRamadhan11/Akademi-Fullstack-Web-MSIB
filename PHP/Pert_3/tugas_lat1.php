<?php

/**
 * Deskripsi Tugas:
 * Buatlah daftar nilai mahasiswa minimal 10 data dengan array scalar ($m1 s/d $m10): nim, nama, nilai
 * Buat array associative $mahasiswa = [ $m1 ... $m10]
 * Buat array judul = No, NIM, Nama, Nilai, Keterangan, Grade,Predikat (di aera looping)
 * Keterangan => Ternary minimal nilai 60 lulus
 * Grade If multi kondisi => A, B, C, D, E
 * Predikat Switch Case dari Grade : Memuaskan ... Buruk
 * Buat daftar aggregate nilai gunakan aggregate function di array (TFoot) => Nilai Tertinggi, Nilai Terendah, Nilai nilai_rata2, Jumlah Siswa
 * TUGAS DI UPLOAD PADA AKUN GITHUBNYA
 */

 // Daftar Nilai Mahasiswa Array Scalar
 $mhs1 = ['nim' => '01102201', 'nama' => 'Asep Sahrudin', 'nilai' => 95];
 $mhs2 = ['nim' => '01102123', 'nama' => 'Joko Santoso', 'nilai' => 85];
 $mhs3 = ['nim' => '01102456', 'nama' => 'Ahmad Khoir', 'nilai' => 80];
 $mhs4 = ['nim' => '01102234', 'nama' => 'Alif Subagja', 'nilai' => 75];
 $mhs5 = ['nim' => '01102223', 'nama' => 'Ananda Riska', 'nilai' => 65];
 $mhs6 = ['nim' => '01102204', 'nama' => 'Malaela Sari', 'nilai' => 55];
 $mhs7 = ['nim' => '01102237', 'nama' => 'Riri Sri Rahma', 'nilai' => 90];
 $mhs8 = ['nim' => '01102223', 'nama' => 'Zaki Malik', 'nilai' => 80];
 $mhs9 = ['nim' => '01102286', 'nama' => 'Dandi Sandika', 'nilai' => 45];
 $mhs10 = ['nim' => '01102350', 'nama' => 'Al Khoiri Syam', 'nilai' => 68];

// array assosiatif
$list_mahasiswa = [$mhs1, $mhs2, $mhs3,  $mhs4,  $mhs5,  $mhs6, $mhs7, $mhs8, $mhs9, $mhs10];

// judul
$title = ['NO', 'NIM', 'NAMA', 'NILAI', 'KETERANGAN', 'GRADE', 'PREDIKAT'];

// aggregat function
$jumlah_siswa = count($list_mahasiswa);
$nilai_siswa = array_column($list_mahasiswa, 'nilai');
$total_kg = array_sum($nilai_siswa);
$nilai_tertinggi = max($nilai_siswa);
$nilai_terendah = min($nilai_siswa);
$nilai_rata2 = $total_kg / $jumlah_siswa;


$keterangan = [
  'Jumlah Siswa' => $jumlah_siswa,
  'Nilai Tertinggi' => $nilai_tertinggi, 
  'Nilai Terendah' => $nilai_terendah, 
  'Nilai Rata-Rata'=>$nilai_rata2
  ];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TUGAS 3 PHP | ASEP SAHRUDIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body bgcolor="#3D3C42">
    <h3 class="text-center pt-4">DAFTAR NILAI MAHASISWA</h3>
    <!-- first table -->
    <div class="px-4 pt-3 table-responsive">
  <table class="table table-hover  table-sm ">
    <thead>
      <tr bgcolor="#5C2E7E">
        <!-- table title -->
        <?php
            foreach($title as $tl){
        ?>
        <th  class="text-center text-light" scope="col"><?= $tl ?></th>
        <?php } ?>
      </tr>
    </thead>
    <tbody>
        <!-- table data -->
        <?php
        $no = 1;
        $warna;
        foreach ($list_mahasiswa as $lm) {
            // ternary operator keterangan nilai
            $hasil = $lm['nilai'] >= 60 ? 'Lulus': 'Tidak Lulus';
            
            // grade nilai
            $grade = '';
            if($lm['nilai'] > 0 && $lm['nilai'] < 59) $grade = 'E';
            elseif ($lm['nilai'] >= 60 && $lm['nilai'] < 69) $grade = 'D';
            elseif ($lm['nilai'] >= 70 && $lm['nilai'] < 79) $grade = 'C';
            elseif ($lm['nilai'] >= 80 && $lm['nilai'] < 89) $grade = 'B';
            elseif ($lm['nilai'] >= 90 && $lm['nilai'] < 100) $grade = 'A';
          
            // predikat
            $predikat = '';
            switch ($grade) {
                case 'A': $predikat = 'Memuaskan'; break;
                case 'B': $predikat = 'Baik'; break;
                case 'C': $predikat = 'Cukup'; break;
                case 'D': $predikat = 'Kurang'; break;
                case 'E': $predikat = 'Buruk'; break;
                default: $predikat = 'Salah Jurusan'; break;
            }

            // buat warna
            $warna = $no % 2 == 1 ? '#B1B2FF': '#C1EFFF';
           
        ?>
      <tr class="text-center" bgcolor="<?= $warna ?>">
        <th scope="row"><?= $no++ ?></th>
        <td><?= $lm['nim'] ?></td>
        <td><?= $lm['nama'] ?></td>
        <td ><?= $lm['nilai'] ?></td>
        <td><?= $hasil ?></td>
        <td><?= $grade ?></td>
        <td><?= $predikat ?></td>
      </tr>
       <?php } ?>   
    </tbody>
    <tfoot class="mt-4">
        <tr class="text-light " bgcolor="#5C2E7E">
            <th class="text-center" colspan="7">KETERANGAN</th>
        </tr>
        <tr class="text-center" bgcolor="#B1B2FF">
            <?php
            foreach ($keterangan as $ket => $hasil) {
            ?>
            <th colspan="2"><?= $ket ?></th>
            <?php } ?>
        </tr>
        <tr class="text-center" bgcolor="#C1EFFF">
            <?php
            foreach ($keterangan as $ket => $hasil) {
            ?>
            <th colspan="2"><?= $hasil ?></th>
            <?php } ?>
        </tr>
  </tfoot>
  </table>
</div>
    <!--last table  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>