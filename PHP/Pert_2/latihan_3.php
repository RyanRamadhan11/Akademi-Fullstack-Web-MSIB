<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Latihan 3</title>
  </head>
  <body>
    <h3 class="text-center">Form Input Nilai</h3>

    <form class="border border-light p-5" method="POST">
        <p class="h4 mb-4 text-center">Sign in</p>

        <label for="nama">Nama</label>
        <input type="text" name="nama" class="form-control mb-4" placeholder="Nama Mahasiswa">

        <label for="matkul">Mata Kuliah</label>
        <select class="browser-default custom-select mb-4" name="matkul">
            <option value="" disabled="" selected="">Pilih Mata Kuliah</option>
            <option value="database">Database</option>
            <option value="mtk">Matematika</option>
            <option value="indonesia">Indonesia</option>
        </select>
        <br/>
        <label for="nilai">Nilai</label>
        <input type="text" name="nilai" class="form-control mb-4" placeholder="Nilai">

        <button class="btn btn-info btn-block my-4" name="proses" type="submit">Simpan</button>

    </form>
    <?php 
    //tangkap
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai = $_POST['nilai'];
    $tombol = $_POST['proses'];

    //tentukan kelulusan
    $ket = ($nilai >= 60) ? "Lulus" : "Gagal";

    //tentukan grade nilai
    if($nilai >= 85 && $nilai <= 100) $grade="A";
    else if($nilai>= 75 && $nilai < 85) $grade="B";
    else if($nilai>= 60 && $nilai < 75) $grade="C";
    else if($nilai>= 30 && $$nilai < 60) $grade="D"; 
    else if($nilai>= 0 && $nilai < 30) $grade="E";
    else $grade = "";

    //tentukan predikat
    switch ($grade) {
        case 'A': $predikat = 'Memuaskan'; break;
        case 'B': $predikat = 'Bagus'; break;
        case 'C': $predikat = 'Cukup'; break;
        case 'D': $predikat = 'Kurang'; break;
        case 'E': $predikat = 'Buruk'; break;
        default: $predikat = '';
    }
        
    
    if(isset($_POST['proses'])){  ?>
    <div class="card">
        <div class="body">
            <div class="alert alert-primary" role="alert">
                Nama Mahasiswa : <?= $nama ?>
                <br/>Mata Kuliah : <?= $matkul ?>
                <br/>Nilai : <?= number_format($nilai, 2, ',', '.') ?>
                <br/>Keterangan : <?= $ket ?>
                <br/>Grade : <?= $grade?>
                <br/>Predikat : <?= $predikat ?>
            </div>
        </div>
    </div>
    <?php } ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>